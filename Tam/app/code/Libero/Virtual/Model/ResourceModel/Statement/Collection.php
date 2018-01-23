<?php
namespace Libero\Virtual\Model\ResourceModel\Statement;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Libero\Virtual\Model\Statement',
            'Libero\Virtual\Model\ResourceModel\Statement'
        );
    }
}