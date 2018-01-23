<?php
namespace Libero\RMA\Model\ResourceModel\RequestStatus;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\RMA\Model\RequestStatus',
            'Libero\RMA\Model\ResourceModel\RequestStatus'
        );
    }
}