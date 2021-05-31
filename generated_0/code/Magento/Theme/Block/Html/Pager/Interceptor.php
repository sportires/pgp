<?php
namespace Magento\Theme\Block\Html\Pager;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Pager
 */
class Interceptor extends \Magento\Theme\Block\Html\Pager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
    public function setLimit($limit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLimit');
        if (!$pluginInfo) {
            return parent::setLimit($limit);
        } else {
            return $this->___callPlugins('setLimit', func_get_args(), $pluginInfo);
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
    public function setPageVarName($varName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageVarName');
        if (!$pluginInfo) {
            return parent::setPageVarName($varName);
        } else {
            return $this->___callPlugins('setPageVarName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageVarName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageVarName');
        if (!$pluginInfo) {
            return parent::getPageVarName();
        } else {
            return $this->___callPlugins('getPageVarName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShowPerPage($varName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShowPerPage');
        if (!$pluginInfo) {
            return parent::setShowPerPage($varName);
        } else {
            return $this->___callPlugins('setShowPerPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isShowPerPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShowPerPage');
        if (!$pluginInfo) {
            return parent::isShowPerPage();
        } else {
            return $this->___callPlugins('isShowPerPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLimitVarName($varName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLimitVarName');
        if (!$pluginInfo) {
            return parent::setLimitVarName($varName);
        } else {
            return $this->___callPlugins('setLimitVarName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLimitVarName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLimitVarName');
        if (!$pluginInfo) {
            return parent::getLimitVarName();
        } else {
            return $this->___callPlugins('getLimitVarName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAvailableLimit(array $limits)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAvailableLimit');
        if (!$pluginInfo) {
            return parent::setAvailableLimit($limits);
        } else {
            return $this->___callPlugins('setAvailableLimit', func_get_args(), $pluginInfo);
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
    public function isLastPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLastPage');
        if (!$pluginInfo) {
            return parent::isLastPage();
        } else {
            return $this->___callPlugins('isLastPage', func_get_args(), $pluginInfo);
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
    public function isPageCurrent($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPageCurrent');
        if (!$pluginInfo) {
            return parent::isPageCurrent($page);
        } else {
            return $this->___callPlugins('isPageCurrent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPages');
        if (!$pluginInfo) {
            return parent::getPages();
        } else {
            return $this->___callPlugins('getPages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstPageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstPageUrl');
        if (!$pluginInfo) {
            return parent::getFirstPageUrl();
        } else {
            return $this->___callPlugins('getFirstPageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviousPageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreviousPageUrl');
        if (!$pluginInfo) {
            return parent::getPreviousPageUrl();
        } else {
            return $this->___callPlugins('getPreviousPageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNextPageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNextPageUrl');
        if (!$pluginInfo) {
            return parent::getNextPageUrl();
        } else {
            return $this->___callPlugins('getNextPageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastPageUrl');
        if (!$pluginInfo) {
            return parent::getLastPageUrl();
        } else {
            return $this->___callPlugins('getLastPageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageUrl($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageUrl');
        if (!$pluginInfo) {
            return parent::getPageUrl($page);
        } else {
            return $this->___callPlugins('getPageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLimitUrl($limit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLimitUrl');
        if (!$pluginInfo) {
            return parent::getLimitUrl($limit);
        } else {
            return $this->___callPlugins('getLimitUrl', func_get_args(), $pluginInfo);
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
    public function getFrameStart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrameStart');
        if (!$pluginInfo) {
            return parent::getFrameStart();
        } else {
            return $this->___callPlugins('getFrameStart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrameEnd()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrameEnd');
        if (!$pluginInfo) {
            return parent::getFrameEnd();
        } else {
            return $this->___callPlugins('getFrameEnd', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFramePages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFramePages');
        if (!$pluginInfo) {
            return parent::getFramePages();
        } else {
            return $this->___callPlugins('getFramePages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviousJumpPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreviousJumpPage');
        if (!$pluginInfo) {
            return parent::getPreviousJumpPage();
        } else {
            return $this->___callPlugins('getPreviousJumpPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviousJumpUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreviousJumpUrl');
        if (!$pluginInfo) {
            return parent::getPreviousJumpUrl();
        } else {
            return $this->___callPlugins('getPreviousJumpUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNextJumpPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNextJumpPage');
        if (!$pluginInfo) {
            return parent::getNextJumpPage();
        } else {
            return $this->___callPlugins('getNextJumpPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNextJumpUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNextJumpUrl');
        if (!$pluginInfo) {
            return parent::getNextJumpUrl();
        } else {
            return $this->___callPlugins('getNextJumpUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrameLength()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrameLength');
        if (!$pluginInfo) {
            return parent::getFrameLength();
        } else {
            return $this->___callPlugins('getFrameLength', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getJump()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJump');
        if (!$pluginInfo) {
            return parent::getJump();
        } else {
            return $this->___callPlugins('getJump', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFrameLength($frame)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrameLength');
        if (!$pluginInfo) {
            return parent::setFrameLength($frame);
        } else {
            return $this->___callPlugins('setFrameLength', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setJump($jump)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setJump');
        if (!$pluginInfo) {
            return parent::setJump($jump);
        } else {
            return $this->___callPlugins('setJump', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canShowFirst()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowFirst');
        if (!$pluginInfo) {
            return parent::canShowFirst();
        } else {
            return $this->___callPlugins('canShowFirst', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canShowLast()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowLast');
        if (!$pluginInfo) {
            return parent::canShowLast();
        } else {
            return $this->___callPlugins('canShowLast', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canShowPreviousJump()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowPreviousJump');
        if (!$pluginInfo) {
            return parent::canShowPreviousJump();
        } else {
            return $this->___callPlugins('canShowPreviousJump', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canShowNextJump()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowNextJump');
        if (!$pluginInfo) {
            return parent::canShowNextJump();
        } else {
            return $this->___callPlugins('canShowNextJump', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFrameInitialized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFrameInitialized');
        if (!$pluginInfo) {
            return parent::isFrameInitialized();
        } else {
            return $this->___callPlugins('isFrameInitialized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAnchorTextForPrevious()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnchorTextForPrevious');
        if (!$pluginInfo) {
            return parent::getAnchorTextForPrevious();
        } else {
            return $this->___callPlugins('getAnchorTextForPrevious', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAnchorTextForNext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnchorTextForNext');
        if (!$pluginInfo) {
            return parent::getAnchorTextForNext();
        } else {
            return $this->___callPlugins('getAnchorTextForNext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsOutputRequired($isRequired)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsOutputRequired');
        if (!$pluginInfo) {
            return parent::setIsOutputRequired($isRequired);
        } else {
            return $this->___callPlugins('setIsOutputRequired', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFragment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFragment');
        if (!$pluginInfo) {
            return parent::getFragment();
        } else {
            return $this->___callPlugins('getFragment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFragment($fragment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFragment');
        if (!$pluginInfo) {
            return parent::setFragment($fragment);
        } else {
            return $this->___callPlugins('setFragment', func_get_args(), $pluginInfo);
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
