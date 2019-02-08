-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `todo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `todo`;

DROP TABLE IF EXISTS `todo`;
CREATE TABLE `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `due_date` varchar(40) NOT NULL,
  `created_on` varchar(60) NOT NULL,
  `label` varchar(100) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `todo` (`id`, `username`, `title`, `description`, `due_date`, `created_on`, `label`, `progress`) VALUES
(7,	'uloko',	'Chat App',	'Create chat app for maurix & co enterprise',	'2019-02-13',	'2019-02-03',	'Inbox',	0),
(8,	'uloko',	'Create website',	'create a website for chrisben',	'2019-02-13',	'2019-02-03',	'Read Later',	0),
(9,	'uloko',	'visit',	'visit a friend',	'2019-02-13',	'2019-02-03',	'Inbox',	0),
(11,	'gloria',	'Duty call',	'Commandant house',	'2019-02-13',	'2019-02-04',	'Inbox',	0),
(12,	'gloria',	'visit',	'visit my love',	'2019-02-18',	'2019-02-04',	'Read Later',	0),
(13,	'gloria',	'off',	'Take off at work',	'2019-02-06',	'2019-02-04',	'Important',	0),
(14,	'uloko',	'AI Lagos',	'Meetup',	'2019-02-09',	'2019-02-06',	'Inbox',	0);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `user_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `ip_address`, `date`, `time`, `user_status`) VALUES
(5,	'uloko',	'ulokojohn@gmail.com',	'202cb962ac59075b964b07152d234b70',	'127.0.0.1',	'2019-01-24',	'23:30:50',	''),
(6,	'admin2',	'austin_bosco@example.com',	'202cb962ac59075b964b07152d234b70',	'127.0.0.1',	'2019-01-25',	'00:10:48',	''),
(7,	'gloria',	'gloria@hotmail.com',	'202cb962ac59075b964b07152d234b70',	'127.0.0.1',	'2019-01-25',	'00:12:06',	'');

-- 2019-02-06 12:57:16
