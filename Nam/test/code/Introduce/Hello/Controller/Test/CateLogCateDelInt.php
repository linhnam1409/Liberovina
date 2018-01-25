<?php
namespace Introduce\Hello\Controller\Test;

class CateLogCateDelInt extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        
        $value_id = $this->getRequest()->getParam("value_id");
        $tableName = "catalog_category_entity_int";
        $sql = "DELETE FROM " . $tableName . " WHERE value_id=" . $value_id;
        $connection->query($sql);
        echo "1";
    }
}