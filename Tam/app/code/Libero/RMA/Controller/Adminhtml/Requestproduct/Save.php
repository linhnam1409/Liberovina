<?php
namespace Libero\RMA\Controller\Adminhtml\Requestproduct;

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
        $id_request = $post["id_request"];
        $status = $post["status"];
        $resolution = $post["resolution"];
        //Update
        $modelRequestProduct = $this->_objectManager->create("Libero\RMA\Model\RequestProduct")->load($id_request);
        $modelRequestProduct->setData("status",$status);
        $modelRequestProduct->setData("resolution",$resolution);
        $modelRequestProduct->save();
        $this->messageManager->addSuccess(__('Updated Request Successfully.'));
        //return $resultRedirect->setPath("*/*/edit/id/$id_request");
        return $resultRedirect->setPath("*/*");
    }
}