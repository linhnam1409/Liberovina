<?php
namespace Libero\Virtual\Block\Adminhtml\Statement\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\FormFactory;
use Magento\Cms\Model\Wysiwyg\Config;

class Info extends Generic implements TabInterface
{

    protected $_wysiwygConfig;
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Config $wysiwygConfig,
        array $data = []
    ) {
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('libero_virtual');
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('statements_');
        $form->setFieldNameSuffix('statements');
        $fieldset = $form->addFieldset(
            'base_fieldset',
            ['legend' => __('General')]
        );

        if ($model->getData("id_statement")) {
            $fieldset->addField(
                'id_statement',
                'hidden',
                ['name' => 'id_statement']
            );
        }
        $fieldset->addField(
            'status',
            'text',
            [
                'name'        => 'status',
                'label'    => __('Status'),
                'required'     => true
            ]
        );
        /*$fieldset->addField(
            'status',
            'select',
            [
                'name'      => 'status',
                'label'     => __('Status'),
                'options'   => $this->_newsStatus->toOptionArray()
            ]
        );
        $fieldset->addField(
            'content',
            'textarea',
            [
                'name'      => 'content',
                'label'     => __('Content'),
                'required'  => true,
                'style'     => 'height: 15em; width: 30em;'
            ]
        );*/
        $wysiwygConfig = $this->_wysiwygConfig->getConfig();
        $fieldset->addField(
            'content',
            'editor',
            [
                'name'        => 'content',
                'label'    => __('Content'),
                'required'     => true,
                'config'    => $wysiwygConfig
            ]
        );

        $data = $model->getData();
        $form->setValues($data);
        $this->setForm($form);
        return parent::_prepareForm();
    }
    public function getTabLabel()
    {
        return __('Statement Info');
    }
    public function getTabTitle()
    {
        return __('Statement Info');
    }
    public function canShowTab()
    {
        return true;
    }
    public function isHidden()
    {
        return false;
    }
}