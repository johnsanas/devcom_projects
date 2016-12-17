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
-- Table structure for table `partylist`
--

DROP TABLE IF EXISTS `partylist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partylist_name` varchar(200) NOT NULL,
  `partylist_slogan` varchar(1000) NOT NULL,
  `partylist_logo` varchar(300) NOT NULL,
  `college` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partylist`
--

LOCK TABLES `partylist` WRITE;
/*!40000 ALTER TABLE `partylist` DISABLE KEYS */;
INSERT INTO `partylist` VALUES (4,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Arts and Sciences (CAS)','2016-09-03 11:46:47'),(5,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Business Administration (CBA) ','2016-09-03 11:47:09'),(6,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Broadcast and Digital Arts (CBDA)','2016-09-03 11:47:24'),(7,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Computer Science (CCS)','2016-09-03 11:47:51'),(8,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Construction Science and Civil Engineering (CCSCE)','2016-09-03 11:58:01'),(9,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Technology Management (CTM)','2016-09-03 11:58:16'),(10,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Governance and Public Policy (CGPP)','2016-09-03 11:58:36'),(11,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Education (COE)','2016-09-03 11:58:49'),(12,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Allied and Health Sciences (COAHS)','2016-09-03 11:59:04'),(13,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','College of Maritime Leadership Innovation (CMLI)','2016-09-03 11:59:17'),(14,'Independent','','/devcom/VotingSystem/images-data/classprofile.png','Center of Human Kinesthetics (CHK)','2016-09-03 11:59:27');
/*!40000 ALTER TABLE `partylist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-03 15:41:55
