<?php
namespace Libero\Virtual\Model\Data;

use Libero\Virtual\Api\Data\VirtualInterface;
use \Magento\Framework\Api\AttributeValueFactory;

class Virtual extends \Magento\Framework\Api\AbstractExtensibleObject implements \Libero\Virtual\Api\Data\VirtualInterface{
    public function getMoney()
    {
        return $this->_get(self::VIRTUALMONEY);
    }
    public function setMoney($money)
    {
        // TODO: Implement setMoney() method.
        return $this->setData(self::VIRTUALMONEY, $money);
    }
}