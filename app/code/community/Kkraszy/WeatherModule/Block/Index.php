<?php 
class Kkraszy_WeatherModule_Block_Index extends Mage_Core_Block_Template
{

    public function getLastItem()
    {
        $lastItem = Mage::getModel('weathermodule/weathermodule')
        ->getCollection()
        ->setOrder('created_at','DESC')
        ->setPageSize(1)
        ->getFirstItem();
  
        return $lastItem;
    }

    public function getCurrentWeather()
    {
        $lastItem = $this->getLastItem();

        if (empty($lastItem)) {
            return null;
        }

        $data = $lastItem->getData('data');

        return  json_decode($data);
    }
}