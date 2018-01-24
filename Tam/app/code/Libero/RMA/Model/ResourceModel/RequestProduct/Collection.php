<?php
namespace Libero\RMA\Model\ResourceModel\RequestProduct;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\RMA\Model\RequestProduct',
            'Libero\RMA\Model\ResourceModel\RequestProduct'
        );
    }
}