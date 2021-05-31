<?php
namespace Magento\Catalog\Helper\Product;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Product
 */
class Interceptor extends \Magento\Catalog\Helper\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Session $catalogSession, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\Registry $coreRegistry, \Magento\Catalog\Model\Attribute\Config $attributeConfig, $reindexPriceIndexerData, $reindexProductCategoryIndexerData, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $catalogSession, $assetRepo, $coreRegistry, $attributeConfig, $reindexPriceIndexerData, $reindexProductCategoryIndexerData, $productRepository, $categoryRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function isDataForPriceIndexerWasChanged($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDataForPriceIndexerWasChanged');
        if (!$pluginInfo) {
            return parent::isDataForPriceIndexerWasChanged($data);
        } else {
            return $this->___callPlugins('isDataForPriceIndexerWasChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDataForProductCategoryIndexerWasChanged(\Magento\Catalog\Model\Product $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDataForProductCategoryIndexerWasChanged');
        if (!$pluginInfo) {
            return parent::isDataForProductCategoryIndexerWasChanged($data);
        } else {
            return $this->___callPlugins('isDataForProductCategoryIndexerWasChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductUrl');
        if (!$pluginInfo) {
            return parent::getProductUrl($product);
        } else {
            return $this->___callPlugins('getProductUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrice($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrice');
        if (!$pluginInfo) {
            return parent::getPrice($product);
        } else {
            return $this->___callPlugins('getPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFinalPrice($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFinalPrice');
        if (!$pluginInfo) {
            return parent::getFinalPrice($product);
        } else {
            return $this->___callPlugins('getFinalPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageUrl');
        if (!$pluginInfo) {
            return parent::getImageUrl($product);
        } else {
            return $this->___callPlugins('getImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSmallImageUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSmallImageUrl');
        if (!$pluginInfo) {
            return parent::getSmallImageUrl($product);
        } else {
            return $this->___callPlugins('getSmallImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailUrl');
        if (!$pluginInfo) {
            return parent::getThumbnailUrl($product);
        } else {
            return $this->___callPlugins('getThumbnailUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailToFriendUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmailToFriendUrl');
        if (!$pluginInfo) {
            return parent::getEmailToFriendUrl($product);
        } else {
            return $this->___callPlugins('getEmailToFriendUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStatuses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatuses');
        if (!$pluginInfo) {
            return parent::getStatuses();
        } else {
            return $this->___callPlugins('getStatuses', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canShow($product, $where = 'catalog')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShow');
        if (!$pluginInfo) {
            return parent::canShow($product, $where);
        } else {
            return $this->___callPlugins('canShow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canUseCanonicalTag($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseCanonicalTag');
        if (!$pluginInfo) {
            return parent::canUseCanonicalTag($store);
        } else {
            return $this->___callPlugins('canUseCanonicalTag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeInputTypes($inputType = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeInputTypes');
        if (!$pluginInfo) {
            return parent::getAttributeInputTypes($inputType);
        } else {
            return $this->___callPlugins('getAttributeInputTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeBackendModelByInputType($inputType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeBackendModelByInputType');
        if (!$pluginInfo) {
            return parent::getAttributeBackendModelByInputType($inputType);
        } else {
            return $this->___callPlugins('getAttributeBackendModelByInputType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeSourceModelByInputType($inputType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeSourceModelByInputType');
        if (!$pluginInfo) {
            return parent::getAttributeSourceModelByInputType($inputType);
        } else {
            return $this->___callPlugins('getAttributeSourceModelByInputType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initProduct($productId, $controller, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initProduct');
        if (!$pluginInfo) {
            return parent::initProduct($productId, $controller, $params);
        } else {
            return $this->___callPlugins('initProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareProductOptions($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareProductOptions');
        if (!$pluginInfo) {
            return parent::prepareProductOptions($product, $buyRequest);
        } else {
            return $this->___callPlugins('prepareProductOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addParamsToBuyRequest($buyRequest, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addParamsToBuyRequest');
        if (!$pluginInfo) {
            return parent::addParamsToBuyRequest($buyRequest, $params);
        } else {
            return $this->___callPlugins('addParamsToBuyRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSkipSaleableCheck($skipSaleableCheck = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSkipSaleableCheck');
        if (!$pluginInfo) {
            return parent::setSkipSaleableCheck($skipSaleableCheck);
        } else {
            return $this->___callPlugins('setSkipSaleableCheck', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSkipSaleableCheck()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSkipSaleableCheck');
        if (!$pluginInfo) {
            return parent::getSkipSaleableCheck();
        } else {
            return $this->___callPlugins('getSkipSaleableCheck', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldsAutogenerationMasks()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldsAutogenerationMasks');
        if (!$pluginInfo) {
            return parent::getFieldsAutogenerationMasks();
        } else {
            return $this->___callPlugins('getFieldsAutogenerationMasks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesAllowedForAutogeneration()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesAllowedForAutogeneration');
        if (!$pluginInfo) {
            return parent::getAttributesAllowedForAutogeneration();
        } else {
            return $this->___callPlugins('getAttributesAllowedForAutogeneration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentBase64Url()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentBase64Url');
        if (!$pluginInfo) {
            return parent::getCurrentBase64Url();
        } else {
            return $this->___callPlugins('getCurrentBase64Url', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEncodedUrl($url = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEncodedUrl');
        if (!$pluginInfo) {
            return parent::getEncodedUrl($url);
        } else {
            return $this->___callPlugins('getEncodedUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addRequestParam($url, $param)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRequestParam');
        if (!$pluginInfo) {
            return parent::addRequestParam($url, $param);
        } else {
            return $this->___callPlugins('addRequestParam', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeRequestParam($url, $paramKey, $caseSensitive = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeRequestParam');
        if (!$pluginInfo) {
            return parent::removeRequestParam($url, $paramKey, $caseSensitive);
        } else {
            return $this->___callPlugins('removeRequestParam', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
