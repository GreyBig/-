-- MySQL dump 10.13  Distrib 5.6.28, for Win64 (x86_64)
--
-- Host: localhost    Database: intloak
-- ------------------------------------------------------
-- Server version	5.6.28

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
-- Table structure for table `datas`
--

DROP TABLE IF EXISTS `datas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `forecast_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '预测出的信息',
  `implied_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '暗示的信息',
  `poetry_cloud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '诗云',
  `lucky_star` int(11) DEFAULT NULL COMMENT '幸运星',
  `personality_coefficient` int(11) DEFAULT NULL COMMENT '个性系数',
  `personality_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '主人性格类型',
  `performance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '具体表现',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datas`
--

LOCK TABLES `datas` WRITE;
/*!40000 ALTER TABLE `datas` DISABLE KEYS */;
INSERT INTO `datas` VALUES (1,'小舟入海，一成一败，吉凶参半，须防倾覆数 (吉多於凶)','吉凶互见，一成一败，凶中有吉，吉中有凶','一成一败一瞬间，浮沉未定难得安，兴时不和平时好，败时始觉已致迟。',4,2,'不善表达/疑心大','在乎身边各人对自己的评价及观感，不善表达个人情感，是个先考虑别人感受，再作出相应配合的内敛一族。对于爱侣，经常存有怀疑之心。','2019-03-09 00:12:53','2019-03-09 00:12:53'),(2,'名利双收之修炼积德数 (大吉)','云遮半月，百隐风波，应自谨慎，始保平安','名利双收富荣达，修身养德防未燃，傲慢不逊失人和，恐有家庭起风波。',6,3,'大胆行事冲动派 型','爱好追寻刺激，有不理后果大胆行事的倾向。崇尚自由奔放的恋爱，会拼尽全力爱一场，是就算明知无结果都在所不惜的冲动派。',NULL,NULL),(3,'坐立不安之处世多难数 (大凶)','动摇不安，常陷逆境，不得时运，难得利润','坐立不安如萍动，厄困事业逢波浪，废疾多病祸根至，精神意失易心狂。',1,1,'要面包不要爱情 型','责任心重，尤其对工作充满热诚，是个彻头彻尾工作狂。但往往因为过分专注职务，而忽略身边的家人及朋友，是个宁要面包不需要爱情的理性主义者。',NULL,NULL);
/*!40000 ALTER TABLE `datas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nums`
--

DROP TABLE IF EXISTS `nums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nums`
--

LOCK TABLES `nums` WRITE;
/*!40000 ALTER TABLE `nums` DISABLE KEYS */;
INSERT INTO `nums` VALUES (66,'13834567876'),(67,'13834567873'),(68,'13834567811'),(69,'131111898876'),(70,'131111898875'),(71,'15555553312'),(72,'19999999999');
/*!40000 ALTER TABLE `nums` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-24 19:14:12
