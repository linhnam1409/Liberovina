<?php
namespace Libero\Virtual\Block\Adminhtml\Statement\Edit;
use Magento\Backend\Block\Widget\Tabs as WidgetTabs;

class Tabs extends WidgetTabs
{
    protected function _construct()
    {
        parent::_construct();
        $this->setId('statement_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Statement Information'));
    }
    protected function _beforeToHtml()
    {
        $this->addTab(
            'statement_info',
            [
                'label' => __('General'),
                'title' => __('General'),
                'content' => $this->getLayout()->createBlock(
                    'Libero\Virtual\Block\Adminhtml\Statement\Edit\Tab\Info'
                )->toHtml(),
                'active' => true
            ]
        );

        return parent::_beforeToHtml();
    }
}
