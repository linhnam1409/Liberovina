<?php
namespace Libero\RMA\Block\Adminhtml\RequestProduct\Edit\Tab;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    protected $_requestProductFactory;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Libero\RMA\Model\RequestProduct $requestProductFactory, \Magento\Framework\Registry $coreRegistry, array $data = [])
    {
        $this->_requestProductFactory = $requestProductFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $backendHelper, $data);

    }
    protected function _construct()
    {
        parent::_construct(); // TODO: Change the autogenerated stub
        $this->setId("grid");
        $this->setDefaultSort('id_request');
        $this->setUseAjax(true);
    }
    protected function _prepareCollection()
    {
        $collection = $this->_requestProductFactory->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }
    protected function _prepareColumns()
    {
        $this->addColumn(
            'id_request',
            [
                'header' => __('ID'),
                'sortable' => true,
                'index' => 'id_request',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id'
            ]
        );
        return parent::_prepareColumns(); // TODO: Change the autogenerated stub
    }
    public function getGridUrl()
    {
        return $this->getUrl('rma/requestproduct/grid', ['_current' => true]);
    }
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return true;
    }
}