<?php
namespace Libero\RMA\Block\Adminhtml\RequestProduct;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Edit extends \Magento\Framework\View\Element\Template{
    protected $_coreRegistry = null;

    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
    public function getDataRequestProduct(){
        $model = $this->_coreRegistry->registry('libero_rma_request_product');
        $dataRet = null;
        $dataRet = $model->getData();
        return $dataRet;
    }
    public function getAdminUrl()
    {
        $route = "rma/requestproduct/save/";
        $params = [];
        return $this->getUrl($route, $params);
    }
}