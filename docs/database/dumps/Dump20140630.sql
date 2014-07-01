CREATE DATABASE  IF NOT EXISTS `plataforma_inmobiliaria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `plataforma_inmobiliaria`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: plataforma_inmobiliaria
-- ------------------------------------------------------
-- Server version	5.5.36

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
-- Table structure for table `AuthAssignment`
--

DROP TABLE IF EXISTS `AuthAssignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthAssignment`
--

LOCK TABLES `AuthAssignment` WRITE;
/*!40000 ALTER TABLE `AuthAssignment` DISABLE KEYS */;
INSERT INTO `AuthAssignment` VALUES ('director','director','','');
/*!40000 ALTER TABLE `AuthAssignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItem`
--

DROP TABLE IF EXISTS `AuthItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItem`
--

LOCK TABLES `AuthItem` WRITE;
/*!40000 ALTER TABLE `AuthItem` DISABLE KEYS */;
INSERT INTO `AuthItem` VALUES ('administrativo',2,'','',''),('agente',2,'','',''),('director',2,'','','');
/*!40000 ALTER TABLE `AuthItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItemChild`
--

DROP TABLE IF EXISTS `AuthItemChild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItemChild`
--

LOCK TABLES `AuthItemChild` WRITE;
/*!40000 ALTER TABLE `AuthItemChild` DISABLE KEYS */;
/*!40000 ALTER TABLE `AuthItemChild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `objeto` varchar(100) NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria`
--

LOCK TABLES `auditoria` WRITE;
/*!40000 ALTER TABLE `auditoria` DISABLE KEYS */;
INSERT INTO `auditoria` VALUES (1,'0000-00-00 00:00:00','obj','opr','','alguien'),(2,'2014-12-05 00:00:00','obj','opr','','alguien'),(3,'2014-12-05 23:30:00','obj','opr','','alguien'),(4,'2014-06-19 08:05:57','usuario','login','','juan'),(5,'2014-06-19 08:10:23','usuario','login','','juan'),(6,'2014-06-19 08:10:23','usuario','logout','','juan'),(7,'2014-06-19 08:10:31','usuario','login','','juan'),(8,'2014-06-19 08:14:02','usuario','logout','','juan'),(9,'2014-06-19 08:14:10','usuario','login','','juan'),(10,'2014-06-19 17:00:53','usuario','logout','','juan'),(11,'2014-06-19 17:00:57','usuario','login','','juan'),(12,'2014-06-24 00:14:46','usuario','login','','juan'),(13,'2014-06-24 03:36:44','usuario','login','','juan'),(14,'2014-06-24 03:37:28','usuario','login','','juan'),(15,'2014-06-24 03:40:20','usuario','login','','juan'),(16,'2014-06-24 07:57:46','inmueble','modificacion','10','director'),(17,'2014-06-24 07:59:09','inmueble','alta','32','director'),(18,'2014-06-24 08:08:01','parametro','modificacion','parametro = cantidadBienesPortada, nuevo_valor = 10','director'),(19,'2014-06-24 08:15:26','evento','modificacion','53a9177ee5974a3a283c9869','director'),(20,'2014-06-24 08:18:40','evento','modificacion','53a91840e5974a5d283c9869','director'),(21,'2014-06-24 08:19:09','evento','modificacion','53a9185de5974a3a283c986a','director'),(22,'2014-06-24 08:19:37','evento','modificacion','53a91879e5974a98283c9869','director'),(23,'2014-06-24 08:20:09','evento','modificacion','53a91899e5974a90273c9869','director'),(24,'2014-06-24 08:20:33','evento','modificacion','53a918b1e5974aed273c9869','director'),(25,'2014-06-24 08:21:09','evento','modificacion','53a918d5e5974a72283c9869','director'),(26,'2014-06-24 08:21:38','evento','modificacion','53a918f2e5974a28283c9869','director'),(27,'2014-06-24 08:22:22','evento','modificacion','53a9191ee5974a3a283c986b','director'),(28,'2014-06-24 08:23:01','evento','modificacion','53a91944e5974aed273c986a','director'),(29,'2014-06-24 08:24:00','evento','modificacion','53a9197fe5974a72283c986a','director'),(30,'2014-06-24 08:28:49','evento','modificacion','53a91aa0e5974a5d283c986a','director'),(31,'2014-06-24 08:29:11','evento','modificacion','53a8e2c3e5974a28203c9869','director'),(32,'2014-06-24 08:29:25','evento','modificacion','53a8f633e5974a29223c9869','director'),(33,'2014-06-24 08:29:47','evento','modificacion','53a8f818e5974a29223c986a','director'),(34,'2014-06-24 08:30:32','evento','modificacion','53a8fd5de5974a46253c9869','director'),(35,'2014-06-24 08:30:47','evento','modificacion','53a8f665e5974acc233c9869','director'),(36,'2014-06-24 08:31:07','evento','modificacion','53a91840e5974a5d283c9869','director'),(37,'2014-06-24 08:31:20','evento','modificacion','53a8f6aae5974aa7223c9869','director'),(38,'2014-06-24 08:31:38','evento','modificacion','53a8fd35e5974ae4243c9869','director'),(39,'2014-06-24 08:31:52','evento','modificacion','53a8f7bee5974a26203c9869','director'),(40,'2014-06-24 08:32:07','evento','modificacion','53a8e3b6e5974a17203c9869','director'),(41,'2014-06-24 08:32:24','evento','modificacion','53a9197fe5974a72283c986a','director'),(42,'2014-06-24 08:32:37','evento','modificacion','53a91aa0e5974a5d283c986a','director'),(43,'2014-06-25 00:07:36','usuario','login','','director'),(44,'2014-06-26 04:44:53','inmueble','modificacion','7','director'),(45,'2014-06-26 05:50:19','inmueble','modificacion','6','director'),(46,'2014-06-29 03:23:29','inmueble','alta','33','director'),(47,'2014-06-29 18:26:41','usuario','login','','director'),(48,'2014-06-29 18:27:58','inmueble','alta','1','director'),(49,'2014-06-29 21:39:02','usuario','login','','director'),(50,'2014-06-29 21:49:58','inmueble','alta','35','director'),(51,'2014-06-29 22:18:51','inmueble','alta','2','director'),(52,'2014-06-29 22:28:09','inmueble','alta','2','director'),(53,'2014-06-29 22:38:46','inmueble','alta','2','director'),(54,'2014-06-29 22:55:52','inmueble','alta','6','director'),(55,'2014-06-29 22:56:52','inmueble','alta','1','director'),(56,'2014-06-29 23:00:06','inmueble','alta','1','director'),(57,'2014-06-29 23:04:49','inmueble','alta','1','director'),(58,'2014-06-30 00:09:15','inmueble','alta','1','director');
/*!40000 ALTER TABLE `auditoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barrios`
--

DROP TABLE IF EXISTS `barrios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `ciudad` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `ciudad` (`ciudad`),
  CONSTRAINT `barrios_ibfk_1` FOREIGN KEY (`ciudad`) REFERENCES `ciudades` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barrios`
--

LOCK TABLES `barrios` WRITE;
/*!40000 ALTER TABLE `barrios` DISABLE KEYS */;
/*!40000 ALTER TABLE `barrios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `departamento` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `departamento` (`departamento`),
  CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`departamento`) REFERENCES `departamentos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `direccion` varchar(2048) DEFAULT NULL,
  `comentarios` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'sadasd','Asd','asd','asdasd','asdasd'),(2,'asdasd','Asd','sad','asd','asdasdasd'),(3,'jsuarez@gmail.com','juana','suarez','algun lado','asdkasd;kasjd;akshdljkh lkashdl;kjahsd jk ljkhaslkjdhlaksjdhlkjasdhljkashdlkjahsdlksa');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destacado_inmueble`
