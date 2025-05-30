-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: clientes_db
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'leandro','si se','sadf','asdf@asdf'),(2,'Alirio','kjkg','1361586','a@jkhfkfdh'),(3,'hshrt','dhjtyr','000000','a@sdfhshty'),(4,'Otro','gfhthtye','11111','otro@sdfhshty'),(5,'Otro2','gfhthtye','11111','otro@sdfhshty'),(6,'Otro3','gfhthtye','111112','otro@sdfhsht'),(7,'Otro4','gfhthtye','1111123','otro@sdfhsh'),(8,'fhdtrh','hsrhrt','2527','se@dfhrt'),(9,'fhdtrh','hsrhrt','2527','se@dfhrt'),(10,'fhdtrh','hsrhrt','2527','se@dfhrt'),(11,'fhdtrh','hsrhrt','2527','se@dfhrt'),(12,'fhdtrh','hsrhrt','2527','se@dfhrt'),(13,'fhdtrh','hsrhrt','2527','se@dfhrt'),(14,'fhdtrh2','hsrhrt','2527','se@dfhrt'),(15,'fhdtrh2','hsrhrt','2527','se@dfhrt'),(16,'fhdtrh2','hsrhrt','2527','se@dfhrt'),(17,'fhdtrh2','hsrhrt','2527','se@dfhrt'),(18,'fhdtrh2','hsrhrt','2527','se@dfhrt'),(20,'dgdsfg','sgdstr','dfgtre','df@dsg'),(21,'d','s','s','s@d'),(23,'e','e','e','e@s'),(24,'e','e','e','e@s'),(25,'el 25','sdf','dth','dgf@fdgh'),(26,'leandro','Si se','sadf','sad@asdf');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-29 23:01:29
