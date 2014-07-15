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
INSERT INTO `AuthAssignment` VALUES ('administrativo','msteffen',NULL,NULL),('administrativo','mterra',NULL,NULL),('agente','esilvera',NULL,NULL),('director','afontes','',''),('director','mrodriguez','',''),('director','pdesosa','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria`
--

LOCK TABLES `auditoria` WRITE;
/*!40000 ALTER TABLE `auditoria` DISABLE KEYS */;
INSERT INTO `auditoria` VALUES (70,'2014-07-02 00:16:55','inmueble','alta','59','mrodriguez'),(71,'2014-07-02 00:20:55','inmueble','alta','60','mrodriguez'),(72,'2014-07-02 00:23:31','inmueble','alta','61','mrodriguez'),(73,'2014-07-02 00:27:32','inmueble','alta','62','mrodriguez'),(74,'2014-07-02 00:32:48','inmueble','alta','63','mrodriguez'),(75,'2014-07-02 00:35:33','inmueble','alta','64','mrodriguez'),(76,'2014-07-02 00:45:21','usuario','logout','','mrodriguez'),(77,'2014-07-02 03:27:46','usuario','logout','',''),(78,'2014-07-02 03:27:52','usuario','login','','mrodriguez'),(79,'2014-07-03 03:56:18','usuario','logout','','mrodriguez'),(80,'2014-07-03 03:56:31','usuario','login','','mrodriguez'),(81,'2014-07-03 04:41:50','usuario','logout','',''),(82,'2014-07-03 04:42:04','usuario','login','','mrodriguez'),(83,'2014-07-03 05:34:06','usuario','logout','','mrodriguez'),(84,'2014-07-03 05:34:11','usuario','login','','mrodriguez'),(85,'2014-07-03 05:38:15','usuario','logout','','mrodriguez'),(86,'2014-07-03 05:38:21','usuario','login','','mrodriguez'),(87,'2014-07-03 05:39:14','usuario','logout','','mrodriguez'),(88,'2014-07-03 05:39:19','usuario','login','','mrodriguez'),(89,'2014-07-04 01:22:55','usuario','logout','','mrodriguez'),(90,'2014-07-04 01:23:22','usuario','login','','esilvera'),(91,'2014-07-04 01:52:46','usuario','logout','','esilvera'),(92,'2014-07-04 01:59:18','usuario','login','','esilvera'),(93,'2014-07-04 02:18:52','usuario','logout','','esilvera'),(94,'2014-07-04 02:19:05','usuario','login','','mrodriguez'),(95,'2014-07-04 02:19:49','usuario','logout','','mrodriguez'),(96,'2014-07-04 02:19:54','usuario','login','','mterra'),(97,'2014-07-04 03:26:24','usuario','logout','','mterra'),(98,'2014-07-04 03:26:57','usuario','login','','mrodriguez'),(99,'2014-07-06 02:46:12','usuario','login','','mrodriguez'),(100,'2014-07-08 02:16:58','usuario','logout','','mrodriguez'),(101,'2014-07-08 02:17:08','usuario','login','','mrodriguez'),(102,'2014-07-09 04:12:05','usuario','login','','mrodriguez'),(103,'2014-07-10 02:04:16','usuario','login','','mrodriguez'),(104,'2014-07-10 03:27:57','usuario','logout','','mrodriguez'),(105,'2014-07-10 03:28:02','usuario','login','','mrodriguez'),(106,'2014-07-12 21:29:39','usuario','login','','mrodriguez'),(107,'2014-07-14 03:53:12','inmueble','alta','65','mrodriguez'),(108,'2014-07-15 00:26:26','usuario','login','','mrodriguez'),(109,'2014-07-15 00:42:27','inmueble','alta','66','mrodriguez'),(110,'2014-07-15 00:48:52','inmueble','alta','67','mrodriguez'),(111,'2014-07-15 00:52:34','inmueble','alta','68','mrodriguez'),(112,'2014-07-15 01:00:54','inmueble','alta','69','mrodriguez'),(113,'2014-07-15 02:24:14','usuario','logout','','mrodriguez'),(114,'2014-07-15 02:24:25','usuario','login','','esilvera'),(115,'2014-07-15 22:31:29','usuario','login','','mrodriguez'),(116,'2014-07-15 22:57:14','inmueble','alta','70','mrodriguez'),(117,'2014-07-15 23:01:34','inmueble','alta','71','mrodriguez'),(118,'2014-07-15 23:09:51','inmueble','alta','72','mrodriguez'),(119,'2014-07-15 23:14:57','inmueble','alta','73','mrodriguez'),(120,'2014-07-15 23:21:03','inmueble','alta','74','mrodriguez'),(121,'2014-07-15 23:29:27','inmueble','alta','75','mrodriguez'),(122,'2014-07-16 00:00:13','inmueble','alta','76','mrodriguez'),(123,'2014-07-16 00:05:02','inmueble','alta','77','mrodriguez'),(124,'2014-07-16 00:12:22','inmueble','alta','78','mrodriguez'),(125,'2014-07-16 00:15:29','inmueble','alta','79','mrodriguez'),(126,'2014-07-16 00:19:57','inmueble','alta','80','mrodriguez');
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
  `nombre` varchar(128) DEFAULT NULL,
  `id_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barrio_ciudad` (`id_ciudad`),
  CONSTRAINT `fk_barrio_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barrios`
--

LOCK TABLES `barrios` WRITE;
/*!40000 ALTER TABLE `barrios` DISABLE KEYS */;
INSERT INTO `barrios` VALUES (1,'Centro',1),(2,'Colon',1),(3,'Parque Rodo',1),(4,'Palermo',1),(5,'Sayago',1),(6,'Punta Gorda',1),(7,'Aguada',1),(8,'Pocitos',1),(9,'Paso de la arena',1),(10,'Ciudad Vieja',1),(11,'La comercial',1),(12,'Piedras blancas',1),(13,'Jardines',2),(14,'Peñarol',1);
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
  `nombre` varchar(128) DEFAULT NULL,
  `id_departamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ciudad_departamento` (`id_departamento`),
  CONSTRAINT `fk_ciudad_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES (1,'Montevideo',1),(2,'Lascano',2),(3,'La Paloma',2),(4,'Treinta y Tres',5);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (4,'jsuarez@gmail.com','Juan','Suarez','Avenida italia 5593',''),(5,'hacosta','Humberto','Acosta','18 dwe julio 8878',''),(6,'hcedrez','Horacio','Cedrez','',''),(7,'jvelazquez','Joaquin','Velazquez','Camino Maldonado 1221',''),(8,'pelo8888@gmail.com','Alejandro ','Fontes','',''),(9,'fgonzalez@gmail.com','Federico ','Gonzalez','',''),(10,'jfernandez@gmail.com','Juan Fernandez','','',''),(11,'agustin.paredes@gmail.com','Agustin Paredes','','',''),(12,'horaciocedres@gmail.com','Horacio Cedres','','',''),(13,'gacosta@gmail.com','Gustavo Acosta','','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (3,'Maldonado'),(1,'Montevideo'),(4,'Rivera'),(2,'Rocha'),(5,'Treinta y Tres');
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
  `id_inmueble` int(11) DEFAULT NULL,
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
INSERT INTO `destacado_inmueble` VALUES (1,70,'2014-07-16 00:21:07'),(2,71,'2014-07-16 00:20:41'),(3,72,'2014-07-15 23:34:00'),(4,73,'2014-07-15 23:34:00'),(5,74,'2014-07-15 23:34:00'),(6,75,'2014-07-15 23:34:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados_inmueble`
--

LOCK TABLES `estados_inmueble` WRITE;
/*!40000 ALTER TABLE `estados_inmueble` DISABLE KEYS */;
INSERT INTO `estados_inmueble` VALUES (3,'Pend. publicacion','Inmuebles pendientes de validacion del director'),(4,'Publicada','Inmuebles actualmente publicados en el sitio'),(5,'Ocupada','Inmuebles actualmente alquilados (o comprados) por algun cliente del sitio'),(6,'Cancelado','Inmuebles cancelados por el cliente');
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
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes_inmueble`
--

LOCK TABLES `imagenes_inmueble` WRITE;
/*!40000 ALTER TABLE `imagenes_inmueble` DISABLE KEYS */;
INSERT INTO `imagenes_inmueble` VALUES (128,70,'140207204724440.jpg'),(129,70,'apartamentos1.jpg'),(130,70,'imagen5.jpg'),(131,71,'imagen7.jpg'),(132,71,'imagen9.jpg'),(133,71,'images (2).jpg'),(134,72,'apartamentos1.jpg'),(135,72,'imagen3.jpg'),(136,73,'140207204724440.jpg'),(137,73,'imagen2.jpg'),(138,73,'imagen6.jpg'),(139,74,'i_1_1.jpg'),(140,74,'i_1_2.jpg'),(141,74,'i_1_3.jpg'),(142,75,'i_3_1.jpg'),(143,75,'i_3_2.jpg'),(144,75,'i_3_3.jpg'),(145,76,'i_4_1.jpg'),(146,76,'i_4_2.jpg'),(147,76,'i_4_3.jpg'),(148,76,'i_4_4.jpg'),(149,77,'imagen2.jpg'),(150,77,'imagen7.jpg'),(151,77,'imagen8.jpg'),(152,78,'local1.jpg'),(153,78,'local2.jpg'),(154,79,'apartamento-mouraria.jpg'),(155,79,'apartamentos1.jpg'),(156,79,'i_1_1.jpg'),(157,79,'i_1_2.jpg'),(158,79,'imagen5.jpg'),(159,80,'imagen7.jpg'),(160,80,'imagen9.jpg'),(161,80,'images (2).jpg');
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
  `direccion_corta` varchar(128) DEFAULT NULL,
  `direccion_larga` varchar(2048) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `id_barrio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_estado` (`fk_estado`),
  KEY `fk_departamento` (`id_departamento`),
  KEY `fk_ciudad` (`id_ciudad`),
  KEY `fk_barrio` (`id_barrio`),
  CONSTRAINT `fk_barrio` FOREIGN KEY (`id_barrio`) REFERENCES `barrios` (`id`),
  CONSTRAINT `fk_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`),
  CONSTRAINT `fk_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`),
  CONSTRAINT `inmuebles_ibfk_1` FOREIGN KEY (`fk_estado`) REFERENCES `estados_inmueble` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inmuebles`
--

LOCK TABLES `inmuebles` WRITE;
/*!40000 ALTER TABLE `inmuebles` DISABLE KEYS */;
INSERT INTO `inmuebles` VALUES (70,'EXCELENTE UBICACIÓN!! PRÓXIMA A PLAZA COLÓN!!!','MUY BUENA PROPIEDAD EN PH AL FRENTE, UBICADA A POCAS CUADRAS DEL CENTRO COMERCIAL DE COLÓN, PARA OCUPAR, CONSTA DE 2 DORMITORIOS ORIENTADOS AL FRENTE CON PISOS EN MUY BUEN ESTADO, COCINA A NUEVO CON COMEDOR DIARIO, BAÑO A NUEVO CON TERMOFUSIÓN, SÓTANO DE 44 METROS CUADRADOS CON PISO CERÁMICO, JARDÍN CON ENTRADA PARA AUTOS Y PARRILLERO. MUY BUENA LOCOMOCIÓN Y SERVICIOS EN LA ZONA.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CÓDIGO DE REFERENCIA!!!! ','casa',0,0,0,1985,'-34.80812013477744','-56.22230893793205',1,65,1,1,2,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',4,85000,'venta','Garzon 1503',NULL,1,1,2),(71,'HERMOSA PROPIEDAD!! EXCELENTE UBICACIÓN!!','MUY BUENA PROPIEDAD, SÓLIDA CONSTRUCCIÓN, UBICADA A 1 CUADRA DE AVENIDA GARZÓN, CONSTA DE 2 A 3 DORMITORIOS, LIVING COMEDOR, COCINA CON PLACARES AÉREOS Y BAJO MESADA, BAÑO COMPLETO, JARDÍN,PATIO TECHADO CON PARRILLERO,OPCIÓN COCHERA, FONDO Y GARAJE CON ACCESO POR CALLE ANDRÉS DE PLANCHADA PARA 2 AUTOS CON MESADA. EXCELENTE LOCOMOCIÓN Y SERVICIOS EN LA ZONA.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CÓDIGO DE REFERENCIA!!! ','casa',0,1,0,1994,'-34.813969174494254','-56.221107308293206',1,90,1,1,2,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',4,130000,'venta','GARZÓN 7854',NULL,1,1,2),(72,'EXCELENTE UBICACIÓN!! CASA Y APTO!!','EXCELENTE UBICACIÓN, SOBRE LA CALLE PABLO DE MARIA A 1 CUADRA DE AVENIDA ESPAÑA!!! CASA COMODA DE 2 A 3 DORMITORIOS, LIVING, AMPLIA COCINA COMEDOR, ESTAR DIARIO CON ESTUFA HOGAR, BAÑO, JARDÍN, ENTRADA PARA AUTOS, PATIO AMPLIO CON PARRILLERO, GARAJE Y APARTAMENTO DE 1 DORMITORIO, LIVING COMEDOR, COCINA BAÑO Y JARDÍN. ESTUPENDA LOCOMOCIÓN Y SERVICIOS EN LA ZONA.\r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!','apartamento',0,1,100,1992,'-34.90794604477761','-56.17082125368149',1,NULL,NULL,0,3,2,0,1,1,0,'','',0,NULL,NULL,0,0,'',3,500,'alquiler','PABLO DE MARIA ESQUINA AV ESPAÑA',NULL,1,1,3),(73,'APTO A ESTRENAR!!!','HERMOSO APARTAMENTO RECICLADO, A ESTRENAR, EN PLANTA ALTA, EL APTO CONSTA DE 2 DORMITORIOS, COCINA COMEDOR, TODO CON PISO FLOTANTE, BAÑO, JARDÍN CON ENTRADA PARA AUTOS Y PARRILLERO. \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!! ','apartamento',1,1,150,1984,'-34.91749177943363','-56.15712053003423',2,NULL,NULL,0,3,8,1,1,1,1,'','',0,NULL,NULL,0,0,'',4,70000,'venta','12 DE SEPTIEMBRE 2546',NULL,1,1,8),(74,'BUEN CHALET, AL FRENTE!!','BUEN CHALET AL FRENTE EN PROPIEDAD HORIZONTAL, CONSTA DE 3 DORMITORIOS, LIVING COMEDOR, COCINA AMPLIA, BAÑO, JARDÍN, COCHERA, PATIO, ENTRADA LATERAL Y PARRILLERO CERRADO. 2 LÍNEAS DE ÓMNIBUS A 1 CUADRA,POR APARICIO SARAVIA, BUENOS SERVICIOS EN LA ZONA. NECESITA ARREGLOS.\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!!','casa',0,1,80,1998,'-34.902851599466','-56.15596181573901',1,50,1,1,2,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',4,80000,'venta','RIVERA ESQUINA SOCA',NULL,1,1,8),(75,'SOBRE AV SAYAGO!! LINDA CASA!!','BUENA CASA EN PROPIEDAD HORIZONTAL AL FRENTE, UBICADA SOBRE AVENIDA SAYAGO ESQUINA CAMINO EDISON, CONSTA DE 2 DORMITORIOS, LIVING COMEDOR,COCINA, BAÑO, JARDÍN CON ENTRADA PARA AUTOS, PATIO Y ACCESO A LA AZOTEA. BUENA LOCOMOCIÓN EN LA ZONA.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!','casa',0,1,100,2014,'-34.835881763186954','-56.21037847223354',2,90,1,0,2,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',3,480,'alquiler','SAYAGO 1123',NULL,1,1,5),(76,'BUEN INMUEBLE DE ESTILO EN PH','BUEN INMUEBLE DE ESTILO EN PROPIEDAD HORIZONTAL, PROXIMA A AVENIDA SAYAGO Y EDISON, CONSTA DE 2 A 3 DORMITORIOS, LIVING COMEDOR, COCINA COMEDOR AMPLIA CON ESTUFA HOGAR, BAÑO CON MAMPARA, AMPLIO FONDO CON BARBACOA, PARRILLERO, GARAJE, CUARTO LAVADERO, ENTRADA LATERAL PARA AUTOS Y PATIO.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!','casa',0,0,0,1995,'-34.83116153743035','-56.2006796044346',1,85,1,1,2,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',3,139000,'venta','Sayago 4285',NULL,1,1,14),(77,'A PASITOS DE PUNTA GORDA!!! SÓLIDA CONSTRUCCIÓN!!!','BUEN INMUEBLE, SÓLIDA CONSTRUCCIÓN, UBICADA A PASITOS DE LA AVENIDA GARZÓN, CONSTA DE 3 DORMITORIOS,LIVING COMEDOR CON ESTUFA HOGAR, COCINA, BAÑO, JARDÍN, ENTRADA PARA AUTOS, GARAJE, PATIO CON PARRILLERO Y AMPLIO TERRENO. BUENA LOCOMOCIÓN Y SERVICIOS EN LA ZONA, ASÍ COMO TAMBIÉN INSTITUTOS DE ENSEÑANZA PREESCOLAR Y PRIMARIA.\r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CÓDIGO DE REFERENCIA!!!! ','casa',1,0,0,1998,'-34.895952917652004','-56.07648259821041',2,120,2,0,3,2,0,0,0,0,'','',0,NULL,NULL,0,0,'',4,180000,'venta','Av Italia 4567',NULL,1,1,6),(78,'MUY BUEN LOCAL','Amplio local, para oficina, o lugar comercial. Excelente iluminación.','local',0,1,85,1996,'-34.88046397062138','-56.171754662418564',1,NULL,NULL,0,NULL,NULL,0,0,0,0,'1','Presenta un altillo para guardar.',1,4,2,0,1,'85',3,189,'alquiler','Guadalupe 2562',NULL,1,1,11),(79,'BONITA CASA DE ESTILO','Estupenda casa de estilo ubicada a pasitos del centro comercial de colon, consta de: 5 dormitorios con placares empotrados, living comedor amplio, cocina con placares, 2 baños uno con bañera, terreno amplio al fondo con garaje, barbacoa abierta con parrillero y entrada para camiones.\r\n\r\nENTRADA POR 2 CALLES.','apartamento',0,0,0,1987,'-34.89292576212154','-56.184715096378696',2,NULL,NULL,0,5,NULL,0,0,0,0,'','',0,NULL,NULL,0,0,'',3,245000,'alquiler','Fernandez Crespo 2242',NULL,1,1,7),(80,'vHERMOSA PROPIEDAD!!! SÓLIDA CONSTRUCCIÓN!!','MUY BUEN INMUEBLE, DE SÓLIDA CONSTRUCCIÓN, UBICADA A 2 CUADRAS Y 1/2 DE AVENIDA GARZÓN, CONSTA DE 2 A 3 DORMITORIOS, LIVING COMEDOR, ESTAR DIARIO, COCINA, BAÑO, JARDÍN CON ENTRADA PARA AUTOS, TERRENO CON PARRILLERO, GARAJE DE PLANCHADA, DEPÓSITO.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!!','casa',0,0,0,1998,'-34.91024240123046','-56.18561631860761',1,75,1,0,3,1,0,0,0,0,'','',0,NULL,NULL,0,0,'',3,145000,'alquiler','Durazno 1524',NULL,1,1,4);
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
INSERT INTO `parametros` VALUES ('cantidadBienesPortada','Cantidad de bienes a mostrar en la portada del sitio','6'),('directorioBaseImagenes','Ruta base para las imagenes subidas en el sistema de archivos','/plataforma-inmobiliaria'),('emailAdminitrador','Email del administrador del sitio','admin@inmobiliaria.com');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_notificacion`
--

LOCK TABLES `tipo_notificacion` WRITE;
/*!40000 ALTER TABLE `tipo_notificacion` DISABLE KEYS */;
INSERT INTO `tipo_notificacion` VALUES (1,'Solicitud de informacion','Para casos en los cuales el cliente desea obtener informacion sobre inmuebles que cumplan sus espectativas.'),(2,'Solicitud de publicacion','Para casos en que los clientes desean publicar sus inmuebles en el sitio.');
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
INSERT INTO `usuarios` VALUES ('afontes','director@php2014.com','$1$Tjv7tqTJ$.O.123LlOlq6FnNFM7LN8.','Alejandro','Fontes',NULL,1,'director'),('esilvera','esilvera@gmail.com','$1$Boc57cpX$6tmkQMcqgWV3G4Ho/rNu/0','Edwin','Silvera',NULL,NULL,'agente'),('mrodriguez','mrodriguez@gmail.com','$1$UQuRVKk0$wUrX3YsP6/bxHFKToL.7i.','Mauricio','Rodriguez',NULL,NULL,'director'),('msteffen','msteffen@gmail.com','msteffen','Mauro','Steffen',NULL,NULL,'administrativo'),('mterra','mterra@gmail.com','$1$SI0KFvN9$XRuTOJJqkDruEyR.NPz.u0','Maribel','Terra',NULL,NULL,'administrativo'),('pdesosa','pdesosa@gmail.com','$1$TymVjAQg$Qo8A1wC7/nGXArlrJKFx80','Pablo','De Sosa',NULL,NULL,'director');
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

-- Dump completed on 2014-07-15 19:33:30