--

DROP TABLE IF EXISTS `destacado_inmueble`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destacado_inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `update_timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_destacado_inmueble` (`id_inmueble`),
  CONSTRAINT `fk_destacado_inmueble` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destacado_inmueble`
--

LOCK TABLES `destacado_inmueble` WRITE;
/*!40000 ALTER TABLE `destacado_inmueble` DISABLE KEYS */;
INSERT INTO `destacado_inmueble` VALUES (1,33,'2014-06-29 03:23:45'),(2,10,'2014-06-29 01:59:53'),(3,1,'2014-06-28 00:00:00'),(4,1,'2014-06-28 00:00:00'),(5,1,'2014-06-28 00:00:00'),(6,1,'2014-06-28 00:00:00');
/*!40000 ALTER TABLE `destacado_inmueble` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados_inmueble`
--

DROP TABLE IF EXISTS `estados_inmueble`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados_inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados_inmueble`
--

LOCK TABLES `estados_inmueble` WRITE;
/*!40000 ALTER TABLE `estados_inmueble` DISABLE KEYS */;
INSERT INTO `estados_inmueble` VALUES (1,'Estado 1','Estado 1'),(2,'Estado  2','Estado  2');
/*!40000 ALTER TABLE `estados_inmueble` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes_inmueble`
--

