-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sb
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atelier`
--

DROP TABLE IF EXISTS `atelier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atelier` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) NOT NULL,
  `nb_places` int(11) NOT NULL DEFAULT 10,
  `responsable` int(11) NOT NULL,
  `date_enregistrement` date NOT NULL,
  `date_heure` datetime NOT NULL,
  `duree` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`numero`),
  KEY `responsable` (`responsable`),
  CONSTRAINT `atelier_ibfk_1` FOREIGN KEY (`responsable`) REFERENCES `responsable` (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atelier`
--

LOCK TABLES `atelier` WRITE;
/*!40000 ALTER TABLE `atelier` DISABLE KEYS */;
INSERT INTO `atelier` VALUES (1,'Liquide vaisselle',8,2,'2022-10-13','2022-10-19 10:30:00',2),(2,'Détachant Linge',10,1,'2022-10-13','2022-10-19 14:00:00',2);
/*!40000 ALTER TABLE `atelier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mdp` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `mobile` char(10) DEFAULT NULL,
  `civilite` varchar(4) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'ONESTAS','Valentine','azerty','valentine.onestas@gmail.com','1995-11-08','15, rue de la gare','94130','Nogent s/Marne','0693530293',''),(3,'HAFIDI','Nadiya','azerty','n.hafidi@gmail.com','2000-04-01','11, bd de Strasbourg','94120','Fontenay s/bois','0711930388','Mme');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participer`
--

DROP TABLE IF EXISTS `participer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participer` (
  `client` int(11) NOT NULL,
  `atelier` int(11) NOT NULL,
  `date_inscription` date NOT NULL,
  PRIMARY KEY (`client`,`atelier`),
  KEY `atelier` (`atelier`),
  CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`numero`),
  CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`atelier`) REFERENCES `atelier` (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participer`
--

LOCK TABLES `participer` WRITE;
/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsable` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable`
--

LOCK TABLES `responsable` WRITE;
/*!40000 ALTER TABLE `responsable` DISABLE KEYS */;
INSERT INTO `responsable` VALUES (1,'DA SILVA','Maria','mdasilva','azerty'),(2,'JONES','Katarina','kjones','azerty');
/*!40000 ALTER TABLE `responsable` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-13  9:48:56
