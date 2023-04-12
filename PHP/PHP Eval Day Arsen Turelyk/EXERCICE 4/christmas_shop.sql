-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: christmas_shop
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `toys`
--

DROP TABLE IF EXISTS `toys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `toys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` enum('dolls','mechanic','puzzle') NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toys`
--

LOCK TABLES `toys` WRITE;
/*!40000 ALTER TABLE `toys` DISABLE KEYS */;
INSERT INTO `toys` VALUES (1,'Nintendo Super Mario Movie Figure',21.99,'https://image.smythstoys.com/original/desktop/218106.webp','mechanic','Collect all your favourite characters in The Super Mario Bros. Movie Figure series!\r\n\r\nThis Mario figure is 12.7cm tall and is inspired by the movie, featuring premium details like realistic acrylic eyes and 16 points of articulation. Mario comes with a removable plunger accessory, all showcased in a window box.'),(2,'Nintendo Super Mario Movie Kart Racer with Mario Figure',17.99,'https://image.smythstoys.com/thumbnail/desktop/218107_1.webp','dolls','Inspired by the Super Mario Bros. movie, this Mario Kart racer has a pull back feature that makes the vehicle move forward & requires no batteries! Just pull back and watch Mario go! The included figure has 5 points of articulation that allows him to sit in the racer.'),(3,'Nintendo Super Mario 6cm Baby Mario Figure',5.99,'https://image.smythstoys.com/thumbnail/desktop/218110.webp','mechanic','The Baby Mario 6cm figure is sure to be a hit with kids and Nintendo fans! This authentic and poseable figure has three points of articulation. You can recreate the action from the games with this extraordinarily detailed figure and start your collection today.'),(11,'Nintendo Super Mario Movie Figure - Princess Peach with Umbrella',21.99,'uploads/1681297804.jpg','dolls','Collect all your favourite characters in The Super Mario Bros. Movie Figure series!\r\n\r\nThis Princess Peach figure is 12.7cm tall and is inspired by the movie, featuring premium details like realistic acrylic eyes and 8 points of articulation. Princess Peach comes with a removable umbrella accessory, all showcased in a window box.');
/*!40000 ALTER TABLE `toys` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-12 13:23:06
