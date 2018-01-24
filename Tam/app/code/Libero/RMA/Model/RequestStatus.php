<?php
namespace Libero\RMA\Model;
class RequestStatus extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Libero\RMA\Model\ResourceModel\RequestStatus');
    }
}