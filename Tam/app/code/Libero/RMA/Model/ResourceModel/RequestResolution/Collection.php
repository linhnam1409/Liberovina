<?php
namespace Libero\RMA\Model\ResourceModel\RequestResolution;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\RMA\Model\RequestResolution',
            'Libero\RMA\Model\ResourceModel\RequestResolution'
        );
    }
}