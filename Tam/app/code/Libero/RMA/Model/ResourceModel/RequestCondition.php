<?php
namespace Libero\RMA\Model\ResourceModel;

class RequestCondition extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init("rma_request_condition","id_condition");
    }
}