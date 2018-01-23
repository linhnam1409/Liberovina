<?php
namespace Libero\Virtual\Model;
class Statement extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Libero\Virtual\Model\ResourceModel\Statement');
    }
}