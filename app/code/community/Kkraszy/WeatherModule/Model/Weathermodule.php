<?php

class Kkraszy_WeatherModule_Model_Weathermodule extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('weathermodule/weathermodule');
    }
}