-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: laravelBase
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messages` varchar(45) NOT NULL,
  `idusers` int(11) NOT NULL,
  `idvideos` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'allo ?',0,'1','2017-04-10 14:43:15','2017-04-10 14:43:15'),(2,'je suis content de voir que ca marche',1,'1','2017-04-10 15:23:15','2017-04-10 15:23:15'),(3,'mais oui c\'est clair !',2,'1','2017-04-10 15:24:47','2017-04-10 15:24:47'),(4,'mais il est où shaco ?',6,'1','2017-04-10 15:39:19','2017-04-10 15:39:19'),(5,'le chien de dinh a faim',3,'1','2017-04-10 15:39:54','2017-04-10 15:39:54'),(6,'t\'es serieux ? le mec avec lee sin 0/8',7,'1','2017-04-10 15:40:28','2017-04-10 15:40:28'),(7,'touche pas a myVar',5,'1','2017-04-10 15:40:53','2017-04-10 15:40:53');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'bob','bob@hotmail.fr','$2y$10$SAAKRfJmnCzXQRl6GdwNput2.RXRyHjY4CLZ2L4t6N7XBs8JjiKye','K89bkWditxvGKmtatEZxb11X5fAJqTKQebS3Tj3wOCGv4oqDlBBMdn31WD6o','2017-04-10 13:36:03','2017-04-10 15:24:25',1),(2,'antony','anto@hotmail.fr','$2y$10$hcOeZk6.3ESUTt7vh4N1tuxcqTyil3iQv8YFUcnOTnFzC5XljQGr.','UwAjeHoR4QHey7XTg7x0xBUTo2EjobeoVcnPx9ZWqpK9ZMuGgZNOCn8LHoTr','2017-04-10 14:12:33','2017-04-10 15:38:57',0),(3,'dylan','dylan@hotmail.fr','$2y$10$zLr.eIdN4HS8oH7N5eCqhOcpet1Ro5G687cxqvqvhxHxEJTgIX8kW','DgW5qevD7kdQhoGLcREiTTXoVLf4ZKL1maSmzhWycYuxyCYepeug39KdRnuU','2017-04-10 14:12:51','2017-04-10 15:39:56',0),(4,'alex','alex@hotmail.fr','$2y$10$lxnqfjmH0SlzWwotmPpUJObWNc8MMVpkhmhRzQttmUmy9CeXgB1TK','LyeB1lFWIUPjRl5TLymOUJDq3RHhrWRsLIJOyTrq7EDJOCBFDugsN2WDYVsE','2017-04-10 14:13:06','2017-04-10 14:13:08',0),(5,'denis','denis@hotmail.fr','$2y$10$YsmqkexcngFFXv8.PEW/4OLsEjcHktV2xBrvsmoq0XU.42.mTuKnq','VYhLrcyipauAP9xHAvDu0oHvA8EOWwHfXZFs4LtKQNZM67vg7YIZ5n5lopLY','2017-04-10 14:13:24','2017-04-10 15:41:26',0),(6,'loick','loick@hotmail.fr','$2y$10$6RAa53HtE.mA1JjMTOgmhu7LsmWLhEF9rygfKK8dFp5fQu089Co/S','pShtrnrCwZI15fomqf7p1l2RduKt0S5mlgcSRLtAY6hUQC8PbqvCFLZqMoUu','2017-04-10 14:14:03','2017-04-10 15:39:28',0),(7,'dinh','dinh@hotmail.fr','$2y$10$xvSZFc1mNkKU8XLzaZ5VKec1qTjAV/fm5bwPVSunVNSlznlum5dee','MA8GguBkPCr1QgVhAvK3BPY5pGhIa5GNpqMj2Tyxt6CM5rPOyTpqHfMWdLJU','2017-04-10 14:14:17','2017-04-10 15:40:34',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `like` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'pug\'mow','https://www.youtube.com/embed/fVfEcYhdRRw?ecv',1756);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-10 15:46:00
