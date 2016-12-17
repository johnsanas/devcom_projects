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
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college` varchar(200) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `date_added` datetime NOT NULL,
  `college_abr` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college`
--

LOCK TABLES `college` WRITE;
/*!40000 ALTER TABLE `college` DISABLE KEYS */;
INSERT INTO `college` VALUES (7,'College of Arts and Sciences (CAS)','/devcom/VotingSystem/images-data/CAS.jpg','0000-00-00 00:00:00','CAS'),(8,'College of Business Administration (CBA) ','/devcom/VotingSystem/images-data/CBA.jpg','0000-00-00 00:00:00','CBA'),(9,'College of Broadcast and Digital Arts (CBDA)','/devcom/VotingSystem/images-data/CBDA.jpg','0000-00-00 00:00:00','CBDA'),(10,'College of Computer Science (CCS)','/devcom/VotingSystem/images-data/CCS.jpg','0000-00-00 00:00:00','CCS'),(11,'College of Construction Science and Civil Engineering (CCSCE)','/devcom/VotingSystem/images-data/CCSCE.jpg','0000-00-00 00:00:00','CCSCE'),(12,'College of Technology Management (CTM)','/devcom/VotingSystem/images-data/umak.png','0000-00-00 00:00:00','CTM'),(13,'College of Governance and Public Policy (CGPP)','/devcom/VotingSystem/images-data/CGPP.jpg','0000-00-00 00:00:00','CGPP'),(14,'Center of Human Kinesthetics (CHK)','/devcom/VotingSystem/images-data/CHK.jpg','0000-00-00 00:00:00','CHK'),(15,'College of Maritime Leadership Innovation (CMLI)','/devcom/VotingSystem/images-data/umak.png','0000-00-00 00:00:00','CMLI'),(16,'College of Allied and Health Sciences (COAHS)','/devcom/VotingSystem/images-data/COAHS.jpg','0000-00-00 00:00:00','COAHS'),(17,'College of Education (COE)','/devcom/VotingSystem/images-data/COE.jpg','0000-00-00 00:00:00','COE');
/*!40000 ALTER TABLE `college` ENABLE KEYS */;
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
