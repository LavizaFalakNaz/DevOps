CREATE DATABASE  IF NOT EXISTS `heroku_7fce67cb249adf3` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_7fce67cb249adf3`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: us-cdbr-east-05.cleardb.net    Database: heroku_7fce67cb249adf3
-- ------------------------------------------------------
-- Server version	5.6.50-log

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
-- Table structure for table `activity_feed`
--

DROP TABLE IF EXISTS `activity_feed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) NOT NULL,
  `pid` varchar(11) DEFAULT NULL,
  `tid` varchar(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `uid` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_feed`
--

LOCK TABLES `activity_feed` WRITE;
/*!40000 ALTER TABLE `activity_feed` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_feed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachment_files`
--

DROP TABLE IF EXISTS `attachment_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attachment_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `file_path_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachment_files`
--

LOCK TABLES `attachment_files` WRITE;
/*!40000 ALTER TABLE `attachment_files` DISABLE KEYS */;
INSERT INTO `attachment_files` VALUES (24,34,124,'../resources/files/c++.jpg'),(34,34,124,'../resources/files/c sharp.jpg'),(44,34,124,'../resources/files/flowers1.jpg'),(64,154,184,'../resources/files/gkanban.jpg'),(74,154,184,'../resources/files/verify.php'),(84,154,184,'../resources/files/theme.css'),(104,214,284,'../resources/files/bottom.php'),(144,174,224,'../resources/files/delete-process.php'),(214,194,264,'../resources/files/report.php'),(224,194,264,'../resources/files/new.php');
/*!40000 ALTER TABLE `attachment_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL,
  `tracking-id` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `timestamp` varchar(45) NOT NULL,
  `admin-remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
INSERT INTO `complaints` VALUES (1,'Bilal Shafiq','mbilalshafiq13@gmail.com','subject 2','test sissue','61e5d8787d0e1','solved','2022-01-18 01:58:32',NULL),(2,'flatsome','admin@gmail.com','subject 2','Test issue new one ijust to msdwi on it','61e671fd32a76','pocessing','2022-01-18 12:53:33','Issue will resolved soon');
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deployment`
--

DROP TABLE IF EXISTS `deployment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deployment` (
  `deployment_id` int(11) NOT NULL,
  `node_id` int(11) NOT NULL,
  `active_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`deployment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deployment`
--

LOCK TABLES `deployment` WRITE;
/*!40000 ALTER TABLE `deployment` DISABLE KEYS */;
/*!40000 ALTER TABLE `deployment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display_photos`
--

DROP TABLE IF EXISTS `display_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `display_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `photo_file_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid_UNIQUE` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display_photos`
--

LOCK TABLES `display_photos` WRITE;
/*!40000 ALTER TABLE `display_photos` DISABLE KEYS */;
INSERT INTO `display_photos` VALUES (4,4,'../resources/images/4.jpg');
/*!40000 ALTER TABLE `display_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goals`
--

DROP TABLE IF EXISTS `goals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goals` (
  `goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`goal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goals`
--

LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;
INSERT INTO `goals` VALUES (4,'SMTP Emails'),(14,'Financials'),(24,'CMS handling'),(34,'AI algorithms'),(44,'Hybrid Stack'),(54,'Data Science'),(64,'ERP Hosting'),(74,'Heavy Traffic'),(84,'Graphics'),(94,'APIs');
/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail_server`
--

DROP TABLE IF EXISTS `mail_server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mail_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `host` varchar(45) NOT NULL,
  `port` varchar(45) NOT NULL,
  `activity_status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail_server`
--

LOCK TABLES `mail_server` WRITE;
/*!40000 ALTER TABLE `mail_server` DISABLE KEYS */;
INSERT INTO `mail_server` VALUES (4,'hello@lavizadevelops.com','March25@2001','smtpout.secureserver.net','465','active'),(34,'awais.awm@gmail.com','moiz786','smtpout.secureserver.net','465','active');
/*!40000 ALTER TABLE `mail_server` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marketing_emails`
--

DROP TABLE IF EXISTS `marketing_emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marketing_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `uid` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marketing_emails`
--

LOCK TABLES `marketing_emails` WRITE;
/*!40000 ALTER TABLE `marketing_emails` DISABLE KEYS */;
INSERT INTO `marketing_emails` VALUES (84,'naz4108845@cloud.neduet.edu.pk','1'),(104,'lavizaniazi@gmail.com','1'),(114,'lavizaniazi2001@gmail.com','1');
/*!40000 ALTER TABLE `marketing_emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(45) NOT NULL,
  `receiver_id` varchar(45) NOT NULL,
  `timing` timestamp(6) NULL DEFAULT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (4,'14','4','0000-00-00 00:00:00.000000',0),(14,'24','4','0000-00-00 00:00:00.000000',0);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages_content`
--

DROP TABLE IF EXISTS `messages_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `content` varchar(45) NOT NULL,
  `timing` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages_content`
--

LOCK TABLES `messages_content` WRITE;
/*!40000 ALTER TABLE `messages_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nodes`
--

DROP TABLE IF EXISTS `nodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nodes` (
  `node_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ram` double NOT NULL,
  `hdd` double NOT NULL,
  PRIMARY KEY (`node_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nodes`
--

LOCK TABLES `nodes` WRITE;
/*!40000 ALTER TABLE `nodes` DISABLE KEYS */;
/*!40000 ALTER TABLE `nodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passwords_reset`
--

DROP TABLE IF EXISTS `passwords_reset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `passwords_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `token` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=264 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passwords_reset`
--

LOCK TABLES `passwords_reset` WRITE;
/*!40000 ALTER TABLE `passwords_reset` DISABLE KEYS */;
INSERT INTO `passwords_reset` VALUES (4,'lavizaniazi2001@gmail.com','591ff32f7e4d84d58d3bd41024a58687','1'),(14,'lavizaniazi2001@gmail.com','38e3ae9eaef65bf4435db0812ffa3e9d','0'),(24,'lavizaniazi2001@gmail.com','b660be2c4f09b8c571da40f8c3c4b7e4','0'),(34,'lavizaniazi2001@gmail.com','4e4135756276d4f537f3dcafc7174be2','0'),(44,'lavizaniazi2001@gmail.com','c6a59981e345250ad3dc01d6b9ef7a43','0'),(54,'lavizaniazi@gmail.com','ac057621989bf65813ce17d8cd365103','0'),(64,'lavizaniazi2001@gmail.com','c2e964d17b80ada80c3412d58cecb747','0'),(74,'lavizaniazi2001@gmail.com','2fb96e55a9a2d1f9a7aa1fa1c8d67b77','0'),(84,'lavizaniazi2001@gmail.com','1d07aba3c0f4600bd23be3d53646597b','0'),(94,'lavizaniazi2001@gmail.com','72c0db31bb9e13d16671dd2eb2e9007e','0'),(104,'lavizaniazi@gmail.com','f6e5944957590a912ca7a3e78386b4ee','0'),(114,'lavizaniazi2001@gmail.com','df28ed4ee648020a7e65d4604fddd0cb','0'),(124,'lavizaniazi2001@gmail.com','34b4402e36d9d1214f485391783dcea0','0'),(134,'lavizaniazi2001@gmail.com','8ce8b7a5035968f9f685452d5365058d','0'),(144,'lavizaniazi2001@gmail.com','097b4032ea8a95becb7221e7f9da5a7d','0'),(154,'lavizaniazi2001@gmail.com','68d395d5cd8352d505d0e1b5f9d1ccd0','0'),(164,'lavizaniazi2001@gmail.com','45a9e160563e2c432a96eb98a354d0a1','0'),(174,'lavizaniazi2001@gmail.com','b0d97be46081e7f0199b9e4c4c7ac01a','0'),(184,'lavizaniazi2001@gmail.com','4d90029c48037d655527ec0a40cf274b','0'),(194,'lavizaniazi@gmail.com','874cf96c71171d5d5ba34f4ba5fdb856','0'),(204,'lavizaniazi@gmail.com','577a4e97f9b14531017707fe2ca510f9','0'),(214,'lavizaniazi2001@gmail.com','e829d622fd47abccb453379c69d22622','0'),(224,'lavizaniazi2001@gmail.com','3cfc3a7c25b667038e40e9e7890b138b','0'),(234,'lavizaniazi@gmail.com','28866816984456d03359ef4ad396b35f','0'),(244,'lavizaniazi@gmail.com','fb7ce07fcfda8a6d2ea52aab6c99bdf6','0'),(254,'lavizaniazi@gmail.com','0990607a1d910218aec1d91e205b4e88','0');
/*!40000 ALTER TABLE `passwords_reset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `progress` (
  `progress_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `pass_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved_by` int(11) NOT NULL,
  PRIMARY KEY (`progress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progress`
--

LOCK TABLES `progress` WRITE;
/*!40000 ALTER TABLE `progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_goals`
--

DROP TABLE IF EXISTS `project_goals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `goal_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_goals`
--

LOCK TABLES `project_goals` WRITE;
/*!40000 ALTER TABLE `project_goals` DISABLE KEYS */;
INSERT INTO `project_goals` VALUES (4,194,4,'14'),(14,194,4,'34'),(24,194,4,'54');
/*!40000 ALTER TABLE `project_goals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_resources`
--

DROP TABLE IF EXISTS `project_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_resources` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `stack` varchar(45) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `cloud` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `cache` varchar(45) DEFAULT NULL,
  `storage` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_resources`
--

LOCK TABLES `project_resources` WRITE;
/*!40000 ALTER TABLE `project_resources` DISABLE KEYS */;
INSERT INTO `project_resources` VALUES (4,194,'PHP','PHP 3.1.0','Microsoft Azure','256 KB','32 KB','2 MB');
/*!40000 ALTER TABLE `project_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `uid` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `clientc` varchar(45) DEFAULT NULL,
  `projectl` varchar(45) DEFAULT NULL,
  `bugete` varchar(45) DEFAULT NULL,
  `totalamt` varchar(45) DEFAULT NULL,
  `projected` varchar(45) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (14,'project 1','test','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'project 2','test','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'Demo Project','loren ipsum details','4','success','utest','moiz','3121','312','321','2022-03-05'),(44,'new test','hhjhj','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,'abch',' svscd','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(64,'Hospital Proj','cbbdbmbbnb','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(74,'new project','this is a project','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(84,'project 5','fgdhfh','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,'abc project','it is a big project','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,'project 6','mbcbcmsd','54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(114,'sd','dsas','4','on hold','dsa','dsa','7678','66786','6786','2022-03-05'),(124,'ds','dsa','4','canceled','dsa','dsa','56464','56564','564','2022-03-05'),(134,'new project','this is a project','4','on hold','abc company','moiz','53456','5324','6463','2022-03-14'),(144,'my project','it is a software management project','4','success','abd company','Bilal Ahmed','67484','4353','5253','2022-03-08'),(154,'Software Project','This is a Project Management System','64','success','PVT Company','SuperAdmin','70977','5424','3344','2022-03-10'),(164,'new peo','dsahdkjash','64','on hold','dsad','dsa','321','321','321','2022-03-09'),(174,'Test project name','test project description. this is loren ipsum atan dilor.... ','1','on hold','ABC Company','John Doe','10000','4500','36','2022-03-17'),(184,'SDLC Project','software development life cycle','4','on hold','SDLC Company','Bill Gates','3456','234','243','2022-03-18'),(194,'Laviza Falak Naz','xn mxxz ,','1','success','mnSMNJ','MOIZ','35643','545','536','2022-03-19'),(204,'test','svadjsa','114','on hold','test','test','121','21','12','2022-06-25'),(214,'abc','kjjkddhwkj','144','success','mnmssbndbnewm','bas','223','241','34','2022-02-26'),(244,'abcd','jsdjdbjdb','144','success','kfdslk','test','234','345','245','2022-07-30');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `token` varchar(45) NOT NULL DEFAULT '0',
  `status` varchar(45) NOT NULL DEFAULT '0',
  `mail_server_id` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
INSERT INTO `registrations` VALUES (1,'SUPER ADMIN','lavizaniazi2001@gmail.com','admin_username','21232f297a57a5a743894a0e4a801fc3','0','1','4'),(14,'flatsome','flatsome@gmail.com','','f9f4ca9cb1bbd03a472d7ed709302076','fcf62ce88cd389ad731b86b7a7423da0','1','0'),(24,'flatsome','mbilalshafiq13@gmail.com','','f9f4ca9cb1bbd03a472d7ed709302076','c1229eb631e382a042e99eff78987a0c','1','0'),(44,'make_name','lavizaniazi@gmail.com','','827ccb0eea8a706c4c34a16891f84e7b','6dca8387a1e980478d79d551e4bb7916','1','0'),(74,'Ali','ali@gmail.com','','984d8144fa08bfc637d2825463e184fa','5ebb45b1c75ce870fbaefb5b5037a71e','1','0'),(84,'moiz 555','moizshaikh55555@gmail.com','','202cb962ac59075b964b07152d234b70','24a9918fadba3fe28c4e670e32c673a5','1','0'),(94,'sarah','sarahkiran680@gmail.com','','ec26202651ed221cf8f993668c459d46','12d64e71ddb85a3412d3620ea2b3cc3a','0','0'),(104,'Hassan Ali','hassanali123@gmail.com','','bbf2dead374654cbb32a917afd236656','f9d3a7117ea1671b192e9ef4b0bec590','0','0'),(124,'ahmed','ahmed@gmail.com','','9193ce3b31332b03f7d8af056c692b84','ea92c72e55270ad7ecfd502958d02f07','0','0'),(144,'awasi','awais.awm@gmail.com','','bf8f8bc114068709aafc9fa41c3d4b44','669f980ff595f8416f62c5833df7c68b','1','0'),(154,'Victor Cipamocha','manuelcipamocha@gmail.com','','506abdbdc641847ee6deb22e0fefb15d','4f713bf6abc26cefb59afbcdcd89d853','0','0'),(164,'Victor Manuel Cipamocha','victor.cipamocha@telefonica.com','','506abdbdc641847ee6deb22e0fefb15d','b0e7cb0cd90b8d1856aded8c67afecd2','0','0');
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (4,'subject 1','this is the content of first subject'),(14,'subject 2','this is the content of second subject'),(24,'subject 3','this is the content of third subject');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pid` varchar(45) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `uid` varchar(45) NOT NULL,
  `asg` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (4,'task1 testing','14','2022-01-15','2022-01-30','54','64','2','2022-07-16 14:24:14'),(14,'Demo Task','34','2022-01-04','2022-01-07','4','4','2','2022-07-16 14:24:14'),(24,'new task','44','2022-01-15','2022-01-30','54',NULL,'','2022-07-16 14:24:14'),(34,'Testing Task','14','2022-01-18','2022-01-20','54','34','3','2022-07-16 14:24:14'),(44,'Coding Task','14','2022-01-18','2022-01-20','54','34','1','2022-07-16 14:24:14'),(54,'Plan Task','14','2022-01-18','2022-01-28','54','34','3','2022-07-16 14:24:14'),(64,'planning','84','2022-03-01','2022-03-31','54','34','3','2022-07-16 14:24:14'),(74,'maintenance','94','2022-03-02','2022-04-02','54','54','1','2022-07-16 14:24:14'),(84,'development','84','2022-03-01','2022-04-01','54','4','3','2022-07-16 14:24:14'),(94,'gshagdh','34','2022-03-12','2022-03-23','4','4','3','2022-07-16 14:24:14'),(104,'ds','114','2022-03-10','2022-03-22','4','4','2','2022-07-16 14:24:14'),(114,'fds','34','2022-03-03','2022-03-05','4','1','3','2022-07-16 14:24:14'),(124,'fddfsd','34','2022-03-01','2022-03-04','4','14','3','2022-07-16 14:24:14'),(134,'fddfsdfdfds','34','2022-03-01','2022-03-04','4','14','3','2022-07-16 14:24:14'),(144,'testing','134','2022-03-11','2022-04-11','4','1','3','2022-07-16 14:24:14'),(154,'task update','144','2022-03-13','2022-03-20','4','4','3','2022-07-16 14:24:14'),(164,'hello','34','2022-03-08','2022-03-29','4','4','1','2022-07-16 14:24:14'),(174,'New Task For New Project','154','2022-03-09','2022-03-31','64','4','3','2022-07-16 14:24:14'),(184,'hello','154','2022-03-29','2022-03-30','64','4','1','2022-07-16 14:24:14'),(194,'task for email test','164','2022-04-01','2022-04-02','64','4','1','2022-07-16 14:24:14'),(204,'hds','164','2022-03-09','2022-03-10','64','4','1','2022-07-16 14:24:14'),(214,'now you see me?','164','2022-03-09','2022-03-31','64','4','1','2022-07-16 14:24:14'),(224,'test task 1','174','2022-03-18','2022-03-19','1','4','3','2022-07-16 14:24:14'),(234,'test task 2','174','2022-03-18','2022-03-20','1','84','3','2022-07-16 14:24:14'),(244,'test task 3','174','2022-03-01','2022-03-08','1','74','3','2022-07-16 14:24:14'),(254,'testing task 1','184','2022-03-19','2022-03-26','4','1','1','2022-07-16 14:24:14'),(264,'IUFHJGFJ','194','2022-03-19','2022-03-26','1','1','1','2022-07-16 14:24:14'),(274,'test','154','2022-06-25','2022-06-25','64','14','1','2022-07-16 14:24:14'),(284,'hcg','214','2022-06-26','2022-06-30','144','144','2','2022-07-16 14:24:14'),(294,'test','214','2022-07-16','2022-07-30','144','144','1','2022-07-16 15:05:44'),(304,'write','244','2022-07-30','2022-08-06','144','74','3','2022-07-29 03:19:23'),(314,'Task 2','194','2022-08-25','2022-09-02','1','94','2','2022-08-22 16:27:14'),(324,'this is a new task','194','2022-08-22','2022-08-31','1','104','2','2022-08-25 00:55:33');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_progress`
--

DROP TABLE IF EXISTS `task_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task_progress` (
  `progress_id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`progress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_progress`
--

LOCK TABLES `task_progress` WRITE;
/*!40000 ALTER TABLE `task_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `task_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_cases`
--

DROP TABLE IF EXISTS `test_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test_cases` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `file_id` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '0',
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_cases`
--

LOCK TABLES `test_cases` WRITE;
/*!40000 ALTER TABLE `test_cases` DISABLE KEYS */;
INSERT INTO `test_cases` VALUES (4,'Proofreading','Check Spellings and Grammer',NULL,'114','1'),(24,'Syntax','Check the syntax of the application and verify the code quality',NULL,'114','0'),(64,'Database Connection','Verify the database connection and see timeout errors',NULL,'114','0'),(74,'Database Connection','Verify the database connection and see timeout errors',NULL,'124','1'),(84,'Database Connection','Verify the database connection and see timeout errors',NULL,'134','0'),(94,'Proofreading','Check Spellings and Grammer',NULL,'134','1'),(104,'Database Connection','Verify the database connection and see timeout errors',NULL,'144','0'),(114,'Proofreading','Check Spellings and Grammer',NULL,'204','1'),(124,'Database Connection','Verify the database connection and see timeout errors',NULL,'214','1'),(134,'Syntax','Check the syntax of the application and verify the code quality',NULL,'214','0'),(154,'Proofreading','Check Spellings and Grammer',NULL,'214','1'),(164,'Case From Logs','main(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely m',NULL,'214','0'),(174,'Case From Logs','Math error detected at line',NULL,'214','1'),(184,'Database Connection','Verify the database connection and see timeout errors',NULL,'224','0'),(204,'Case From Logs','<b>My ERROR</b> [2] include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this ',NULL,'224','0');
/*!40000 ALTER TABLE `test_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testing` (
  `test_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tester_id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testing`
--

LOCK TABLES `testing` WRITE;
/*!40000 ALTER TABLE `testing` DISABLE KEYS */;
/*!40000 ALTER TABLE `testing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `error_log_number` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_logs`
--

LOCK TABLES `user_logs` WRITE;
/*!40000 ALTER TABLE `user_logs` DISABLE KEYS */;
INSERT INTO `user_logs` VALUES (4,4,1,214),(14,24,1,214),(24,14,1,214),(34,34,1,214),(44,44,1,214),(54,54,1,214),(64,64,1,214),(74,74,1,224),(84,84,1,224),(94,94,1,224),(104,104,1,214),(114,114,1,214),(124,124,1,214),(134,134,1,224),(144,144,1,224),(154,154,1,224),(164,164,1,224),(174,174,1,224);
/*!40000 ALTER TABLE `user_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_subscriptions`
--

DROP TABLE IF EXISTS `user_subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_subscriptions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `payment_method` varchar(45) NOT NULL,
  `stripe_subscription_id` varchar(45) NOT NULL,
  `stripe_customer_id` varchar(45) NOT NULL,
  `plan_amount` float NOT NULL,
  `plan_amount_currency` varchar(45) NOT NULL,
  `plan_interval` varchar(45) NOT NULL,
  `plan_interval_count` varchar(45) NOT NULL,
  `payer_email` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `plan_period_start` datetime NOT NULL,
  `plan_period_end` datetime NOT NULL,
  `status` varchar(45) NOT NULL,
  `stripe_plan_id` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_subscriptions`
--

LOCK TABLES `user_subscriptions` WRITE;
/*!40000 ALTER TABLE `user_subscriptions` DISABLE KEYS */;
INSERT INTO `user_subscriptions` VALUES (4,'44','','sub_1KGcpYFJhudIUSTWrZudanrR','cus_KwVrRarjupYfCe',25,'usd','week','1','sarahkiran680@gmail.com','2022-01-11 05:23:35','2022-01-11 05:23:35','2022-01-18 05:23:35','active','plan_KwVr55cYrY8Fkk'),(14,'4','','sub_1KGdb0FJhudIUSTWe7Gy1Mmo','cus_KwWe8OFmiYYRFk',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-11 06:12:38','2022-01-11 06:12:38','2022-01-18 06:12:38','active','plan_KwWeHWY8o4NaZd'),(24,'4','','sub_1KGdfbFJhudIUSTWMcqLxdGn','cus_KwWjntEldqdlpk',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-11 06:17:22','2022-01-11 06:17:22','2022-01-18 06:17:22','active','plan_KwWjdkwZvX15Mf'),(34,'4','','sub_1KGdfeFJhudIUSTWEpHmntMa','cus_KwWjPEEb728vcU',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-11 06:17:26','2022-01-11 06:17:26','2022-01-18 06:17:26','active','plan_KwWjfFCYygSg2S'),(44,'4','','sub_1KGdiIFJhudIUSTWO2zDhQ7P','cus_KwWl6hxgTE7Exb',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-11 06:20:10','2022-01-11 06:20:10','2022-01-18 06:20:10','active','plan_KwWlxjvuH7AGcP'),(54,'4','','sub_1KGeenFJhudIUSTWGai9Ggzt','cus_KwXkCVUVpm9OZx',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-11 07:20:37','2022-01-11 07:20:37','2022-01-18 07:20:37','active','plan_KwXkkOXFSwq8W2'),(64,'4','','sub_1KHWmmFJhudIUSTWZYLWGX00','cus_KxRgtFOd6Pn88t',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-13 18:08:28','2022-01-13 18:08:28','2022-01-20 18:08:28','active','plan_KxRgflWazv7K3y'),(74,'4','','sub_1KHXK5FJhudIUSTWBK8I4sWF','cus_KxSEg7d1vEa0a2',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-13 18:42:53','2022-01-13 18:42:53','2022-01-20 18:42:53','active','plan_KxSElvRXk2tifo'),(84,'4','','sub_1KIcJ3FJhudIUSTW7O80J9sw','cus_KyZR4sR0nHcApz',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-16 18:14:17','2022-01-16 18:14:17','2022-01-23 18:14:17','active','plan_KyZRgLi3Sm9um6'),(94,'44','','sub_1KIcarFJhudIUSTWCOq8cbMB','cus_KyZk1t4285D3g4',25,'usd','week','1','sarahkiran680@gmail.com','2022-01-16 17:32:41','2022-01-16 17:32:41','2022-01-23 17:32:41','active','plan_KyZkvfACvUvdoR'),(104,'44','','sub_1KIcbGFJhudIUSTWm65ZAXMg','cus_KyZkrQXOmhflHt',25,'usd','week','1','sarahkiran680@gmail.com','2022-01-16 17:33:06','2022-01-16 17:33:06','2022-01-23 17:33:06','active','plan_KyZkb3rlAIYDg9'),(114,'4','','sub_1KIdXWFJhudIUSTWdHNVVXvA','cus_KyaibLmbRoQGJQ',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-16 19:33:18','2022-01-16 19:33:18','2022-01-23 19:33:18','active','plan_KyailBPDQ3mPeZ'),(124,'4','','sub_1KIogkFJhudIUSTW9ECxONdk','cus_KymFMJA5x6sceQ',25,'usd','week','1','lavizaniazi@gmail.com','2022-01-17 06:27:33','2022-01-17 06:27:33','2022-01-24 06:27:33','active','plan_KymFP3hK5yHyXf'),(134,'4','','sub_1KKgLSFJhudIUSTWytUND6Cs','cus_L0hk5ezZwgvnYL',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-22 09:57:18','2022-01-22 09:57:18','2022-01-29 09:57:18','active','plan_L0hkzvzdtDVsM6'),(144,'4','','sub_1KKgLZFJhudIUSTWlkU9kYYE','cus_L0hl4BSp2AykvL',25,'usd','week','1','lavizaniazi2001@gmail.com','2022-01-22 09:57:24','2022-01-22 09:57:24','2022-01-29 09:57:24','active','plan_L0hlapvT3aTQoE');
/*!40000 ALTER TABLE `user_subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validation_logs`
--

DROP TABLE IF EXISTS `validation_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `validation_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descp` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `fid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validation_logs`
--

LOCK TABLES `validation_logs` WRITE;
/*!40000 ALTER TABLE `validation_logs` DISABLE KEYS */;
INSERT INTO `validation_logs` VALUES (4,'Undefined function called at line 3',0,214),(14,'Math error detected at line',1,214),(24,'main(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone UTC for now, but please set date.timezone to select your timezone.',1,214),(34,'main(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone UTC for now, but please set date.timezone to select your timezone.',1,214),(44,'main(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone UTC for now, but please set date.timezone to select your timezone.',1,214),(54,'main(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone UTC for now, but please set date.timezone to select your timezone.',1,214),(64,'main(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone UTC for now, but please set date.timezone to select your timezone.',1,214),(74,'Division by zero',0,224),(84,'include(): It is not safe to rely on the systems timezone settings. You are required to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone UTC for now, but please set date.timezone to select your timezone.',1,224),(94,'include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone.',1,224),(104,'<b>My ERROR</b> [2] main(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone.<br />\nFatal error on line 3 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',0,214),(114,'<b>My ERROR</b> [2] main(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone.<br />\nFatal error on line 3 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',0,214),(124,'<b>My ERROR</b> [2] main(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone.<br />\nFatal error on line 3 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',0,214),(134,'include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone. <br> C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resourcesfiles\new.php<br> 4',1,224),(144,'<b>My ERROR</b> [2] include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone. <br />An error on line 4 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',1,224),(154,'<b>My ERROR</b> [2] include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone. <br />An error on line 4 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',0,224),(164,'<b>My ERROR</b> [2] include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone. <br />An error on line 4 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',0,224),(174,'<b>My ERROR</b> [2] include(): It is not safe to rely on the system\'s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone \'UTC\' for now, but please set date.timezone to select your timezone. <br />An error on line 4 in file C:Users\ZULKUFILDownloadslaragon-portablewwwDevOps\resource',0,224);
/*!40000 ALTER TABLE `validation_logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-26  0:37:56
