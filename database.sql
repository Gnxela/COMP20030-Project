-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: COMP20030
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `trail_tiles`
--

DROP TABLE IF EXISTS `trail_tiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trail_tiles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `country` varchar(50) NOT NULL,
  `thumbnail` varchar(60) NOT NULL,
  `difficulty` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trail_tiles`
--

LOCK TABLES `trail_tiles` WRITE;
/*!40000 ALTER TABLE `trail_tiles` DISABLE KEYS */;
INSERT INTO `trail_tiles` VALUES (1,'Dragon\'s Back','With beautiful coastal scenery and easy-accessibility from the city, the Dragon\'s Back is a popular escape that deservedly gets regular mentions in travel guidebooks. A short hop from the bustle of Hong Kong East, the trail provides stunning views of Shek O, Tai Long Wan, Stanley, Tai Tam, and the South China Sea.','Hong Kong','res/dragonsBackThumb.jpg',3),(2,'Sunset Peak','Sunset Peak is the second highest mountain on Lantau Island, and it\'s known for its gorgeous sunset views that will take your breath away. The sunsets are so picturesque that you will remember them long after the hike has finished.','Hong Kong','res/SunsetPeakThumb.jpg',1),(3,'Legnabrocky Trail','Legnabrocky Trail is a easy to moderate walk following the straightforward boardwalk trail to the summit on the Cuilcagh Mountain (666m). Cuilcagh Mountain or in Irish, Sliabh Chuilceach, meaning \'chalky mountain\', is the highest mountain in the Breifne area with its summit on the border between County Fermanagh in Northern Ireland and County Cavan in the Republic of Ireland.','Ireland','res/LegnabrockyThumb.jpg',2),(4,'Coumshingaun Loop','Coumshingaun Loop Walk is a walking route around a natural amphitheatre of splendour and silence, the Coumshingaun Corrie Lake and the surrounding mountains in County Waterford, Ireland.','Ireland','res/CoumshingaunThumb.jpg',3),(5,'Sharp Peak','At 468 metres tall, Sharp Peak has attracted many experienced hikers to take the challenge because of its winding paths and unique contours. Just like its name, it is known for its sharpness and steepness, and can be seen from literally any point in Sai Kung.','Hong Kong','res/SharpPeakThumb.jpg',5);
/*!40000 ALTER TABLE `trail_tiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trails`
--

DROP TABLE IF EXISTS `trails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trails` (
  `id` int(6) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `country` varchar(50) NOT NULL,
  `thumbnail` varchar(60) NOT NULL,
  `mapURL` varchar(600) NOT NULL,
  `images` varchar(2000) DEFAULT NULL,
  `data` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trails`
--

LOCK TABLES `trails` WRITE;
/*!40000 ALTER TABLE `trails` DISABLE KEYS */;
INSERT INTO `trails` VALUES (1,'Dragon\'s Back','The Dragon\'s Back hike is located on Hong Kong Island, which means that it\'s easy to get to, and is well connected.<br>It is a great introduction to hiking. It\'s also a great way to see the other side of Hong Kong - the side with no skyscrapers, trees, sandy beaches, and the sea.<br>With beautiful coastal scenery and easy-accessibility from the city, the Dragon\'s Back is a popular escape that deservedly gets regular mentions in travel guidebooks.','Hong Kong','res/dragonsBackThumb.jpg','https://www.google.com/maps/embed/v1/directions?key=AIzaSyCMYSYb_8W1Y95X56gW8myAM9b7yQ4ATP8&mode=walking&origin=Dragon\'s%20Back%20-%20Trail%20Start,%20Hong%20Kong%20Trail%20Sec.%208,%20Shek%20O,%20Hong%20Kong&destination=Shek%20O%20Village%20Rd,%20Shek%20O,%20Hong%20Kong&waypoints=Dragon\'s%20back%20trail,%20Dragon\'s%20Back%20Shek%20O,%20Hong%20Kong|22.255822,%20114.240949\n','res/dragonsBack1.jpg|res/dragonsBack2.jpg|res/dragonsBack3.jpg|res/dragonsBack4.jpg|res/dragonsBack5.jpg','Difficulty`Intermediate|Max Altitude`268m|Length`9.6km|Average hiking time`4 hours');
/*!40000 ALTER TABLE `trails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-22 22:04:32
