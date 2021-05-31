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

class Sandbox extends \WalmartMxSdk\Core\Request implements SandboxInterface
{
    /**
     * Create Purchase Order on WalmartMx Sandbox
     * @param string $sellerId
     * @param string $itemId
     * @param array $params = [
     * 'multipleLinesFlag' => 'true',
     * 'poDate' => '2015-06-24',
     * 'shippingAddressName' => 'John Doe',
     * 'shippingAddressLine1' => '123 Ave',
     * 'shippingAddressCity' => 'San Franscisco',
     * 'shippingAddressState' => 'CA',
     * 'shippingAddressPostalCode' => '94002',
     * ]
     * @param string $url
     * @return mixed
     */
    public function createOrder(
        $sellerId = '',
        $itemId = '',
        $params = [],
        $url = self::WALMARTMX_SANDBOX_API_URL
    ) {
        $response = false;
        if (!empty($sellerId) and !empty($itemId)) {
            $url .= 'sandbox/oms/createpo/v1?externalItemId='.$itemId;
            if (!empty($params)) {
                $url .= '&'.http_build_query($params);
            }
            $url .= '&sellerId=';
            $response = $this->putRequest($url);
            $response = $this->responseParse($response, self::FEED_CODE_ORDER_CREATE);
        }
        return $response;
    }
}
