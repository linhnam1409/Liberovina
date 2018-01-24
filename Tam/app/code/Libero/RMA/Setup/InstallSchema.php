<?php
namespace Libero\RMA\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements  InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        //Do something

        $setup->getConnection();
        $setup->run("CREATE TABLE `rma_request_product` ( `id_request` INT NOT NULL AUTO_INCREMENT , `customer_name` VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `customer_email` VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `product_id` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `reason` INT NOT NULL , `resolution` INT NOT NULL , `status` INT NOT NULL , `package` INT NOT NULL , `order_id` VARCHAR(50) NOT NULL , `create_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `update_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id_request`)) ENGINE = InnoDB;");
        $setup->endSetup();
    }
}
