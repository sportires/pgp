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

namespace Ced\FbNative\Controller\Adminhtml\Product;


use Ced\FbNative\Helper\Data;
use Magento\Backend\App\Action;
use Magento\Catalog\Controller\Adminhtml\Product;
use Magento\Framework\Controller\ResultFactory;
use Magento\Store\Model\StoreManager;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Ced\FbNative\Helper\Config;
/**
 * Class Render
 */
class GridToCsv extends \Magento\Catalog\Controller\Adminhtml\Product
{
    public $_productPriceIndexerProcessor;

    /**
     * MassActions filter
     *
     * @var Filter
     */
    public $filter;

    /**
     * @var \Magento\Framework\Filesystem
     */
    /**
     * @var CollectionFactory
     */
    public $collectionFactory;

    /**
     * @var \Magento\Framework\Filesystem\DirectoryList $directoryList
     */

    public $directoryList;

    /** @var \Magento\Framework\Filesystem\Io\File $fileIo */

    public $fileIo;
    /** @var Data  */
    public $dataHelper;

    public $storeManager;

    /**
     * @var Config 
     */
    public $configHelper;

    public function __construct(
        \Magento\Framework\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\Filesystem\Io\File $fileIo,
        \Magento\Backend\App\Action\Context $context,
        Product\Builder $productBuilder,
        \Magento\Catalog\Model\Indexer\Product\Price\Processor $productPriceIndexerProcessor,
        Filter $filter,
        StoreManager $storeManager,
        Data $dataHelper,
        Config $configHelper,
        CollectionFactory $collectionFactory
    )
    {
        parent::__construct($context, $productBuilder);
        $this->fileIo = $fileIo;
        $this->directoryList = $directoryList;
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->dataHelper = $dataHelper;
        $this->configHelper = $configHelper;
        $this->storeManager = $storeManager;
        $this->_productPriceIndexerProcessor = $productPriceIndexerProcessor;
    }

    public function execute()
    {
        //try {
            $storeId = $this->configHelper->getStore();
            /**
             *  $path is used for to get image path
             */
            $mediaUrl = BP . "/pub/media/ced_fbnative";
            $url = $this->storeManager->getStore()->getBaseUrl();
            $currencyCode = $this->storeManager->getStore()->getDefaultCurrencyCode();
            $url = $url . 'pub/media/catalog/product';
            $filePath = $mediaUrl . '/export.csv';
            if (!file_exists($mediaUrl)) {
                mkdir($mediaUrl, 0777, true);
            }

            $fp = fopen($filePath, "w+");
            $productCollection = $this->collectionFactory->create();
            $productCollection = $productCollection->addAttributeToFilter('is_facebook', ['in' => 1]);
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            /**
             * To set header title
             */
            $data = [];
            $mappedAttr = $this->dataHelper->readCsv();
            $resultRedirect = $this->resultRedirectFactory->create();
            if ($mappedAttr) {
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
            if (!in_array('brand', $data)) {
                array_push($data, 'brand');
            }
            array_push($data, 'description');
            array_push($data, 'link');
            array_push($data, 'item_group_id');
            array_push($data, 'additional_image_link');
            fputcsv($fp, $data, chr(9));
            //$default = [];


            foreach ($productCollection as $product) {
                $product = $objectManager->create('Magento\Catalog\Model\Product')->setStoreId($storeId)->load($product->getId());
                $attr = $product->getData('is_facebook');
                $mappedAttr = $this->dataHelper->readCsv();
                $default = [];
                if ($attr == 1) {
                    $mappedData = array();
                    foreach ($mappedAttr as $fbAttr => $magentoAttr) {
                        $attrValue = $this->dataHelper->getMappedAttributeValue($magentoAttr, $product);
                        if ($magentoAttr == 'image' && $attrValue != '') {
                            $attrValue = $url . $attrValue;
                        }
                        if ($magentoAttr == 'price' && $attrValue != '') {
                            $attrValue = $currencyCode . ' ' . $attrValue;
                        }

                        if ($magentoAttr == 'google_product_category' && $attrValue == '') {
                            $attrValue = '632';
                        }

                        if (is_array($attrValue)) {
                            foreach ($attrValue as $key => $value) {
                                $mappedData[$fbAttr] = $attrValue[$key];
                            }
                        } else {
                            $mappedData[$fbAttr] = $attrValue;
                        }
                        if ($fbAttr == 'title') {
                            $attrValueLen = strlen($attrValue);
                            if ($attrValueLen >= 150) {
                                $mappedData[$fbAttr] = strtolower(substr($attrValue, 0, 149));
                            } else {
                                $mappedData[$fbAttr] = strtolower($attrValue);
                            }

                            $productdata = $product->getData();
                            $default['description'] = $attrValue;

                        }
                    }
                    $default = $this->dataHelper->defaultMappingAttribute($product);

                    $mappedData = array_merge($mappedData, $default);

                    $condition = array('new', 'refurbished', 'used', 'cpo');

                    if (!in_array($mappedData['condition'], $condition)) {
                        $mappedData['condition'] = 'new';
                    }
                    //echo "<pre>";
                    //print_r($mappedData);
                    fputcsv($fp, $mappedData, chr(9));
                }
            }
            fclose($fp);
            //die("JS");

            $this->messageManager->addSuccessMessage(__('Csv Exported successfully'));
            $resultRedirect->setPath('fbnative/product/index');
            return $resultRedirect;
        /*} catch (\Error $e) {
            echo "<pre>";
            print_r($e->getMessage());
            die("HS");
        } catch (\Exception $e) {
            echo "<pre>";
            print_r($e->getMessage());
            die("HS");
        }*/
    }
}
