<?php

class Kkraszy_WeatherModule_Model_Mysql4_Weathermodule extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('weathermodule/weathermodule', 'weather_id');
    }
}