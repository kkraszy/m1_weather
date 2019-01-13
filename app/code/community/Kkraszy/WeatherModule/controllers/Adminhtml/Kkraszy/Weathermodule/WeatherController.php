<?php

class Kkraszy_WeatherModule_Adminhtml_Kkraszy_Weathermodule_WeatherController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('kkraszy_weathermodule/item');
        $this->renderLayout();
    }

}
