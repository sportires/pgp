<?php

namespace Ced\WalmartMx\Block\Adminhtml\Profile\Ui\View;

class WalmartMxCategory extends \Magento\Backend\Block\Template
{
     /**
     * @var string
     */
    public $_template = 'Ced_WalmartMx::profile/category/walmartmx_category.phtml';

    public $_objectManager;

    public $request;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\App\Request\Http $request,
        array $data = []
    )
    {
        $this->_objectManager = $objectManager;
        $this->request = $request;
        parent::__construct($context, $data);
    }
    public function getCurrentProfile()
    {
        return $this->request->getParam('id', 0);
    }
    public function getWalmartMxCategoryUrl()
    {
        return $this->_objectManager->get('\Magento\Backend\Model\UrlInterface')->getUrl('walmartmx/category/fetch');
    }
    public function getCategoryAttributeUrl()
    {
        return $this->_objectManager->get('\Magento\Backend\Model\UrlInterface')->getUrl('walmartmx/profile/updateCategoryAttributes');
    }
    
    /**
     * Render form element as HTML
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->setElement($element);
        return $this->toHtml();
    }
    protected function _prepareLayout()
    {
        $this->addChild('walmartmx_attributes','Ced\WalmartMx\Block\Adminhtml\Profile\Ui\View\AttributeMapping');
    }
}
