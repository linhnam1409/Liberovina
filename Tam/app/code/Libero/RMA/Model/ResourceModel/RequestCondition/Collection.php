<?php
namespace Libero\RMA\Model\ResourceModel\RequestCondition;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\RMA\Model\RequestCondition',
            'Libero\RMA\Model\ResourceModel\RequestCondition'
        );
    }
}