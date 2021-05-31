<?php
namespace Magento\Catalog\Block\Product\ProductList\Toolbar;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\ProductList\Toolbar
 */
class Interceptor extends \Magento\Catalog\Block\Product\ProductList\Toolbar implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Session $catalogSession, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Catalog\Model\Product\ProductList\Toolbar $toolbarModel, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Catalog\Helper\Product\ProductList $productListHelper, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, array $data = [], ?\Magento\Catalog\Model\Product\ProductList\ToolbarMemorizer $toolbarMemorizer = null, ?\Magento\Framework\App\Http\Context $httpContext = null, ?\Magento\Framework\Data\Form\FormKey $formKey = null)
    {
        $this->___init();
        parent::__construct($context, $catalogSession, $catalogConfig, $toolbarModel, $urlEncoder, $productListHelper, $postDataHelper, $data, $toolbarMemorizer, $httpContext, $formKey);
    }

    /**
     * {@inheritdoc}
     */
    public function disableParamsMemorizing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disableParamsMemorizing');
        if (!$pluginInfo) {
            return parent::disableParamsMemorizing();
        } else {
            return $this->___callPlugins('disableParamsMemorizing', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCollection($collection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCollection');
        if (!$pluginInfo) {
            return parent::setCollection($collection);
        } else {
            return $this->___callPlugins('setCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        if (!$pluginInfo) {
            return parent::getCollection();
        } else {
            return $this->___callPlugins('getCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentPage');
        if (!$pluginInfo) {
            return parent::getCurrentPage();
        } else {
            return $this->___callPlugins('getCurrentPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentOrder');
        if (!$pluginInfo) {
            return parent::getCurrentOrder();
        } else {
            return $this->___callPlugins('getCurrentOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentDirection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentDirection');
        if (!$pluginInfo) {
            return parent::getCurrentDirection();
        } else {
            return $this->___callPlugins('getCurrentDirection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOrder($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultOrder');
        if (!$pluginInfo) {
            return parent::setDefaultOrder($field);
        } else {
            return $this->___callPlugins('setDefaultOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultDirection($dir)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultDirection');
        if (!$pluginInfo) {
            return parent::setDefaultDirection($dir);
        } else {
            return $this->___callPlugins('setDefaultDirection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableOrders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableOrders');
        if (!$pluginInfo) {
            return parent::getAvailableOrders();
        } else {
            return $this->___callPlugins('getAvailableOrders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAvailableOrders($orders)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAvailableOrders');
        if (!$pluginInfo) {
            return parent::setAvailableOrders($orders);
        } else {
            return $this->___callPlugins('setAvailableOrders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOrderToAvailableOrders($order, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrderToAvailableOrders');
        if (!$pluginInfo) {
            return parent::addOrderToAvailableOrders($order, $value);
        } else {
            return $this->___callPlugins('addOrderToAvailableOrders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeOrderFromAvailableOrders($order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeOrderFromAvailableOrders');
        if (!$pluginInfo) {
            return parent::removeOrderFromAvailableOrders($order);
        } else {
            return $this->___callPlugins('removeOrderFromAvailableOrders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOrderCurrent($order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOrderCurrent');
        if (!$pluginInfo) {
            return parent::isOrderCurrent($order);
        } else {
            return $this->___callPlugins('isOrderCurrent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPagerUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPagerUrl');
        if (!$pluginInfo) {
            return parent::getPagerUrl($params);
        } else {
            return $this->___callPlugins('getPagerUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPagerEncodedUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPagerEncodedUrl');
        if (!$pluginInfo) {
            return parent::getPagerEncodedUrl($params);
        } else {
            return $this->___callPlugins('getPagerEncodedUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentMode');
        if (!$pluginInfo) {
            return parent::getCurrentMode();
        } else {
            return $this->___callPlugins('getCurrentMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModeActive($mode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModeActive');
        if (!$pluginInfo) {
            return parent::isModeActive($mode);
        } else {
            return $this->___callPlugins('isModeActive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getModes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModes');
        if (!$pluginInfo) {
            return parent::getModes();
        } else {
            return $this->___callPlugins('getModes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setModes($modes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setModes');
        if (!$pluginInfo) {
            return parent::setModes($modes);
        } else {
            return $this->___callPlugins('setModes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disableViewSwitcher()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disableViewSwitcher');
        if (!$pluginInfo) {
            return parent::disableViewSwitcher();
        } else {
            return $this->___callPlugins('disableViewSwitcher', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function enableViewSwitcher()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'enableViewSwitcher');
        if (!$pluginInfo) {
            return parent::enableViewSwitcher();
        } else {
            return $this->___callPlugins('enableViewSwitcher', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabledViewSwitcher()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabledViewSwitcher');
        if (!$pluginInfo) {
            return parent::isEnabledViewSwitcher();
        } else {
            return $this->___callPlugins('isEnabledViewSwitcher', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disableExpanded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disableExpanded');
        if (!$pluginInfo) {
            return parent::disableExpanded();
        } else {
            return $this->___callPlugins('disableExpanded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function enableExpanded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'enableExpanded');
        if (!$pluginInfo) {
            return parent::enableExpanded();
        } else {
            return $this->___callPlugins('enableExpanded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isExpanded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isExpanded');
        if (!$pluginInfo) {
            return parent::isExpanded();
        } else {
            return $this->___callPlugins('isExpanded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultPerPageValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultPerPageValue');
        if (!$pluginInfo) {
            return parent::getDefaultPerPageValue();
        } else {
            return $this->___callPlugins('getDefaultPerPageValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableLimit');
        if (!$pluginInfo) {
            return parent::getAvailableLimit();
        } else {
            return $this->___callPlugins('getAvailableLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLimit');
        if (!$pluginInfo) {
            return parent::getLimit();
        } else {
            return $this->___callPlugins('getLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isLimitCurrent($limit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLimitCurrent');
        if (!$pluginInfo) {
            return parent::isLimitCurrent($limit);
        } else {
            return $this->___callPlugins('isLimitCurrent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstNum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstNum');
        if (!$pluginInfo) {
            return parent::getFirstNum();
        } else {
            return $this->___callPlugins('getFirstNum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastNum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastNum');
        if (!$pluginInfo) {
            return parent::getLastNum();
        } else {
            return $this->___callPlugins('getLastNum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalNum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotalNum');
        if (!$pluginInfo) {
            return parent::getTotalNum();
        } else {
            return $this->___callPlugins('getTotalNum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFirstPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFirstPage');
        if (!$pluginInfo) {
            return parent::isFirstPage();
        } else {
            return $this->___callPlugins('isFirstPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageNum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastPageNum');
        if (!$pluginInfo) {
            return parent::getLastPageNum();
        } else {
            return $this->___callPlugins('getLastPageNum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPagerHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPagerHtml');
        if (!$pluginInfo) {
            return parent::getPagerHtml();
        } else {
            return $this->___callPlugins('getPagerHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetOptionsJson(array $customOptions = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWidgetOptionsJson');
        if (!$pluginInfo) {
            return parent::getWidgetOptionsJson($customOptions);
        } else {
            return $this->___callPlugins('getWidgetOptionsJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateContext($templateContext)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateContext');
        if (!$pluginInfo) {
            return parent::setTemplateContext($templateContext);
        } else {
            return $this->___callPlugins('setTemplateContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplate');
        if (!$pluginInfo) {
            return parent::getTemplate();
        } else {
            return $this->___callPlugins('getTemplate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplate');
        if (!$pluginInfo) {
            return parent::setTemplate($template);
        } else {
            return $this->___callPlugins('setTemplate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFile($template = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFile');
        if (!$pluginInfo) {
            return parent::getTemplateFile($template);
        } else {
            return $this->___callPlugins('getTemplateFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getArea');
        if (!$pluginInfo) {
            return parent::getArea();
        } else {
            return $this->___callPlugins('getArea', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function assign($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        if (!$pluginInfo) {
            return parent::assign($key, $value);
        } else {
            return $this->___callPlugins('assign', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchView');
        if (!$pluginInfo) {
            return parent::fetchView($fileName);
        } else {
            return $this->___callPlugins('fetchView', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        if (!$pluginInfo) {
            return parent::getBaseUrl();
        } else {
            return $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectData(\Magento\Framework\DataObject $object, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getObjectData');
        if (!$pluginInfo) {
            return parent::getObjectData($object, $key);
        } else {
            return $this->___callPlugins('getObjectData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        if (!$pluginInfo) {
            return parent::getCacheKeyInfo();
        } else {
            return $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsLayout');
        if (!$pluginInfo) {
            return parent::getJsLayout();
        } else {
            return $this->___callPlugins('getJsLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        if (!$pluginInfo) {
            return parent::getRequest();
        } else {
            return $this->___callPlugins('getRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentBlock');
        if (!$pluginInfo) {
            return parent::getParentBlock();
        } else {
            return $this->___callPlugins('getParentBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        if (!$pluginInfo) {
            return parent::setLayout($layout);
        } else {
            return $this->___callPlugins('setLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayout');
        if (!$pluginInfo) {
            return parent::getLayout();
        } else {
            return $this->___callPlugins('getLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNameInLayout($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNameInLayout');
        if (!$pluginInfo) {
            return parent::setNameInLayout($name);
        } else {
            return $this->___callPlugins('setNameInLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        if (!$pluginInfo) {
            return parent::getChildNames();
        } else {
            return $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        if (!$pluginInfo) {
            return parent::setAttribute($name, $value);
        } else {
            return $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($alias, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        if (!$pluginInfo) {
            return parent::setChild($alias, $block);
        } else {
            return $this->___callPlugins('setChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($alias, $block, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        if (!$pluginInfo) {
            return parent::addChild($alias, $block, $data);
        } else {
            return $this->___callPlugins('addChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        if (!$pluginInfo) {
            return parent::unsetChild($alias);
        } else {
            return $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetCallChild($alias, $callback, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetCallChild');
        if (!$pluginInfo) {
            return parent::unsetCallChild($alias, $callback, $result, $params);
        } else {
            return $this->___callPlugins('unsetCallChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChildren');
        if (!$pluginInfo) {
            return parent::unsetChildren();
        } else {
            return $this->___callPlugins('unsetChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        if (!$pluginInfo) {
            return parent::getChildBlock($alias);
        } else {
            return $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildHtml($alias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildHtml');
        if (!$pluginInfo) {
            return parent::getChildHtml($alias, $useCache);
        } else {
            return $this->___callPlugins('getChildHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildChildHtml($alias, $childChildAlias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildChildHtml');
        if (!$pluginInfo) {
            return parent::getChildChildHtml($alias, $childChildAlias, $useCache);
        } else {
            return $this->___callPlugins('getChildChildHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockHtml($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockHtml');
        if (!$pluginInfo) {
            return parent::getBlockHtml($name);
        } else {
            return $this->___callPlugins('getBlockHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insert($element, $siblingName = 0, $after = true, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insert');
        if (!$pluginInfo) {
            return parent::insert($element, $siblingName, $after, $alias);
        } else {
            return $this->___callPlugins('insert', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function append($element, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'append');
        if (!$pluginInfo) {
            return parent::append($element, $alias);
        } else {
            return $this->___callPlugins('append', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        if (!$pluginInfo) {
            return parent::getGroupChildNames($groupName);
        } else {
            return $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildData($alias, $key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildData');
        if (!$pluginInfo) {
            return parent::getChildData($alias, $key);
        } else {
            return $this->___callPlugins('getChildData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUiId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiId');
        if (!$pluginInfo) {
            return parent::getUiId($arg1, $arg2, $arg3, $arg4, $arg5);
        } else {
            return $this->___callPlugins('getUiId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getJsId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsId');
        if (!$pluginInfo) {
            return parent::getJsId($arg1, $arg2, $arg3, $arg4, $arg5);
        } else {
            return $this->___callPlugins('getJsId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        if (!$pluginInfo) {
            return parent::getUrl($route, $params);
        } else {
            return $this->___callPlugins('getUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewFileUrl');
        if (!$pluginInfo) {
            return parent::getViewFileUrl($fileId, $params);
        } else {
            return $this->___callPlugins('getViewFileUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false, $timezone = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDate');
        if (!$pluginInfo) {
            return parent::formatDate($date, $format, $showTime, $timezone);
        } else {
            return $this->___callPlugins('formatDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatTime($time = null, $format = 3, $showDate = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatTime');
        if (!$pluginInfo) {
            return parent::formatTime($time, $format, $showDate);
        } else {
            return $this->___callPlugins('formatTime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtml($data, $allowedTags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtml');
        if (!$pluginInfo) {
            return parent::escapeHtml($data, $allowedTags);
        } else {
            return $this->___callPlugins('escapeHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJs($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJs');
        if (!$pluginInfo) {
            return parent::escapeJs($string);
        } else {
            return $this->___callPlugins('escapeJs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlAttr($string, $escapeSingleQuote = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtmlAttr');
        if (!$pluginInfo) {
            return parent::escapeHtmlAttr($string, $escapeSingleQuote);
        } else {
            return $this->___callPlugins('escapeHtmlAttr', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeCss($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeCss');
        if (!$pluginInfo) {
            return parent::escapeCss($string);
        } else {
            return $this->___callPlugins('escapeCss', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stripTags($data, $allowableTags = null, $allowHtmlEntities = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stripTags');
        if (!$pluginInfo) {
            return parent::stripTags($data, $allowableTags, $allowHtmlEntities);
        } else {
            return $this->___callPlugins('stripTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeUrl($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeUrl');
        if (!$pluginInfo) {
            return parent::escapeUrl($string);
        } else {
            return $this->___callPlugins('escapeUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeXssInUrl($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeXssInUrl');
        if (!$pluginInfo) {
            return parent::escapeXssInUrl($data);
        } else {
            return $this->___callPlugins('escapeXssInUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeQuote($data, $addSlashes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeQuote');
        if (!$pluginInfo) {
            return parent::escapeQuote($data, $addSlashes);
        } else {
            return $this->___callPlugins('escapeQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJsQuote($data, $quote = '\'')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJsQuote');
        if (!$pluginInfo) {
            return parent::escapeJsQuote($data, $quote);
        } else {
            return $this->___callPlugins('escapeJsQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNameInLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNameInLayout');
        if (!$pluginInfo) {
            return parent::getNameInLayout();
        } else {
            return $this->___callPlugins('getNameInLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        if (!$pluginInfo) {
            return parent::getCacheKey();
        } else {
            return $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        if (!$pluginInfo) {
            return parent::getVar($name, $module);
        } else {
            return $this->___callPlugins('getVar', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScopePrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopePrivate');
        if (!$pluginInfo) {
            return parent::isScopePrivate();
        } else {
            return $this->___callPlugins('isScopePrivate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
