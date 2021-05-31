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
 * @package     Ced_Integrator
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright © 2018 CedCommerce. All rights reserved.
 * @license     EULA http://cedcommerce.com/license-agreement.txt
 */

namespace Ced\Integrator\Api\Data;

/**
 * Interface AccountInterface
 * @package Ced\Integrator\Api\Data
 * @api
 */
interface AccountInterface extends \Ced\Integrator\Api\Data\DataInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get account store id
     * @return int
     */
    public function getStoreId();

    /**
     * Get Mode
     * @return string
     */
    public function getMode();

    /**
     * Get mock mode enabled
     * @return boolean
     */
    public function getMockMode();
}
