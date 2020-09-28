-- MySQL dump 10.13  Distrib 8.0.20, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: brive
-- ------------------------------------------------------
-- Server version	8.0.20-0ubuntu0.19.10.1

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
-- Table structure for table `modelo_Existencia`
--

DROP TABLE IF EXISTS `modelo_Existencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo_Existencia` (
  `id_prod_x_suc` int NOT NULL AUTO_INCREMENT,
  `codigo` int NOT NULL,
  `numeroSucursal` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  PRIMARY KEY (`id_prod_x_suc`),
  KEY `codigo` (`codigo`),
  KEY `numeroSucursal` (`numeroSucursal`),
  CONSTRAINT `modelo_Existencia_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `modelo_producto` (`codigo`),
  CONSTRAINT `numeroSucursal` FOREIGN KEY (`numeroSucursal`) REFERENCES `sucursales` (`numeroSucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=20;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_Existencia`
--

LOCK TABLES `modelo_Existencia` WRITE;
/*!40000 ALTER TABLE `modelo_Existencia` DISABLE KEYS */;
INSERT INTO `modelo_Existencia` VALUES (14,100010,1,5),(15,100011,1,9),(16,100012,1,1),(17,100010,2,8),(18,100011,2,6),(19,100012,2,2);
/*!40000 ALTER TABLE `modelo_Existencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_producto`
--

DROP TABLE IF EXISTS `modelo_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo_producto` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) DEFAULT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=100013 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_producto`
--

LOCK TABLES `modelo_producto` WRITE;
/*!40000 ALTER TABLE `modelo_producto` DISABLE KEYS */;
INSERT INTO `modelo_producto` VALUES (100010,'cafe legal',7.00),(100011,'chocolate abuelita',15.00),(100012,'bonafina',12.00);
/*!40000 ALTER TABLE `modelo_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursales` (
  `numeroSucursal` int NOT NULL AUTO_INCREMENT,
  `nombreSucursal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`numeroSucursal`),
  UNIQUE KEY `numeroSucursal_UNIQUE` (`numeroSucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=34;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
INSERT INTO `sucursales` VALUES (1,'sucursal1','direccion1'),(2,'sucursal2','direccion2');
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-28  3:31:59
