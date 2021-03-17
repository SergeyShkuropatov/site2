-- MySQL dump 10.13  Distrib 5.5.62, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: nasik159_start
-- ------------------------------------------------------
-- Server version	5.5.62-0+deb8u1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text_comment` text NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (29,'https://www.gravatar.com/avatar/0bfe1f52477742d6a42e3d74cc92c701?s=70&d=mp&r=g','axrro@mail.ru','Лена','Выражаем благодарность компании за работу над улучшением нашего сайта finnair.com Я высоко оцениваю качество выполненных\r\n									работ по анализу потребностей пользователей и проектированию интерфейса новой системы личных сообщений. Считаю необходимым 							отдельно упомянуть ответственность по отношению к срокам выполнения поставленных задач и неукоснительное следование целям заказчика','2021-01-14 14:36:50'),(30,'https://www.gravatar.com/avatar/d3ad1890aba310aa1de08ca3bc012b89?s=70&d=mp&r=g','aqrro@mail.ru','Оксана','С начала нашего сотрудничества чувствуется ответственное отношение менеджера к нашему проекту. В процессе своей деятельности \r\n									специалисты компании подтвердили свой высокий профессиональный статус и оперативность в решении проблем. \r\n									Нам отвечали своевременно на все возникающие вопросы, предоставляли консультации и рекомендации относительно нашего сайта. 						Чувствуется, что в данной компании работают настоящие профессионалы своего дела.','2021-01-14 14:37:37'),(31,'https://www.gravatar.com/avatar/68c79863c0ec74d85d399ed569c99505?s=70&d=mp&r=g','agrro74@mail.ru','Иван','Был проведен комплексный анализ портала в плоскостях юзабилити и SEO, по результатам которого предоставлен \r\n									развернутый экспертный отчет с рекомендациями по оптимизации визуальной и текстовой составляющих. \r\n									Итоговые материалы были достойно оформлены и написаны доступным и понятным языком. Полученный документ лег в \r\nоснову измененной концепции работы над сайтом \"Viking Line\"','2021-01-14 14:38:27'),(38,'https://www.gravatar.com/avatar/b2740bb8087c8d1ddfe6b22c1d2ba266?s=70&d=mp&r=g','agrro@mail.ru','ju','gg','2021-01-27 09:13:20'),(39,'https://www.gravatar.com/avatar/d3ad1890aba310aa1de08ca3bc012b89?s=70&d=mp&r=g','aqrro@mail.ru','Оксана','jjj','2021-01-27 09:15:21'),(41,'https://www.gravatar.com/avatar/0bfe1f52477742d6a42e3d74cc92c701?s=70&d=mp&r=g','axrro@mail.ru','ju','8888','2021-01-27 16:53:58'),(42,'https://www.gravatar.com/avatar/0bfe1f52477742d6a42e3d74cc92c701?s=70&d=mp&r=g','axrro@mail.ru','Петя','йй','2021-03-14 18:18:07');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text_contacts` text NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (132,'k','a@mail.ru','Я хоkчу','2021-01-24 15:24:20'),(133,'ju','axrro@mail.ru','Я хочуo','2021-01-24 15:32:42'),(134,'ju','axrro@mail.ru','Я хочуu','2021-01-24 15:33:02'),(135,'ju','axrro@mail.ru','Я хочуuuu','2021-01-27 16:54:15'),(136,'ju','axrro@mail.ru','Я хочуu','2021-01-27 16:55:04'),(137,'ju','axrro@mail.ru','Я хочут','2021-01-27 17:01:47'),(138,'ju','axrro@mail.ru','Я хочуg','2021-01-27 17:25:26'),(139,'ju','axrro@mail.ru','Я хочуg','2021-01-27 17:25:40'),(140,'ju','axrro@mail.ru','Я хочуg','2021-01-27 17:25:53'),(141,'hhhh','a@mail.ru','Я хочiiiiiiу','2021-01-27 18:16:54'),(142,'f','f@mail.ru','Я хоfчу','2021-01-27 18:18:47'),(143,'ju','axrro@mail.ru','Я хочуt','2021-01-27 18:21:13');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-17 13:08:23
