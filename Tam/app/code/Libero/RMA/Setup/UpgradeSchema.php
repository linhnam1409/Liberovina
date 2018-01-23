<?php
namespace Libero\RMA\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements  UpgradeSchemaInterface{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
       $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            //code to upgrade to 1.0.1
            $setup->run("CREATE TABLE `rma_request_workflow` ( `id_workflow` INT NOT NULL AUTO_INCREMENT , `status_code` VARCHAR(50) NOT NULL , `status_label` VARCHAR(50) NOT NULL , `email_to_customer` INT NOT NULL , `email_to_admin` INT NOT NULL , `added_by_store` INT NOT NULL , PRIMARY KEY (`id_workflow`) ) ENGINE = InnoDB;");
        }

        if (version_compare($context->getVersion(), '1.0.2') < 0) {
            //code to upgrade to 1.0.2
            $setup->run("CREATE TABLE `rma_request_reason` ( `id_reason` INT NOT NULL AUTO_INCREMENT , `reason_code` VARCHAR(100) NOT NULL , `reason_label` VARCHAR(100) NOT NULL , `note` VARCHAR(250) NOT NULL , PRIMARY KEY (`id_reason`)) ENGINE = InnoDB;");
        }
        if (version_compare($context->getVersion(), '1.0.3') < 0) {
            //code to upgrade to 1.0.3
            $setup->run("CREATE TABLE `rma_request_resolution` ( `id_resolution` INT NOT NULL AUTO_INCREMENT , `resolution_code` VARCHAR(100) NOT NULL , `resolution_label` VARCHAR(100) NOT NULL , `note` VARCHAR(250) NOT NULL , PRIMARY KEY (`id_resolution`)) ENGINE = InnoDB;");
        }
        if (version_compare($context->getVersion(), '1.0.4') < 0) {
            //code to upgrade to 1.0.4
            $setup->run("CREATE TABLE `rma_request_package` ( `id_package` INT NOT NULL AUTO_INCREMENT , `package_code` VARCHAR(100) NOT NULL , `package_label` VARCHAR(100) NOT NULL , `note` VARCHAR(250) NOT NULL , PRIMARY KEY (`id_package`)) ENGINE = InnoDB;");
        }
        if (version_compare($context->getVersion(), '1.0.5') < 0) {
            //code to upgrade to 1.0.5
            $setup->run("CREATE TABLE `rma_request_condition` ( `id_condition` INT NOT NULL AUTO_INCREMENT , `id_reason` INT NOT NULL , `id_resolution` INT NOT NULL , `id_status` INT NOT NULL , `id_package` INT NOT NULL , PRIMARY KEY (`id_condition`)) ENGINE = InnoDB;");
        }
        if (version_compare($context->getVersion(), '1.0.6') < 0) {
            //code to upgrade to 1.0.6
            $setup->run("ALTER TABLE `rma_request_product` ADD `price_return` VARCHAR(50) NOT NULL AFTER `product_id`;");
        }
        if (version_compare($context->getVersion(), '1.0.7') < 0) {
            //code to upgrade to 1.0.6
            $setup->run("ALTER TABLE `rma_request_product` ADD `message` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL AFTER `status`;");
        }
        $setup->endSetup();
    }
}