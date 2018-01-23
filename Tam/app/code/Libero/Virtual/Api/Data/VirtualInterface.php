<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Libero\Virtual\Api\Data;

/**
 * Customer interface.
 * @api
 * @since 100.0.2
 */
interface VirtualInterface extends \Magento\Framework\Api\Data\CustomerInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const VIRTUALMONEY = 'virtual_money';
    /**#@-*/

    /**
     * Get customer virtual money
     *
     * @return string|0
     */
    public function getMoney();

    /**
     * Set customer id
     *
     * @param string $money
     * @return $this
     */
    public function setMoney($money);
}
