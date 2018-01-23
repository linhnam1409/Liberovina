<?php
namespace Libero\RMA\Model;
class RequestPackage extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Libero\RMA\Model\ResourceModel\RequestPackage');
    }
}