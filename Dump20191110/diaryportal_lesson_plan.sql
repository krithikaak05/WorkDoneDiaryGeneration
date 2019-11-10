-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: diaryportal
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `lesson_plan`
--

DROP TABLE IF EXISTS `lesson_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lesson_plan` (
  `Username` varchar(50) NOT NULL,
  `SubjectCode` varchar(10) NOT NULL,
  `WeekNumber` int(11) DEFAULT NULL,
  `dayLP` varchar(10) DEFAULT NULL,
  `dateLP` date DEFAULT NULL,
  `timeLP` time DEFAULT NULL,
  `Topics` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Username`,`SubjectCode`),
  KEY `SubjectCode` (`SubjectCode`),
  CONSTRAINT `lesson_plan_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE,
  CONSTRAINT `lesson_plan_ibfk_2` FOREIGN KEY (`SubjectCode`) REFERENCES `subjects` (`SubjectCode`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_plan`
--

LOCK TABLES `lesson_plan` WRITE;
/*!40000 ALTER TABLE `lesson_plan` DISABLE KEYS */;
INSERT INTO `lesson_plan` VALUES ('vinamra','17isdc5dpl',1,'monday','1999-08-25','05:12:00','dijkstras');
/*!40000 ALTER TABLE `lesson_plan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-10 19:47:24
