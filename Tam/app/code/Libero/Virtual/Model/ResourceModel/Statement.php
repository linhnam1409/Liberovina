<?php
namespace Libero\Virtual\Model\ResourceModel;

class Statement extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init("virtual_money_statement","id_statement");
    }
}