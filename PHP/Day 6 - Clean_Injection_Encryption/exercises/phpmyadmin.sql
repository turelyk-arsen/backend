-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: phpmyadmin
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (28,'sandra','Turelyk','ture -  as@gmail.com','1234'),(29,'asss','Turelyk','turelyk.as@gmail.com','1234'),(30,'asssworld</h1>','Turelyk','turelyk.as@gmail.com','1234'),(31,'asss','hello world','turelyk.as@gmail.com','1234'),(32,'hello world','hello world','turelyk.as@gmail.com','1234'),(33,'asss','Turelyk','turelyk.as@gmail.com','$2y$10$FSug.5EY/M7NI9M7NK.ezu1e7dmN1NwxmpVjd/GqOdt8a5L/FMe8.'),(34,'Arsen','Turelyk','turelyk.as@gmail.com','$2y$10$URu.LgQhQ6YLACn4ovyp6O7NRkhQhs8tKJE.OH6YjITc2TaqSzXM6'),(35,'Arsen','Turelyk','turelyk.as@gmail.com','$2y$10$FWN78qA7qF4Y7dY/Y/96O.3F6nd9aGe/Zqkh.LvjkhqrgBNnOlz7q'),(36,'asss','Turelyk','turelyk.as@gmail.com','$2y$10$fTrk14r8mqMgO8IrZEv7IOVnNSGpC7gjTv1LuVisc9EByNFpLwhvi'),(37,'asss','sdfg','turelyk.as@gmail.com','$2y$10$5DNfsCQOZ.yUe8V9VMbyveAmnMKjbClGDmoQPl2AtxgzXgRrj4eUe'),(38,'gggg','gggg','ggg@ggg.com','$2y$10$MYKdtqx4cI99V69SiqmSj.Z1WP40JnFRuR6nXkWWS.LtwvPiS3Oy6'),(39,'Arsen','Turelyk','turelyk.as@gmail.com','$2y$10$Ds6Z5fSIqCsYUIKh8IRYfu4Bewzp2zHnLJny81U/nHK8nqXO8Yzlm');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-05 16:40:51
