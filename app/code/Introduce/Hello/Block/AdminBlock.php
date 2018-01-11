<?php
namespace Introduce\Hello\Block;
class AdminBlock extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Widget\Controller\Adminhtml\Widget\Instance
     */
    protected $_widgetInstance;
    
    /**
     * @var \Magento\Framework\App\ResourceConnection 
     */
    protected $_resource;
    
    /**
     * @var \Ves\ImageSlider\Block\Widget\Sliders 
     */
    protected $_sliders;
    
    /**
     * @var \Ves\ImageSlider\Controller\Adminhtml\Widget\BuildWidget
     */
    protected $_buildWidget;
    
    /**
     * @var \Magento\Widget\Helper\Conditions
     */
    protected $_conditions;
    
    /**
     * @var \Magento\CatalogWidget\Block\Product\ProductsList 
     */
    protected $_productsList;
    
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Widget\Model\Widget\Instance $widgetInstance,
        \Magento\Framework\App\ResourceConnection $resource,
        \Ves\ImageSlider\Block\Widget\Sliders $sliders,
        \Ves\ImageSlider\Controller\Adminhtml\Widget\BuildWidget $buildWidget,
        \Magento\Widget\Helper\Conditions $conditions,
        \Magento\CatalogWidget\Block\Product\ProductsList $productsList,
        array $data = []
        )
    {
        $this->_widgetInstance = $widgetInstance;
        $this->_resource = $resource;
        $this->_sliders = $sliders;
        $this->_buildWidget = $buildWidget;
        $this->_conditions = $conditions;
        $this->_productsList = $productsList;
        parent::__construct($context, $data);
    }
    
    public function getSliderWidget($widgetId)
    {
        $blockWidget = "Ves\ImageSlider\Block\Widget\Sliders";
        
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        
        $tableName = $this->_resource->getTableName('widget_instance');
        $condition = "instance_id = " . $widgetId;
        $sql = "SELECT * FROM " . $tableName . " WHERE " . $condition;
        
        $result = $connection->fetchAll($sql);
        $widgetInfo = [];
        foreach ($result as $wg){
            if($wg['instance_type'] == $blockWidget || $wg['instance_id'] == $widgetId){
                $widgetInfo = $wg;              //get slider row from database
            }
        }
        
        $slider = $this->_sliders->getLayout()->createBlock($blockWidget);
        
        foreach ($widgetInfo as $k => $v){
            if($k == 'widget_parameters') {                         //get value of widget_parameters column
                $widgetParametersArr = json_decode($v,true);
                foreach ($widgetParametersArr as $paramK => $paramV){       //set value for widget properties
                    $paramK == "title" ? $slider->setTitle($paramV):null;
                    $paramK == "addition_class" ? $slider->setAdditionClass($paramV):null;
                    $paramK == "animatein" ? $slider->setAnimatein($paramV):null;
                    $paramK == "animateout" ? $slider->setAnimateout($paramV):null;
                    $paramK == "autoheight" ? $slider->setAutoheight($paramV):null;
                    $paramK == "autoplay" ? $slider->setAutoplay($paramV):null;
                    $paramK == "autoplay_timeout" ? $slider->setAutoplayTimeout($paramV):null;
                    $paramK == "autoplay_speed" ? $slider->setAutoplaySpeed($paramV):null;
                    $paramK == "nav_speed" ? $slider->setNavSpeed($paramV):null;
                    $paramK == "dots_speed" ? $slider->setDotsSpeed($paramV):null;
                    $paramK == "autoplay_hover" ? $slider->setAutoplayHover($paramV):null;
                    $paramK == "dots" ? $slider->setDots($paramV):null;
                    $paramK == "nav" ? $slider->setNav($paramV):null;
                    $paramK == "enable_custom_nav" ? $slider->setEnableCustomNav($paramV):null;
                    $paramK == "rtl" ? $slider->setRtl($paramV):null;
                    $paramK == "loop" ? $slider->setLoop($paramV):null;
                    $paramK == "lazyload" ? $slider->setLazyload($paramV):null;
                    $paramK == "touchdrag" ? $slider->setTouchdrag($paramV):null;
                    $paramK == "mousedrag" ? $slider->setMousedrag($paramV):null;
                    $paramK == "pulldrag" ? $slider->setPulldrag($paramV):null;
                    $paramK == "block_1" ? $slider->setBlock1($paramV):null;
                    $paramK == "block_2" ? $slider->setBlock2($paramV):null;
                    $paramK == "block_3" ? $slider->setBlock3($paramV):null;
                    $paramK == "block_4" ? $slider->setBlock4($paramV):null;
                    $paramK == "block_5" ? $slider->setBlock5($paramV):null;
                    $paramK == "block_6" ? $slider->setBlock6($paramV):null;
                    $paramK == "block_7" ? $slider->setBlock7($paramV):null;
                    $paramK == "block_8" ? $slider->setBlock8($paramV):null;
                    $paramK == "block_9" ? $slider->setBlock9($paramV):null;
                    $paramK == "block_10" ? $slider->setBlock10($paramV):null;
                    $paramK == "block_11" ? $slider->setBlock11($paramV):null;
                    $paramK == "block_12" ? $slider->setBlock12($paramV):null;
                    $paramK == "block_13" ? $slider->setBlock13($paramV):null;
                    $paramK == "block_14" ? $slider->setBlock14($paramV):null;
                    $paramK == "block_15" ? $slider->setBlock15($paramV):null;
                    $paramK == "block_16" ? $slider->setBlock16($paramV):null;
                    if ($paramK == "html_1" || $paramK == "html_2" || $paramK == "html_3" || $paramK == "html_4" || $paramK == "html_5" || $paramK == "html_6" || $paramK == "html_7" || $paramK == "html_8" || $paramK == "html_9" || $paramK == "html_10" || $paramK == "html_11" || $paramK == "html_12" || $paramK == "html_13" || $paramK == "html_14" || $paramK == "html_15" || $paramK == "html_16"){
                        $paramK == "html_1" ? $slider->setHtml1(base64_encode($paramV)):null;
                        $paramK == "html_2" ? $slider->setHtml2(base64_encode($paramV)):null;
                        $paramK == "html_3" ? $slider->setHtml3(base64_encode($paramV)):null;
                        $paramK == "html_4" ? $slider->setHtml4(base64_encode($paramV)):null;
                        $paramK == "html_5" ? $slider->setHtml5(base64_encode($paramV)):null;
                        $paramK == "html_6" ? $slider->setHtml6(base64_encode($paramV)):null;
                        $paramK == "html_7" ? $slider->setHtml7(base64_encode($paramV)):null;
                        $paramK == "html_8" ? $slider->setHtml8(base64_encode($paramV)):null;
                        $paramK == "html_9" ? $slider->setHtml9(base64_encode($paramV)):null;
                        $paramK == "html_10" ? $slider->setHtml10(base64_encode($paramV)):null;
                        $paramK == "html_11" ? $slider->setHtml11(base64_encode($paramV)):null;
                        $paramK == "html_12" ? $slider->setHtml12(base64_encode($paramV)):null;
                        $paramK == "html_13" ? $slider->setHtml13(base64_encode($paramV)):null;
                        $paramK == "html_14" ? $slider->setHtml14(base64_encode($paramV)):null;
                        $paramK == "html_15" ? $slider->setHtml15(base64_encode($paramV)):null;
                        $paramK == "html_16" ? $slider->setHtml16(base64_encode($paramV)):null;
                    }
                }
            }
        }
        
        return $slider->toHtml();
    }
    
    public function getProductListWidget($widgetId)
    {
        $blockWidget = "Magento\CatalogWidget\Block\Product\ProductsList";
        $blockTemplate = "product/widget/content/grid.phtml";
        
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        
        $tableName = $this->_resource->getTableName('widget_instance');
        $condition = "instance_id = " . $widgetId;
        $sql = "SELECT * FROM " . $tableName . " WHERE " . $condition;
        
        $result = $connection->fetchAll($sql);
        $widgetInfo = [];
        foreach ($result as $wg){
            if($wg['instance_type'] == $blockWidget || $wg['instance_id'] == $widgetId){
                $widgetInfo = $wg;              //get slider row from database
            }
        }
        
        $conditions = $this->_conditions;
        $productsList = $this->_productsList;
        $productsList->setTemplate($blockTemplate);
        
        foreach ($widgetInfo as $k => $v){
            if($k == 'widget_parameters') {                         //get value of widget_parameters column
                $widgetParametersArr = json_decode($v,true);
                foreach ($widgetParametersArr as $paramK => $paramV){       //set value for widget properties
                    $paramK == "title" ? $productsList->setTitle($paramV) : null;
                    $paramK == "show_pager" ? $productsList->setShowPager($paramV) : null;
                    $paramK == "products_per_page" ? $productsList->setProductsPerPage($paramV) : null;
                    $paramK == "products_count" ? $productsList->setProductsCount($paramV) : null;
                    $paramK == "cache_lifetime" ? $productsList->setCacheLifetime($paramV) : null;
                    $paramK == "page_var_name" ? $productsList->setPageVarName($paramV) : null;
                    if ($paramK == "conditions"){
                        $productsList->setConditionsEncoded($conditions->encode($paramV));
                    }
                }
            }
        }
        
        return $productsList->toHtml();
    }
}
