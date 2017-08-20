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
-- Table structure for table `wpap_bwg_shortcode`
--

DROP TABLE IF EXISTS `wpap_bwg_shortcode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpap_bwg_shortcode` (
  `id` bigint(20) NOT NULL,
  `tagtext` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpap_bwg_shortcode`
--
-- WHERE:  1 LIMIT 0,10000

LOCK TABLES `wpap_bwg_shortcode` WRITE;
/*!40000 ALTER TABLE `wpap_bwg_shortcode` DISABLE KEYS */;
INSERT  IGNORE INTO `wpap_bwg_shortcode` VALUES (1,' gallery_type=\"thumbnails\" theme_id=\"1\" gallery_id=\"1\" sort_by=\"order\" order_by=\"asc\" show_search_box=\"0\" show_sort_images=\"0\" search_box_width=\"180\" image_column_number=\"4\" images_per_page=\"30\" image_title=\"none\" image_enable_page=\"0\" thumb_width=\"200\" thumb_height=\"292\" load_more_image_count=\"30\" show_tag_box=\"0\" thumb_click_action=\"open_lightbox\" thumb_link_target=\"1\" popup_fullscreen=\"0\" popup_autoplay=\"0\" popup_width=\"800\" popup_height=\"500\" popup_effect=\"fade\" popup_interval=\"5\" popup_enable_filmstrip=\"1\" popup_filmstrip_height=\"50\" popup_enable_ctrl_btn=\"1\" popup_enable_fullscreen=\"1\" popup_enable_info=\"1\" popup_info_always_show=\"0\" popup_info_full_width=\"0\" popup_enable_rate=\"0\" popup_enable_comment=\"1\" popup_hit_counter=\"0\" popup_enable_facebook=\"1\" popup_enable_twitter=\"1\" popup_enable_google=\"1\" popup_enable_pinterest=\"0\" popup_enable_tumblr=\"0\" show_tag_box=\"0\" watermark_type=\"none\" watermark_link=\"https://web-dorado.com\"'),(2,' gallery_type=\"thumbnails\" theme_id=\"1\" gallery_id=\"2\" sort_by=\"order\" order_by=\"asc\" show_search_box=\"0\" show_sort_images=\"0\" search_box_width=\"180\" image_column_number=\"5\" images_per_page=\"30\" image_title=\"none\" image_enable_page=\"0\" thumb_width=\"167\" thumb_height=\"250\" load_more_image_count=\"30\" show_tag_box=\"0\" thumb_click_action=\"open_lightbox\" thumb_link_target=\"1\" popup_fullscreen=\"0\" popup_autoplay=\"0\" popup_width=\"800\" popup_height=\"500\" popup_effect=\"fade\" popup_interval=\"5\" popup_enable_filmstrip=\"1\" popup_filmstrip_height=\"50\" popup_enable_ctrl_btn=\"1\" popup_enable_fullscreen=\"1\" popup_enable_info=\"1\" popup_info_always_show=\"0\" popup_info_full_width=\"0\" popup_enable_rate=\"0\" popup_enable_comment=\"1\" popup_hit_counter=\"0\" popup_enable_facebook=\"1\" popup_enable_twitter=\"1\" popup_enable_google=\"1\" popup_enable_pinterest=\"0\" popup_enable_tumblr=\"0\" show_tag_box=\"0\" watermark_type=\"none\" watermark_link=\"https://web-dorado.com\"'),(3,' gallery_type=\"album_compact_preview\" theme_id=\"1\" album_id=\"0\" sort_by=\"order\" order_by=\"asc\" show_search_box=\"0\" show_sort_images=\"0\" search_box_width=\"180\" compuct_album_column_number=\"5\" compuct_albums_per_page=\"30\" compuct_album_title=\"none\" compuct_album_view_type=\"thumbnail\" compuct_album_mosaic_hor_ver=\"vertical\" compuct_album_resizable_mosaic=\"0\" compuct_album_mosaic_total_width=\"100\" compuct_album_thumb_width=\"120\" compuct_album_thumb_height=\"90\" compuct_album_image_column_number=\"5\" compuct_album_images_per_page=\"30\" compuct_album_image_title=\"none\" compuct_album_image_thumb_width=\"180\" compuct_album_image_thumb_height=\"90\" compuct_album_enable_page=\"1\" compuct_album_load_more_image_count=\"30\" compuct_albums_per_page_load_more=\"30\" show_tag_box=\"0\" thumb_click_action=\"open_lightbox\" thumb_link_target=\"1\" popup_fullscreen=\"0\" popup_autoplay=\"0\" popup_width=\"800\" popup_height=\"500\" popup_effect=\"fade\" popup_interval=\"5\" popup_enable_filmstrip=\"1\" popup_filmstrip_height=\"50\" popup_enable_ctrl_btn=\"1\" popup_enable_fullscreen=\"1\" popup_enable_info=\"1\" popup_info_always_show=\"0\" popup_info_full_width=\"0\" popup_enable_rate=\"0\" popup_enable_comment=\"1\" popup_hit_counter=\"0\" popup_enable_facebook=\"1\" popup_enable_twitter=\"1\" popup_enable_google=\"1\" popup_enable_pinterest=\"0\" popup_enable_tumblr=\"0\" show_tag_box=\"0\" watermark_type=\"none\" watermark_link=\"https://web-dorado.com\"'),(4,' gallery_type=\"thumbnails\" theme_id=\"1\" gallery_id=\"3\" sort_by=\"order\" order_by=\"asc\" show_search_box=\"0\" show_sort_images=\"0\" search_box_width=\"180\" image_column_number=\"5\" images_per_page=\"30\" image_title=\"none\" image_enable_page=\"1\" thumb_width=\"180\" thumb_height=\"220\" load_more_image_count=\"30\" show_tag_box=\"0\" thumb_click_action=\"open_lightbox\" thumb_link_target=\"1\" popup_fullscreen=\"0\" popup_autoplay=\"0\" popup_width=\"800\" popup_height=\"500\" popup_effect=\"fade\" popup_interval=\"5\" popup_enable_filmstrip=\"1\" popup_filmstrip_height=\"50\" popup_enable_ctrl_btn=\"1\" popup_enable_fullscreen=\"1\" popup_enable_info=\"1\" popup_info_always_show=\"0\" popup_info_full_width=\"0\" popup_enable_rate=\"0\" popup_enable_comment=\"1\" popup_hit_counter=\"0\" popup_enable_facebook=\"1\" popup_enable_twitter=\"1\" popup_enable_google=\"1\" popup_enable_pinterest=\"0\" popup_enable_tumblr=\"0\" show_tag_box=\"0\" watermark_type=\"none\" watermark_link=\"https://web-dorado.com\"'),(5,' gallery_type=\"thumbnails\" theme_id=\"1\" gallery_id=\"3\" sort_by=\"order\" order_by=\"asc\" show_search_box=\"0\" show_sort_images=\"0\" search_box_width=\"180\" image_column_number=\"5\" images_per_page=\"30\" image_title=\"none\" image_enable_page=\"1\" thumb_width=\"180\" thumb_height=\"260\" load_more_image_count=\"30\" show_tag_box=\"0\" thumb_click_action=\"open_lightbox\" thumb_link_target=\"1\" popup_fullscreen=\"0\" popup_autoplay=\"0\" popup_width=\"800\" popup_height=\"500\" popup_effect=\"fade\" popup_interval=\"5\" popup_enable_filmstrip=\"1\" popup_filmstrip_height=\"50\" popup_enable_ctrl_btn=\"1\" popup_enable_fullscreen=\"1\" popup_enable_info=\"1\" popup_info_always_show=\"0\" popup_info_full_width=\"0\" popup_enable_rate=\"0\" popup_enable_comment=\"1\" popup_hit_counter=\"0\" popup_enable_facebook=\"1\" popup_enable_twitter=\"1\" popup_enable_google=\"1\" popup_enable_pinterest=\"0\" popup_enable_tumblr=\"0\" show_tag_box=\"0\" watermark_type=\"none\" watermark_link=\"https://web-dorado.com\"');
/*!40000 ALTER TABLE `wpap_bwg_shortcode` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 11:51:13
