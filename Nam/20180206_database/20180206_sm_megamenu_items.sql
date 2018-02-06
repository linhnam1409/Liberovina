-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: salesvnd2111
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sm_megamenu_items`
--

DROP TABLE IF EXISTS `sm_megamenu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sm_megamenu_items` (
  `items_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Items ID',
  `title` varchar(255) NOT NULL COMMENT 'Items Title',
  `show_title` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Show Title',
  `description` mediumtext COMMENT 'Description',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Status',
  `align` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Align',
  `depth` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Depth',
  `group_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Group ID',
  `cols_nb` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Cols Number',
  `icon_url` text NOT NULL COMMENT 'Icon Url',
  `target` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Target',
  `type` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Type',
  `data_type` varchar(255) NOT NULL COMMENT 'Data Type',
  `content` mediumtext COMMENT 'Content',
  `custom_class` varchar(255) NOT NULL COMMENT 'Custom Class',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Parent ID',
  `order_item` int(11) NOT NULL DEFAULT '0' COMMENT 'Order Items',
  `position_item` smallint(6) NOT NULL DEFAULT '2' COMMENT 'Position Items',
  `priorities` int(11) NOT NULL DEFAULT '0' COMMENT 'Priorities',
  `show_image_product` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Show Image Products',
  `show_title_product` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Show Title Products',
  `show_rating_product` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Show Rating Products',
  `show_price_product` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Show Price Products',
  `show_title_category` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Show Title Category',
  `limit_category` varchar(255) NOT NULL COMMENT 'Limit Category',
  `show_sub_category` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Show Sub Category',
  `limit_sub_category` varchar(255) NOT NULL COMMENT 'Limit Sub Category',
  PRIMARY KEY (`items_id`),
  FULLTEXT KEY `SM_MEGAMENU_ITEMS_TTL_DESCRIPTION_ICON_URL_CONTENT_CUSTOM_CLASS` (`title`,`description`,`icon_url`,`content`,`custom_class`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COMMENT='SM Mega Menu Items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sm_megamenu_items`
--

LOCK TABLES `sm_megamenu_items` WRITE;
/*!40000 ALTER TABLE `sm_megamenu_items` DISABLE KEYS */;
INSERT INTO `sm_megamenu_items` VALUES (116,'Root[Vertical menu]',1,NULL,1,1,0,2,0,'',1,0,'',NULL,'',0,0,2,0,0,0,0,0,0,'',1,''),(117,'Root[Horizontal]',1,NULL,1,1,0,3,0,'',1,0,'',NULL,'',0,0,2,0,0,0,0,0,0,'',1,''),(124,'Bags',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/3.png',1,4,'category/4',NULL,'',117,124,2,2,0,0,0,0,1,'',1,''),(127,'Events',1,NULL,1,1,1,2,6,'',1,5,'20',NULL,'',116,123,2,3,0,0,0,0,0,'',1,''),(128,'Privacy Policy',1,NULL,1,1,1,2,6,'',1,5,'4',NULL,'',116,127,2,4,0,0,0,0,0,'',1,''),(129,'Typography',1,NULL,1,1,1,2,6,'',1,5,'18',NULL,'',116,128,2,5,0,0,0,0,0,'',1,''),(135,'Fitness Equipment',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/1.png',1,4,'category/5',NULL,'',117,130,2,3,0,0,0,0,1,'',1,''),(136,'Bras & Tanks',1,NULL,1,1,1,3,1,'wysiwyg/icon/mega-memu/5.png',1,4,'category/26',NULL,'',117,135,2,4,0,0,0,0,1,'',1,''),(137,'Bras & Tanks',1,NULL,1,1,1,3,1,'wysiwyg/icon/mega-memu/5.png',1,4,'category/26',NULL,'',117,136,2,4,0,0,0,0,1,'',1,''),(138,'Fitness Equipment',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/1.png',1,4,'category/5',NULL,'',117,135,2,3,0,0,0,0,1,'',1,''),(139,'Bags',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/3.png',1,4,'category/4',NULL,'',117,124,2,2,0,0,0,0,1,'',1,''),(140,'Bras & Tanks',1,NULL,1,1,1,3,1,'wysiwyg/icon/mega-memu/5.png',1,4,'category/26',NULL,'',117,137,2,4,0,0,0,0,1,'',1,''),(143,'Bras & Tanks',1,NULL,1,1,1,3,1,'wysiwyg/icon/mega-memu/5.png',1,4,'category/26',NULL,'',117,140,2,4,0,0,0,0,1,'',1,''),(145,'Fitness Equipment',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/1.png',1,4,'category/5',NULL,'',117,135,2,3,0,0,0,0,1,'',1,''),(151,'Bags',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/3.png',1,4,'category/4',NULL,'',117,139,2,2,0,0,0,0,1,'',1,''),(153,'Bags',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/3.png',1,4,'category/4',NULL,'',117,142,2,2,0,0,0,0,1,'',1,''),(154,'Fitness Equipment',1,NULL,1,1,1,3,6,'wysiwyg/icon/mega-memu/1.png',1,4,'category/5',NULL,'',117,135,2,3,0,0,0,0,1,'',1,''),(155,'Đăng ký bán hàng cùng wholesale',1,NULL,2,1,1,2,6,'',1,1,'',NULL,'seller-btn',116,129,2,6,0,0,0,0,0,'',1,''),(156,'Mens',1,NULL,1,1,1,3,1,'wysiwyg/icon/mega-memu/4.png',1,4,'category/11',NULL,'',117,124,2,3,0,0,0,0,1,'',1,''),(157,'Jackets',1,NULL,1,1,2,3,1,'',1,4,'category/14',NULL,'',156,157,2,2,0,0,0,0,1,'',1,''),(158,'Tanks',1,NULL,1,1,2,3,1,'',1,4,'category/17',NULL,'',156,157,2,3,0,0,0,0,1,'',1,''),(159,'Hoodies & Sweatshirts',1,NULL,1,1,2,3,1,'',1,4,'category/15',NULL,'',156,158,2,4,0,0,0,0,1,'',1,''),(160,'Tees',1,NULL,1,1,2,3,1,'',1,4,'category/16',NULL,'',156,159,2,5,0,0,0,0,1,'',1,'');
/*!40000 ALTER TABLE `sm_megamenu_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-06 17:17:51
