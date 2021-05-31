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
 * @package     Ced_2.3
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright © 2019 CedCommerce. All rights reserved.
 * @license     EULA http://cedcommerce.com/license-agreement.txt
 */

namespace Ced\Amazon\Service\Stock;

use Ced\Amazon\Api\Service\Stock\ResolverInterface;
use Ced\Amazon\Api\Service\Stock\StockInterface;

class Resolver implements ResolverInterface
{
    public $resolverList;

    public function __construct(
        $resolverList = []
    ) {
        $this->resolverList = $resolverList;
    }

    /**
     * Get the stock update object
     * @return StockInterface
     */
    public function resolve()
    {
        return $this->resolverList['msi'];
    }
}
