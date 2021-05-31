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
 * @package     Ced_Amazon
 * @author        CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CedCommerce (http://cedcommerce.com/)
 * @license      http://cedcommerce.com/license-agreement.txt
 */

namespace Ced\Amazon\Model;

/**
 * @deprecated: Use: \Ced\Amazon\Model\Profile\Product
 * Class Profileproducts
 * @package Ced\Amazon\Model
 */
class Profileproducts extends \Magento\Framework\Model\AbstractModel
{
    const NAME = 'ced_amazon_profile_products';
    const COLUMN_PRODUCT_ID = 'product_id';

    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init(\Ced\Amazon\Model\ResourceModel\Profileproducts::class);
    }

    /**
     * @return $this
     */

    public function update()
    {
        $this->getResource()->update($this);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductsCollection()
    {
        return $this->getResource(\Ced\Amazon\Model\ResourceModel\Profileproducts\Collection::class);
    }

    /**
     * getting group vendors
     */
    public function getProfileProducts($profileId)
    {
        return $this->getResource()->getProfileProducts($profileId);
    }

    public function deleteFromProfile($productId)
    {
        $this->_getResource()->deleteFromProfile($productId);
        return $this;
    }

    public function deleteProducts($productIds)
    {
        $this->_getResource()->deleteProducts($productIds);
        return $this;
    }

    public function addProducts($productIds, $profileId)
    {
        $this->_getResource()->addProducts($productIds, $profileId);
        return $this;
    }

    public function profileProductExists($productId, $profileId)
    {
        $result = $this->_getResource()->profileProductExists($productId, $profileId);
        return (is_array($result) && count($result) > 0) ? true : false;
    }

    /**
     * Load entity by attribute
     *
     * @param string|array field
     * @param null|string|array $value
     * @param string $additionalAttributes
     * @return bool|\Ced\Amazon\Model\Profileproducts
     */
    public function loadByField($field, $value, $additionalAttributes = '*')
    {
        $collection = $this->getResourceCollection()
            ->addFieldToSelect($additionalAttributes);
        if (is_array($field) && is_array($value)) {
            foreach ($field as $key => $f) {
                if (isset($value[$key])) {
                    $collection->addFieldToFilter($f, $value[$key]);
                }
            }
        } else {
            $collection->addFieldToFilter($field, $value);
        }

        $collection->setCurPage(1)
            ->setPageSize(1);
        foreach ($collection as $object) {
            $this->load($object->getId());
            return $this;
        }
        return $this;
    }
}
