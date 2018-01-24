<?php
namespace Libero\Virtual\Controller\Money;
use Magento\Framework\App\Action\Context;

class Pay extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $post = $this->getRequest()->getPostValue();
        $modelStatement = $this->_objectManager->create("Libero\Virtual\Model\Statement");
        $id_customer = $post["id_customer"];
        $amount = $post["amount"];
        $status = 0;
        $content = $post["firstname"]."|".$post["card_number"]."|".$post["card_date"]."|".$post["cvv"];
        $date_of_pay = date("d/m/y hh:ii:ss");
        $modelStatement->setData("id_customer",$id_customer);
        $modelStatement->setData("amount",$amount);
        $modelStatement->setData("status",$status);
        $modelStatement->setData("content",$content);
        $modelStatement->setData("date_of_pay",$date_of_pay);
        $modelStatement->save();
        //Update for moment money
        /*$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerObj = $objectManager->create('Magento\Customer\Model\Customer');
        $modelCustomer = $customerObj->load($id_customer);
        $balance = $modelCustomer->getData("virtual_money");
        $money = $balance + $amount;
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        //Update Data into table
        $sql = "UPDATE `customer_entity` SET `first_failure` = NULL, `lock_expires` = NULL, `virtual_money` = '".$money."' WHERE `customer_entity`.`entity_id` = $id_customer;";
        $connection->query($sql);*/
        $this->messageManager->addSuccess(__('Thank you for your purchase T-Coin. Our Accountant will contact with you soon.'));
        return $resultRedirect->setPath('*/*');
    }
}
