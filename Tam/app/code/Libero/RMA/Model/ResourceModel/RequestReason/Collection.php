<?php
namespace Libero\RMA\Model\ResourceModel\RequestReason;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\RMA\Model\RequestReason',
            'Libero\RMA\Model\ResourceModel\RequestReason'
        );
    }
}