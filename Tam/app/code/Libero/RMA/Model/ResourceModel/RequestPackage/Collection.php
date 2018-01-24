<?php
namespace Libero\RMA\Model\ResourceModel\RequestPackage;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\RMA\Model\RequestPackage',
            'Libero\RMA\Model\ResourceModel\RequestPackage'
        );
    }
}