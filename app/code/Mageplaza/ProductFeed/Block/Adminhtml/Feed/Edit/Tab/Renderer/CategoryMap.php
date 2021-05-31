<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_ProductFeed
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\ProductFeed\Block\Adminhtml\Feed\Edit\Tab\Renderer;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Model\Category\Tree;
use Magento\Catalog\Model\CategoryFactory;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Phrase;
use Magento\Framework\Registry;
use Mageplaza\ProductFeed\Helper\Data;
use Zend_Serializer_Exception;

/**
 * Class CategoryMap
 * @package Mageplaza\ProductFeed\Block\Adminhtml\Feed\Edit\Tab\Renderer
 */
class CategoryMap extends Template
{
    /**
     * @var string template
     */
    protected $_template = 'Mageplaza_ProductFeed::feed/category_map.phtml';

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * @var Tree
     */
    protected $tree;

    /**
     * @var CategoryFactory
     */
    protected $categoryFactory;

    /**
     * CategoryMap constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param Tree $tree
     * @param CategoryFactory $categoryFactory
     * @param Data $helperData
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        Tree $tree,
        CategoryFactory $categoryFactory,
        Data $helperData,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->helperData = $helperData;
        $this->tree = $tree;
        $this->categoryFactory = $categoryFactory;

        parent::__construct($context, $data);
    }

    /**
     * @return string
     * @throws Zend_Serializer_Exception
     */
    public function getCategoryMap()
    {
        $feed = $this->registry->registry('mageplaza_productfeed_feed');
        if (isset($feed['category_map']) && $feed['category_map']) {
            return Data::jsonEncode($this->helperData->unserialize($feed['category_map']));
        }

        return '';
    }

    /**
     * @return Node|null
     * @throws NoSuchEntityException
     */
    public function getRootNode()
    {
        $feed = $this->registry->registry('mageplaza_productfeed_feed');
        if ($this->_request->getParam('store')) {
            $storeId = $this->_request->getParam('store');
        } elseif ($feed->getId()) {
            $storeId = $feed->getStoreId();
        } else {
            $storeId = 0;
        }
        $rootCategoryId = $this->_storeManager->getStore($storeId)->getRootCategoryId();
        $category = $this->categoryFactory->create()->load($rootCategoryId);

        return $this->tree->getRootNode($category);
    }

    /**
     * @param $node Node
     *
     * @return Phrase|string
     */
    public function getCategoryTreeHtml($node)
    {
        $html = '';
        $html .= '<div class="category-tree-container row lv' . $node->getLevel();
        $html .= '" style="margin-left:' . ($node->getLevel() * 20) . 'px">';
        $html .= '<div class="row category-tree ui-widget autocomplete">';
        $html .= ($node->hasChildren() ? '<i class="fa fa-minus collapse"></i>' : '');
        $html .= '<input id="' . $node->getId() .
                 '" name="feed[category_map][' . $node->getId() . ']"/>';
        $html .= '<label>' . $node->getName() . ' (' . $node->getId() . ')</label>';
        $html .= '</div>';
        if ($node->hasChildren()) {
            foreach ($node->getChildren() as $childNode) {
                $html .= $this->getCategoryTreeHtml($childNode);
            }
        }
        $html .= '</div>';

        return $html;
    }
}
