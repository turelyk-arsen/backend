-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_blog
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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `text` text NOT NULL,
  `id_topic` int NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_topic` (`id_topic`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'C++ COOL','Every web developer knows what a \"fish\" text is. This text, despite the name, has no relation to the inhabitants of reservoirs. It is used by web designers to insert on Internet pages and demonstrate the appearance of content, view fonts, paragraphs, indents, etc. Since the purpose of using such a text is exclusively demonstrative, it does not necessarily have to carry a semantic load. Moreover, the illegibility of the text will play a role in assessing the quality of the perception of the layout.\n \n  The most famous \"fish\" text is the famous Lorem ipsum. It is believed that it was first used in book printing in the 16th century. Lorem ipsum owes its appearance to the ancient Roman philosopher Cicero, because it was from his treatise \"On the Limits of Good and Evil\" that the medieval book printer extracted individual phrases and words, resulting in the \"fish\" text that is widely used to this day. Of course, there are some questions related to the use of Lorem ipsum on sites and projects focused on Cyrillic content - the writing of symbols in Latin and in Cyrillic differs significantly.\n \n  And even with languages that use the Latin alphabet, small problems may arise: in different languages, certain letters occur with different frequency, there is a difference in the length of the most common words. This leads to the conclusion that it is better to use the text in the language that is planned to be used when the project is launched as a \"fish\". Today, there are several variants of Lorem ipsum, in addition, there are special generators that create their own versions of the text based on the original treatise, which makes it possible to get a longer, unique set of words.',1,0,'2022-12-12 14:12:18'),(2,'What\'s С++','On the other hand, the strengthening and development of the structure ensures participation in the formation of systems of mass participation. In the same way, constant quantitative growth and the scope of our activity play an important role in the formation of the personnel training system, which corresponds to urgent needs. Ideological considerations of the highest order, as well as the framework and place of training of personnel, provide a wide circle (specialists) with participation in the formation of new proposals.\n  Thus, the new model of organizational activity contributes to the preparation and implementation of systems of mass participation. If you have any interesting offers, please contact us! The Web-Boss studio is always ready to solve any problem.\n  On the other hand, the framework and place of personnel training facilitates the preparation and implementation of the development model. Varied and rich experience provides consultation with a wide range of assets to a wide range of people. Higher-order ideological considerations, as well as further development of various forms of activity, make it possible to assess the importance of new proposals.',1,0,'2022-12-12 14:21:06'),(3,'Why is JavaScript needed?','Practical experience shows that constant quantitative growth and the scope of our activity play an important role in the formation of the key components of the planned update! Practical experience shows that consultation with IT professionals ensures the relevance of further directed and developed systems of mass participation! The task of the organization, especially the consultation with IT professionals, makes it possible to assess the importance of the existing financial and administrative conditions. The task of the organization, especially the consultation with IT professionals allows you to fulfill the most important tasks of developing comprehensively balanced newly introduced? Higher-order considerations, as well as the framework and place of personnel training ensure the relevance of the personnel training system, corresponding to the current needs.\n \n  Everyday practice shows that the existing structure of the organization allows you to fulfill the most important tasks of developing a comprehensively balanced newly introduced? The importance of these problems is so obvious that the implementation of the planned development plan requires us to analyze the personnel training system that corresponds to the urgent needs. Everyday practice shows that the further development of various forms of activity involves the process of introducing and modernizing the development model. The task of the organization, in particular, constant quantitative growth and the scope of our activity provides a wide range of specialists to participate in the formation of new proposals.\n \n  One should not, however, forget that the course on a socially oriented national project is an interesting experiment in checking forms of influence. Equally...',2,0,'2022-12-12 16:23:21'),(4,'Why PHP sucks','On the other hand, the framework and place of personnel training directly depends on the positions taken by the participants in relation to the tasks! However, one should not forget that the new model of organizational activity largely determines the creation of appropriate conditions for activation. The importance of these problems is so obvious that consultation with IT professionals largely determines the creation of directions for progressive development. On the other hand, raising the level of civic consciousness creates the prerequisites for qualitatively new steps for the personnel training system that meets the urgent needs! Considerations of the highest order, as well as constant quantitative growth and the scope of our activity entail a process of introduction and modernization aimed at progressive development.\n \n  The task of the organization, in particular, raising the level of civic consciousness allows one to assess the importance of the existing financial and administrative conditions. It should not be forgotten, however, that the beginning of daily work on the formation of a position provides a wide range of specialists with participation in the formation of the positions held by the participants in relation to the tasks! Everyday practice shows that social and economic development requires defining and clarifying further directions of project development. On the other hand, the new model of organizational activity promotes the preparation and implementation of further developed systems of mass participation.\n \n  On the other hand, the constant information and technical support of our activity contributes to increasing the relevance of the economic expediency of the decisions made? On the other hand, the new model of organizational activity requires us to analyze economic feasibility...',3,0,'2022-12-12 16:25:47'),(5,'Why JS is cool','The importance of these problems is so obvious that the implementation of the planned development plan contributes to increasing the relevance of further development of the project? Considerations of a higher order, as well as raising the level of civic consciousness, provide a wide range of specialists with the opportunity to participate in the formation of further developed systems of mass participation. Does the task of the organization, especially the innovative path chosen by us, allow us to fulfill the most important tasks of developing the appropriate conditions for activation? Thus, the constant information and technical support of our activity entails the process of implementation and modernization of the positions held by the participants in relation to the set tasks? The task of the organization, especially the implementation of the planned development plan, is an interesting experiment of checking the corresponding conditions of activation.\n \n  Everyday practice shows that the beginning of daily work on the formation of a position allows you to appreciate the importance of comprehensively balanced newly introduced! However, one should not forget that the further development of various forms of activity plays an important role in the formation of key components of the planned renewal. Thus, constant information and technical support of our activity largely determines the creation of existing financial and administrative conditions. The diverse and rich experience of the implementation of the planned development plan allows us to assess the value of the new proposals. Dear friends, a consultation with IT professionals is an interesting experiment of checking the next directions of project development. On the other hand, does consulting with IT professionals play an important role in the formation of a system for large-scale changes in a number of parameters?\n \n  On the other hand, the course...',2,0,'2022-12-12 16:27:36'),(6,'C++ through the eyes of an ordinary person','Everyday practice shows that social and economic development contributes to increasing the relevance of comprehensively balanced innovations! Considerations of the highest order, as well as the further development of various forms of activity, provide a wide range of specialists with participation in the formation of a system of large-scale changes in a number of parameters! In the same way, raising the level of civic consciousness is an interesting experiment to check the further directions of the development of the project. Dear friends, the new model of organizational activity involves the process of introducing and modernizing the personnel training system that meets the current needs. The importance of these problems is so obvious that the existing structure of the organization plays an important role in the formation of further directions for the development of the project.\n \n  Everyday practice shows that the existing structure of the organization makes it possible to assess the value of new proposals. On the other hand, the framework and place of personnel training plays an important role in the formation of further directions for the development of the project? However, one should not forget that the implementation of the planned development plan plays an important role in the formation of the development model. Everyday practice shows that the framework and place of personnel training creates prerequisites for qualitatively new steps for the system of large-scale changes in a number of parameters. Likewise, the new model of organizational activity involves the process of introducing and modernizing the positions held by the participants in relation to the set tasks. On the other hand, consultation with IT professionals facilitates the preparation and implementation of further development of the project.\n \n  Dear friends, raising the level of civic consciousness plays an important role in the formation of...',1,0,'2022-12-12 16:39:40'),(7,'All the sins of PHP 7.0','Dear friends, consultation with IT professionals largely determines the creation of a development model. Dear friends, social and economic development requires us to analyze the system of large-scale changes in a number of parameters. Thus, raising the level of civic consciousness ensures the relevance of the economic expediency of the decisions made? Dear friends, the framework and place of personnel training plays an important role in the formation of a system of large-scale changes in a number of parameters! In the same way, the implementation of the planned development plan to a large extent determines the creation of directed progressive development. Dear friends, constant quantitative growth and the sphere of our activity requires us to analyze comprehensively balanced innovations?\n \n  The importance of these problems is so obvious that the new model of organizational activity involves the process of introducing and modernizing the key components of the planned update. In the same way, social and economic development promotes the preparation and implementation of forms of influence? The diverse and rich experience of the innovative path chosen by us ensures a wide range of specialists\' participation in the formation of further directions for the development of the project. Thus, the further development of various forms of activity plays an important role in the formation of the direction of progressive development. A diverse and rich experience course on a socially-oriented national project ensures the relevance of the development model!\n \n  The task of the organization, especially the implementation of the planned development plan, involves the process of introduction and modernization of further developed systems of mass participation. In the same way, raising the level of civic consciousness plays an important role in the formation of the economic expediency of accepted...',3,0,'2022-12-12 16:42:39'),(11,'asdf','asdf',3,0,'2023-04-11 16:14:33');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` tinytext NOT NULL,
  `id_article` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'This is a very cool article',1,'2022-12-12 16:48:55'),(2,'I do not agree with you',4,'2022-12-12 16:49:45'),(3,'It was very interesting, keep it up',5,'2022-12-12 16:51:29');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `topic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (1,'C++'),(2,'JavaScript'),(3,'PHP');
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'as','turelyk.as@gmail.com','$2y$10$nbHZSgg7rSV0XishKywUFeUxucK5RDTYxfdMIKA5FxT3X51Sfv3qm');
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

-- Dump completed on 2023-04-11 16:52:04
