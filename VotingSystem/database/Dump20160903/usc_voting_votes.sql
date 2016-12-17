-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: usc_voting
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votes`
--

LOCK TABLES `votes` WRITE;
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
INSERT INTO `votes` VALUES (1,'0',2,'2016-09-03 14:24:40'),(2,'K1124884',2,'2016-09-03 14:27:01'),(3,'K1124884',26,'2016-09-03 14:30:31'),(4,'k1123029',26,'2016-09-03 14:38:21'),(5,'K1122577',26,'2016-09-03 15:20:24'),(6,'K1124884',26,'2016-09-03 15:26:04'),(7,'K1124884',27,'2016-09-03 15:26:04'),(8,'K1124884',29,'2016-09-03 15:26:04'),(9,'K1124884',31,'2016-09-03 15:26:05'),(10,'K1124884',33,'2016-09-03 15:26:05'),(11,'K1124884',36,'2016-09-03 15:26:05'),(12,'K1124884',37,'2016-09-03 15:26:05'),(13,'K1124884',39,'2016-09-03 15:26:05'),(14,'K1124884',26,'2016-09-03 15:28:51'),(15,'K1124884',27,'2016-09-03 15:28:51'),(16,'K1124884',30,'2016-09-03 15:28:51'),(17,'K1124884',32,'2016-09-03 15:28:51'),(18,'K1124884',34,'2016-09-03 15:28:51'),(19,'K1124884',36,'2016-09-03 15:28:51'),(20,'K1124884',37,'2016-09-03 15:28:51'),(21,'K1124884',39,'2016-09-03 15:28:51');
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-03 15:41:54
