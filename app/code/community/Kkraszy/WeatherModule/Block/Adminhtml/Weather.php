<?php
class Kkraszy_WeatherModule_Block_Adminhtml_Weather extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_weather'; 
        $this->_blockGroup = 'kkraszy_weathermodule'; 
        $this->_headerText = Mage::helper('kkraszy_weathermodule')->__('Weather module'); 
        $this->_addButtonLabel = Mage::helper('kkraszy_weathermodule')->__('Add New Weather'); 
        parent::__construct();
        $this->_removeButton('add');
    }

    public function getHeaderCssClass()
    {
        return 'icon-head head-cms-page';
    }
}
