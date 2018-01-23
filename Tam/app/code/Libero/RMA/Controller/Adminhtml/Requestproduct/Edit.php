<?php
namespace Libero\RMA\Controller\Adminhtml\Requestproduct;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Edit extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $registry;
    public function __construct(\Magento\Backend\App\Action\Context $context,\Magento\Framework\View\Result\PageFactory $resultPageFactory,\Magento\Framework\Registry $registry)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->registry = $registry;
    }

    public function execute()
    {
        $statementId = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create("Libero\RMA\Model\RequestProduct");
        if ($statementId) {
            $dataStatement =  $model->load($statementId);
            if (!$dataStatement->getData("id_request")) {
                $this->messageManager->addError(__('This request no longer exists.'));
                $this->_redirect('*/*/');
                return;
            }
        }

        // Restore previously entered form data from session
        $this->registry->register('libero_rma_request_product', $model);
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Libero_Virtual::main_menu');
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $order_id = $model->getData("order_id");
        $order = $objectManager->create('\Magento\Sales\Model\Order')->load($order_id);
        $title = "Request detail Order Number : ".$order->getIncrementId();
        $resultPage->getConfig()->getTitle()->prepend($title);

        return $resultPage;
    }
}