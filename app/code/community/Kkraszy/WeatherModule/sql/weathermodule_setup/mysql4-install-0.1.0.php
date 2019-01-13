<?php

$installer = $this;

$installer->startSetup();

$installer->run("
CREATE TABLE IF NOT EXISTS `".$this->getTable('weathermodule/weathermodule')."` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `data` text NOT NULL,
    `created_at` TIMESTAMP DEFAULT '0000-00-00 00:00:00'
  );
");

$installer->endSetup(); 