<?php

class Kkraszy_WeatherModule_Block_Adminhtml_Weather_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct(); 

        $this->setId('weatherGrid'); 
        $this->setDefaultSort('id'); 
        $this->setDefaultDir('desc'); 
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('weathermodule/weathermodule')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn(
            'id', # the column id
            array(
                'type' => 'number', # needed for using a ranged filter
                'header' => Mage::helper('kkraszy_weathermodule')->__('ID'),
                'width' => '220px',
                'index' => 'id',
                'sortable' =>true, 
            )
        );
        $this->addColumn(
            'data',
            array(
                'header' => Mage::helper('kkraszy_weathermodule')->__('Weather data'),
                'width' => '800px',
                'index' => 'data',
                'renderer' => new Kkraszy_WeatherModule_Block_Adminhtml_Weather_Renderer_Data()
            )
        );

        $this->addColumn(
            'created_at',
            array(
                'header' => Mage::helper('kkraszy_weathermodule')->__('Created at'),
                'index' => 'created_at',
            )
        );

        return parent::_prepareColumns();
    }
}
