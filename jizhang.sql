-- MySQL dump 10.13  Distrib 5.6.30, for Linux (x86_64)
--
-- Host: localhost    Database: jizhang
-- ------------------------------------------------------
-- Server version	5.6.30

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
-- Table structure for table `jizhang_account`
--

DROP TABLE IF EXISTS `jizhang_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jizhang_account` (
  `acid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `acmoney` float(11,2) NOT NULL,
  `acclassid` int(8) NOT NULL,
  `actime` int(11) NOT NULL,
  `acremark` varchar(50) NOT NULL,
  `jiid` int(8) NOT NULL,
  `zhifu` int(8) NOT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jizhang_account`
--

LOCK TABLES `jizhang_account` WRITE;
/*!40000 ALTER TABLE `jizhang_account` DISABLE KEYS */;
INSERT INTO `jizhang_account` VALUES (18,7.00,9,1504262692,'花生米鸭肝',2,2),(19,2.00,9,1504310833,'粥',2,2),(20,100.00,21,1504315843,'给我爸转账',2,2),(21,7.00,9,1504325683,'土豆粉',2,2),(22,13.00,9,1504347780,'葱蒜花生等',2,2),(23,21.00,9,1504347834,'鸡肉',2,2),(24,5.00,9,1504347858,'饼',2,2),(25,7.00,13,1504348130,'可乐',2,2),(26,10.00,9,1504399962,'裤衩子',2,2),(27,13.00,9,1504399975,'肠',2,2),(28,2.00,9,1504400092,'苹果',2,2),(29,5.00,9,1504400893,'香蕉',2,2),(30,111.00,9,1504406143,'六医院',2,2),(31,50.00,9,1504409141,'移动开卡',2,2),(32,44.00,9,1504410321,'米线',2,2),(33,10.00,9,1504433501,'糕点',2,2),(34,6.00,9,1504433516,'肠',2,2),(35,4.00,13,1504433601,'方便面',2,2),(51,2.00,9,1504486313,'火烧',2,2),(52,2.00,9,1504498923,'小白菜',2,2),(53,10.00,9,1504498931,'鸡蛋',2,2),(54,2.00,9,1504518830,'坐车',2,2),(55,50.00,9,1504518837,'手机卡',2,2),(56,2.00,9,1504518844,'酱油',2,2),(57,2.00,9,1504572264,'火烧',2,2),(58,17.00,9,1504609607,'烤鸭',2,2),(59,3.00,9,1504609618,'粉丝',2,2),(60,2.00,9,1504609858,'小白菜',2,2),(61,24.00,14,1504614774,'药',2,2),(62,2.00,9,1504658030,'火烧',2,2),(63,12.00,9,1504658040,'饮用水',2,2),(64,310.00,14,1504695971,'电费',2,2),(65,4.00,9,1504744189,'煎饼',2,2),(66,200.00,14,1504749660,'狼牙山拼团',2,2),(67,4.50,9,1504784378,'食材',2,2),(68,390.00,9,1504858320,'奶昔',2,2),(69,4.00,9,1504917221,'火烧',2,2),(70,7.00,9,1504934916,'凉菜',2,2),(71,30.00,9,1504956674,'花甲',2,2),(72,81.22,13,1504956697,'沃尔玛',2,2),(73,110.00,14,1505020979,'狼牙山',2,2),(74,10.00,9,1505047680,'晚饭',2,2),(75,2.00,9,1505090683,'火烧',2,2),(76,7.00,9,1505122972,'板面',2,2),(77,3.00,9,1505176208,'油条豆腐脑',2,2),(78,7.00,9,1505192405,'土豆粉',2,2),(79,7.20,9,1505214395,'饼丝',2,2),(80,10.00,14,1505264851,'单位水票',2,2),(81,8.00,9,1505277153,'包子',2,2),(82,20.00,14,1505305690,'月饼蛋黄',2,2),(83,19.50,14,1505305733,'月饼豆沙醋',2,2),(84,17.90,14,1505305752,'月饼油',2,2),(85,10.00,9,1505305767,'花生焖子',2,2),(86,12.00,14,1505347286,'饮用水',2,2),(87,2.00,9,1505349284,'火烧',2,2),(88,4.00,9,1505362287,'肠',2,2),(89,30.00,9,1505398303,'气球',2,2),(90,89.00,14,1505432217,'增高精油',2,2),(91,27.00,9,1505477039,'晚饭',2,2),(92,5.00,9,1505535042,'热干面',2,2),(93,4.50,9,1505536534,'肠',2,2),(94,12.20,9,1505542899,'芍药牡丹',2,2),(95,2.50,9,1505558349,'饼',2,2),(96,22.00,9,1505558359,'鸡肉',2,2),(97,6.50,9,1505623911,'方便面',2,2),(98,37.00,9,1505631217,'去医院',2,2),(99,147.00,14,1505631228,'垃圾处理费',2,2),(100,187.00,13,1505631288,'洗衣液牙膏蛋挞月饼',2,2),(101,5.00,14,1505631370,'饮料',2,2),(102,12.50,13,1505631452,'杰出',2,2),(103,12.00,9,1505703418,'固态盘运费',2,2),(104,71.00,14,1505744583,'蛋糕',2,2),(105,2.00,14,1505744633,'塑封带',2,2),(106,24.00,14,1505744660,'羊肉',2,2),(107,15.00,14,1505744677,'鱼',2,2),(108,7.00,9,1505799141,'土豆粉',2,2),(109,140.00,14,1505830531,'易百事',2,2),(110,5.00,9,1505816873,'花生豆',2,2),(111,18.00,9,1505816873,'鸡肉',2,2),(112,2.00,9,1505868156,'火烧',2,2),(113,2.00,9,1505952185,'火烧',2,2),(114,3000.00,8,1504199145,'用作生活费',2,1),(115,89.00,14,1505964178,'安买鞋',2,2),(116,6.00,9,1505967178,'板面',2,2),(117,7.00,13,1506076260,'酸奶',2,2),(118,17.00,13,1506079995,'方便面',2,2),(119,2.00,9,1506126813,'火烧',2,2),(120,40.00,9,1506163500,'猪肉',2,2),(121,2.00,9,1506163707,'咸菜',2,2),(122,3.00,9,1506163716,'大葱',2,2),(123,4.70,14,1506217320,'去医院梨',2,2),(124,8.00,14,1506217543,'去医院香蕉',2,2),(125,82.00,13,1506225117,'惠友茄汁鱼',2,2),(126,15.00,13,1506225141,'酸奶',2,2),(127,8.00,9,1506225439,'包子',2,2),(128,17.00,9,1506227497,'烤鸭',2,2),(129,22.60,9,1506336557,'安晚饭',2,2),(130,3.00,13,1506342473,'酸奶',2,2),(131,112.00,14,1506386230,'10.1回家车票',2,2),(132,26.00,9,1506434440,'晚饭',2,2),(133,3.50,9,1506472053,'煎饼',2,2),(134,7.00,9,1506485848,'土豆粉',2,2),(135,2.00,9,1506558854,'火烧',2,2),(136,21.00,9,1506573240,'午饭',2,2),(137,15.90,9,1506596361,'晚饭',2,2),(138,54.00,9,1506733080,'焖子',2,2),(139,2.00,9,1506733092,'火烧',2,2),(140,130.00,9,1506768686,'驴肉',2,2),(141,6.00,9,1506768871,'肉饼',2,2),(142,14.00,9,1506768877,'土豆粉',2,2),(143,14.00,9,1506768884,'驴肉火烧',2,2),(144,6.00,9,1506829175,'脉动',2,2),(145,3.00,9,1506829183,'烤肠',2,2),(146,70.00,14,1506829252,'去医院',2,2),(147,3000.00,8,1506829263,'生活费',2,1),(148,5.00,14,1506839688,'公交车',2,2),(149,16.00,14,1506839699,'丰润到遵化',2,2),(150,255.00,14,1506848928,'富丽超市',2,2),(151,10.00,14,1506848944,'打车回家',2,2),(152,30.00,14,1506945467,'打车',2,2),(153,26.00,9,1506945480,'拉面',2,2),(154,65.00,14,1506945489,'火车票',2,2),(155,55.00,14,1506945505,'汽车票',2,2),(156,5.00,14,1506945514,'地铁',2,2),(157,3.00,14,1506945323,'公交车',2,2),(158,10.00,9,1506948970,'夜宵',2,2),(159,1000.00,14,1507197585,'北京旅游',2,2),(160,35.00,14,1507268774,'热水管',2,2),(161,5.00,9,1507337672,'煎饼',2,2),(162,31.00,9,1507374544,'晚饭',2,2),(163,18.20,9,1507374560,'晚饭',2,2),(164,25.00,14,1507462465,'打车',2,2),(165,10.00,9,1507462465,'饺子',2,2),(166,10.00,9,1507462465,'盖饭',2,2),(167,20.00,9,1507462465,'饮料火腿',2,2),(168,20.80,9,1507548666,'饺子',2,2),(169,40.00,9,1507548280,'晚饭',2,2),(170,52.00,9,1507634710,'晚饭',2,2),(171,7.00,9,1507609546,'土豆粉',2,2),(172,6.00,9,1507523172,'板面',2,2),(173,71.00,14,1507706493,'手套护膝',2,2),(174,20.00,9,1507783031,'宫保鸡丁',2,2),(175,23.00,9,1507808250,'零食',2,2),(176,2.50,9,1507721875,'蘑菇',2,2),(177,20.00,9,1507721875,'鸡蛋',2,2),(178,10.00,9,1507721875,'浓汤宝',2,2);
/*!40000 ALTER TABLE `jizhang_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jizhang_account_class`
--

DROP TABLE IF EXISTS `jizhang_account_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jizhang_account_class` (
  `classid` int(5) NOT NULL AUTO_INCREMENT,
  `classname` varchar(20) NOT NULL,
  `classtype` int(1) NOT NULL,
  `ufid` int(8) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jizhang_account_class`
--

LOCK TABLES `jizhang_account_class` WRITE;
/*!40000 ALTER TABLE `jizhang_account_class` DISABLE KEYS */;
INSERT INTO `jizhang_account_class` VALUES (8,'工资',1,2),(9,'吃饭',2,2),(12,'零食水果',2,2),(13,'逛超市',2,2),(14,'其他',2,2),(16,'信用卡取现',1,2),(17,'信用卡消费',2,2),(18,'安宁给我的',1,2),(21,'给我爸转账',2,2);
/*!40000 ALTER TABLE `jizhang_account_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jizhang_user`
--

DROP TABLE IF EXISTS `jizhang_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jizhang_user` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(20) NOT NULL,
  `utime` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jizhang_user`
--

LOCK TABLES `jizhang_user` WRITE;
/*!40000 ALTER TABLE `jizhang_user` DISABLE KEYS */;
INSERT INTO `jizhang_user` VALUES (1,'admin','e47ca7a09cf6781e29634502345930a7','18833267603@qq.com',1504249226),(2,'uio','e10adc3949ba59abbe56e057f20f883e','441271000@qq.com',1504249360);
/*!40000 ALTER TABLE `jizhang_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-20  9:23:22
