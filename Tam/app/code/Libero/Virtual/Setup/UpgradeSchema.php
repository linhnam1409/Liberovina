<?php
namespace Libero\Virtual\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements  UpgradeSchemaInterface{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        //Do something
        $setup->getConnection();
        $setup->run("CREATE TABLE `virtual_money_statement` ( `id_statement` INT NOT NULL AUTO_INCREMENT , `id_customer` INT NULL , `amount` VARCHAR(50) NULL , `status` INT NULL , `content` TEXT NULL , `date_of_pay` VARCHAR(50) NULL , PRIMARY KEY (`id_statement`)) ENGINE = InnoDB;");
        $setup->endSetup();
    }
}
