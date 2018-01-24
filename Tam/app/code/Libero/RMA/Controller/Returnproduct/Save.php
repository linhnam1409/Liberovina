<?php
namespace Libero\RMA\Controller\Returnproduct;
use Magento\Framework\App\Action\Context;
use Magento\Setup\Exception;

class Save extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        try {
            $resultRedirect = $this->resultRedirectFactory->create();
            $post = $this->getRequest()->getPostValue();
            $modelRequestProduct = $this->_objectManager->create("Libero\RMA\Model\RequestProduct");
            $customer_name = $post["customer_name"];
            $customer_email = $post["customer_email"];
            $id_product = $post["id_product"];
            $id_order = $post["id_order"];
            $reason = $post["select_reason"];
            $resolution = $post["select_resolution"];
            $package = $post["select_package"];
            $message = $post["message_note"];
            $status = 1;
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
            $connection = $resource->getConnection();
            $sql = "select * from rma_request_condition where id_reason = $reason and id_resolution = $resolution and id_package = $package";
            $result = $connection->fetchAll($sql);
            if(count($result) >0) {
                $status = $result[0]["id_status"];
            }
            $modelRequestProduct->setData("customer_name", $customer_name);
            $modelRequestProduct->setData("customer_email", $customer_email);
            $modelRequestProduct->setData("product_id", $id_product);
            $modelRequestProduct->setData("price_return", 0);
            $modelRequestProduct->setData("reason", $reason);
            $modelRequestProduct->setData("resolution", $resolution);
            $modelRequestProduct->setData("status", $status);
            $modelRequestProduct->setData("message", $message);
            $modelRequestProduct->setData("package", $package);
            $modelRequestProduct->setData("order_id", $id_order);
            $modelRequestProduct->save();
            if ($status == 7) {
                //cancel
                $this->messageManager->addError(__('Sorry your request does not approval'));
            } else {
                $this->messageManager->addSuccess(__('Sent your request return product successfully, we will contact you soon'));
            }
        }catch (Exception $e){
            $this->messageManager->addError(__('Something wrong with your request. No status to apply'));
        }
        return $resultRedirect->setPath('*/*');
    }
}
