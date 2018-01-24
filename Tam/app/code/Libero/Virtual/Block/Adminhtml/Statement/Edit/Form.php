<?php
namespace Libero\Virtual\Block\Adminhtml\Statement\Edit;
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    protected $_systemStore;
    protected $_status;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Init form
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('grid_form');
        $this->setTitle(__('Statement Information'));
    }
    /*protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        /*$form = $this->_formFactory->create(
            [
                'data' => [
                    'id'    => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );*/
        /*$form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }*/

    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('libero_virtual');
        //$form = $this->_formFactory->create();
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id'    => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );
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
}
