-- MySQL dump 10.13  Distrib 5.6.25, for Win32 (x86)
--
-- Host: localhost    Database: mmu2016
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,0,0,'Aldwin','Labrador'),(2,1,0,'Kiers','Labrador'),(4,0,0,'Kim patrick','Verde');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_number` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(175) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `college` varchar(10) NOT NULL,
  `id_number` varchar(8) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `candidate_img` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidates`
--

LOCK TABLES `candidates` WRITE;
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
INSERT INTO `candidates` VALUES (1,1,'Roni','','Cruz','Bachelor','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate1.jpg'),(2,2,'Daniele','','Bigcas','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate2.jpg'),(3,3,'Christine','','Lerma','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate3.jpg'),(4,4,'Christine','','Moncada','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate4.jpg'),(5,5,'Mayline','','Penoliar','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate5.jpg'),(6,6,'Ana Cris','','De Jesus','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate6.jpg'),(7,7,'Janine','','Anago','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate7.jpg'),(8,8,'Christine','','Digas','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate8.jpg'),(9,9,'Deborah','','Macapagal','Bachelor o','K11','Female','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate9.jpg'),(10,1,'John Paul','','Obiar','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate1.jpg'),(11,2,'Jay-Ar','','Patalinghug','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate2.jpg'),(12,3,'Kim Irvin','','Pardo','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate3.jpg'),(13,4,'Gerald','','Capil','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate4.jpg'),(14,5,'Ronald','','Mendoz','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate5.jpg'),(15,6,'Carlo','','Salaya','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate6.jpg'),(16,7,'Richard','','De Leon','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate7.jpg'),(17,8,'Christian Van','','Supe','Bachelor o','K11','Male','/devcom_projects/MMU_2016/uploadedimg/MaleCandidate8.jpg'),(18,12,'kim patrick','','verde','CCS','K11','Male','/devcom_projects/MMU_2016/uploadedimg/FemaleCandidate4.jpg');
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `judges`
--

DROP TABLE IF EXISTS `judges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `judges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `is_activated` int(1) NOT NULL,
  `access_key` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `judges`
--

LOCK TABLES `judges` WRITE;
/*!40000 ALTER TABLE `judges` DISABLE KEYS */;
INSERT INTO `judges` VALUES (1,'Ray Vincent Phillip','Villaver','Developer','Developer',1,'1234');
/*!40000 ALTER TABLE `judges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL,
  `judge_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votes`
--

LOCK TABLES `votes` WRITE;
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
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

-- Dump completed on 2016-12-16  2:50:04
