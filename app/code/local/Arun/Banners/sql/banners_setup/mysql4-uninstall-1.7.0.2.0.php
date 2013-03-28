<?php
/**
 * @category   Arun
 * @package    Arun_Banners
 * @author     Arun <arunkranth@gmail.com>
 */

$installer = $this;

$installer->startSetup();

$installer->run("
DROP TABLE `{$this->getTable('banners')}`;
DROP TABLE `{$this->getTable('banners_store')}`;

");

$installer->endSetup(); 
