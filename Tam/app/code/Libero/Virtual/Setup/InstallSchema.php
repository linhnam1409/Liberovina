<?php
namespace Libero\Virtual\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements  InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        //Do something

        $setup->getConnection();
        $setup->run("
          ALTER TABLE `customer_entity` ADD `virtual_money` VARCHAR(50) NULL  DEFAULT '0' AFTER `lock_expires`;
        ");
        $setup->endSetup();
    }
}
