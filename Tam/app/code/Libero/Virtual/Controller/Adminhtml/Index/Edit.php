<?php
namespace Libero\Virtual\Controller\Adminhtml\Index;

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
        $model = $this->_objectManager->create("Libero\Virtual\Model\Statement");
        if ($statementId) {
            $dataStatement =  $model->load($statementId);
            if (!$dataStatement->getData("id_statement")) {
                $this->messageManager->addError(__('This statement no longer exists.'));
                $this->_redirect('*/*/');
                return;
            }
        }

        // Restore previously entered form data from session
        $data = $this->_session->getStatementData(true);
        if (!empty($data)) {
            $model->setData($data);
        }
        $this->registry->register('libero_virtual', $model);
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Libero_Virtual::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple Statement'));

        return $resultPage;
    }
}