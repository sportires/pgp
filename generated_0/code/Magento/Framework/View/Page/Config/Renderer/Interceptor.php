<?php
namespace Magento\Framework\View\Page\Config\Renderer;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config\Renderer
 */
class Interceptor extends \Magento\Framework\View\Page\Config\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Page\Config $pageConfig, \Magento\Framework\View\Asset\MergeService $assetMergeService, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\Escaper $escaper, \Magento\Framework\Stdlib\StringUtils $string, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($pageConfig, $assetMergeService, $urlBuilder, $escaper, $string, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function renderElementAttributes($elementType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderElementAttributes');
        if (!$pluginInfo) {
            return parent::renderElementAttributes($elementType);
        } else {
            return $this->___callPlugins('renderElementAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderHeadContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderHeadContent');
        if (!$pluginInfo) {
            return parent::renderHeadContent();
        } else {
            return $this->___callPlugins('renderHeadContent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderTitle');
        if (!$pluginInfo) {
            return parent::renderTitle();
        } else {
            return $this->___callPlugins('renderTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderMetadata()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderMetadata');
        if (!$pluginInfo) {
            return parent::renderMetadata();
        } else {
            return $this->___callPlugins('renderMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareFavicon()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareFavicon');
        if (!$pluginInfo) {
            return parent::prepareFavicon();
        } else {
            return $this->___callPlugins('prepareFavicon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderAssets($resultGroups = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderAssets');
        if (!$pluginInfo) {
            return parent::renderAssets($resultGroups);
        } else {
            return $this->___callPlugins('renderAssets', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableResultGroups()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableResultGroups');
        if (!$pluginInfo) {
            return parent::getAvailableResultGroups();
        } else {
            return $this->___callPlugins('getAvailableResultGroups', func_get_args(), $pluginInfo);
        }
    }
}
