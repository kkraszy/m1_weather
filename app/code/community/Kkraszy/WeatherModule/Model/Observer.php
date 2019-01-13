<?php

class Kkraszy_WeatherModule_Model_Observer
{
    public function saveCurrentWeather()
    {        
        $lang = substr(Mage::getStoreConfig('general/locale/code'),0,2);
        $units = 'metric';
        $appId = trim(Mage::getStoreConfig('kkraszy_weathermodule/general/apikey'));
        $city = trim(Mage::getStoreConfig('kkraszy_weathermodule/general/city'));
        $country = trim(Mage::getStoreConfig('kkraszy_weathermodule/general/country'));

        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city,$country&lang=$lang&units=$units&APPID=$appId";
        $contents = file_get_contents($url);
        $weather =json_decode($contents);

        if ($weather->cod != 200) {
            Mage::log('Error downloading weather data', null, 'openweathermap.log');
            return false;
        }
            
        $data = [
            'city' => $city,
            'temperature' =>$weather->main->temp. ' &deg;C',
            'description' => $weather->weather[0]->description,
            'icon' =>   $weather->weather[0]->icon,
            'pressure' => $weather->main->pressure. ' hPa'
        ];

        $model = Mage::getModel('weathermodule/weathermodule');
        $model->setData('data', json_encode($data));
        $model->setData('created_at', date('Y-m-d H:i:s'));
        $model->save();

        return true;
    }
}