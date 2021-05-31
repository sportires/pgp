<?php
namespace Magento\Catalog\Helper\Category;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Category
 */
class Interceptor extends \Magento\Catalog\Helper\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Data\CollectionFactory $dataCollectionFactory, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository)
    {
        $this->___init();
        parent::__construct($context, $categoryFactory, $storeManager, $dataCollectionFactory, $categoryRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreCategories($sorted = false, $asCollection = false, $toLoad = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreCategories');
        if (!$pluginInfo) {
            return parent::getStoreCategories($sorted, $asCollection, $toLoad);
        } else {
            return $this->___callPlugins('getStoreCategories', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryUrl($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryUrl');
        if (!$pluginInfo) {
            return parent::getCategoryUrl($category);
        } else {
            return $this->___callPlugins('getCategoryUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canShow($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShow');
        if (!$pluginInfo) {
            return parent::canShow($category);
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
