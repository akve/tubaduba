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
-- Table structure for table `wpap_bwg_image`
--

DROP TABLE IF EXISTS `wpap_bwg_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpap_bwg_image` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gallery_id` bigint(20) NOT NULL,
  `slug` longtext NOT NULL,
  `filename` varchar(255) NOT NULL,
  `image_url` mediumtext NOT NULL,
  `thumb_url` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `alt` mediumtext NOT NULL,
  `date` varchar(128) NOT NULL,
  `size` varchar(128) NOT NULL,
  `filetype` varchar(128) NOT NULL,
  `resolution` varchar(128) NOT NULL,
  `author` bigint(20) NOT NULL,
  `order` bigint(20) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `comment_count` bigint(20) NOT NULL,
  `avg_rating` float NOT NULL,
  `rate_count` bigint(20) NOT NULL,
  `hit_count` bigint(20) NOT NULL,
  `redirect_url` varchar(255) NOT NULL,
  `pricelist_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpap_bwg_image`
--
-- WHERE:  1 LIMIT 0,10000

LOCK TABLES `wpap_bwg_image` WRITE;
/*!40000 ALTER TABLE `wpap_bwg_image` DISABLE KEYS */;
INSERT  IGNORE INTO `wpap_bwg_image` VALUES (37,2,'7-2   ','7-2','/7-2.jpg','/thumb/7-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','7-2   ','07 April 2016, 10:32','36 KB','JPG','388 x 567 px',1,9,1,0,0,0,0,'',0),(36,2,'13-1   ','13-1','/13-1.jpg','/thumb/13-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','13-1   ','05 April 2016, 20:14','37 KB','JPG','388 x 567 px',1,10,1,0,0,0,0,'',0),(35,2,'13b-1   ','13b-1','/13b-1.jpg','/thumb/13b-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','13b-1   ','07 April 2016, 10:32','33 KB','JPG','388 x 567 px',1,11,1,0,0,0,0,'',0),(38,2,'7a-2   ','7a-2','/7a-2.jpg','/thumb/7a-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','7a-2   ','07 April 2016, 10:32','40 KB','JPG','388 x 567 px',1,8,1,0,0,0,0,'',0),(34,2,'13C-1   ','13C-1','/13C-1.jpg','/thumb/13C-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','13C-1   ','05 April 2016, 20:13','42 KB','JPG','388 x 567 px',1,12,1,0,0,0,0,'',0),(7,1,'1      ','1','/1.jpg','/thumb/1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','1      ','07 April 2016, 10:34','41 KB','JPG','388 x 567 px',1,27,1,0,0,0,0,'',0),(8,1,'1a      ','1a','/1a.jpg','/thumb/1a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','1a      ','07 April 2016, 10:34','37 KB','JPG','388 x 567 px',1,26,1,0,0,0,0,'',0),(9,1,'2a-1      ','2a-1','/2a-1.jpg','/thumb/2a-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','2a-1      ','07 April 2016, 10:32','32 KB','JPG','388 x 567 px',1,25,1,0,0,0,0,'',0),(10,1,'2c      ','2c','/2c.jpg','/thumb/2c.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','2c      ','07 April 2016, 10:32','36 KB','JPG','388 x 567 px',1,24,1,0,0,0,0,'',0),(11,1,'3      ','3','/3.jpg','/thumb/3.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','3      ','07 April 2016, 10:34','38 KB','JPG','388 x 567 px',1,23,1,0,0,0,0,'',0),(12,1,'3a      ','3a','/3a.jpg','/thumb/3a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','3a      ','07 April 2016, 10:34','38 KB','JPG','388 x 567 px',1,22,1,0,0,0,0,'',0),(13,1,'4      ','4','/4.jpg','/thumb/4.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','4      ','07 April 2016, 10:34','36 KB','JPG','388 x 567 px',1,21,1,0,0,0,0,'',0),(14,1,'4a  ','4a','/4a.jpg','/thumb/4a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','4a  ','07 April 2016, 10:34','39 KB','JPG','388 x 567 px',1,20,1,0,0,0,0,'',0),(15,1,'5  ','5','/5.jpg','/thumb/5.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','5  ','07 April 2016, 10:34','33 KB','JPG','388 x 567 px',1,19,1,0,0,0,0,'',0),(16,1,'5a  ','5a','/5a.jpg','/thumb/5a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','5a  ','07 April 2016, 10:34','34 KB','JPG','388 x 567 px',1,18,1,0,0,0,0,'',0),(17,1,'6a-2  ','6a-2','/6a-2.jpg','/thumb/6a-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','6a-2  ','07 April 2016, 10:32','38 KB','JPG','388 x 567 px',1,17,1,0,0,0,0,'',0),(18,1,'6b-1  ','6b-1','/6b-1.jpg','/thumb/6b-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','6b-1  ','07 April 2016, 10:32','37 KB','JPG','388 x 567 px',1,16,1,0,0,0,0,'',0),(19,1,'7-2  ','7-2','/7-2.jpg','/thumb/7-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','7-2  ','07 April 2016, 10:32','36 KB','JPG','388 x 567 px',1,15,1,0,0,0,0,'',0),(20,1,'7a-2  ','7a-2','/7a-2.jpg','/thumb/7a-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','7a-2  ','07 April 2016, 10:32','40 KB','JPG','388 x 567 px',1,14,1,0,0,0,0,'',0),(21,1,'8  ','8','/8.jpg','/thumb/8.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','8  ','07 April 2016, 10:32','40 KB','JPG','388 x 567 px',1,13,1,0,0,0,0,'',0),(22,1,'8a-2  ','8a-2','/8a-2.jpg','/thumb/8a-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','8a-2  ','07 April 2016, 10:32','38 KB','JPG','388 x 567 px',1,12,1,0,0,0,0,'',0),(23,1,'9a  ','9a','/9a.jpg','/thumb/9a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','9a  ','07 April 2016, 10:34','34 KB','JPG','388 x 567 px',1,11,1,0,0,0,0,'',0),(24,1,'9b  ','9b','/9b.jpg','/thumb/9b.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','9b  ','07 April 2016, 10:34','34 KB','JPG','388 x 567 px',1,10,1,0,0,0,0,'',0),(25,1,'10-2  ','10-2','/10-2.jpg','/thumb/10-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','10-2  ','07 April 2016, 10:32','35 KB','JPG','388 x 567 px',1,9,1,0,0,0,0,'',0),(26,1,'10a  ','10a','/10a.jpg','/thumb/10a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','10a  ','07 April 2016, 10:34','38 KB','JPG','388 x 567 px',1,8,1,0,0,0,0,'',0),(27,1,'11-1  ','11-1','/11-1.jpg','/thumb/11-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','11-1  ','05 April 2016, 20:13','32 KB','JPG','388 x 567 px',1,7,1,0,0,0,0,'',0),(28,1,'11b  ','11b','/11b.jpg','/thumb/11b.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','11b  ','07 April 2016, 10:34','37 KB','JPG','388 x 560 px',1,6,1,0,0,0,0,'',0),(29,1,'12-1  ','12-1','/12-1.jpg','/thumb/12-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','12-1  ','05 April 2016, 20:13','38 KB','JPG','388 x 567 px',1,5,1,0,0,0,0,'',0),(30,1,'12c  ','12c','/12c.jpg','/thumb/12c.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','12c  ','07 April 2016, 10:34','38 KB','JPG','388 x 567 px',1,4,1,0,0,0,0,'',0),(31,1,'13-1  ','13-1','/13-1.jpg','/thumb/13-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','13-1  ','05 April 2016, 20:14','37 KB','JPG','388 x 567 px',1,3,1,0,0,0,0,'',0),(32,1,'13b-1  ','13b-1','/13b-1.jpg','/thumb/13b-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','13b-1  ','07 April 2016, 10:32','33 KB','JPG','388 x 567 px',1,2,1,0,0,0,0,'',0),(33,1,'13C-1  ','13C-1','/13C-1.jpg','/thumb/13C-1.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','13C-1  ','05 April 2016, 20:13','42 KB','JPG','388 x 567 px',1,1,1,0,0,0,0,'',0),(39,2,'8   ','8','/8.jpg','/thumb/8.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','8   ','07 April 2016, 10:32','40 KB','JPG','388 x 567 px',1,7,1,0,0,0,0,'',0),(40,2,'8a-2   ','8a-2','/8a-2.jpg','/thumb/8a-2.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','8a-2   ','07 April 2016, 10:32','38 KB','JPG','388 x 567 px',1,6,1,0,0,0,0,'',0),(41,3,'2    ','2','/2.jpg','/thumb/2.jpg','Платье-Туба. Цвет: карминовый\nДиаметр: 50 см\nДлина: 2 м\n\n','2    ','25 May 2016, 20:54','621 KB','JPG','799 x 1200 px',1,16,1,0,0,0,0,'',0),(43,3,'3 (1)    ','3 (1)','/3 (1).jpg','/thumb/3 (1).jpg','Платье-Туба. \nВерх:\nЦвет: красный\nДиаметр: 60 см\nДлина: 80см м\n\nНиз: Цвет: нефрит\nДиаметр: 60 см\nДлина: 1 м\n\n','3 (1)    ','25 May 2016, 20:54','633 KB','JPG','799 x 1200 px',1,15,1,0,0,0,0,'',0),(44,3,'1 (1)    ','1 (1)','/1 (1).jpg','/thumb/1 (1).jpg','Платье-Туба. Цвет: желтый\nДиаметр: 50 см\nДлина: 2 м\n','1 (1)    ','25 May 2016, 20:54','403 KB','JPG','799 x 1200 px',1,14,1,0,0,0,0,'',0),(45,3,'5 (1)    ','5 (1)','/5 (1).jpg','/thumb/5 (1).jpg','Платье-Туба. Цвет: желтый\nДиаметр: 50 см\nДлина: 2 м\n\n','5 (1)    ','25 May 2016, 20:54','447 KB','JPG','799 x 1200 px',1,13,1,0,0,0,0,'',0),(46,3,'6    ','6','/6.jpg','/thumb/6.jpg','Платье-Туба. Цвет: желтый\nДиаметр: 50 см\nДлина: 2 м\n','6    ','25 May 2016, 20:54','658 KB','JPG','799 x 1200 px',1,12,1,0,0,0,0,'',0),(47,3,'8 (1)    ','8 (1)','/8 (1).jpg','/thumb/8 (1).jpg','Платье-Туба. \nЦвет: баклажановый\nДиаметр: 50 см\nДлина: 1,5 м\n\nи Платье-Туба. Цвет: небесный\nДиаметр: 50 см\nДлина: 1,5 м\n','8 (1)    ','25 May 2016, 20:54','602 KB','JPG','799 x 1200 px',1,11,1,0,0,0,0,'',0),(48,3,'7    ','7','/7.jpg','/thumb/7.jpg','Платье-Туба. Цвет: персиковый\nДиаметр: 50 см\nДлина: 2 м\n','7    ','25 May 2016, 20:54','538 KB','JPG','799 x 1200 px',1,10,1,0,0,0,0,'',0),(49,3,'9    ','9','/9.jpg','/thumb/9.jpg','Платье-Туба. \nЦвет: баклажановый\nДиаметр: 50 см\nДлина: 1,5 м\n\nи Платье-Туба. Цвет: небесный\nДиаметр: 50 см\nДлина: 1,5 м\n','9    ','25 May 2016, 20:54','590 KB','JPG','799 x 1200 px',1,9,1,0,0,0,0,'',0),(50,3,'10    ','10','/10.jpg','/thumb/10.jpg','Платье-Туба. \nЦвет: баклажановый\nДиаметр: 50 см\nДлина: 1,5 м\n\nи Платье-Туба. Цвет: небесный\nДиаметр: 50 см\nДлина: 1,5 м\n\n','10    ','25 May 2016, 20:54','811 KB','JPG','799 x 1200 px',1,8,1,0,0,0,0,'',0),(51,3,'11    ','11','/11.jpg','/thumb/11.jpg','Платье-Туба. \nЦвет: баклажановый\nДиаметр: 50 см\nДлина: 1,5 м\n\nи Платье-Туба. Цвет: небесный\nДиаметр: 50 см\nДлина: 1,5 м\n','11    ','25 May 2016, 20:54','781 KB','JPG','799 x 1200 px',1,7,1,0,0,0,0,'',0),(52,3,'12    ','12','/12.jpg','/thumb/12.jpg','Платье-Туба. \nЦвет: баклажановый\nДиаметр: 50 см\nДлина: 1,5 м\n\nи Платье-Туба. Цвет: небесный\nДиаметр: 50 см\nДлина: 1,5 м\n','12    ','25 May 2016, 20:54','495 KB','JPG','799 x 1200 px',1,6,1,0,0,0,0,'',0),(53,3,'13    ','13','/13.jpg','/thumb/13.jpg','Платье-Туба. Цвет: баклажановый\nДиаметр: 50 см\nДлина: 1,5 м','13    ','25 May 2016, 21:01','583 KB','JPG','799 x 1200 px',1,5,1,0,0,0,0,'',0),(54,3,'14    ','14','/14.jpg','/thumb/14.jpg','Платье-Туба(сплетеное из 2-х цветов)\nВерх:\nЦвет: светло-желтый,\nДиаметр: 50 см\nДлина:1 м\nНиз: Платье-Туба. Цвет: оранжевый\nДиаметр: 70 см\nДлина: 1 м','14    ','25 May 2016, 21:01','474 KB','JPG','799 x 1200 px',1,4,1,0,0,0,0,'',0),(55,3,'15    ','15','/15.jpg','/thumb/15.jpg','Платье-Туба. Цвет: персиковый\nДиаметр: 50 см\nДлина: 2 м','15    ','25 May 2016, 21:01','418 KB','JPG','799 x 1200 px',1,3,1,0,0,0,0,'',0),(56,3,'16    ','16','/16.jpg','/thumb/16.jpg','Платье-Туба. \nЦвет: темно-синий\nДиаметр: 50 см\nДлина: 1,5 м','16    ','25 May 2016, 21:01','410 KB','JPG','799 x 1200 px',1,2,1,0,0,0,0,'',0),(57,3,'17    ','17','/17.jpg','/thumb/17.jpg','Платье-Туба. Цвет: баклажановый\nДиаметр: 70 см\nДлина: 1,5 м\n','17    ','25 May 2016, 21:01','441 KB','JPG','799 x 1200 px',1,1,1,0,0,0,0,'',0),(58,2,'6  ','6','/6.jpg','/thumb/6.jpg','Orientation: 1\n','6  ','25 May 2016, 20:54','658 KB','JPG','799 x 1200 px',1,5,1,0,0,0,0,'',0),(59,2,'1 (1)  ','1 (1)','/1 (1).jpg','/thumb/1 (1).jpg','Orientation: 1\n','1 (1)  ','25 May 2016, 20:54','403 KB','JPG','799 x 1200 px',1,4,1,0,0,0,0,'',0),(60,2,'7  ','7','/7.jpg','/thumb/7.jpg','Orientation: 1\n','7  ','25 May 2016, 20:54','538 KB','JPG','799 x 1200 px',1,3,1,0,0,0,0,'',0),(61,2,'15  ','15','/15.jpg','/thumb/15.jpg','Orientation: 1\n','15  ','25 May 2016, 21:01','418 KB','JPG','799 x 1200 px',1,2,1,0,0,0,0,'',0),(62,2,'2  ','2','/2.jpg','/thumb/2.jpg','Orientation: 1\n','2  ','25 May 2016, 20:54','621 KB','JPG','799 x 1200 px',1,1,1,0,0,0,0,'',0),(63,4,'a','a','/a.jpg','/thumb/a.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','a','25 May 2016, 21:37','100 KB','JPG','388 x 567 px',1,16,1,0,0,0,0,'',0),(64,4,'b','b','/b.jpg','/thumb/b.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','b','25 May 2016, 21:37','91 KB','JPG','388 x 567 px',1,15,1,0,0,0,0,'',0),(65,4,'c','c','/c.jpg','/thumb/c.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','c','25 May 2016, 21:37','92 KB','JPG','388 x 567 px',1,14,1,0,0,0,0,'',0),(66,4,'d','d','/d.jpg','/thumb/d.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','d','25 May 2016, 21:37','102 KB','JPG','388 x 567 px',1,13,1,0,0,0,0,'',0),(67,4,'e','e','/e.jpg','/thumb/e.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','e','25 May 2016, 21:37','99 KB','JPG','388 x 567 px',1,12,1,0,0,0,0,'',0),(68,4,'f','f','/f.jpg','/thumb/f.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','f','25 May 2016, 21:37','91 KB','JPG','388 x 567 px',1,11,1,0,0,0,0,'',0),(69,4,'h','h','/h.jpg','/thumb/h.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','h','25 May 2016, 21:37','89 KB','JPG','388 x 567 px',1,10,1,0,0,0,0,'',0),(70,4,'j','j','/j.jpg','/thumb/j.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','j','25 May 2016, 21:37','73 KB','JPG','388 x 567 px',1,9,1,0,0,0,0,'',0),(71,4,'l','l','/l.jpg','/thumb/l.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','l','25 May 2016, 21:37','128 KB','JPG','388 x 567 px',1,8,1,0,0,0,0,'',0),(72,4,'n','n','/n.jpg','/thumb/n.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','n','25 May 2016, 21:37','109 KB','JPG','388 x 567 px',1,7,1,0,0,0,0,'',0),(73,4,'o','o','/o.jpg','/thumb/o.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','o','25 May 2016, 21:37','87 KB','JPG','388 x 567 px',1,6,1,0,0,0,0,'',0),(74,4,'p','p','/p.jpg','/thumb/p.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','p','25 May 2016, 21:37','84 KB','JPG','567 x 388 px',1,5,1,0,0,0,0,'',0),(75,4,'q','q','/q.jpg','/thumb/q.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','q','25 May 2016, 21:37','106 KB','JPG','567 x 388 px',1,4,1,0,0,0,0,'',0),(76,4,'s','s','/s.jpg','/thumb/s.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','s','25 May 2016, 21:37','97 KB','JPG','567 x 388 px',1,3,1,0,0,0,0,'',0),(77,4,'t','t','/t.jpg','/thumb/t.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','t','25 May 2016, 21:37','99 KB','JPG','567 x 388 px',1,2,1,0,0,0,0,'',0),(78,4,'y','y','/y.jpg','/thumb/y.jpg','Aperture: 10\nCamera: NIKON D700\nIso: 100\nOrientation: 1\n','y','25 May 2016, 21:37','66 KB','JPG','567 x 388 px',1,1,1,0,0,0,0,'',0);
/*!40000 ALTER TABLE `wpap_bwg_image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 11:50:57