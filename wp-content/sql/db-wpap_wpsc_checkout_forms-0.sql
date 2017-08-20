-- MySQL dump 10.15  Distrib 10.0.25-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ciukrain_wp298
-- ------------------------------------------------------
-- Server version	10.0.25-MariaDB-cll-lve

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
-- Table structure for table `wpap_wpsc_checkout_forms`
--

DROP TABLE IF EXISTS `wpap_wpsc_checkout_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpap_wpsc_checkout_forms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` varchar(64) NOT NULL DEFAULT '',
  `mandatory` varchar(1) NOT NULL DEFAULT '0',
  `display_log` char(1) NOT NULL DEFAULT '0',
  `default` varchar(128) NOT NULL DEFAULT '0',
  `active` varchar(1) NOT NULL DEFAULT '1',
  `checkout_order` int(10) unsigned NOT NULL DEFAULT '0',
  `unique_name` varchar(255) NOT NULL DEFAULT '',
  `options` longtext,
  `checkout_set` varchar(64) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `checkout_order` (`checkout_order`),
  KEY `unique_name` (`unique_name`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpap_wpsc_checkout_forms`
--
-- WHERE:  1 LIMIT 0,10000

LOCK TABLES `wpap_wpsc_checkout_forms` WRITE;
/*!40000 ALTER TABLE `wpap_wpsc_checkout_forms` DISABLE KEYS */;
INSERT  IGNORE INTO `wpap_wpsc_checkout_forms` VALUES (1,'Your billing/contact details','heading','0','0','1','1',1,'',NULL,'0'),(2,'First Name','text','1','1','1','1',2,'billingfirstname',NULL,'0'),(3,'Last Name','text','1','1','1','1',3,'billinglastname',NULL,'0'),(4,'Address','address','1','0','1','1',4,'billingaddress',NULL,'0'),(5,'City','city','1','0','1','1',5,'billingcity',NULL,'0'),(6,'State','text','0','0','1','1',6,'billingstate',NULL,'0'),(7,'Country','country','1','0','1','1',7,'billingcountry',NULL,'0'),(8,'Postal Code','text','0','0','1','1',8,'billingpostcode',NULL,'0'),(9,'Email','email','1','1','1','1',9,'billingemail',NULL,'0'),(10,'Shipping Address','heading','0','0','1','1',10,'delivertoafriend',NULL,'0'),(11,'First Name','text','0','0','1','1',11,'shippingfirstname',NULL,'0'),(12,'Last Name','text','0','0','1','1',12,'shippinglastname',NULL,'0'),(13,'Address','address','0','0','1','1',13,'shippingaddress',NULL,'0'),(14,'City','city','0','0','1','1',14,'shippingcity',NULL,'0'),(15,'State','text','0','0','1','1',15,'shippingstate',NULL,'0'),(16,'Country','delivery_country','0','0','1','1',16,'shippingcountry',NULL,'0'),(17,'Postal Code','text','0','0','1','1',17,'shippingpostcode',NULL,'0'),(18,'Phone','text','0','0','','1',8,'billingphone',NULL,'0');
/*!40000 ALTER TABLE `wpap_wpsc_checkout_forms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 11:51:04
