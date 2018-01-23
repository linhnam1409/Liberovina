<?php
namespace Libero\Virtual\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Save extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $registry;
    public function __construct(\Magento\Backend\App\Action\Context $context,\Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $post = $this->getRequest()->getPostValue();
        $id_statement = $post["id_statement"];
        $id_customer = $post["id_customer"];
        $status = $post["status"];
        $amount = $post["amount"];
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerObj = $objectManager->create('Magento\Customer\Model\Customer');
        $modelCustomer = $customerObj->load($id_customer);
        $balance = $modelCustomer->getData("virtual_money");
        $money = $balance + $amount;
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        //Update Data into table
        $sql = "UPDATE `customer_entity` SET `first_failure` = NULL, `lock_expires` = NULL, `virtual_money` = '".$money."' WHERE `customer_entity`.`entity_id` = $id_customer;";
        $connection->query($sql);
        //Update the statement
        $modelStatement = $this->_objectManager->create("Libero\Virtual\Model\Statement")->load($id_statement);
        $modelStatement->setData("status",$status);
        $modelStatement->save();
        $this->messageManager->addSuccess(__('Updated statement.'));
        return $resultRedirect->setPath('*/*');
    }
}