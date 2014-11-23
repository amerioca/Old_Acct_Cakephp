-- MySQL dump 10.13  Distrib 5.5.34, for osx10.6 (i386)
--
-- Host: localhost    Database: acct
-- ------------------------------------------------------
-- Server version	5.5.34-log

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
-- Current Database: `acct`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `acct` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `acct`;

--
-- Table structure for table `admin_credits`
--

DROP TABLE IF EXISTS `admin_credits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_credits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_credits`
--

LOCK TABLES `admin_credits` WRITE;
/*!40000 ALTER TABLE `admin_credits` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_credits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_deltas`
--

DROP TABLE IF EXISTS `audit_deltas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit_deltas` (
  `id` varchar(36) NOT NULL,
  `audit_id` varchar(36) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `old_value` text,
  `new_value` text,
  PRIMARY KEY (`id`),
  KEY `audit_id` (`audit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_deltas`
--

LOCK TABLES `audit_deltas` WRITE;
/*!40000 ALTER TABLE `audit_deltas` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_deltas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audits`
--

DROP TABLE IF EXISTS `audits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audits` (
  `id` varchar(36) NOT NULL,
  `event` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `entity_id` varchar(36) NOT NULL,
  `json_object` text NOT NULL,
  `description` text,
  `source_id` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audits`
--

LOCK TABLES `audits` WRITE;
/*!40000 ALTER TABLE `audits` DISABLE KEYS */;
/*!40000 ALTER TABLE `audits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barmen`
--

DROP TABLE IF EXISTS `barmen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barmen` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barmen`
--

LOCK TABLES `barmen` WRITE;
/*!40000 ALTER TABLE `barmen` DISABLE KEYS */;
/*!40000 ALTER TABLE `barmen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bars`
--

DROP TABLE IF EXISTS `bars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bars`
--

LOCK TABLES `bars` WRITE;
/*!40000 ALTER TABLE `bars` DISABLE KEYS */;
INSERT INTO `bars` VALUES (1,'1'),(2,'2'),(3,'3'),(4,'4');
/*!40000 ALTER TABLE `bars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Domestic Drinks','2014-09-15 04:16:21','2014-09-15 04:20:12',1),(2,'Imported Drinks','2014-09-15 04:16:39','2014-09-15 04:16:39',1),(3,'Specialty Drinks','2014-09-15 04:37:40','2014-09-15 04:37:40',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit_types`
--

DROP TABLE IF EXISTS `credit_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credit_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit_types`
--

LOCK TABLES `credit_types` WRITE;
/*!40000 ALTER TABLE `credit_types` DISABLE KEYS */;
INSERT INTO `credit_types` VALUES (1,'Admin'),(2,'Cron'),(3,'Internet'),(4,'Kiosk'),(5,'Employee'),(6,'Entrance Fee'),(7,'Entrance Consumption');
/*!40000 ALTER TABLE `credit_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credits`
--

DROP TABLE IF EXISTS `credits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_group_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `credit_type_id` int(11) DEFAULT NULL,
  `promoter_id` int(11) DEFAULT NULL,
  `admin_credit_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`user_id`),
  KEY `id_idx2` (`admin_credit_id`),
  KEY `id_idx1` (`promoter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credits`
--

LOCK TABLES `credits` WRITE;
/*!40000 ALTER TABLE `credits` DISABLE KEYS */;
INSERT INTO `credits` VALUES (1,0,5,-20,6,0,1,'2014-11-19 14:27:09','2014-11-19 14:27:09'),(2,0,5,20,7,0,1,'2014-11-19 14:27:09','2014-11-19 14:27:09'),(3,0,5,20,6,0,1,'2014-11-19 14:27:09','2014-11-19 14:27:09'),(4,0,5,10,5,0,1,'2014-11-19 14:27:10','2014-11-19 14:27:10'),(5,0,5,-50,6,0,1,'2014-11-19 14:28:34','2014-11-19 14:28:34'),(6,0,5,20,7,0,1,'2014-11-19 14:28:35','2014-11-19 14:28:35'),(7,0,5,50,6,0,1,'2014-11-19 14:28:35','2014-11-19 14:28:35'),(8,0,5,0,5,0,1,'2014-11-19 14:28:35','2014-11-19 14:28:35'),(9,0,5,0,6,0,1,'2014-11-19 14:33:24','2014-11-19 14:33:24'),(10,0,5,0,7,0,1,'2014-11-19 14:33:24','2014-11-19 14:33:24'),(11,0,5,0,6,0,1,'2014-11-19 14:33:24','2014-11-19 14:33:24'),(12,0,5,20,5,0,1,'2014-11-19 14:33:24','2014-11-19 14:33:24'),(13,0,5,0,6,0,1,'2014-11-19 14:35:50','2014-11-19 14:35:50'),(14,0,5,20,5,0,1,'2014-11-19 14:35:50','2014-11-19 14:35:50'),(15,0,5,20,5,0,1,'2014-11-19 14:36:51','2014-11-19 14:36:51');
/*!40000 ALTER TABLE `credits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount_types`
--

DROP TABLE IF EXISTS `discount_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount_types`
--

LOCK TABLES `discount_types` WRITE;
/*!40000 ALTER TABLE `discount_types` DISABLE KEYS */;
INSERT INTO `discount_types` VALUES (1,'Percentage'),(2,'Credit');
/*!40000 ALTER TABLE `discount_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `discount_type_id` int(11) DEFAULT NULL,
  `percent` double DEFAULT NULL,
  `interval` int(11) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`discount_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts`
--

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` VALUES (1,'No Discount',1,0,NULL,NULL),(2,'10 Real Per Hour',2,NULL,60,'10'),(3,'10 Real Per Half Hour',2,NULL,30,'10'),(4,'30% Discount',1,30,NULL,NULL);
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discounts_users`
--

DROP TABLE IF EXISTS `discounts_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discounts_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_id` int(11) DEFAULT NULL COMMENT 'Who Made the Discount',
  `user_id` int(11) DEFAULT NULL,
  `comment` tinytext,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`user_id`),
  KEY `id_idx1` (`discount_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts_users`
--

LOCK TABLES `discounts_users` WRITE;
/*!40000 ALTER TABLE `discounts_users` DISABLE KEYS */;
INSERT INTO `discounts_users` VALUES (2,2,7,NULL),(3,2,8,NULL),(4,2,9,NULL);
/*!40000 ALTER TABLE `discounts_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrances`
--

DROP TABLE IF EXISTS `entrances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `location_id` int(4) DEFAULT NULL,
  `archived` tinyint(4) NOT NULL,
  `timer` int(20) NOT NULL,
  `entrancetimer` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrances`
--

LOCK TABLES `entrances` WRITE;
/*!40000 ALTER TABLE `entrances` DISABLE KEYS */;
INSERT INTO `entrances` VALUES (1,11,1,1,-1,0,'2014-09-18 10:37:35','2014-09-18 10:37:35'),(2,13,1,1,-1,0,'2014-09-18 10:37:41','2014-09-18 10:37:41'),(3,13,0,1,0,0,'2014-09-18 10:37:44','2014-09-18 10:37:44'),(4,11,0,1,0,0,'2014-09-18 15:06:00','2014-09-18 15:06:00'),(5,13,1,1,-1,0,'2014-09-18 15:17:56','2014-09-18 15:17:56'),(6,11,1,1,-1,0,'2014-09-19 20:11:26','2014-09-19 20:11:26'),(7,11,0,1,0,0,'2014-09-19 20:15:17','2014-09-19 20:15:17'),(8,11,1,1,-1,0,'2014-09-19 20:15:31','2014-09-19 20:15:31'),(9,11,0,1,0,0,'2014-09-19 20:15:38','2014-09-19 20:15:38'),(10,11,1,0,0,0,'2014-09-19 20:15:52','2014-09-19 20:15:52'),(11,5,1,1,-1,0,'2014-09-26 23:10:04','2014-09-26 23:10:04'),(12,5,0,1,0,0,'2014-09-26 23:11:54','2014-09-26 23:11:54'),(13,5,1,1,-1,0,'2014-09-26 23:13:26','2014-09-26 23:13:26'),(14,5,0,1,0,0,'2014-09-26 23:14:48','2014-09-26 23:14:48'),(15,5,1,1,-1,0,'2014-09-26 23:14:57','2014-09-26 23:14:57'),(16,5,0,1,0,0,'2014-09-27 15:39:07','2014-09-27 15:39:07'),(17,5,1,1,-1,0,'2014-09-27 15:40:08','2014-09-27 15:40:08'),(18,5,0,1,0,0,'2014-09-27 18:11:07','2014-09-27 18:11:07'),(19,5,1,1,-1,0,'2014-09-27 18:12:02','2014-09-27 18:12:02'),(20,4,1,1,-1,0,'2014-09-27 18:15:33','2014-09-27 18:15:33'),(21,3,1,1,-1,0,'2014-09-27 18:34:03','2014-09-27 18:34:03'),(22,6,1,1,-1,0,'2014-09-27 18:40:06','2014-09-27 18:40:06'),(23,6,0,1,0,0,'2014-09-27 18:40:40','2014-09-27 18:40:40'),(24,3,0,1,0,0,'2014-09-27 18:42:47','2014-09-27 18:42:47'),(25,3,1,1,-1,0,'2014-09-27 18:42:52','2014-09-27 18:42:52'),(26,3,0,1,0,0,'2014-09-27 18:42:56','2014-09-27 18:42:56'),(27,3,1,1,-1,0,'2014-09-28 13:41:38','2014-09-28 13:41:38'),(28,3,0,1,0,0,'2014-09-28 13:42:38','2014-09-28 13:42:38'),(29,3,1,1,-1,0,'2014-09-28 13:43:17','2014-09-28 13:43:17'),(30,3,0,1,0,0,'2014-09-28 13:43:59','2014-09-28 13:43:59'),(31,3,1,0,-1,0,'2014-09-28 13:44:21','2014-09-28 13:44:21'),(32,5,0,1,0,0,'2014-09-28 15:08:13','2014-09-28 15:08:13'),(33,5,1,0,-1,0,'2014-09-28 15:08:17','2014-09-28 15:08:17'),(34,9,1,0,0,0,'2014-09-28 15:08:18','2014-09-28 15:08:18'),(35,4,1,0,0,0,'2014-09-28 15:08:20','2014-09-28 15:08:20'),(36,6,1,0,-1,0,'2014-09-28 15:08:23','2014-09-28 15:08:23'),(51,8,1,0,0,0,'2014-09-29 12:16:50','2014-09-29 12:16:50'),(52,4,0,0,0,0,'2014-09-29 12:27:59','2014-09-29 12:27:59'),(53,4,1,0,0,0,'2014-09-29 12:30:49','2014-09-29 12:30:49'),(54,8,0,0,0,0,'2014-09-29 12:32:31','2014-09-29 12:32:31'),(55,8,1,0,0,0,'2014-09-29 12:32:45','2014-09-29 12:32:45'),(56,6,0,0,0,0,'2014-09-29 12:34:57','2014-09-29 12:34:57'),(57,6,1,0,0,0,'2014-09-29 12:35:05','2014-09-29 12:35:05'),(58,5,0,0,0,0,'2014-09-29 12:35:18','2014-09-29 12:35:18'),(59,5,1,0,0,0,'2014-09-29 12:35:20','2014-09-29 12:35:20'),(60,4,0,0,0,0,'2014-09-29 12:35:25','2014-09-29 12:35:25'),(61,4,1,0,0,0,'2014-09-29 12:35:32','2014-09-29 12:35:32'),(62,3,0,0,0,0,'2014-09-29 19:38:29','2014-09-29 19:38:29'),(63,3,1,0,0,0,'2014-09-29 19:38:44','2014-09-29 19:38:44'),(64,4,0,0,0,0,'2014-10-03 11:31:14','2014-10-03 11:31:14'),(65,4,NULL,0,0,0,'2014-10-03 11:31:59','2014-10-03 11:31:59'),(66,4,1,0,0,0,'2014-10-03 11:44:09','2014-10-03 11:44:09'),(67,4,0,0,0,0,'2014-10-03 11:45:09','2014-10-03 11:45:09'),(68,4,1,0,0,0,'2014-10-03 11:45:12','2014-10-03 11:45:12'),(69,4,0,0,0,0,'2014-10-03 11:46:57','2014-10-03 11:46:57'),(70,4,1,0,0,0,'2014-10-03 11:47:25','2014-10-03 11:47:25'),(71,7,1,0,0,0,'2014-10-03 12:10:10','2014-10-03 12:10:10'),(72,4,0,0,0,0,'2014-10-03 12:10:22','2014-10-03 12:10:22'),(73,4,1,0,0,0,'2014-10-03 12:10:29','2014-10-03 12:10:29'),(74,5,0,0,0,0,'2014-10-03 12:10:33','2014-10-03 12:10:33'),(75,5,1,0,0,0,'2014-10-03 12:10:35','2014-10-03 12:10:35'),(76,8,0,0,0,0,'2014-10-03 12:10:37','2014-10-03 12:10:37'),(77,8,1,0,0,0,'2014-10-03 12:10:39','2014-10-03 12:10:39'),(78,3,0,0,0,0,'2014-10-03 12:10:42','2014-10-03 12:10:42'),(79,3,1,0,0,0,'2014-10-03 12:10:44','2014-10-03 12:10:44'),(80,6,0,0,0,0,'2014-10-03 12:10:46','2014-10-03 12:10:46'),(81,6,1,0,0,0,'2014-10-03 12:10:48','2014-10-03 12:10:48'),(82,4,0,0,0,0,'2014-10-03 19:08:11','2014-10-03 19:08:11'),(83,5,0,0,0,0,'2014-10-03 19:09:51','2014-10-03 19:09:51'),(84,7,0,0,0,0,'2014-10-03 19:10:01','2014-10-03 19:10:01'),(85,7,1,0,0,0,'2014-10-03 19:10:04','2014-10-03 19:10:04'),(86,7,0,0,0,0,'2014-10-03 19:10:07','2014-10-03 19:10:07'),(87,3,0,0,0,0,'2014-10-03 19:23:34','2014-10-03 19:23:34'),(88,6,0,0,0,0,'2014-10-03 19:23:36','2014-10-03 19:23:36'),(89,11,0,0,0,0,'2014-10-03 20:47:35','2014-10-03 20:47:35'),(90,7,1,0,0,0,'2014-10-03 20:48:06','2014-10-03 20:48:06'),(91,7,0,0,0,0,'2014-10-03 20:48:10','2014-10-03 20:48:10'),(92,8,0,0,0,0,'2014-10-03 20:48:14','2014-10-03 20:48:14'),(93,4,1,0,0,0,'2014-10-03 21:55:48','2014-10-03 21:55:48'),(94,13,0,0,0,0,'2014-10-03 21:55:50','2014-10-03 21:55:50'),(95,10,1,0,0,0,'2014-10-03 21:55:55','2014-10-03 21:55:55'),(96,13,1,0,0,0,'2014-10-03 21:56:03','2014-10-03 21:56:03'),(97,13,0,0,0,0,'2014-10-03 21:56:05','2014-10-03 21:56:05'),(98,13,1,0,0,0,'2014-10-03 21:56:33','2014-10-03 21:56:33'),(99,9,0,0,0,0,'2014-10-03 22:08:04','2014-10-03 22:08:04'),(100,9,1,0,0,0,'2014-10-03 22:08:12','2014-10-03 22:08:12'),(101,11,1,0,0,0,'2014-10-05 04:49:53','2014-10-05 04:49:53'),(107,7,1,0,0,0,'2014-10-07 22:46:04','2014-10-07 22:46:04'),(108,1,1,0,0,0,'2014-10-07 23:02:46','2014-10-07 23:02:46'),(109,1,0,0,0,0,'2014-10-07 23:07:49','2014-10-07 23:07:49'),(110,1,1,0,0,0,'2014-10-07 23:18:31','2014-10-07 23:18:31'),(111,1,0,0,0,0,'2014-10-07 23:20:06','2014-10-07 23:20:06'),(112,1,1,0,0,0,'2014-10-07 23:25:35','2014-10-07 23:25:35'),(113,4,0,0,0,0,'2014-10-07 23:28:29','2014-10-07 23:28:29'),(114,1,0,0,0,0,'2014-10-07 23:30:06','2014-10-07 23:30:06'),(115,4,1,0,0,0,'2014-10-07 23:30:26','2014-10-07 23:30:26'),(116,4,0,0,0,0,'2014-10-07 23:31:22','2014-10-07 23:31:22'),(117,4,1,0,0,0,'2014-10-07 23:37:55','2014-10-07 23:37:55'),(118,4,0,0,0,0,'2014-10-07 23:38:23','2014-10-07 23:38:23'),(119,4,1,0,0,0,'2014-10-07 23:39:05','2014-10-07 23:39:05'),(120,4,0,0,0,0,'2014-10-07 23:43:20','2014-10-07 23:43:20'),(121,4,1,0,0,0,'2014-10-07 23:43:54','2014-10-07 23:43:54'),(122,4,0,0,0,0,'2014-10-07 23:45:40','2014-10-07 23:45:40'),(123,4,1,0,0,0,'2014-10-07 23:49:00','2014-10-07 23:49:00'),(124,4,0,0,0,0,'2014-10-07 23:49:09','2014-10-07 23:49:09'),(125,19,1,0,0,0,'2014-10-07 23:51:32','2014-10-07 23:51:32'),(126,19,0,0,0,0,'2014-10-07 23:51:37','2014-10-07 23:51:37');
/*!40000 ALTER TABLE `entrances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `enterencefee` double DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `i18n`
--

DROP TABLE IF EXISTS `i18n`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `i18n`
--

LOCK TABLES `i18n` WRITE;
/*!40000 ALTER TABLE `i18n` DISABLE KEYS */;
INSERT INTO `i18n` VALUES (1,'en','Order',1,'content','Content');
/*!40000 ALTER TABLE `i18n` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `ml` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventories`
--

LOCK TABLES `inventories` WRITE;
/*!40000 ALTER TABLE `inventories` DISABLE KEYS */;
INSERT INTO `inventories` VALUES (1,1,145,'1000','2014-09-19 14:54:02','2014-09-19 14:54:02'),(2,6,78,'1000','2014-09-19 15:28:41','2014-09-19 15:28:41'),(3,6,78,'1000','2014-09-19 15:28:41','2014-09-19 15:28:41'),(4,6,78,'1000','2014-09-19 15:28:41','2014-09-19 15:28:41'),(5,6,78,'1000','2014-09-19 15:28:41','2014-09-19 15:28:41'),(6,6,78,'1000','2014-09-19 15:28:41','2014-09-19 15:28:41'),(7,6,78,'1000','2014-09-19 15:29:39','2014-09-19 15:29:39'),(8,6,78,'1000','2014-09-19 15:29:39','2014-09-19 15:29:39'),(9,6,78,'1000','2014-09-19 15:29:39','2014-09-19 15:29:39'),(10,6,78,'1000','2014-09-19 15:29:39','2014-09-19 15:29:39'),(11,6,78,'1000','2014-09-19 15:29:39','2014-09-19 15:29:39'),(12,6,78,'1000','2014-09-19 15:30:35','2014-09-19 15:30:35'),(13,6,78,'1000','2014-09-19 15:30:35','2014-09-19 15:30:35'),(14,6,78,'1000','2014-09-19 15:30:35','2014-09-19 15:30:35'),(15,6,78,'1000','2014-09-19 15:30:35','2014-09-19 15:30:35'),(16,6,78,'1000','2014-09-19 15:30:35','2014-09-19 15:30:35'),(17,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(18,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(19,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(20,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(21,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(22,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(23,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(24,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(25,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(26,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(27,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(28,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(29,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(30,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(31,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(32,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(33,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(34,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(35,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(36,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(37,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(38,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(39,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(40,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(41,6,45,'1000','2014-09-19 15:34:53','2014-09-19 15:34:53'),(42,36,50,'1000','2014-10-07 22:35:08','2014-10-07 22:35:08'),(43,36,50,'1000','2014-10-07 22:35:08','2014-10-07 22:35:08'),(44,36,50,'1000','2014-10-07 22:35:08','2014-10-07 22:35:08'),(45,36,50,'1000','2014-10-07 22:35:08','2014-10-07 22:35:08');
/*!40000 ALTER TABLE `inventories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `ml` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,1,1,'Bohemia Can',355,'2014-09-15 04:35:36','2014-09-16 03:21:14'),(2,2,1,'Gen and Tonic (Beefeater)',355,'2014-09-15 04:38:58','2014-09-15 04:38:58'),(3,2,1,'Chivas Regal 12',50,'2014-09-25 00:00:37','2014-09-25 00:01:35');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items_inventories`
--

DROP TABLE IF EXISTS `items_inventories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items_inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx1` (`item_id`),
  KEY `id_idx` (`inventory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items_inventories`
--

LOCK TABLES `items_inventories` WRITE;
/*!40000 ALTER TABLE `items_inventories` DISABLE KEYS */;
INSERT INTO `items_inventories` VALUES (2,1,3);
/*!40000 ALTER TABLE `items_inventories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labels`
--

DROP TABLE IF EXISTS `labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `labels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labels`
--

LOCK TABLES `labels` WRITE;
/*!40000 ALTER TABLE `labels` DISABLE KEYS */;
/*!40000 ALTER TABLE `labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Kalabria');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_tokens`
--

DROP TABLE IF EXISTS `login_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `token` char(32) DEFAULT NULL,
  `duration` varchar(32) DEFAULT NULL,
  `used` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_tokens`
--

LOCK TABLES `login_tokens` WRITE;
/*!40000 ALTER TABLE `login_tokens` DISABLE KEYS */;
INSERT INTO `login_tokens` VALUES (66,1,'8c03987a117d544d355f8e141ce6fa02','2 weeks',1,'2014-09-14 20:23:10','2014-09-28 20:23:10'),(67,1,'e3b51b1e644b00d369ba4e602f683e82','2 weeks',1,'2014-09-14 22:20:48','2014-09-28 22:20:48'),(68,1,'c5619a18eb2ef5017259abe3a04247d6','2 weeks',1,'2014-09-15 02:37:45','2014-09-29 02:37:45'),(69,1,'04bd348203541543c195a5c07831525e','2 weeks',NULL,'2014-09-15 09:27:41','2014-09-29 09:27:41'),(70,1,'e66321a53cbecc80e64fb686bdc28020','2 weeks',NULL,'2014-09-15 16:01:44','2014-09-29 16:01:44'),(71,1,'57e6dc99e9e69f0bc33e59eb2ceb4698','2 weeks',NULL,'2014-09-15 22:06:29','2014-09-29 22:06:29'),(72,1,'fa8dcd88d61d20edd1d40f91ea6a0980','2 weeks',NULL,'2014-09-16 01:59:21','2014-09-30 01:59:21'),(73,1,'d803d5469304fce1da641a1e99045343','2 weeks',NULL,'2014-09-16 03:19:53','2014-09-30 03:19:53'),(74,1,'88e92e6793a000e38019898e678665b6','2 weeks',NULL,'2014-09-17 15:30:03','2014-10-01 15:30:03'),(75,1,'00266d590f36ca86aad5112f5e9bc9e4','2 weeks',NULL,'2014-09-17 17:23:24','2014-10-01 17:23:24'),(76,1,'f8433c32d06c0d23b15f3cc201649623','2 weeks',NULL,'2014-09-17 19:30:13','2014-10-01 19:30:13'),(77,1,'c1cc9eaf737f8fa58f30bc4ff929fde4','2 weeks',NULL,'2014-09-17 23:32:30','2014-10-01 23:32:30'),(78,1,'ecaef4329a216c52876c3dc0c3ec7e7f','2 weeks',NULL,'2014-09-18 08:32:53','2014-10-02 08:32:53'),(79,1,'02a17d3e0bc402585a58a67b29ff905e','2 weeks',NULL,'2014-09-18 13:26:44','2014-10-02 13:26:44'),(80,1,'66140372bc8c2192e9f5f60374da388d','2 weeks',NULL,'2014-09-18 17:25:15','2014-10-02 17:25:15'),(81,1,'5805783c95d7bfd725ea9ba913da9713','2 weeks',NULL,'2014-09-19 14:10:47','2014-10-03 14:10:47'),(82,1,'f3ed15469545940bc9715661bcf2d0cf','2 weeks',NULL,'2014-09-19 18:29:28','2014-10-03 18:29:28'),(83,1,'c24705b3cea1cc09e427cc11bdacd2b7','2 weeks',NULL,'2014-09-19 19:20:16','2014-10-03 19:20:16'),(84,1,'434a9d05de1b0ae7486963070ddaa2a9','2 weeks',NULL,'2014-09-21 20:36:00','2014-10-05 20:36:00'),(85,1,'edb8ebb282f24176d19f906518bf0314','2 weeks',NULL,'2014-09-22 14:22:49','2014-10-06 14:22:49'),(86,1,'5cf29cf0b5271b1ed54c8bf2f5ca9c2f','2 weeks',NULL,'2014-09-22 16:13:47','2014-10-06 16:13:47'),(87,1,'e385e937d5e06b31c0bf21f20097f6a3','2 weeks',NULL,'2014-09-22 21:01:41','2014-10-06 21:01:41'),(88,1,'55b061eb304ec9317c78c09aebcc1a4b','2 weeks',NULL,'2014-09-23 16:43:52','2014-10-07 16:43:52'),(89,1,'9ccac6a6b107b6948c2a7f842ce41245','2 weeks',NULL,'2014-09-23 19:10:30','2014-10-07 19:10:30'),(90,1,'a34e445fc9e275df4cb170d0f8d3196f','2 weeks',NULL,'2014-09-23 23:10:47','2014-10-07 23:10:47'),(91,1,'3ce6974395978479241161ef1e8b9bf0','2 weeks',NULL,'2014-09-24 16:22:08','2014-10-08 16:22:08'),(92,1,'bcc42c8d0bcae06a17fac489ee97a99e','2 weeks',NULL,'2014-09-24 18:00:00','2014-10-08 18:00:00'),(93,1,'72b3ad579866c786b01fe9a277b2552f','2 weeks',NULL,'2014-09-24 18:30:17','2014-10-08 18:30:17'),(94,1,'d37501fd776b3154d79745a0816fc5d9','2 weeks',NULL,'2014-09-24 18:54:25','2014-10-08 18:54:25'),(95,1,'b31f4ea0b28e1842a0c0c9be3f488c8e','2 weeks',NULL,'2014-09-24 18:57:26','2014-10-08 18:57:26'),(96,1,'c3cc7e684237d852742bd7128475d8b8','2 weeks',NULL,'2014-09-24 18:58:54','2014-10-08 18:58:54'),(97,1,'caf9c1b8228d4a399517761f64aa05c9','2 weeks',NULL,'2014-09-24 22:05:40','2014-10-08 22:05:40'),(98,1,'35122814f84d62b7d3d69562472d72d5','2 weeks',NULL,'2014-09-25 02:08:27','2014-10-09 02:08:27'),(99,1,'c825c86bba3223bbcdef6770ab2a0bde','2 weeks',NULL,'2014-09-25 11:59:48','2014-10-09 11:59:48'),(100,1,'c37748799fc21d2699c06b0219b6fd96','2 weeks',NULL,'2014-09-25 13:06:51','2014-10-09 13:06:51'),(101,1,'83d189ea2e17823b1898a7ca83bd1962','2 weeks',NULL,'2014-09-25 16:04:09','2014-10-09 16:04:09'),(102,1,'16626b1ccad4c4d8bf3b7ba748bd7014','2 weeks',NULL,'2014-09-25 20:24:33','2014-10-09 20:24:33'),(103,1,'e9ea6aeada14a06e8b50deff3be341ca','2 weeks',NULL,'2014-09-25 22:47:05','2014-10-09 22:47:05'),(104,1,'a346fd639cbf83beed4f776773927c3e','2 weeks',NULL,'2014-09-26 22:55:46','2014-10-10 22:55:46'),(105,1,'1357c5306ba038255ca7f1481ea1d8ea','2 weeks',NULL,'2014-09-27 15:38:51','2014-10-11 15:38:51'),(106,1,'f4b7662fe2ce0dde29af4eb13fa0959f','2 weeks',NULL,'2014-09-27 22:34:39','2014-10-11 22:34:39'),(107,1,'75dad6d0e6530111e7d0a0a0bf21daab','2 weeks',NULL,'2014-09-28 05:05:44','2014-10-12 05:05:44'),(108,1,'00129d6cc6f2cb7e7599dc430169883f','2 weeks',NULL,'2014-09-28 11:39:36','2014-10-12 11:39:36'),(109,1,'58b34cbfa3f05de43c4f2e65faec39fa','2 weeks',NULL,'2014-09-28 15:52:47','2014-10-12 15:52:47'),(110,4,'5c1cfbfb58648be6eef2d149a6feb83d','2 weeks',NULL,'2014-09-29 08:48:05','2014-10-13 08:48:05'),(111,1,'0b282583ae698a6537609ad4cdadb1a6','2 weeks',NULL,'2014-09-29 09:19:42','2014-10-13 09:19:42'),(112,4,'5f9dc1a01fb57000696d4ea3ffdf7534','2 weeks',NULL,'2014-09-29 09:37:36','2014-10-13 09:37:36'),(113,1,'4615b76ea24726b22db56c93fcb91669','2 weeks',NULL,'2014-09-29 11:17:29','2014-10-13 11:17:29'),(114,1,'68da09a6c9f79aed4f059ca751ea0d5d','2 weeks',NULL,'2014-09-29 13:41:43','2014-10-13 13:41:43'),(115,1,'cdc663f95b8b6c2693eebf667eff6759','2 weeks',NULL,'2014-09-29 18:42:08','2014-10-13 18:42:08'),(116,1,'fc8ed7450ced610ea2b92c71d81e816f','2 weeks',NULL,'2014-09-30 11:33:59','2014-10-14 11:33:59'),(117,1,'f21de4535d8aa8bf1b680b668a23497b','2 weeks',NULL,'2014-09-30 19:28:53','2014-10-14 19:28:53'),(118,1,'036e164eb58828227802564c18f36212','2 weeks',NULL,'2014-09-30 19:29:52','2014-10-14 19:29:52'),(119,1,'4b517e5c162fdf8767bbfb897a0110c7','2 weeks',NULL,'2014-10-01 19:26:01','2014-10-15 19:26:01'),(120,1,'60b8ae3904aa36228ac6bbcbebd37b97','2 weeks',NULL,'2014-10-01 19:30:24','2014-10-15 19:30:24'),(121,1,'2885a0e7e13597fed705c4a668892584','2 weeks',NULL,'2014-10-01 23:39:42','2014-10-15 23:39:42'),(122,1,'091e8d1eed5e8a83b6158e4ac7c7dce6','2 weeks',NULL,'2014-10-02 13:10:21','2014-10-16 13:10:21'),(123,1,'64c141c19a4ad1683d1b4daea053e784','2 weeks',NULL,'2014-10-02 17:19:07','2014-10-16 17:19:07'),(124,1,'6fbead72baaf912474702135620c63ad','2 weeks',NULL,'2014-10-02 21:26:06','2014-10-16 21:26:06'),(125,1,'86f7dc77dd947e6b6995d8ba9b30d31e','2 weeks',NULL,'2014-10-03 02:25:04','2014-10-17 02:25:04'),(126,1,'379d40bd15e0d5d4a99af3a64f92e248','2 weeks',NULL,'2014-10-03 10:04:11','2014-10-17 10:04:11'),(127,1,'3c734d519cd8cc5257fed5ac936a60f6','2 weeks',NULL,'2014-10-03 14:17:02','2014-10-17 14:17:02'),(128,1,'05ab3700d8ee7298a5ac6f12dc68cde6','2 weeks',NULL,'2014-10-03 14:51:21','2014-10-17 14:51:21'),(129,1,'c5466a610ab22e843ebe53e2eb54b132','2 weeks',NULL,'2014-10-03 19:06:41','2014-10-17 19:06:41'),(130,1,'fb9f880788a8bb4d7aecd3b386956fe1','2 weeks',NULL,'2014-10-05 04:49:32','2014-10-19 04:49:32'),(131,1,'f29e4e10c0f917cde9139d33dae3a832','2 weeks',NULL,'2014-10-06 17:43:35','2014-10-20 17:43:35'),(132,1,'4948687de9ab6bda5d7de526cd2ff749','2 weeks',NULL,'2014-10-06 17:51:41','2014-10-20 17:51:41'),(133,1,'6c7885adec1a87418bcfda5f5b652f1d','2 weeks',NULL,'2014-10-06 21:47:05','2014-10-20 21:47:05'),(134,1,'7a2bd890b62a4fe9e251cc56bb71fda3','2 weeks',NULL,'2014-10-07 21:37:09','2014-10-21 21:37:09'),(135,1,'7a47bd7c948483a2e10f6a6f31d04cd7','2 weeks',NULL,'2014-10-07 21:38:40','2014-10-21 21:38:40'),(136,1,'878393fe92fc31fc2923d9b8aa8e6eef','2 weeks',NULL,'2014-10-08 14:28:38','2014-10-22 14:28:38'),(137,1,'cd07b081517f13310ac97322ba858c8a','2 weeks',NULL,'2014-10-08 20:05:08','2014-10-22 20:05:08'),(138,1,'db45bdda832d6ae17b365752043458fb','2 weeks',NULL,'2014-10-09 23:08:30','2014-10-23 23:08:30'),(139,1,'103df8b58c785aee85a339350ee338f7','2 weeks',NULL,'2014-10-10 11:36:28','2014-10-24 11:36:28'),(140,1,'bd6c2750a354af4d930be253204304ec','2 weeks',NULL,'2014-10-10 15:42:41','2014-10-24 15:42:41'),(141,1,'b71bfe1430153f9cb7e14dea13812038','2 weeks',NULL,'2014-10-10 19:43:36','2014-10-24 19:43:36'),(142,1,'37ca1a701297da589a1f41216b855226','2 weeks',NULL,'2014-10-10 21:03:50','2014-10-24 21:03:50'),(143,1,'5bae3b777c09dfbedff0be879a7dd914','2 weeks',NULL,'2014-10-11 14:19:35','2014-10-25 14:19:35'),(144,1,'c277a2b960171917d988f7f01911e692','2 weeks',NULL,'2014-10-11 18:20:14','2014-10-25 18:20:14'),(145,1,'ff8c7a8576a49f8d522ce069de6b30a5','2 weeks',NULL,'2014-10-11 22:22:02','2014-10-25 22:22:02'),(146,1,'f0658119da92aced85221b8d2afd626b','2 weeks',NULL,'2014-10-12 14:07:11','2014-10-26 14:07:11'),(147,1,'72e77550eca492757d6026498bcb2258','2 weeks',NULL,'2014-10-12 18:23:50','2014-10-26 18:23:50'),(148,4,'1f62c063c59a19c8ed0e75db32ddcc3d','2 weeks',NULL,'2014-10-13 00:46:29','2014-10-27 00:46:29'),(149,3,'4f411a6a899af9a12f89a85da96f64e1','2 weeks',NULL,'2014-10-13 00:47:58','2014-10-27 00:47:58'),(150,3,'0d0c4bf61de12478391395d879b4580a','2 weeks',NULL,'2014-10-13 00:51:20','2014-10-27 00:51:20'),(151,1,'4a486a490e122c888fb527e4e3f7917a','2 weeks',NULL,'2014-10-13 00:52:06','2014-10-27 00:52:06'),(152,1,'65eb0f6953a695954278a858d6100dd2','2 weeks',NULL,'2014-10-13 09:53:10','2014-10-27 09:53:10'),(153,1,'c2f9ebaaf01ddc42c0c2abd2e25b0c25','2 weeks',NULL,'2014-10-13 12:15:16','2014-10-27 12:15:16'),(154,1,'bd39271da675b9111c00ef8cdbbea9e7','2 weeks',NULL,'2014-10-13 12:50:11','2014-10-27 12:50:11'),(155,1,'e8223b3655556d72373b3022ba100c3c','2 weeks',NULL,'2014-10-13 16:21:13','2014-10-27 16:21:13'),(156,1,'96668d5ac01ed2eb90c93ff3a40e8a0d','2 weeks',NULL,'2014-10-14 16:38:05','2014-10-28 16:38:05'),(157,1,'b1a1bf5388d34331680f36df97254fa1','2 weeks',NULL,'2014-10-15 23:03:37','2014-10-29 23:03:37'),(158,1,'92acdf575f6379aa4701bb3228a1e135','2 weeks',NULL,'2014-10-18 19:27:35','2014-11-01 19:27:35'),(159,3,'2aba6b969890664ceb041c345e702ef7','2 weeks',NULL,'2014-10-20 00:53:28','2014-11-03 00:53:28'),(160,1,'8da038801a0d5b60755f0ad57b21113e','2 weeks',NULL,'2014-10-20 00:54:54','2014-11-03 00:54:54'),(161,1,'bc30da8caebbca61549d640bcd345ddc','2 weeks',NULL,'2014-10-21 09:55:15','2014-11-04 09:55:15'),(162,4,'eb9cc8999442c8cd3eb71cb59c6cf3b1','2 weeks',NULL,'2014-10-21 12:23:54','2014-11-04 12:23:54'),(163,1,'78d2520641488c18e0920eb815ea86fa','2 weeks',NULL,'2014-10-21 12:28:54','2014-11-04 12:28:54'),(164,1,'657102a5d36629079191091373bf8587','2 weeks',NULL,'2014-10-24 13:18:58','2014-11-07 13:18:58'),(165,1,'af34bb02055f0afd962b818126e84d34','2 weeks',NULL,'2014-11-08 18:40:42','2014-11-22 18:40:42'),(166,1,'6ebce962178059f674f4f8cabc6bad51','2 weeks',NULL,'2014-11-17 01:48:38','2014-12-01 01:48:38'),(167,1,'11f38d4d799383447e094c20b0467404','2 weeks',NULL,'2014-11-17 08:25:25','2014-12-01 08:25:25'),(168,1,'4617107d5889ec6020943b606d2842e0','2 weeks',NULL,'2014-11-18 12:02:15','2014-12-02 12:02:15'),(169,1,'dac95ee6d679334ff8dd91436d4946f6','2 weeks',NULL,'2014-11-18 16:39:23','2014-12-02 16:39:23'),(170,1,'2c8e485cf8c62eaf146c0bc35f484df8','2 weeks',NULL,'2014-11-18 20:39:23','2014-12-02 20:39:23'),(171,1,'697a0d5c63eeb7b726f97c4b61f75d0c','2 weeks',NULL,'2014-11-19 13:54:49','2014-12-03 13:54:49'),(172,1,'2ba8f4c71d2865ddb20c562186a10e07','2 weeks',NULL,'2014-11-19 16:18:37','2014-12-03 16:18:37'),(173,46,'042f88e6a56ad2fe5f939f0015d68f00','2 weeks',NULL,'2014-11-19 16:20:31','2014-12-03 16:20:31'),(174,1,'c5163586164d91be35f233265de4a859','2 weeks',NULL,'2014-11-19 19:08:24','2014-12-03 19:08:24'),(175,1,'caa9dca1ec52e21d3f674e2c33fb5a34','2 weeks',NULL,'2014-11-20 14:40:39','2014-12-04 14:40:39'),(176,1,'365e1b6d769ed7cf4c7de669fb3ae5fb','2 weeks',NULL,'2014-11-21 17:28:36','2014-12-05 17:28:36'),(177,1,'9df36f0f46bcd6c39f3a49ade1e08d37','2 weeks',NULL,'2014-11-22 15:13:05','2014-12-06 15:13:05');
/*!40000 ALTER TABLE `login_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managers`
--

LOCK TABLES `managers` WRITE;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;
/*!40000 ALTER TABLE `managers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maps`
--

DROP TABLE IF EXISTS `maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `followme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maps`
--

LOCK TABLES `maps` WRITE;
/*!40000 ALTER TABLE `maps` DISABLE KEYS */;
INSERT INTO `maps` VALUES (1,4,'<iframe name=\"fmeeframe\" width=\"500\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=http:%2F%2Fwww.followmee.com%2Fkml.aspx%3Ftoken%3D484f070f-6f62-4951-bc46-37cae506bbfb%26nc%3D123&amp;output=embed \"></iframe><br /><a href=\"http://www.followmee.com/mapx.aspx?token=484f070f-6f62-4951-bc46-37cae506bbfb\" >View GPS Tracks in Larger Map</a>'),(2,25,'<iframe name=\"fmeeframe\" width=\"500\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=http:%2F%2Fwww.followmee.com%2Fkml.aspx%3Ftoken%3D672b8294-6f83-43e7-ae37-ecbf495dd4db%26nc%3D123&amp;output=embed \"></iframe><br /><a href=\"http://www.followmee.com/mapx.aspx?token=672b8294-6f83-43e7-ae37-ecbf495dd4db\" >View GPS Tracks in Larger Map</a>'),(3,15,'<iframe name=\"fmeeframe\" width=\"500\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=http:%2F%2Fwww.followmee.com%2Fkml.aspx%3Ftoken%3D0fabb48d-227f-4123-afa1-95a30c79cd40%26nc%3D123&amp;output=embed \"></iframe><br /><a href=\"http://www.followmee.com/mapx.aspx?token=0fabb48d-227f-4123-afa1-95a30c79cd40\" >View GPS Tracks in Larger Map</a>'),(4,13,'<iframe name=\"fmeeframe\" width=\"500\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=http:%2F%2Fwww.followmee.com%2Fkml.aspx%3Ftoken%3D3f3f3091-42fe-4d2e-a0ad-ad7f690406e4%26nc%3D123&amp;output=embed&amp;z=13 \"></iframe><br /><a href=\"http://www.followmee.com/mapx.aspx?token=3f3f3091-42fe-4d2e-a0ad-ad7f690406e4\" >View GPS Tracks in Larger Map</a>');
/*!40000 ALTER TABLE `maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_groups`
--

DROP TABLE IF EXISTS `order_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_groups`
--

LOCK TABLES `order_groups` WRITE;
/*!40000 ALTER TABLE `order_groups` DISABLE KEYS */;
INSERT INTO `order_groups` VALUES (1,4,'15044885482','2014-10-06 14:32:44','2014-10-06 14:32:44'),(2,24,'55211973175','2014-10-10 12:29:04','2014-10-10 12:29:04'),(3,4,'15044885482','2014-10-10 19:57:21','2014-10-10 19:57:21'),(4,4,'15044885482','2014-10-10 20:07:36','2014-10-10 20:07:36'),(5,35,'147782','2014-10-10 20:43:28','2014-10-10 20:43:28'),(6,35,'147782','2014-10-10 20:48:00','2014-10-10 20:48:00'),(7,35,'147782','2014-10-10 20:54:56','2014-10-10 20:54:56'),(8,35,'147782','2014-10-10 22:05:02','2014-10-10 22:05:02'),(9,11,'3','2014-10-11 20:28:56','2014-10-11 20:28:56'),(10,4,'15044885482','2014-10-12 23:35:24','2014-10-12 23:35:24'),(11,4,'15044885482','2014-10-12 23:36:41','2014-10-12 23:36:41'),(12,4,'15044885482','2014-10-13 00:44:44','2014-10-13 00:44:44');
/*!40000 ALTER TABLE `order_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_types`
--

DROP TABLE IF EXISTS `order_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_types`
--

LOCK TABLES `order_types` WRITE;
/*!40000 ALTER TABLE `order_types` DISABLE KEYS */;
INSERT INTO `order_types` VALUES (1,1,'Teller #1'),(2,1,'Teller #2'),(3,1,'Teller #3'),(4,1,'Teller #4'),(5,1,'Internet');
/*!40000 ALTER TABLE `order_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_group_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `order_type_id` int(11) DEFAULT NULL,
  `barman_id` int(11) DEFAULT NULL,
  `bar_id` int(11) DEFAULT NULL,
  `waiter_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`customer_id`),
  KEY `id_idx1` (`waiter_id`),
  KEY `id_idx2` (`barman_id`),
  KEY `id_idx3` (`item_id`),
  KEY `id_idx4` (`order_group_id`),
  KEY `id_idx5` (`bar_id`),
  KEY `id_idx6` (`order_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,4,1,NULL,NULL,1,NULL,'2014-10-06 14:32:44','2014-10-06 14:32:44'),(2,1,4,1,NULL,NULL,1,NULL,'2014-10-06 14:32:44','2014-10-06 14:32:44'),(3,1,4,1,NULL,NULL,1,NULL,'2014-10-06 14:32:44','2014-10-06 14:32:44'),(4,1,4,1,NULL,NULL,1,NULL,'2014-10-06 14:32:44','2014-10-06 14:32:44'),(5,1,4,1,NULL,NULL,1,NULL,'2014-10-06 14:32:44','2014-10-06 14:32:44'),(6,1,4,1,NULL,NULL,1,NULL,'2014-10-06 14:32:44','2014-10-06 14:32:44'),(7,2,24,1,NULL,NULL,1,NULL,'2014-10-10 12:29:04','2014-10-10 12:29:04'),(8,2,24,1,NULL,NULL,1,NULL,'2014-10-10 12:29:04','2014-10-10 12:29:04'),(9,2,24,1,NULL,NULL,1,NULL,'2014-10-10 12:29:04','2014-10-10 12:29:04'),(10,3,4,1,NULL,NULL,1,NULL,'2014-10-10 19:57:21','2014-10-10 19:57:21'),(11,3,4,1,NULL,NULL,1,NULL,'2014-10-10 19:57:21','2014-10-10 19:57:21'),(12,3,4,1,NULL,NULL,1,NULL,'2014-10-10 19:57:21','2014-10-10 19:57:21'),(13,3,4,1,NULL,NULL,1,NULL,'2014-10-10 19:57:21','2014-10-10 19:57:21'),(14,4,4,1,NULL,NULL,1,NULL,'2014-10-10 20:07:36','2014-10-10 20:07:36'),(15,4,4,1,NULL,NULL,1,NULL,'2014-10-10 20:07:36','2014-10-10 20:07:36'),(16,4,4,1,NULL,NULL,1,NULL,'2014-10-10 20:07:36','2014-10-10 20:07:36'),(17,5,35,3,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(18,5,35,3,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(19,5,35,3,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(20,5,35,3,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(21,5,35,1,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(22,5,35,1,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(23,5,35,1,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(24,5,35,1,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(25,5,35,1,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(26,5,35,1,NULL,NULL,1,NULL,'2014-10-10 20:43:28','2014-10-10 20:43:28'),(27,6,35,1,NULL,NULL,1,NULL,'2014-10-10 20:48:00','2014-10-10 20:48:00'),(28,6,35,1,NULL,NULL,1,NULL,'2014-10-10 20:48:00','2014-10-10 20:48:00'),(29,6,35,2,NULL,NULL,1,NULL,'2014-10-10 20:48:00','2014-10-10 20:48:00'),(30,6,35,2,NULL,NULL,1,NULL,'2014-10-10 20:48:00','2014-10-10 20:48:00'),(31,7,35,3,NULL,NULL,1,NULL,'2014-10-10 20:54:56','2014-10-10 20:54:56'),(32,7,35,3,NULL,NULL,1,NULL,'2014-10-10 20:54:56','2014-10-10 20:54:56'),(33,7,35,1,NULL,NULL,1,NULL,'2014-10-10 20:54:56','2014-10-10 20:54:56'),(34,8,35,1,NULL,NULL,1,NULL,'2014-10-10 22:05:02','2014-10-10 22:05:02'),(35,8,35,1,NULL,NULL,1,NULL,'2014-10-10 22:05:02','2014-10-10 22:05:02'),(36,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:02','2014-10-10 22:05:02'),(37,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(38,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(39,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(40,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(41,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(42,8,35,3,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(43,8,35,2,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(44,8,35,2,NULL,NULL,1,NULL,'2014-10-10 22:05:03','2014-10-10 22:05:03'),(45,9,11,1,NULL,NULL,1,NULL,'2014-10-11 20:28:56','2014-10-11 20:28:56'),(46,9,11,1,NULL,NULL,1,NULL,'2014-10-11 20:28:56','2014-10-11 20:28:56'),(47,9,11,1,NULL,NULL,1,NULL,'2014-10-11 20:28:56','2014-10-11 20:28:56'),(48,10,4,1,NULL,NULL,1,NULL,'2014-10-12 23:35:24','2014-10-12 23:35:24'),(49,10,4,1,NULL,NULL,1,NULL,'2014-10-12 23:35:24','2014-10-12 23:35:24'),(50,10,4,1,NULL,NULL,1,NULL,'2014-10-12 23:35:24','2014-10-12 23:35:24'),(51,10,4,1,NULL,NULL,1,NULL,'2014-10-12 23:35:24','2014-10-12 23:35:24'),(52,11,4,1,NULL,NULL,2,NULL,'2014-10-12 23:36:41','2014-10-12 23:36:41'),(53,11,4,1,NULL,NULL,2,NULL,'2014-10-12 23:36:41','2014-10-12 23:36:41'),(54,11,4,1,NULL,NULL,2,NULL,'2014-10-12 23:36:41','2014-10-12 23:36:41'),(55,11,4,1,NULL,NULL,2,NULL,'2014-10-12 23:36:41','2014-10-12 23:36:41'),(56,11,4,1,NULL,NULL,2,NULL,'2014-10-12 23:36:41','2014-10-12 23:36:41'),(57,12,4,1,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44'),(58,12,4,1,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44'),(59,12,4,1,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44'),(60,12,4,1,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44'),(61,12,4,1,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44'),(62,12,4,3,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44'),(63,12,4,3,NULL,NULL,1,NULL,'2014-10-13 00:44:44','2014-10-13 00:44:44');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prices`
--

LOCK TABLES `prices` WRITE;
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` VALUES (1,1,6,'2014-09-19 15:57:09','2014-09-19 15:57:09'),(2,2,12,'2014-09-19 16:00:56','2014-09-19 16:00:56'),(3,3,16,'2014-09-25 17:34:11','2014-09-25 17:34:11');
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privilegeds`
--

DROP TABLE IF EXISTS `privilegeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privilegeds` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilegeds`
--

LOCK TABLES `privilegeds` WRITE;
/*!40000 ALTER TABLE `privilegeds` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilegeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_barcodes`
--

DROP TABLE IF EXISTS `product_barcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_barcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `barcode` varchar(64) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_barcodes`
--

LOCK TABLES `product_barcodes` WRITE;
/*!40000 ALTER TABLE `product_barcodes` DISABLE KEYS */;
INSERT INTO `product_barcodes` VALUES (1,1,'082184090442',NULL,'2014-09-18 14:21:21'),(2,2,'5000267023601','2014-09-18 13:57:06','2014-09-18 14:21:49'),(3,3,'5010677716000','2014-09-18 13:57:25','2014-09-18 14:22:01'),(4,4,'7501035042315','2014-09-18 13:58:28','2014-09-18 14:22:19'),(5,5,'7312040017034','2014-09-18 13:58:47','2014-09-18 14:22:33'),(6,6,'5000329002278','2014-09-18 14:00:07','2014-09-18 14:22:52'),(7,7,'7891050001108','2014-09-18 14:00:23','2014-09-18 14:23:14'),(8,8,'024223301102','2014-09-18 14:00:42','2014-09-18 14:23:26'),(9,9,'7312040311002','2014-09-18 14:01:21','2014-09-18 14:23:43'),(10,11,'651206000167','2014-09-18 14:02:03','2014-09-18 14:23:56'),(11,12,'5011007024499','2014-09-18 14:02:22','2014-09-18 14:24:20'),(12,13,'8501110080453','2014-09-18 14:02:42','2014-09-18 14:24:56'),(13,14,'4603400000203','2014-09-18 14:03:52','2014-09-18 14:25:25'),(14,15,'5000267013602','2014-09-18 14:04:28','2014-09-18 14:25:39'),(15,16,'085156210015','2014-09-18 14:04:51','2014-09-18 14:25:54'),(16,17,'2147483647','2014-09-18 14:05:13','2014-09-18 14:05:13'),(17,18,'2147483647','2014-09-18 14:05:36','2014-09-18 14:05:36'),(18,19,'2147483647','2014-09-18 14:05:56','2014-09-18 14:05:56'),(19,20,'2147483647','2014-09-18 14:06:24','2014-09-18 14:06:24'),(20,21,'2147483647','2014-09-18 14:06:44','2014-09-18 14:06:44'),(21,22,'2147483647','2014-09-18 14:08:06','2014-09-18 14:08:06'),(22,23,'2147483647','2014-09-18 14:08:49','2014-09-18 14:08:49'),(23,24,'2147483647','2014-09-18 14:10:20','2014-09-18 14:10:20'),(24,25,'2147483647','2014-09-18 14:10:38','2014-09-18 14:10:38'),(25,26,'2147483647','2014-09-18 14:10:56','2014-09-18 14:10:56'),(26,27,'2147483647','2014-09-18 14:11:20','2014-09-18 14:11:20'),(27,28,'2147483647','2014-09-18 14:12:33','2014-09-18 14:12:33'),(28,29,'2147483647','2014-09-18 14:12:49','2014-09-18 14:12:49'),(29,30,'2147483647','2014-09-18 14:13:10','2014-09-18 14:13:10'),(30,31,'2147483647','2014-09-18 14:13:29','2014-09-18 14:13:29'),(31,32,'2147483647','2014-09-18 14:13:44','2014-09-18 14:13:44'),(32,33,'5901041003201','2014-09-18 14:17:48','2014-09-18 14:20:53'),(33,6,'5000329002292','2014-09-18 18:57:34','2014-09-18 18:57:34'),(34,36,'6001495062669','2014-10-07 22:34:13','2014-10-07 22:34:13');
/*!40000 ALTER TABLE `product_barcodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `ml` int(11) DEFAULT NULL,
  `labelnumber` int(11) DEFAULT NULL,
  `barcode` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Jack Daniels Old #7 1L',1000,0,'082184090442'),(2,'Johnny Walker Black 1L',1000,1,'5000267023601'),(3,'Bombay Sapphire Gin',1000,1,'5010677716000'),(4,'Jose Cuervo Especial Silver',1000,1,'7501035042315'),(5,'Absolute Vodka Blue 1L',1000,1,'7312040017034'),(6,'Beefeater Dry Gin 1L',1000,1,'5000329002278'),(7,'Sao Francisco Cachaca',1000,1,'7891050001108'),(8,'Santa Teresa Gran Reserva Rum',750,1,'024223301102'),(9,'Absolute Amber 1L',1000,1,'7312040311002'),(10,'Kahlua Liquor',1000,1,''),(11,'Old New Orleans 750ml',750,1,'651206000167'),(12,'Jameson',1000,1,'5011007024499'),(13,'Havana Club 7 Year Rum 1L',1000,0,'8501110080453'),(14,'Russian Standard 1L',1000,0,'4603400000203'),(15,'Johnny Walker Red 1L',1000,1,'5000267013602'),(16,'Ketek One Vodka 1L',1000,0,'085156210015'),(17,'Oaxaca Mezcal 750ml',750,1,'7503009838337'),(18,'Martin & Rossi 750ml',750,0,'011034420054'),(19,'Russian Standard 750ml',750,0,'736040018728'),(20,'Jose Cuervo Especial Gold 1L',1000,1,'7501035010093'),(21,'1800 Silver',750,2,'7501035013230'),(22,'Patron Cafe',750,0,'721733000036'),(23,'Cachaca Fazenda Soledade',750,0,'7896113900107'),(24,'Ciroc Red Berry Vodka',750,0,'088076175051'),(25,'Cioc Coconut',750,0,'088076174955'),(26,'Ciroc Peach Vodka',750,0,'088076177406'),(27,'Ciroc Vodka Blue',750,0,'088076161863'),(28,'Absolute Rio Edition',1000,1,'7312040550913'),(29,'Grey Goose',1000,0,'080480280017'),(30,'1800 Gold',1000,2,'811538010245'),(31,'Chivas Regas 12 Year',1000,0,'080432400432'),(32,'Glenmorangie 12 Year Single Malt',1000,0,'5010494562125'),(33,'Belvedere Vodka',1000,NULL,''),(34,'Bohemia',350,NULL,'7891991006088'),(35,'Amarula Gold',1000,NULL,'6001108072962'),(36,'Amarula Liqueur',1000,NULL,'6001495062669'),(37,'Youica - Cachaca Prata',1000,1,'7896383700674'),(38,'El Jimador - Tequila Blanco',750,1,'7501145228203'),(39,'Bacardi - Gold',1000,1,'7891125064076'),(40,'Bacardi - Big Apple',750,1,'7891125064502'),(41,'Terra Brazilis - Cachaca Envelhecida',1000,2,'7896002110679'),(42,'Salton Vinho Branco',750,NULL,'7896023082979'),(43,'Don Perignon - 2003',750,NULL,'081753811020'),(44,'Smirnoff - Ice',275,NULL,'7893218000107'),(45,'Budweiser - Bottle',343,NULL,'7891991010832'),(46,'Stella Artois',275,NULL,'7891149101900'),(47,'Crown Royal',750,NULL,'08772503'),(48,'Skyy - Vodka',1000,NULL,'7896010004007'),(49,'Red Bull - 250ml Can',250,NULL,'611269991000'),(50,'Heineken - 355ml Bottle',355,NULL,'78904972');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promoters`
--

DROP TABLE IF EXISTS `promoters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promoters` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promoters`
--

LOCK TABLES `promoters` WRITE;
/*!40000 ALTER TABLE `promoters` DISABLE KEYS */;
/*!40000 ALTER TABLE `promoters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `superemployees`
--

DROP TABLE IF EXISTS `superemployees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `superemployees` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `superemployees`
--

LOCK TABLES `superemployees` WRITE;
/*!40000 ALTER TABLE `superemployees` DISABLE KEYS */;
/*!40000 ALTER TABLE `superemployees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_group_permissions`
--

DROP TABLE IF EXISTS `user_group_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) DEFAULT NULL,
  `controller` varchar(50) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `allowed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=508 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group_permissions`
--

LOCK TABLES `user_group_permissions` WRITE;
/*!40000 ALTER TABLE `user_group_permissions` DISABLE KEYS */;
INSERT INTO `user_group_permissions` VALUES (1,1,'Pages','display',1),(2,2,'Pages','display',1),(3,3,'Pages','display',1),(4,1,'UserGroupPermissions','index',1),(5,2,'UserGroupPermissions','index',1),(6,3,'UserGroupPermissions','index',0),(7,1,'UserGroupPermissions','update',1),(8,2,'UserGroupPermissions','update',1),(9,3,'UserGroupPermissions','update',0),(10,1,'UserGroups','index',1),(11,2,'UserGroups','index',1),(12,3,'UserGroups','index',0),(13,1,'UserGroups','addGroup',1),(14,2,'UserGroups','addGroup',0),(15,3,'UserGroups','addGroup',0),(16,1,'UserGroups','editGroup',1),(17,2,'UserGroups','editGroup',0),(18,3,'UserGroups','editGroup',0),(19,1,'UserGroups','deleteGroup',1),(20,2,'UserGroups','deleteGroup',0),(21,3,'UserGroups','deleteGroup',0),(22,1,'Users','index',1),(23,2,'Users','index',1),(24,3,'Users','index',1),(25,1,'Users','viewUser',1),(26,2,'Users','viewUser',1),(27,3,'Users','viewUser',1),(28,1,'Users','myprofile',1),(29,2,'Users','myprofile',1),(30,3,'Users','myprofile',1),(31,1,'Users','login',1),(32,2,'Users','login',1),(33,3,'Users','login',1),(34,1,'Users','logout',1),(35,2,'Users','logout',1),(36,3,'Users','logout',1),(37,1,'Users','register',0),(38,2,'Users','register',0),(39,3,'Users','register',0),(40,1,'Users','changePassword',1),(41,2,'Users','changePassword',1),(42,3,'Users','changePassword',1),(43,1,'Users','changeUserPassword',1),(44,2,'Users','changeUserPassword',1),(45,3,'Users','changeUserPassword',1),(46,1,'Users','addUser',1),(47,2,'Users','addUser',1),(48,3,'Users','addUser',1),(49,1,'Users','editUser',1),(50,2,'Users','editUser',1),(51,3,'Users','editUser',1),(52,1,'Users','dashboard',1),(53,2,'Users','dashboard',1),(54,3,'Users','dashboard',1),(55,1,'Users','deleteUser',1),(56,2,'Users','deleteUser',1),(57,3,'Users','deleteUser',0),(58,1,'Users','makeActive',1),(59,2,'Users','makeActive',0),(60,3,'Users','makeActive',0),(61,1,'Users','accessDenied',1),(62,2,'Users','accessDenied',1),(63,3,'Users','accessDenied',1),(64,1,'Users','userVerification',1),(65,2,'Users','userVerification',1),(66,3,'Users','userVerification',1),(67,1,'Users','forgotPassword',1),(68,2,'Users','forgotPassword',1),(69,3,'Users','forgotPassword',1),(70,1,'Users','makeActiveInactive',1),(71,2,'Users','makeActiveInactive',1),(72,3,'Users','makeActiveInactive',1),(73,1,'Users','verifyEmail',1),(74,2,'Users','verifyEmail',1),(75,3,'Users','verifyEmail',1),(76,1,'Users','activatePassword',1),(77,2,'Users','activatePassword',1),(78,3,'Users','activatePassword',1),(79,1,'Orders','index',1),(80,2,'Orders','index',1),(81,3,'Orders','index',1),(82,4,'Orders','index',1),(83,5,'Orders','index',1),(84,6,'Orders','index',1),(85,7,'Orders','index',1),(86,8,'Orders','index',1),(87,1,'Tests','test',1),(88,2,'Tests','test',1),(89,3,'Tests','test',1),(90,4,'Tests','test',1),(91,5,'Tests','test',1),(92,6,'Tests','test',1),(93,7,'Tests','test',1),(94,8,'Tests','test',1),(95,4,'Users','index',1),(96,5,'Users','index',1),(97,6,'Users','index',0),(98,7,'Users','index',0),(99,8,'Users','index',0),(100,1,'Users','add',1),(101,2,'Users','add',1),(102,3,'Users','add',1),(103,4,'Users','add',1),(104,5,'Users','add',1),(105,6,'Users','add',0),(106,7,'Users','add',0),(107,8,'Users','add',0),(108,1,'Users','view',1),(109,2,'Users','view',1),(110,3,'Users','view',1),(111,4,'Users','view',1),(112,5,'Users','view',1),(113,6,'Users','view',0),(114,7,'Users','view',0),(115,8,'Users','view',0),(116,1,'Users','edit',1),(117,2,'Users','edit',1),(118,3,'Users','edit',1),(119,4,'Users','edit',1),(120,5,'Users','edit',0),(121,6,'Users','edit',0),(122,7,'Users','edit',0),(123,8,'Users','edit',0),(124,1,'Users','delete',1),(125,2,'Users','delete',1),(126,3,'Users','delete',1),(127,4,'Users','delete',0),(128,5,'Users','delete',0),(129,6,'Users','delete',0),(130,7,'Users','delete',0),(131,8,'Users','delete',0),(132,4,'Users','login',1),(133,5,'Users','login',1),(134,6,'Users','login',1),(135,7,'Users','login',1),(136,8,'Users','login',1),(137,4,'Users','logout',1),(138,5,'Users','logout',1),(139,6,'Users','logout',1),(140,7,'Users','logout',1),(141,8,'Users','logout',1),(142,4,'UserGroupPermissions','update',0),(143,5,'UserGroupPermissions','update',0),(144,6,'UserGroupPermissions','update',0),(145,7,'UserGroupPermissions','update',0),(146,8,'UserGroupPermissions','update',0),(147,4,'UserGroupPermissions','index',0),(148,5,'UserGroupPermissions','index',0),(149,6,'UserGroupPermissions','index',0),(150,7,'UserGroupPermissions','index',0),(151,8,'UserGroupPermissions','index',0),(152,4,'UserGroups','index',0),(153,5,'UserGroups','index',0),(154,6,'UserGroups','index',0),(155,7,'UserGroups','index',0),(156,8,'UserGroups','index',0),(157,4,'Users','myprofile',1),(158,5,'Users','myprofile',1),(159,6,'Users','myprofile',1),(160,7,'Users','myprofile',1),(161,8,'Users','myprofile',1),(162,4,'Users','viewUser',1),(163,5,'Users','viewUser',0),(164,6,'Users','viewUser',0),(165,7,'Users','viewUser',0),(166,8,'Users','viewUser',0),(167,4,'Users','register',0),(168,5,'Users','register',0),(169,6,'Users','register',0),(170,7,'Users','register',0),(171,8,'Users','register',0),(172,4,'Users','changePassword',1),(173,5,'Users','changePassword',1),(174,6,'Users','changePassword',1),(175,7,'Users','changePassword',1),(176,8,'Users','changePassword',1),(177,4,'Users','changeUserPassword',1),(178,5,'Users','changeUserPassword',1),(179,6,'Users','changeUserPassword',1),(180,7,'Users','changeUserPassword',1),(181,8,'Users','changeUserPassword',1),(182,4,'Users','addUser',1),(183,5,'Users','addUser',0),(184,6,'Users','addUser',0),(185,7,'Users','addUser',1),(186,8,'Users','addUser',0),(187,4,'Users','editUser',1),(188,5,'Users','editUser',0),(189,6,'Users','editUser',0),(190,7,'Users','editUser',0),(191,8,'Users','editUser',0),(192,4,'Users','deleteUser',0),(193,5,'Users','deleteUser',0),(194,6,'Users','deleteUser',0),(195,7,'Users','deleteUser',0),(196,8,'Users','deleteUser',0),(197,4,'Users','dashboard',1),(198,5,'Users','dashboard',1),(199,6,'Users','dashboard',1),(200,7,'Users','dashboard',1),(201,8,'Users','dashboard',1),(202,4,'Users','makeActiveInactive',1),(203,5,'Users','makeActiveInactive',0),(204,6,'Users','makeActiveInactive',0),(205,7,'Users','makeActiveInactive',0),(206,8,'Users','makeActiveInactive',0),(207,4,'Users','verifyEmail',1),(208,5,'Users','verifyEmail',1),(209,6,'Users','verifyEmail',1),(210,7,'Users','verifyEmail',1),(211,8,'Users','verifyEmail',1),(212,4,'Users','accessDenied',1),(213,5,'Users','accessDenied',1),(214,6,'Users','accessDenied',1),(215,7,'Users','accessDenied',1),(216,8,'Users','accessDenied',1),(217,4,'Users','userVerification',1),(218,5,'Users','userVerification',1),(219,6,'Users','userVerification',1),(220,7,'Users','userVerification',1),(221,8,'Users','userVerification',1),(222,4,'Users','forgotPassword',1),(223,5,'Users','forgotPassword',1),(224,6,'Users','forgotPassword',1),(225,7,'Users','forgotPassword',1),(226,8,'Users','forgotPassword',1),(227,4,'Users','activatePassword',1),(228,5,'Users','activatePassword',1),(229,6,'Users','activatePassword',1),(230,7,'Users','activatePassword',1),(231,8,'Users','activatePassword',1),(232,1,'Users','emailVerification',1),(233,2,'Users','emailVerification',1),(234,3,'Users','emailVerification',1),(235,4,'Users','emailVerification',1),(236,5,'Users','emailVerification',1),(237,6,'Users','emailVerification',1),(238,7,'Users','emailVerification',1),(239,8,'Users','emailVerification',1),(240,4,'Pages','display',1),(241,5,'Pages','display',1),(242,6,'Pages','display',1),(243,7,'Pages','display',1),(244,8,'Pages','display',1),(245,9,'Pages','display',1),(246,10,'Pages','display',1),(247,11,'Pages','display',0),(248,1,'Barcodes','barcode',1),(249,2,'Barcodes','barcode',1),(250,3,'Barcodes','barcode',1),(251,4,'Barcodes','barcode',1),(252,5,'Barcodes','barcode',0),(253,6,'Barcodes','barcode',0),(254,7,'Barcodes','barcode',0),(255,8,'Barcodes','barcode',0),(256,9,'Barcodes','barcode',0),(257,10,'Barcodes','barcode',0),(258,11,'Barcodes','barcode',0),(259,9,'Tests','test',1),(260,10,'Tests','test',0),(261,11,'Tests','test',0),(262,9,'Users','viewUser',0),(263,10,'Users','viewUser',0),(264,11,'Users','viewUser',0),(265,9,'Users','myprofile',1),(266,10,'Users','myprofile',1),(267,11,'Users','myprofile',0),(268,9,'Users','login',1),(269,10,'Users','login',1),(270,11,'Users','login',0),(271,9,'Users','logout',1),(272,10,'Users','logout',1),(273,11,'Users','logout',1),(274,9,'Users','register',0),(275,10,'Users','register',1),(276,11,'Users','register',1),(277,9,'Users','changePassword',1),(278,10,'Users','changePassword',1),(279,11,'Users','changePassword',0),(280,9,'Users','changeUserPassword',1),(281,10,'Users','changeUserPassword',1),(282,11,'Users','changeUserPassword',0),(283,9,'Users','addUser',0),(284,10,'Users','addUser',0),(285,11,'Users','addUser',0),(286,9,'Users','dashboard',1),(287,10,'Users','dashboard',1),(288,11,'Users','dashboard',0),(289,9,'Users','verifyEmail',1),(290,10,'Users','verifyEmail',1),(291,11,'Users','verifyEmail',0),(292,9,'Users','accessDenied',1),(293,10,'Users','accessDenied',1),(294,11,'Users','accessDenied',0),(295,9,'Users','userVerification',1),(296,10,'Users','userVerification',1),(297,11,'Users','userVerification',0),(298,9,'Users','activatePassword',1),(299,10,'Users','activatePassword',1),(300,11,'Users','activatePassword',0),(301,9,'Users','emailVerification',1),(302,10,'Users','emailVerification',1),(303,11,'Users','emailVerification',0),(304,9,'Users','forgotPassword',1),(305,10,'Users','forgotPassword',1),(306,11,'Users','forgotPassword',0),(307,1,'Orders','view',1),(308,2,'Orders','view',1),(309,3,'Orders','view',1),(310,4,'Orders','view',1),(311,5,'Orders','view',1),(312,6,'Orders','view',1),(313,7,'Orders','view',0),(314,8,'Orders','view',0),(315,9,'Orders','view',0),(316,10,'Orders','view',0),(317,11,'Orders','view',0),(318,9,'Orders','index',0),(319,10,'Orders','index',0),(320,11,'Orders','index',0),(321,1,'Orders','edit',1),(322,2,'Orders','edit',1),(323,3,'Orders','edit',1),(324,4,'Orders','edit',1),(325,5,'Orders','edit',0),(326,6,'Orders','edit',0),(327,7,'Orders','edit',0),(328,8,'Orders','edit',0),(329,9,'Orders','edit',0),(330,10,'Orders','edit',0),(331,11,'Orders','edit',0),(332,1,'Orders','delete',1),(333,2,'Orders','delete',1),(334,3,'Orders','delete',0),(335,4,'Orders','delete',0),(336,5,'Orders','delete',0),(337,6,'Orders','delete',0),(338,7,'Orders','delete',0),(339,8,'Orders','delete',0),(340,9,'Orders','delete',0),(341,10,'Orders','delete',0),(342,11,'Orders','delete',0),(343,1,'Orders','kiosk',1),(344,2,'Orders','kiosk',1),(345,3,'Orders','kiosk',1),(346,4,'Orders','kiosk',1),(347,5,'Orders','kiosk',1),(348,6,'Orders','kiosk',1),(349,7,'Orders','kiosk',1),(350,8,'Orders','kiosk',1),(351,9,'Orders','kiosk',1),(352,10,'Orders','kiosk',1),(353,11,'Orders','kiosk',1),(354,1,'Orders','start',1),(355,2,'Orders','start',1),(356,3,'Orders','start',1),(357,4,'Orders','start',1),(358,5,'Orders','start',1),(359,6,'Orders','start',1),(360,7,'Orders','start',1),(361,8,'Orders','start',1),(362,9,'Orders','start',1),(363,10,'Orders','start',1),(364,11,'Orders','start',1),(365,1,'Orders','submit',1),(366,2,'Orders','submit',1),(367,3,'Orders','submit',1),(368,4,'Orders','submit',1),(369,5,'Orders','submit',1),(370,6,'Orders','submit',1),(371,7,'Orders','submit',1),(372,8,'Orders','submit',1),(373,9,'Orders','submit',1),(374,10,'Orders','submit',1),(375,11,'Orders','submit',1),(376,1,'Entrances','cron',1),(377,2,'Entrances','cron',1),(378,3,'Entrances','cron',0),(379,4,'Entrances','cron',0),(380,5,'Entrances','cron',0),(381,6,'Entrances','cron',0),(382,7,'Entrances','cron',0),(383,8,'Entrances','cron',0),(384,9,'Entrances','cron',0),(385,10,'Entrances','cron',0),(386,11,'Entrances','cron',1),(387,1,'Barcodes','bottles',1),(388,2,'Barcodes','bottles',1),(389,3,'Barcodes','bottles',1),(390,4,'Barcodes','bottles',1),(391,5,'Barcodes','bottles',1),(392,6,'Barcodes','bottles',1),(393,7,'Barcodes','bottles',0),(394,8,'Barcodes','bottles',0),(395,9,'Barcodes','bottles',0),(396,10,'Barcodes','bottles',0),(397,11,'Barcodes','bottles',0),(398,1,'Barcodes','check',1),(399,2,'Barcodes','check',1),(400,3,'Barcodes','check',1),(401,4,'Barcodes','check',1),(402,5,'Barcodes','check',1),(403,6,'Barcodes','check',1),(404,7,'Barcodes','check',1),(405,8,'Barcodes','check',1),(406,9,'Barcodes','check',0),(407,10,'Barcodes','check',0),(408,11,'Barcodes','check',0),(409,1,'Users','addCustomer',1),(410,2,'Users','addCustomer',1),(411,3,'Users','addCustomer',1),(412,4,'Users','addCustomer',1),(413,5,'Users','addCustomer',0),(414,6,'Users','addCustomer',0),(415,7,'Users','addCustomer',0),(416,8,'Users','addCustomer',0),(417,9,'Users','addCustomer',0),(418,10,'Users','addCustomer',0),(419,11,'Users','addCustomer',0),(420,1,'Users','checkout',1),(421,2,'Users','checkout',1),(422,3,'Users','checkout',1),(423,4,'Users','checkout',1),(424,5,'Users','checkout',1),(425,6,'Users','checkout',0),(426,7,'Users','checkout',0),(427,8,'Users','checkout',1),(428,9,'Users','checkout',0),(429,10,'Users','checkout',0),(430,11,'Users','checkout',0),(431,1,'Customers','checkout',1),(432,2,'Customers','checkout',1),(433,3,'Customers','checkout',1),(434,4,'Customers','checkout',1),(435,5,'Customers','checkout',0),(436,6,'Customers','checkout',0),(437,7,'Customers','checkout',0),(438,8,'Customers','checkout',0),(439,9,'Customers','checkout',0),(440,10,'Customers','checkout',0),(441,11,'Customers','checkout',0),(442,1,'Customers','addCustomer',1),(443,2,'Customers','addCustomer',1),(444,3,'Customers','addCustomer',1),(445,4,'Customers','addCustomer',1),(446,5,'Customers','addCustomer',0),(447,6,'Customers','addCustomer',0),(448,7,'Customers','addCustomer',0),(449,8,'Customers','addCustomer',0),(450,9,'Customers','addCustomer',0),(451,10,'Customers','addCustomer',0),(452,11,'Customers','addCustomer',0),(453,1,'Customers','delete',1),(454,2,'Customers','delete',1),(455,3,'Customers','delete',0),(456,4,'Customers','delete',0),(457,5,'Customers','delete',0),(458,6,'Customers','delete',0),(459,7,'Customers','delete',0),(460,8,'Customers','delete',0),(461,9,'Customers','delete',0),(462,10,'Customers','delete',0),(463,11,'Customers','delete',0),(464,1,'Customers','add',1),(465,2,'Customers','add',1),(466,3,'Customers','add',1),(467,4,'Customers','add',1),(468,5,'Customers','add',0),(469,6,'Customers','add',0),(470,7,'Customers','add',0),(471,8,'Customers','add',0),(472,9,'Customers','add',0),(473,10,'Customers','add',0),(474,11,'Customers','add',0),(475,1,'Customers','edit',1),(476,2,'Customers','edit',1),(477,3,'Customers','edit',1),(478,4,'Customers','edit',1),(479,5,'Customers','edit',0),(480,6,'Customers','edit',0),(481,7,'Customers','edit',0),(482,8,'Customers','edit',0),(483,9,'Customers','edit',0),(484,10,'Customers','edit',0),(485,11,'Customers','edit',0),(486,1,'Customers','view',1),(487,2,'Customers','view',1),(488,3,'Customers','view',1),(489,4,'Customers','view',1),(490,5,'Customers','view',1),(491,6,'Customers','view',0),(492,7,'Customers','view',0),(493,8,'Customers','view',0),(494,9,'Customers','view',0),(495,10,'Customers','view',0),(496,11,'Customers','view',0),(497,1,'Customers','index',1),(498,2,'Customers','index',1),(499,3,'Customers','index',1),(500,4,'Customers','index',1),(501,5,'Customers','index',1),(502,6,'Customers','index',1),(503,7,'Customers','index',0),(504,8,'Customers','index',0),(505,9,'Customers','index',0),(506,10,'Customers','index',0),(507,11,'Customers','index',0);
/*!40000 ALTER TABLE `user_group_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_groups`
--

LOCK TABLES `user_groups` WRITE;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
INSERT INTO `user_groups` VALUES (1,'Superuser','Superuser',0,'2014-08-09 22:42:46','2014-08-10 14:09:36'),(2,'Admin','Admin',0,'2014-08-09 22:42:46','2014-08-10 14:11:33'),(3,'Manager','Manager',0,'2014-08-09 22:42:46','2014-08-10 14:10:04'),(4,'Superemployee','Superemployee',0,'2014-08-10 14:10:36','2014-08-10 14:10:36'),(5,'Waiter','Waiters',0,'2014-09-16 01:24:09','2014-09-16 01:24:09'),(6,'Barman','Barman',0,'2014-08-10 14:10:53','2014-08-10 14:11:38'),(7,'Promoters','Promoters',0,'2014-09-16 01:26:30','2014-09-16 01:26:30'),(8,'Employee','employee',0,'2014-08-10 14:11:04','2014-08-10 14:11:45'),(9,'Privileged','Priveleged',0,'2014-09-16 01:13:15','2014-09-16 01:13:15'),(10,'Customers','Customers',1,'2014-08-10 14:11:13','2014-08-10 14:11:13'),(11,'Guest','Guest',0,'2014-08-10 14:16:01','2014-08-10 15:12:08');
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) DEFAULT '10',
  `discount_id` int(11) DEFAULT NULL,
  `promoter_id` int(11) DEFAULT '0',
  `username` bigint(32) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL,
  `barcode` varchar(45) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `allowedcredit` int(4) NOT NULL,
  `location_id` int(4) NOT NULL DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `salt` text,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`),
  KEY `id_idx` (`discount_id`),
  KEY `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,0,5521969775363,5150,'','Derek','Graetz',200,0,'dgraetz@gmail.com','4109954ad53596617e6f3e50875b7d99','78ba29b450c303c566730e8bc07eaacd',1,1,'127.0.0.1','2014-08-09 22:42:46','2014-11-21 18:07:07'),(2,2,1,0,5521980118762,5150,NULL,'Derek','Manager',0,0,'neorio2000@hotmail.com','0a873f48e1befee584054b2d417b77a1','d8345c706d3a7223cbab79e218380da8',1,1,NULL,'2014-08-10 14:27:37','2014-09-16 02:01:24'),(3,3,1,0,5521969775361,6160,NULL,'Manager','',0,0,'','346f546fe7d0b705347d06b40f0aaca3','9439638eb8dae333921b513ec3f5c72e',1,1,NULL,NULL,'2014-10-14 17:13:43'),(4,4,1,NULL,15044885482,5150,'','New','Orleans',1,0,'','5a3bdd1f2c485b3e90f18b8f36e5db98','8f7af22bf87558635b3aa3f438cff76e',1,1,NULL,'2014-08-11 17:34:06','2014-10-12 19:04:10'),(5,5,1,0,5521986089007,0,NULL,'Manager','',200,1,'','8f3aac27f0bb43a38bf867324feba458','582bf4f99140937610063a349851537a',1,1,NULL,'2014-08-11 17:49:58','2014-11-19 14:36:51'),(6,6,1,0,3635779691255,0,NULL,'Derek','Graetz',0,0,'neorio2000@hotmail.com','82179e8842a2c0d9cbc20df7d234dd6d','35f4f44b37f059657573f725d73061c5',1,1,NULL,'2014-09-08 13:02:00','2014-09-16 02:02:13'),(7,7,1,0,439064258032,0,NULL,'John','Promoter',0,0,NULL,'40519208f439da5fa3c641f46b84d5de','386800e8d905ac5cb67ba36291e3a73c',1,1,NULL,NULL,'2014-10-11 17:19:34'),(8,8,1,0,9274045418032,0,'147782c',NULL,NULL,0,0,NULL,'e93bff857e441e6c6019ff55d8ea4a2a','35f889a01c3adfaf42f9824e3daa462a',1,1,NULL,NULL,'2014-09-18 08:33:27'),(9,10,3,0,1,0,NULL,NULL,NULL,200,0,NULL,'83de5b3e3ee61c110dd9f72b44df450e','d25e1d9738e59fc2c51e6f3677823e2f',1,1,NULL,NULL,'2014-10-24 13:31:21'),(10,10,2,7,2,0,'','Customer','10',1,0,'','5674e35f533e2e5a8bd7ed7013deab24','ecd0140a2024cf94fbfd43352e2bcd11',1,1,NULL,NULL,'2014-10-13 13:37:40'),(11,10,4,0,3,0,'','Derek','Privlaged',0,0,'','c3678a22953a71c7fac16fa2d60f6e97','2e979bb21c57f1d3fe5809ec50beebe8',1,1,NULL,'2014-09-17 19:49:35','2014-10-12 14:20:31'),(13,10,4,0,4,0,NULL,'Dan','Royalty',0,0,'','755c6c4ad917963e811db060ae18d478','bc7728fae72a800ef4c8e1e2adf4aee3',1,1,NULL,'2014-09-15 16:03:34','2014-09-15 16:03:34'),(14,10,1,0,5,5150,NULL,'','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-02 18:29:12','2014-10-02 18:29:12'),(15,10,1,0,5521975559845,5150,NULL,'Sandro','Penha',0,0,'',NULL,NULL,1,0,NULL,'2014-10-02 20:00:44','2014-10-02 20:00:44'),(16,10,1,0,5521983987591,5150,NULL,'Mike','Vega',0,0,'',NULL,NULL,1,0,NULL,'2014-10-02 20:01:29','2014-10-02 20:01:29'),(22,10,1,0,5521983257506,438373,NULL,'Spencer','Mason',0,0,'',NULL,NULL,1,0,NULL,'2014-10-06 18:29:35','2014-10-06 18:29:35'),(23,10,1,0,5521987861840,755319,NULL,'John','Irish',0,0,'',NULL,NULL,1,0,NULL,'2014-10-06 18:30:18','2014-10-06 18:30:18'),(24,10,1,0,5521965480054,7173,NULL,'Antonio','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-06 18:37:11','2014-10-06 18:37:11'),(25,10,1,0,5521994011255,744328,NULL,'Marcela','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-07 21:41:36','2014-10-07 21:41:36'),(26,10,1,0,55215612581,462372,NULL,'','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-07 21:46:48','2014-10-07 21:46:48'),(27,10,1,0,55215348613,461124,NULL,'','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-07 21:55:59','2014-10-07 21:55:59'),(35,10,1,0,55216142251,299461,NULL,'','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-07 21:56:06','2014-10-07 21:56:06'),(44,10,4,7,3,479053,'','Test 1','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-24 14:57:09','2014-10-24 14:57:09'),(45,10,4,7,3,161300,'','Test 1','',0,0,'',NULL,NULL,1,0,NULL,'2014-10-24 14:58:46','2014-10-24 14:58:46'),(46,1,NULL,0,3336008437,NULL,NULL,'filipe','',0,0,'','e1ece00abb38f67c0c4d30d5d1d64024','85720a6b2b9b549a3ab8c509afb073e9',1,1,'2.233.200.52','2014-11-19 16:12:13','2014-11-19 16:12:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `waiters`
--

DROP TABLE IF EXISTS `waiters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waiters` (
  `id` tinyint(4) NOT NULL,
  `user_group_id` tinyint(4) NOT NULL,
  `discount_id` tinyint(4) NOT NULL,
  `username` tinyint(4) NOT NULL,
  `barcode` tinyint(4) NOT NULL,
  `password` tinyint(4) NOT NULL,
  `salt` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `first_name` tinyint(4) NOT NULL,
  `last_name` tinyint(4) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `ip_address` tinyint(4) NOT NULL,
  `created` tinyint(4) NOT NULL,
  `modified` tinyint(4) NOT NULL,
  `name` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `waiters`
--

LOCK TABLES `waiters` WRITE;
/*!40000 ALTER TABLE `waiters` DISABLE KEYS */;
/*!40000 ALTER TABLE `waiters` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-22 18:41:13
