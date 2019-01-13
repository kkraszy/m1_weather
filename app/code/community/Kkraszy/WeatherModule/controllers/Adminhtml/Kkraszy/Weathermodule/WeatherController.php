<?php

use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

class Kkraszy_WeatherModule_Adminhtml_Kkraszy_Weathermodule_WeatherController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('kkraszy_weathermodule/item');
        $this->renderLayout();
    }

    public function saveAction()
    {


        $selectedIds = $this->getRequest()->getParam('weather');

        $collection = Mage::getModel('weathermodule/weathermodule')->getCollection();

        $model->setData('product_id', $id);
        $model->save();

        Mage::getSingleton('adminhtml/session')->setFormData(false);
        $this->_redirect('*/*/');
    }

    public function deleteAction()
    {
        $selectedIds = $this->getRequest()->getParam('weather');
        $count = 0;
        foreach ($selectedIds as $key => $val) {
            $model = Mage::getModel('weathermodule/weathermodule')->load($val);
            if (empty($model->getData())) {
                continue;
            }
            $model->delete();
            $count++;
        }

        if (!empty($count)) {
            Mage::getSingleton('adminhtml/session')->addSuccess($count . ' produkty/ów zostały poprawnie usuniete z modułu pogody');
        } else {
            Mage::getSingleton('adminhtml/session')->addError('Nic nie zostało usuniete z modułu pogody');
        }

        Mage::getSingleton('adminhtml/session')->setFormData(false);
        $this->_redirect('*/*/');
    }
}
