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
 * @package     Ced_WalmartMx
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CEDCOMMERCE (http://cedcommerce.com/)
 * @license     http://cedcommerce.com/license-agreement.txt
 */

namespace Ced\WalmartMx\Controller\Adminhtml\Order;

use Magento\Framework\Data\Argument\Interpreter\Constant;

class MassShip extends \Magento\Backend\App\Action
{
    /**
     * ResultPageFactory
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public $resultPageFactory;

    /**
     * Authorization level of a basic admin session
     * @var Constant
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Ced_WalmartMx::walmartmx_orders';

    public $filter;

    public $orderManagement;

    public $order;

    public $walmartmxOrders;

    public $orderHelper;

    /**
     * MassCancel constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Ui\Component\MassAction\Filter $filter
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Ui\Component\MassAction\Filter $filter,
        \Magento\Sales\Api\OrderManagementInterface $orderManagement,
        \Magento\Sales\Api\Data\OrderInterface $order,
        \Ced\WalmartMx\Model\Orders $collection,
        \Ced\WalmartMx\Helper\Order $orderHelper,
        \Ced\WalmartMx\Helper\Logger $logger
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->filter = $filter;
        $this->orderManagement = $orderManagement;
        $this->order = $order;
        $this->walmartmxOrders = $collection;
        $this->orderHelper = $orderHelper;
        $this->logger = $logger;
    }

    /**
     * Execute
     * @return  void
     */
    public function execute()
    {
        $collection = $this->filter->getCollection($this->walmartmxOrders->getCollection());
        $walmartmxOrders = $collection;

        if (count($walmartmxOrders) == 0) {
            $this->messageManager->addErrorMessage('No Orders To Ship.');
            $this->_redirect('walmartmx/order/index');
            return;
        } else {
            $counter = 0;
            foreach ($walmartmxOrders as $walmartmxOrder) {
                $magentoOrderId = $walmartmxOrder->getIncrementId();
                $this->order = $this->_objectManager->create('\Magento\Sales\Api\Data\OrderInterface');
                $order = $this->order->loadByIncrementId($magentoOrderId);
                if ($order->getStatus() == 'complete' || $order->getStatus() == 'Complete') {
                    $return = $this->shipment($order, $walmartmxOrder);
                    if ($return) {
                        $counter++;
                    }
                }
            }
            if ($counter) {
                $this->messageManager->addSuccessMessage($counter . ' Orders Shipment Successfull to WalmartMx.com');
                $this->_redirect('walmartmx/order/index');
                return;
            } else {
                $this->messageManager->addErrorMessage('Orders Shipment Unsuccessfull.');
                $this->_redirect('walmartmx/order/index');
                return;
            }
        }

    }

    /**
     * Shipment
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Magento\Framework\Event\Observer
     */
    public function shipment($order = null, $walmartmxOrder = null)
    {
        $carrier_name = $carrier_code = $tracking_number = '';
        foreach ($order->getShipmentsCollection() as $shipment) {
            $alltrackback = $shipment->getAllTracks();
            foreach ($alltrackback as $track) {
                if ($track->getTrackNumber() != '') {
                    $tracking_number = $track->getTrackNumber();
                    $carrier_code = $track->getCarrierCode();
                    $carrier_name = $track->getTitle();
                    break;
                }
            }
        }

        try {
            $purchaseOrderId = $walmartmxOrder->getWalmartmxOrderId();
            if (empty($purchaseOrderId)) {
                return false;
            }

            if ($tracking_number && $walmartmxOrder->getWalmartmxOrderId()) {
                $shippingProvider = $this->orderHelper->getShipmentProviders();
                $providerCode = array_column($shippingProvider, 'code');
                $carrier_code = (in_array(strtoupper($carrier_code), $providerCode)) ? strtoupper($carrier_code) : '';
                $args = ['TrackingNumber' => $tracking_number, 'ShippingProvider' => strtoupper($carrier_code), 'order_id' => $walmartmxOrder->getMagentoOrderId(), 'WalmartMxOrderID' => $walmartmxOrder->getWalmartmxOrderId(), 'ShippingProviderName' => strtolower($carrier_name)];
                $response = $this->orderHelper->shipOrder($args);
                $this->logger->log('ERROR',json_encode($response));
                return $response;
            }
            return false;
        } catch (\Exception $e){
            $this->logger->log('ERROR',json_encode($e->getMessage()));
            return false;
        }
    }
}
