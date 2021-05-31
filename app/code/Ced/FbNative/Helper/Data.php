<?php

/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User License Agreement (EULA)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://cedcommerce.com/license-agreement.txt
 *
 * @category    Ced
 * @package     Ced_Fyndiq
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CedCommerce (http://cedcommerce.com/)
 * @license     http://cedcommerce.com/license-agreement.txt
 */

namespace Ced\FbNative\Helper;


use Magento\Framework\App\Helper\Context;
use Magento\Catalog\Controller\Adminhtml\Product;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use \Magento\Framework\Message\Manager;
use Magento\Store\Model\StoreManager;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /** @var \Magento\Catalog\Model\Indexer\Product\Price\Processor $_productPriceIndexerProcessor */
    public $_productPriceIndexerProcessor;

    /** @var Filter $filter */
    public $filter;

    /** @var CollectionFactory  */
    public $collectionFactory;

    /** @var \Magento\Framework\Filesystem\DirectoryList  $directoryList*/
    public $directoryList;

    /** @var \Magento\Framework\Filesystem\Io\File $fileIo */
    public $fileIo;
 /** @var Config */
    public $configHelper;

    public $storeManager;

    public $resultRedirectFactory;

    public $messageManager;

    public $objectManager;

    /**
     * Data constructor.
     * @param \Magento\Framework\Filesystem\DirectoryList $directoryList
     * @param \Magento\Framework\Filesystem\Io\File $fileIo
     * @param Context $context
     * @param Product\Builder $productBuilder
     * @param \Magento\Catalog\Model\Indexer\Product\Price\Processor $productPriceIndexerProcessor
     * @param Filter $filter
     * @param Config $configHelper
     * @param StoreManager $storeManager
     * @param CollectionFactory $collectionFactory
     * @param RedirectFactory $resultRedirectFactory
     * @param ObjectManager $objectManager
     * @param Manager $manager
     */
    public function __construct(
        \Magento\Framework\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\Filesystem\Io\File $fileIo,
        Context $context,
        Product\Builder $productBuilder,
        \Magento\Catalog\Model\Indexer\Product\Price\Processor $productPriceIndexerProcessor,
        Filter $filter,
        Config $configHelper,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        StoreManager $storeManager,
        CollectionFactory $collectionFactory,
        RedirectFactory $resultRedirectFactory,
        Manager $manager
    )
    {
        parent::__construct($context);
        $this->fileIo = $fileIo;
        $this->directoryList = $directoryList;
        $this->filter = $filter;
        $this->configHelper = $configHelper;
        $this->collectionFactory = $collectionFactory;
        $this->storeManager = $storeManager;
        $this->_productPriceIndexerProcessor = $productPriceIndexerProcessor;
        $this->resultRedirectFactory = $resultRedirectFactory;
        $this->objectManager = $objectManager;
        $this->messageManager = $manager;
    }

    /**
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function productCron()
    {
        $storeId = $this->configHelper->getStore();
        /**
         *  $path is used for to get image path
         */
        $mediaUrl = BP . "/pub/media/ced_fbnative";
        $url = $this->storeManager->getStore()->getBaseUrl();
        $currencyCode = $this->storeManager->getStore()->getDefaultCurrencyCode();
        $url = $url.'pub/media/catalog/product';
        $filePath = $mediaUrl . '/export.csv';
        if(!file_exists($mediaUrl)) {
            mkdir($mediaUrl,0777,true);
        }

        $fp = fopen($filePath, "w+");
        $productCollection = $this->collectionFactory->create();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        /**
         * To set header title
         */
        $data = [];
        $mappedAttr = $this->readCsv();
        $resultRedirect = $this->resultRedirectFactory->create();
        if($mappedAttr) {
            foreach ($mappedAttr as $key => $value) {
                $data[] = $key;
            }
        } else {
            $this->messageManager->addErrorMessage(__('First map Attributes in Configuration'));
            $resultRedirect->setPath('fbnative/product/index');
            return $resultRedirect;
        }
        array_push($data, 'id');
        array_push($data, 'offer_id');
        array_push($data, 'channel');
        array_push($data, 'image_link');
        array_push($data, 'availability');
        array_push($data, 'product_type');
        array_push($data, 'price');
        array_push($data, 'sale_price');
        if(!in_array('brand',$data)) {
            array_push($data, 'brand');
        }
        array_push($data, 'description');
        array_push($data, 'link');
        array_push($data, 'item_group_id');
        array_push($data, 'additional_image_link');
        fputcsv($fp, $data,chr(9));


        foreach ($productCollection as $product) {
            $product = $objectManager->create('Magento\Catalog\Model\Product')->setStoreId($storeId)->load($product->getId());
            $attr = $product->getData('is_facebook');
            $mappedAttr = $this->readCsv();
            $default = [];
            if ($attr == 1) {
                $mappedData = array();
                foreach ($mappedAttr as $fbAttr=>$magentoAttr) {
                    $attrValue = $this->getMappedAttributeValue($magentoAttr, $product);
                    if($magentoAttr == 'image' && $attrValue != '') {
                        $attrValue = $url.$attrValue;
                    }
                    if($magentoAttr == 'price' && $attrValue != '') {
                        $attrValue = $currencyCode.' '.$attrValue;
                    }

                    if($magentoAttr == 'google_product_category' && $attrValue == '') {
                        $attrValue = '632';
                    }

                    if(is_array($attrValue)) {
                        foreach ($attrValue as $key => $value) {
                            $mappedData[$fbAttr] = $attrValue[$key];
                        }
                    } else {
                        $mappedData[$fbAttr] = $attrValue;
                    }
                    if($fbAttr == 'title'){
                        $attrValueLen = strlen($attrValue);
                        if($attrValueLen >= 150){
                            $mappedData[$fbAttr] = strtolower(substr($attrValue,0,149));
                        }else{
                            $mappedData[$fbAttr] = strtolower($attrValue);
                        }

                        $productdata = $product->getData();
                        $default['description'] = $attrValue;

                    }
                }
                $default = $this->defaultMappingAttribute($product);


                $mappedData = array_merge($mappedData, $default);
                
                $condition = array('new','refurbished','used','cpo');

                if(!in_array($mappedData['condition'],$condition)) {
                    $mappedData['condition'] = 'new';
                }
                fputcsv($fp, $mappedData,chr(9));
            }
        }
        fclose($fp);
    }

    public function readCsv() {
        $mapped = $this->configHelper->getAttributeMapping();
        $mapped = json_decode($mapped,true);
        $mappedAttr = [];
        if($mapped) {
            foreach ($mapped as $key => $value) {
                if(!$mapped[$key] == null) {
                    foreach ($value as $attr => $item) {
                        //print_r($item);
                        if ($attr == 'facebook_attribute_code') {
                            $fbAttr = $item;
                        } else if ($attr == 'magento_attribute_code') {
                            $magentoAttr = $item;
                        }
                    }
                    $mappedAttr[$fbAttr] = $magentoAttr;
                }
            }
            return $mappedAttr;
        }
        return false;

    }

    public function getMappedAttributeValue ( $magentoAttribute , $product ) {
        $attribute = isset($magentoAttribute) ? $magentoAttribute: '';
        $value = $product->getData($attribute);
        if(!$value) {
            $parentIds = $this->objectManager->get('Magento\ConfigurableProduct\Model\Product\Type\Configurable')
                ->getParentIdsByChild($product->getId());
            $parentId = array_shift($parentIds);
            if($parentId) {
                $configProduct = $this->objectManager->get('Magento\Catalog\Model\Product')->load($parentId);
                $value = $configProduct->getData($attribute);
            }

        }
        return $value;
    }

    public function defaultMappingAttribute($product) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        $url = $baseUrl.'pub/media/catalog/product';
        $currencyCode = $this->storeManager->getStore()->getDefaultCurrencyCode();
        $productdata = $product->getData();
		
        $default = [];
        $default['id'] = 'facebook_ads_'.$product->getId();
        $default['offer_id'] = 'facebook_ads_'.$product->getId();
        $default['channel'] = 'online';
        $default['image_link'] = isset($productdata['small_image']) ? $url.$productdata['small_image'] : $url;
        $default['availability'] =  $product->isInStock() ? 'In Stock' : 'Out of Stock';
        $default['productType'] = $product->getTypeId();
        if($product->getTypeId()=='configurable') {
            $child = $product->getTypeInstance()->getUsedProducts($product);
            $price = $child[0]->getPrice();
            $default['price'] = $currencyCode.' '.$price;
        } else {
            $price = $product->getPrice();
            $default['price'] = isset($productdata['price']) ? $currencyCode.' '.$price : $currencyCode.' 0';
        }
        $amt = '';
        if($product->getTypeId()=='configurable') {
            $child = $product->getTypeInstance()->getUsedProducts($product);
            $offerPercent = $child[0]->getData('offer_percent');
            if(!$offerPercent) {
                $offerPercent = $product->getData('offer_percent');
            }
        } else {
            $offerPercent = $product->getData('offer_percent');
            if(!$offerPercent) {
                $parentProductId = $this->objectManager->create('Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable')
                    ->getParentIdsByChild($product->getId());
                if($parentProductId) {
                    $parentProduct = $this->objectManager->get('Magento\Catalog\Model\Product')->load($parentProductId);
                    $offerPercent = $parentProduct->getData('offer_percent');
                }
            }
        }

        if($offerPercent) {
            $offerPrice = ($price * $offerPercent) / 100;
            $PriceDifference = $price - $offerPrice;

            if($product->getTypeId()=='configurable') {
                $child = $product->getTypeInstance()->getUsedProducts($product);
                $specialPrice = $child[0]->getSpecialPrice();
                $salePrice = isset($PriceDifference) && !empty($PriceDifference) ? $PriceDifference : (isset($specialPrice) ? $specialPrice : 0);
                $default['sale_price'] = $currencyCode.' '.number_format($salePrice,2);
            } else {
                $salePrice = isset($PriceDifference) && !empty($PriceDifference) ? $PriceDifference : (isset($product['special_price']) ? $product['special_price'] : 0);
                $default['sale_price'] = $currencyCode.' '.number_format($salePrice,2);
            }
        } else {
            $salePrice = isset($product['special_price']) ? $product['special_price'] : 0;
            $default['sale_price'] = $currencyCode.' '.number_format($salePrice,2);
        }

        //$default['brand'] = $product->getMetaKeyword();
        $default['description'] = isset($productdata['name']) ? $productdata['name'] : '';

        if(!isset($productdata['url_key']) || empty($productdata['url_key'])) {
            return [];
        }

        $confProduct = $objectManager->create('Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable')
            ->getParentIdsByChild($product->getId());

        if($confProduct) {
            $confProd = $this->objectManager->create('Magento\Catalog\Model\Product')->load($confProduct[0]);
            $default['link'] = $confProd->getProductUrl(true);
        } else {
            $default['link'] = $product->getProductUrl(true);
        }


        if($confProduct) {
            $default['item_group_id'] = $confProduct[0];
        } else {
            $default['item_group_id'] = $product->getId();
        }
        $images = $product->getMediaGallery('images');
        $directory = $objectManager->get('\Magento\Framework\Filesystem\DirectoryList');
//        $mediaPath = $directory->getPath('media');
        $mediaPath = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $temp = array();
        foreach($images as $image){
            $temp[] = $mediaPath."/catalog/product".$image['file'];
        }
        $temp = implode(',',$temp);
        $default['additional_image_link'] = $temp;
        
        return $default;
    }

}