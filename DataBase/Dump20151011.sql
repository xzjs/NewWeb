-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: localhost    Database: webdb
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `think_buy`
--

DROP TABLE IF EXISTS `think_buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `num` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `place_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_buy`
--

LOCK TABLES `think_buy` WRITE;
/*!40000 ALTER TABLE `think_buy` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_buy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_company`
--

DROP TABLE IF EXISTS `think_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `describe` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_company`
--

LOCK TABLES `think_company` WRITE;
/*!40000 ALTER TABLE `think_company` DISABLE KEYS */;
INSERT INTO `think_company` VALUES (1,'哈哈哈','xixixi',1);
/*!40000 ALTER TABLE `think_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_detail`
--

DROP TABLE IF EXISTS `think_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `format` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_detail`
--

LOCK TABLES `think_detail` WRITE;
/*!40000 ALTER TABLE `think_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_place`
--

DROP TABLE IF EXISTS `think_place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_place`
--

LOCK TABLES `think_place` WRITE;
/*!40000 ALTER TABLE `think_place` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_product`
--

DROP TABLE IF EXISTS `think_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_product`
--

LOCK TABLES `think_product` WRITE;
/*!40000 ALTER TABLE `think_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_quote`
--

DROP TABLE IF EXISTS `think_quote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buy_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_quote`
--

LOCK TABLES `think_quote` WRITE;
/*!40000 ALTER TABLE `think_quote` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_quote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_support`
--

DROP TABLE IF EXISTS `think_support`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `photo` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_support`
--

LOCK TABLES `think_support` WRITE;
/*!40000 ALTER TABLE `think_support` DISABLE KEYS */;
INSERT INTO `think_support` VALUES (1,NULL,5,'1444475093.jpg','烟台苹果'),(2,NULL,5,'1444475896.jpg','苹果'),(3,1,5,'1444476051.jpg','苹果');
/*!40000 ALTER TABLE `think_support` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_user`
--

DROP TABLE IF EXISTS `think_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_user`
--

LOCK TABLES `think_user` WRITE;
/*!40000 ALTER TABLE `think_user` DISABLE KEYS */;
INSERT INTO `think_user` VALUES (1,'1@qq.com','c4ca4238a0b923820dcc509a6f75849b',NULL,NULL),(2,'2@qq.com','c4ca4238a0b923820dcc509a6f75849b',NULL,NULL),(3,'3@qq.com','c4ca4238a0b923820dcc509a6f75849b',NULL,NULL);
/*!40000 ALTER TABLE `think_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-11 22:30:13
