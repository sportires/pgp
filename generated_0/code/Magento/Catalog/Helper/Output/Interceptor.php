<?php
namespace Magento\Catalog\Helper\Output;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Output
 */
class Interceptor extends \Magento\Catalog\Helper\Output implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\Escaper $escaper, $directivePatterns = [])
    {
        $this->___init();
        parent::__construct($context, $eavConfig, $catalogData, $escaper, $directivePatterns);
    }

    /**
     * {@inheritdoc}
     */
    public function addHandler($method, $handler)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addHandler');
        if (!$pluginInfo) {
            return parent::addHandler($method, $handler);
        } else {
            return $this->___callPlugins('addHandler', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHandlers($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHandlers');
        if (!$pluginInfo) {
            return parent::getHandlers($method);
        } else {
            return $this->___callPlugins('getHandlers', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function process($method, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        if (!$pluginInfo) {
            return parent::process($method, $result, $params);
        } else {
            return $this->___callPlugins('process', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function productAttribute($product, $attributeHtml, $attributeName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'productAttribute');
        if (!$pluginInfo) {
            return parent::productAttribute($product, $attributeHtml, $attributeName);
        } else {
            return $this->___callPlugins('productAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function categoryAttribute($category, $attributeHtml, $attributeName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'categoryAttribute');
        if (!$pluginInfo) {
            return parent::categoryAttribute($category, $attributeHtml, $attributeName);
        } else {
            return $this->___callPlugins('categoryAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDirectivesExists($attributeHtml)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDirectivesExists');
        if (!$pluginInfo) {
            return parent::isDirectivesExists($attributeHtml);
        } else {
            return $this->___callPlugins('isDirectivesExists', func_get_args(), $pluginInfo);
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
