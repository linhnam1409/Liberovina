<?php
namespace Introduce\Hello\Controller\Test;

use Magento\Framework\App\Action\Context;

class InsertAdminAccount extends \Magento\Framework\App\Action\Action
{
    protected $_rc;
    
    public function __contruct(\Magento\Framework\App\ResourceConnection $rc, Context $context){
        $this->_rc = $rc;
        parent::__construct($context);
    }
    
    public function execute()
    {
        $username = $this->getRequest()->getParam("username");
        $fullname = $this->getRequest()->getParam("fullname");
        
        
        /* $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection(); */
        
        $connetion = $this->_rc->getConnection();
        $tableName = 'test_table';
        
        //Insert Data into table
        $sql = "Insert Into " . $tableName . " (username, fullname) Values ('". $username ."', '". $fullname ."')";
        $connection->query($sql);
    }

}

