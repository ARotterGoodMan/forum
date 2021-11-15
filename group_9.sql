-- MySQL dump 10.13  Distrib 8.0.20, for Linux (x86_64)
--
-- Host: localhost    Database: groups_9
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `massage`
--

DROP TABLE IF EXISTS `massage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `massage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `massage`
--

LOCK TABLES `massage` WRITE;
/*!40000 ALTER TABLE `massage` DISABLE KEYS */;
INSERT INTO `massage` VALUES (1,'123','aaaaaaaa'),(2,'123','aaaaaaaaaaa'),(3,'123','aaaaaaaaaaa'),(4,'123','11111111'),(5,'','00'),(6,'邵潇遥','哈哈哈哈哈'),(7,'邵潇遥','嘻嘻嘻嘻');
/*!40000 ALTER TABLE `massage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_information`
--

DROP TABLE IF EXISTS `user_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_information` (
  `id` int NOT NULL AUTO_INCREMENT,
  `XH` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Sex` enum('男','女') NOT NULL DEFAULT '男',
  `Birthday` date NOT NULL,
  `Class` varchar(6) NOT NULL,
  `Major` varchar(20) NOT NULL,
  `Specialty` varchar(50) NOT NULL,
  `Brief` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_information`
--

LOCK TABLES `user_information` WRITE;
/*!40000 ALTER TABLE `user_information` DISABLE KEYS */;
INSERT INTO `user_information` VALUES (1,'','李府刚','男','2000-07-02','J18017','计算机应用技术','学习','一个敲代码秃头的男人'),(2,'J1801737','邵潇遥','男','2000-01-26','J18017','计算机网络技术','学习、rap','一个爱好学习的人');
/*!40000 ALTER TABLE `user_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userplay`
--

DROP TABLE IF EXISTS `userplay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userplay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `UserPsw` char(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Salt` char(32) NOT NULL,
  `gettime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userplay`
--

LOCK TABLES `userplay` WRITE;
/*!40000 ALTER TABLE `userplay` DISABLE KEYS */;
INSERT INTO `userplay` VALUES (20,'123','ddfcc7b1f8595cc312dbd2f9b874900e','123@123.com','22cce6','2020-06-23 12:16:04'),(21,'1234','6401ad6cc1bd26b34f3b62fb99109ce3','123@123.com','e90c6f1bacfcb6524b9b45b4b0af8e6f','2020-06-23 12:18:16'),(22,'','f849dbfd753f9d5b28bc5329e5560589','','1b6011837020d9abdd2c0140ba1fad36','2020-06-23 12:30:30'),(23,'邵潇遥','94e01db4708171683b400a86acf05f08','2195007463@qq.com','c1968dafaabbd5135827f97a5ac9bc9a','2020-06-27 07:41:07');
/*!40000 ALTER TABLE `userplay` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-30 23:00:20
