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
-- Table structure for table `wpap_wpsc_region_tax`
--

DROP TABLE IF EXISTS `wpap_wpsc_region_tax`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpap_wpsc_region_tax` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL DEFAULT '',
  `code` char(2) NOT NULL DEFAULT '',
  `tax` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpap_wpsc_region_tax`
--
-- WHERE:  1 LIMIT 0,10000

LOCK TABLES `wpap_wpsc_region_tax` WRITE;
/*!40000 ALTER TABLE `wpap_wpsc_region_tax` DISABLE KEYS */;
INSERT  IGNORE INTO `wpap_wpsc_region_tax` VALUES (1,100,'Alberta','AB',0),(2,100,'British Columbia','BC',0),(3,100,'Manitoba','MB',0),(4,100,'New Brunswick','NB',0),(5,100,'Newfoundland and Labrador','NL',0),(6,100,'Northwest Territories','NT',0),(7,100,'Nova Scotia','NS',0),(8,100,'Nunavut','NU',0),(9,100,'Ontario','ON',0),(10,100,'Prince Edward Island','PE',0),(11,100,'Quebec','QC',0),(12,100,'Saskatchewan','SK',0),(13,100,'Yukon','YK',0),(14,136,'Alabama','AL',0),(15,136,'Alaska','AK',0),(16,136,'Arizona','AZ',0),(17,136,'Arkansas','AR',0),(18,136,'California','CA',0),(19,136,'Colorado','CO',0),(20,136,'Connecticut','CT',0),(21,136,'Delaware','DE',0),(22,136,'Florida','FL',0),(23,136,'Georgia','GA',0),(24,136,'Hawaii','HI',0),(25,136,'Idaho','ID',0),(26,136,'Illinois','IL',0),(27,136,'Indiana','IN',0),(28,136,'Iowa','IA',0),(29,136,'Kansas','KS',0),(30,136,'Kentucky','KY',0),(31,136,'Louisiana','LA',0),(32,136,'Maine','ME',0),(33,136,'Maryland','MD',0),(34,136,'Massachusetts','MA',0),(35,136,'Michigan','MI',0),(36,136,'Minnesota','MN',0),(37,136,'Mississippi','MS',0),(38,136,'Missouri','MO',0),(39,136,'Montana','MT',0),(40,136,'Nebraska','NE',0),(41,136,'Nevada','NV',0),(42,136,'New Hampshire','NH',0),(43,136,'New Jersey','NJ',0),(44,136,'New Mexico','NM',0),(45,136,'New York','NY',0),(46,136,'North Carolina','NC',0),(47,136,'North Dakota','ND',0),(48,136,'Ohio','OH',0),(49,136,'Oklahoma','OK',0),(50,136,'Oregon','OR',0),(51,136,'Pennsylvania','PA',0),(52,136,'Rhode Island','RI',0),(53,136,'South Carolina','SC',0),(54,136,'South Dakota','SD',0),(55,136,'Tennessee','TN',0),(56,136,'Texas','TX',0),(57,136,'Utah','UT',0),(58,136,'Vermont','VT',0),(59,136,'Virginia','VA',0),(60,136,'Washington','WA',0),(61,136,'Washington DC','DC',0),(62,136,'West Virginia','WV',0),(63,136,'Wisconsin','WI',0),(64,136,'Wyoming','WY',0);
/*!40000 ALTER TABLE `wpap_wpsc_region_tax` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 11:50:59