DROP TABLE IF EXISTS `imagenes_inmueble`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes_inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `ruta` varchar(512) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_inmueble` (`id_inmueble`),
  CONSTRAINT `imagenes_inmueble_ibfk_1` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes_inmueble`
--

LOCK TABLES `imagenes_inmueble` WRITE;
/*!40000 ALTER TABLE `imagenes_inmueble` DISABLE KEYS */;
INSERT INTO `imagenes_inmueble` VALUES (1,6,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.04.26.jpg'),(2,6,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.04.53.jpg'),(3,6,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.05.10.jpg'),(4,6,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.05.33.jpg'),(5,9,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.03.52.jpg'),(6,9,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.04.26.jpg'),(7,9,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.04.53.jpg'),(8,9,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.05.10.jpg'),(9,9,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.05.33.jpg'),(10,9,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.05.58.jpg'),(11,10,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.03.52.jpg'),(12,10,'/plataforma-inmobiliaria/tmp/juan/2014-01-14 21.04.26.jpg'),(13,11,'2014-01-14 21.04.53.jpg'),(14,11,'2014-01-14 21.05.10.jpg'),(15,11,'2014-01-14 21.05.33.jpg'),(16,11,'2014-01-14 21.05.58.jpg'),(17,24,'2014-01-14 21.05.10.jpg'),(18,25,'2014-01-14 21.05.10.jpg'),(19,26,'2014-01-14 21.05.10.jpg'),(20,27,'2014-01-14 21.05.10.jpg'),(21,28,'2014-01-14 21.05.10.jpg'),(22,28,'2014-01-14 21.05.33.jpg'),(23,28,'2014-01-14 21.05.58.jpg'),(24,29,'2014-01-14 21.03.52.jpg'),(25,29,'2014-01-14 21.04.26.jpg'),(26,29,'2014-01-14 21.04.53.jpg'),(27,29,'2014-01-14 21.05.10.jpg'),(28,31,'2014-01-14 21.04.26.jpg'),(29,31,'2014-01-14 21.04.53.jpg'),(30,31,'2014-01-14 21.05.10.jpg'),(31,32,'2014-01-14 21.03.52.jpg'),(32,32,'2014-01-14 21.04.26.jpg'),(33,32,'2014-01-14 21.04.53.jpg'),(34,32,'2014-01-14 21.05.10.jpg'),(35,33,'2014-01-14 21.03.52.jpg'),(36,33,'2014-01-14 21.04.26.jpg'),(37,33,'2014-01-14 21.04.53.jpg'),(38,33,'2014-01-14 21.05.10.jpg'),(39,33,'2014-01-14 21.05.33.jpg'),(40,33,'2014-01-14 21.05.58.jpg'),(41,33,'2014-01-14 21.06.10.jpg'),(42,33,'2014-01-14 21.06.34.jpg'),(46,35,'2014-01-14 21.04.26.jpg'),(47,35,'2014-01-14 21.04.53.jpg'),(48,35,'2014-01-14 21.05.10.jpg'),(49,2,'2014-01-14 21.03.52.jpg'),(50,2,'2014-01-14 21.03.52.jpg'),(51,2,'2014-01-14 21.03.52.jpg'),(52,2,'2014-01-14 21.04.26.jpg'),(53,2,'2014-01-14 21.04.53.jpg'),(54,2,'2014-01-14 21.03.52.jpg'),(55,2,'2014-01-14 21.04.26.jpg'),(56,2,'2014-01-14 21.04.53.jpg'),(57,2,'2014-01-14 21.03.52.jpg'),(58,2,'2014-01-14 21.04.26.jpg'),(59,2,'2014-01-14 21.04.53.jpg'),(60,6,'2014-01-14 21.03.52.jpg'),(61,6,'2014-01-14 21.04.26.jpg'),(62,6,'2014-01-14 21.04.53.jpg'),(77,1,'images.jpg');
/*!40000 ALTER TABLE `imagenes_inmueble` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inmuebles`
--

DROP TABLE IF EXISTS `inmuebles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inmuebles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(2048) NOT NULL,
  `tipo_inmueble` varchar(50) NOT NULL,
  `vista_al_mar` tinyint(1) DEFAULT NULL,
  `tiene_calefaccion` tinyint(1) DEFAULT NULL,
  `gastos_comunes` double DEFAULT NULL,
  `anio_construccion_aproximado` int(11) DEFAULT NULL,
  `coord_latitud` mediumtext,
  `coord_longitud` mediumtext,
  `cant_banios` int(11) DEFAULT NULL,
  `mts2_edificados` int(11) DEFAULT NULL,
  `cant_plantas_casa` int(11) DEFAULT NULL,
  `es_propiedad_horizontal` tinyint(1) DEFAULT NULL,
  `cant_dormitorios` int(11) DEFAULT NULL,
  `numero_de_piso` int(11) DEFAULT NULL,
  `tiene_ascensor` tinyint(1) DEFAULT NULL,
  `tiene_porteria` tinyint(1) DEFAULT NULL,
  `tiene_portero_electrico` tinyint(1) DEFAULT NULL,
  `tiene_vigilancia` tinyint(1) DEFAULT NULL,
  `tipo_local` varchar(50) DEFAULT NULL,
  `tipo_local_observacion` varchar(1024) DEFAULT NULL,
  `tiene_planta_alta` tinyint(1) DEFAULT NULL,
  `altura_salon_principal` int(11) DEFAULT NULL,
  `cant_plantas_local` int(11) DEFAULT NULL,
  `tiene_estacionamiento` tinyint(1) DEFAULT NULL,
  `tiene_deposito` tinyint(1) DEFAULT NULL,
  `potencia_contratada` varchar(10) DEFAULT NULL,
  `fk_estado` int(11) NOT NULL,
  `precio_publicacion` float DEFAULT NULL,
  `operacion_publicacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_estado` (`fk_estado`),
  CONSTRAINT `inmuebles_ibfk_1` FOREIGN KEY (`fk_estado`) REFERENCES `estados_inmueble` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inmuebles`
--

LOCK TABLES `inmuebles` WRITE;
/*!40000 ALTER TABLE `inmuebles` DISABLE KEYS */;
INSERT INTO `inmuebles` VALUES (1,'Casa en Carrasco','Descripcion de casa en carrasco','apartamento',0,0,120,NULL,'-4150285.5940333','-6254668.1067101',NULL,NULL,NULL,0,3,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',2,500,'venta'),(2,'apartamento en pocitos','sadasdasdasdasd','apartamento',0,0,NULL,NULL,'-4151231.5022582','-6253769.9716278',NULL,NULL,NULL,0,3,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(3,'asd','asdasd','casa',0,0,NULL,NULL,'','',1,NULL,NULL,0,4,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(4,'asd','asd','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,4,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(5,'asdasdasdasdasd','asdasdasd','casa',0,0,NULL,NULL,'','',1,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(6,'lindacasa','casa en barrio sur','apartamento',0,0,NULL,NULL,'-4150333.367176','-6253750.8623708',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(7,'aaaaa','asdasdasd','apartamento',0,0,NULL,NULL,'-4149941.6274061','-6254477.0141394',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'alquiler'),(8,'asdasd','asdasd','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,6,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(9,'aaaaaaa','asdasdasd','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,6,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,1500,'venta'),(10,'Casa de la barra','asdasdasd','apartamento',0,0,NULL,NULL,'-4150075.3922056','-6252575.6430611',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(11,'asdasdasdasdasd','asdasdasd','apartamento',0,0,NULL,NULL,'','',3,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(12,'bbbbb','asdasdasd','apartamento',0,0,NULL,NULL,'','',3,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,1600,'venta'),(13,'bbbbb','asdasdasd','apartamento',0,0,NULL,NULL,'','',4,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(14,'asdasdasdasdasd','asdasdasdasd','apartamento',0,0,NULL,NULL,'','',4,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(15,'sadasdddd','asdasdasd','apartamento',0,0,NULL,NULL,'','',5,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,1700,'venta'),(16,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',5,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(17,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',2,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(18,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',2,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(19,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(20,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(21,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(22,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(23,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(24,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(25,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(26,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(27,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(28,'asddddd','asdadsa','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(29,'fffffffffffffffffff','asdasdasd','apartamento',0,0,NULL,NULL,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(30,'rrrr','assadasd','apartamento',0,0,NULL,NULL,'-4150266.4847763','-6252862.2819171',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(31,'una linda casa','descripcion','apartamento',0,0,NULL,NULL,'-4150304.7032904','-6252652.0800893',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'venta'),(32,'Apto de Rivera y Soca','aslkd; ;kasd;kj; has.kjhasd;khalsdk l;khasdlkhaskjdhalk lkjhalksdasd','apartamento',0,0,2500,NULL,'-4150438.4680899','-6250970.4654673',NULL,NULL,NULL,0,NULL,NULL,1,1,0,1,'','',0,NULL,NULL,0,0,'',2,NULL,'venta'),(33,'un inmueble decente','asdalsjkdhaljksdhlakjsdhajkshdlkajshdlajs','apartamento',0,0,NULL,NULL,'-4150428.9134613','-6252212.5671767',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'alquiler'),(34,'casa medio pelo','asdasdasdasd','apartamento',0,0,NULL,NULL,'-4149683.6524357','-6255356.0399645',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'alquiler'),(35,'casa medio pelo','asdasdasdasd','apartamento',0,0,NULL,NULL,'-4149683.6524357','-6255356.0399645',NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',1,NULL,'alquiler');
/*!40000 ALTER TABLE `inmuebles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametros`
--

DROP TABLE IF EXISTS `parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametros` (
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  `valor` varchar(512) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametros`
--

LOCK TABLES `parametros` WRITE;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
INSERT INTO `parametros` VALUES ('cantidadBienesPortada','Cantidad de bienes a mostrar en la portada del sitio','10'),('directorioBaseImagenes','Ruta base para las imagenes subidas en el sistema de archivos','/plataforma-inmobiliaria'),('emailAdminitrador','Email del administrador del sitio','admin@inmobiliaria.com.uy');
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_notificacion`
--

DROP TABLE IF EXISTS `tipo_notificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_notificacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_notificacion`
--

LOCK TABLES `tipo_notificacion` WRITE;
/*!40000 ALTER TABLE `tipo_notificacion` DISABLE KEYS */;
INSERT INTO `tipo_notificacion` VALUES (1,'Solicitud de información','Descripcion de Solicitud de información'),(3,'Solicitud de publicacion ','Aplica a las notificaciones realizadas por los clientes que desean publicar un inmueble en el sitio.');
/*!40000 ALTER TABLE `tipo_notificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `contrasenia` varchar(64) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `ultimo_ingreso` date DEFAULT NULL,
  `habilitado` tinyint(1) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('director','director@php2014.com','$1$krg0WTeF$xI2URyXc.wDDh/sFW/d/7/','juan','perez',NULL,1,'director');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-30 21:07:47
