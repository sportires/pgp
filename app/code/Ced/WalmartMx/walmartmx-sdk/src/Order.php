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
 * @package     WalmartMx-Sdk
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CedCommerce (http://cedcommerce.com/)
 * @license     http://cedcommerce.com/license-agreement.txt
 */

namespace WalmartMxSdk;

class Order extends \WalmartMxSdk\Core\Request
{

    /**
     * Get a Order
     * @param string $purchaseOrderId
     * @param string $subUrl
     * @return array|string
     */
    public function getOrderByIds($purchaseOrderIds, $subUrl = self::GET_ORDERS_SUB_URL)
    {
        $response = $response = $this->getRequest($subUrl . '?order_ids=' . $purchaseOrderIds);
        try {
            $response = $this->parser->loadXML($response)->xmlToArray();
            return $response;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getOrders($status = 'WAITING_ACCEPTANCE', $subUrl = self::GET_ORDERS_SUB_URL)
    {
        $response = $this->getRequest($subUrl . '?order_state_codes=' . $status);
       // $response = file_get_contents('catch_order.xml');
        try {
            $response = $this->parser->loadXML($response)->xmlToArray();
            return $response;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Ship Orders
     * @param string $data
     * @param string $subUrl
     * @return boolean|array
     * @link  https://www.catchcommerceservices.com/question/current-xml-puts-and-gets/
     */
    public function putShipOrder($purchaseOrderId = null, $subUrl = self::PUT_ORDER_ACCEPTANCE)
    {
        $url = $subUrl . $purchaseOrderId . '/ship';
        $response = $this->putRequest($url);
        return $response;

    }

    /**
     * @param $subUrl
     * @return array
     */
    public function getShippingMethods($subUrl = self::GET_SHIPPING_CARRIERS)
    {
        $shippingMethods = $this->baseDirectory.DS. 'shipping-carrier.xml';
        if (file_exists($shippingMethods)) {
            $response = file_get_contents($shippingMethods);
        } else {
            $response = $this->getRequest($subUrl);
            //@ToDo check api response data then save
            file_put_contents(
                $this->getFile($this->baseDirectory, 'shipping-carrier.xml'), $response
            );
        }
        $response = $this->parser->loadXML($response)->xmlToArray();
        return isset($response['body']['carriers']['carrier'])?$response['body']['carriers']['carrier']:array();
    }

    /**
     * @param $subUrl
     * @return array
     */
    public function getCancelReasons($subUrl = self::GET_REASONS)
    {
        $shippingMethods = $this->baseDirectory.DS. 'cancel-reason.xml';
        if (file_exists($shippingMethods)) {
            $response = file_get_contents($shippingMethods);
        } else {
            $response = $this->getRequest($subUrl.'/REFUND');
            //@ToDo check api response data then save
            file_put_contents(
                $this->getFile($this->baseDirectory, 'cancel-reason.xml'), $response
            );
        }
        $response = $this->parser->loadXML($response)->xmlToArray();
        return isset($response['body']['reasons']['reason'])?$response['body']['reasons']['reason']:array();
    }

    /**
     * @param $subUrl
     * @return array
     */
    public function acceptrejectOrderLines($purchaseOrderId, $acceptanceArray, $subUrl = self::PUT_ORDER_ACCEPTANCE)
    {
        $url = $subUrl . $purchaseOrderId . '/accept';
        $xml = new \WalmartMxSdk\Core\Generator();
        $acceptanceXml = $xml->arrayToXml($acceptanceArray);
        $response = $this->putRequest($url, array('data' => $acceptanceXml->__toString()));
        return $response;
    }


    /**
     * @param $subUrl
     * @return array
     */
    public function updateTrackingInfo($purchaseOrderId, $trackingInfo, $subUrl = self::PUT_ORDER_ACCEPTANCE)
    {
        $shippingInfoData = array(
            'tracking' => array(
                '_attribute' => array(),
                '_value' => array(
                    'carrier_code' => isset($trackingInfo['carrier_code']) ? $trackingInfo['carrier_code'] : '',
                    'carrier_name' => isset($trackingInfo['carrier_name']) ? $trackingInfo['carrier_name'] : '',
                    'carrier_url' => isset($trackingInfo['tracking_url']) ? $trackingInfo['tracking_url'] : '',
                    'tracking_number' => isset($trackingInfo['tracking_number']) ? $trackingInfo['tracking_number'] : '',
                )
            )
        );
        $url = $subUrl . $purchaseOrderId . '/tracking';
        $xml = new \WalmartMxSdk\Core\Generator();
        $trackingXML = $xml->arrayToXml($shippingInfoData);
        $response = $this->putRequest($url, array('data' => $trackingXML->__toString()));
        return $response;
    }


    /**
     * Ship Orders
     * @param string $data
     * @param string $subUrl
     * @return boolean|array
     * @link  https://www.catchcommerceservices.com/question/current-xml-puts-and-gets/
     */
    public function putCancelOrder($purchaseOrderId = null, $subUrl = self::PUT_ORDER_ACCEPTANCE)
    {
        $url = $subUrl . $purchaseOrderId . '/cancel';
        $response = $this->putRequest($url);
        return $response;

    }

    /**
     * @param $subUrl
     * @return array
     */
    public function refundOnWalmartMx($refundData = array(), $url = self::PUT_ORDER_REFUND)
    {
        $xml = new \WalmartMxSdk\Core\Generator();
        $refundXML = $xml->arrayToXml($refundData);
        $response = $this->putRequest($url, array('data' => $refundXML->__toString()));
        $response = $this->parser->loadXML($response)->xmlToArray();
        return $response;
    }

    public function getDocumentIds($purchaseOrderIds, $subUrl = self::GET_ORDERS_DOCUMENT_URL)
    {
        $response = $this->getRequest($subUrl . '?order_ids=' . $purchaseOrderIds);
        try {
            $response = $this->parser->loadXML($response)->xmlToArray();
            return $response;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function downloadDocument($purchaseOrderIds, $subUrl = self::GET_ORDERS_DOCUMENT_DOWNLOAD_URL)
    {
        try {
            $response = $this->getRequest($subUrl . '?order_ids=' . $purchaseOrderIds);
            if($response != null) {
                $zipFilename = $this->baseDirectory . DS . 'OrderDocument'  . DS .  "$purchaseOrderIds.zip";
                $dirPath = $this->baseDirectory . DS . 'OrderDocument';
                if (!file_exists($dirPath)) {
                    mkdir($dirPath, 0777, true);
                }
                $handler = fopen($zipFilename, 'wb');
                fwrite($handler, $response);
                fclose($handler);
                $zip = new \ZipArchive;
                $res = $zip->open($zipFilename);
                if ($res === TRUE) {
                    $zip->extractTo($dirPath);
                    $zip->close();
                    $this->get_all_directory_and_files("$dirPath" . DS . $purchaseOrderIds);
                }
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    function get_all_directory_and_files($dir){
        $dh = new \DirectoryIterator($dir);
        foreach ($dh as $item) {
            if (!$item->isDot()) {
                if ($item->isDir()) {
                    $this->get_all_directory_and_files("$dir/$item");
                } else {
                    $fileToDownload =  $dir . "/" . $item->getFilename();
                    if(file_exists($fileToDownload)) {
                        header('Content-Description: File Transfer');
                        header('Content-Type: application/octet-stream');
                        header('Content-Disposition: attachment; filename="'.basename($fileToDownload).'"');
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate');
                        header('Pragma: public');
                        header('Content-Length: ' . filesize($fileToDownload));
                        flush();
                        readfile($fileToDownload);
                        continue;
                    }
                }
            }
        }
    }
}
