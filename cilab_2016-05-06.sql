# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.12)
# Database: cilab
# Generation Time: 2016-05-06 07:09:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `create_time` datetime NOT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `topic`, `desc`, `username`, `create_time`, `update_time`)
VALUES
	(1,'Hiฟหกฟห่กิ่ฟหก','ฟื่ฟหืก่ฟหืก่ฟหก่ฟหกHello','peerapongsam','0000-00-00 00:00:00','2016-05-06 04:30:28'),
	(2,'Ti','Hell','peerapongsam','2016-05-06 03:45:25',NULL),
	(3,'Hello','My name is Peerapong','peerapong_sam','2016-05-06 04:01:22',NULL),
	(4,'Hi','Hiiiiiiiiiiiiiiii','peerapongsam','2016-05-06 04:24:40',NULL),
	(5,'Hi','สวัสดีครับ คุณผู้ชมทุกท่าน','peerapongsam','2016-05-06 04:24:40','2016-05-06 04:27:10'),
	(6,'Hi','สวัสดีครับ คุณผู้ชมทุกท่านปปปป','peerapongsam','0000-00-00 00:00:00','2016-05-06 04:27:51'),
	(7,'Hi','สวัสดีครับ คุณผู้ชมทุกท่านปปปปปปปปปปปปปปปป','peerapongsam','0000-00-00 00:00:00','2016-05-06 04:28:31'),
	(8,'หกื่ฟหืก่ฟหืก','ฟืห่กืฟ่หืก่ฟหืก่ฟหก','peerapongsam','2016-05-06 04:30:35',NULL),
	(9,'asdjasndja','absdhasbdhasbdhbsahd','peerapong_sam','2016-05-06 04:30:53',NULL);

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `username`, `password`)
VALUES
	(1,'peerapong@domain.com','peerapongsam','$2y$10$MlewkiwDb.ydKuk0F0INs.1vZpAjI82Gwc8oMbHMEL8xkmY.K8ezC'),
	(8,'peerapongsam@domain.com','peerapong_sam','$2y$10$VbIzBkYJLulN/AwxRArc2egTLZMj3xhDMFyejsG8K.xsEXSZmg95K');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
