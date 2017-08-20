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
-- Table structure for table `wpap_wpsc_coupon_codes`
--

DROP TABLE IF EXISTS `wpap_wpsc_coupon_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpap_wpsc_coupon_codes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(255) DEFAULT '',
  `value` decimal(11,2) NOT NULL DEFAULT '0.00',
  `is-percentage` char(1) NOT NULL DEFAULT '0',
  `use-once` char(1) NOT NULL DEFAULT '0',
  `is-used` char(1) NOT NULL DEFAULT '0',
  `active` char(1) NOT NULL DEFAULT '1',
  `every_product` varchar(255) NOT NULL DEFAULT '',
  `start` datetime NOT NULL,
  `expiry` datetime NOT NULL,
  `condition` text,
  PRIMARY KEY (`id`),
  KEY `coupon_code` (`coupon_code`),
  KEY `active` (`active`),
  KEY `start` (`start`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpap_wpsc_coupon_codes`
--
-- WHERE:  1 LIMIT 0,10000

LOCK TABLES `wpap_wpsc_coupon_codes` WRITE;
/*!40000 ALTER TABLE `wpap_wpsc_coupon_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `wpap_wpsc_coupon_codes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 11:51:57
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
-- Table structure for table `wpap_wpsc_coupon_codes`
--

DROP TABLE IF EXISTS `wpap_wpsc_coupon_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpap_wpsc_coupon_codes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(255) DEFAULT '',
  `value` decimal(11,2) NOT NULL DEFAULT '0.00',
  `is-percentage` char(1) NOT NULL DEFAULT '0',
  `use-once` char(1) NOT NULL DEFAULT '0',
  `is-used` char(1) NOT NULL DEFAULT '0',
  `active` char(1) NOT NULL DEFAULT '1',
  `every_product` varchar(255) NOT NULL DEFAULT '',
  `start` datetime NOT NULL,
  `expiry` datetime NOT NULL,
  `condition` text,
  PRIMARY KEY (`id`),
  KEY `coupon_code` (`coupon_code`),
  KEY `active` (`active`),
  KEY `start` (`start`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpap_wpsc_coupon_codes`
--
-- WHERE:  1 LIMIT 0,10000

LOCK TABLES `wpap_wpsc_coupon_codes` WRITE;
/*!40000 ALTER TABLE `wpap_wpsc_coupon_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `wpap_wpsc_coupon_codes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 11:51:57
