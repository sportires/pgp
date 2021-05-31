<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderInterface
 */
class OrderExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderExtensionInterface
{
    /**
     * @return \Magento\Sales\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments()
    {
        return $this->_get('shipping_assignments');
    }

    /**
     * @param \Magento\Sales\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->setData('shipping_assignments', $shippingAssignments);
        return $this;
    }

    /**
     * @return \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo()
    {
        return $this->_get('payment_additional_info');
    }

    /**
     * @param \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[] $paymentAdditionalInfo
     * @return $this
     */
    public function setPaymentAdditionalInfo($paymentAdditionalInfo)
    {
        $this->setData('payment_additional_info', $paymentAdditionalInfo);
        return $this;
    }

    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage()
    {
        return $this->_get('gift_message');
    }

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage(\Magento\GiftMessage\Api\Data\MessageInterface $giftMessage)
    {
        $this->setData('gift_message', $giftMessage);
        return $this;
    }

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes()
    {
        return $this->_get('applied_taxes');
    }

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     * @return $this
     */
    public function setAppliedTaxes($appliedTaxes)
    {
        $this->setData('applied_taxes', $appliedTaxes);
        return $this;
    }

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes()
    {
        return $this->_get('item_applied_taxes');
    }

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[] $itemAppliedTaxes
     * @return $this
     */
    public function setItemAppliedTaxes($itemAppliedTaxes)
    {
        $this->setData('item_applied_taxes', $itemAppliedTaxes);
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getConvertingFromQuote()
    {
        return $this->_get('converting_from_quote');
    }

    /**
     * @param boolean $convertingFromQuote
     * @return $this
     */
    public function setConvertingFromQuote($convertingFromQuote)
    {
        $this->setData('converting_from_quote', $convertingFromQuote);
        return $this;
    }

    /**
     * @return \Amazon\Payment\Api\Data\OrderLinkInterface|null
     */
    public function getAmazonOrderReferenceId()
    {
        return $this->_get('amazon_order_reference_id');
    }

    /**
     * @param \Amazon\Payment\Api\Data\OrderLinkInterface $amazonOrderReferenceId
     * @return $this
     */
    public function setAmazonOrderReferenceId(\Amazon\Payment\Api\Data\OrderLinkInterface $amazonOrderReferenceId)
    {
        $this->setData('amazon_order_reference_id', $amazonOrderReferenceId);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->_get('amazon_order_id');
    }

    /**
     * @param string $amazonOrderId
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->setData('amazon_order_id', $amazonOrderId);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmazonOrderPlaceDate()
    {
        return $this->_get('amazon_order_place_date');
    }

    /**
     * @param string $amazonOrderPlaceDate
     * @return $this
     */
    public function setAmazonOrderPlaceDate($amazonOrderPlaceDate)
    {
        $this->setData('amazon_order_place_date', $amazonOrderPlaceDate);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getItmSboDocentry()
    {
        return $this->_get('itm_sbo_docentry');
    }

    /**
     * @param string $itmSboDocentry
     * @return $this
     */
    public function setItmSboDocentry($itmSboDocentry)
    {
        $this->setData('itm_sbo_docentry', $itmSboDocentry);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getItmSboDocnum()
    {
        return $this->_get('itm_sbo_docnum');
    }

    /**
     * @param string $itmSboDocnum
     * @return $this
     */
    public function setItmSboDocnum($itmSboDocnum)
    {
        $this->setData('itm_sbo_docnum', $itmSboDocnum);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getItmSboDownloadToSap()
    {
        return $this->_get('itm_sbo_download_to_sap');
    }

    /**
     * @param string $itmSboDownloadToSap
     * @return $this
     */
    public function setItmSboDownloadToSap($itmSboDownloadToSap)
    {
        $this->setData('itm_sbo_download_to_sap', $itmSboDownloadToSap);
        return $this;
    }
}
