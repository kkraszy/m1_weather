<?php

class Kkraszy_WeatherModule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->getLayout()->getBlock("head")->setTitle($this->__("Weather"));
        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");

        $breadcrumbs->addCrumb("home", array(
            "label" => $this->__("Home Page"),
            "title" => $this->__("Home Page"),
            "link" => Mage::getBaseUrl()
        ));
        $breadcrumbs->addCrumb("weather", array(
            "label" => $this->__("Weather"),
            "title" => $this->__("Weather")
        ));
        $this->renderLayout();
    }

}
