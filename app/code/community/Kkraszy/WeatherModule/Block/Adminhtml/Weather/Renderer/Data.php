<?php

class Kkraszy_WeatherModule_Block_Adminhtml_Weather_Renderer_Data extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $data = $row->getData('data');
        $data = (array) json_decode($data);
        unset($data['icon']);
        return implode(' - ', $data);
    }
}