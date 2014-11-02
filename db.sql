-- Creates Peugeot Database --

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `peugeot`;
CREATE DATABASE `peugeot` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `peugeot`;

DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
	  `email_id` int(11) NOT NULL AUTO_INCREMENT,
	  `email_address` varchar(255) NOT NULL,
	  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
