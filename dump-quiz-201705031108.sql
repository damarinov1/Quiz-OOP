-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (0,'Louis C. K.'),(1,'Dalai Lama'),(2,'Vincent Van Gogh'),(3,'Buddha'),(4,'Vince Lombardi'),(5,'Heath Ledger'),(6,'Lao Tzu'),(7,'Bob Marley'),(8,'Martin Luther King, Jr.'),(9,'Henry Ford'),(10,'Friedrich Nietzsche'),(11,'Albert Einstein'),(12,'Steve Jobs'),(13,'Hunter S. Thompson'),(14,'Voltaire'),(15,'Gustave Flaubert');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `a_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (0,'I wish they would only take me as I am.',2),(1,'To live a pure unselfish life, one must count nothing as one\'s own in the midst of abundance.',3),(2,'Perfection is not attainable, but if we chase perfection we can catch excellence.',4),(3,'I like to do something I fear.',5),(4,'It\'s a positive thing to talk about terrible things and make people laugh about them.',0),(5,'Talking is always positive. That\'s why I talk too much.',0),(6,'In order to carry a positive action we must develop here a positive vision.',1),(7,'The journey of a thousand miles begins with one step.',6),(8,'One good thing about music, when it hits you, you feel no pain.',7),(9,'In the bright future you can\'t forget your past.',7),(10,'Love is the only force capable of transforming an enemy into a friend.',8),(11,'It is not a lack of love, but a lack of friendship that makes unhappy marriages.',10),(12,'My best friend is the one who brings out the best in me.',9),(13,'Life is like riding a bicycle. To keep your balance, you must keep moving.',11),(14,'The true sign of intelligence is not knowledge but imagination.',11),(15,'A person who never made a mistake never tried anything new.',11),(16,'Great things in business are never done by one person. They\'re done by a team of people.',12),(17,'Design is not just what it looks like and feels like. Design is how it works.',12),(18,'I hate to advocate drugs, alcohol, violence, or insanity to anyone, but they\'ve always worked for me.',13),(19,'Before everything else, getting ready is the secret of success.',9),(20,'Judge a man by his questions rather than his answers',14),(21,'Read in order to live.',15);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'quiz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-03 11:08:07
