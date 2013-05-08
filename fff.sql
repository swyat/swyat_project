-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 08 2013 г., 13:00
-- Версия сервера: 5.5.27
-- Версия PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `fff`
--

-- --------------------------------------------------------

--
-- Структура таблицы `badwordstable`
--

CREATE TABLE IF NOT EXISTS `badwordstable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `badWord` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `badwordstable`
--

INSERT INTO `badwordstable` (`id`, `badWord`) VALUES
(1, 'badslovo'),
(2, 'badslovo2');

-- --------------------------------------------------------

--
-- Структура таблицы `korustyvach_info`
--

CREATE TABLE IF NOT EXISTS `korustyvach_info` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `permissions` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions` (`permissions`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Дамп данных таблицы `korustyvach_info`
--

INSERT INTO `korustyvach_info` (`id`, `login`, `password`, `code`, `permissions`) VALUES
(53, 'swyat', '15011992', '6ed84cdbd8', 'admin'),
(54, 'aaaaaaa', '1', '3f6dd013e3', ''),
(55, 'qsss', 'qssq', 'c1cc9811ec', ''),
(56, 'ddddddddd', '11111111111111111111', '9d1fb26260', '');

-- --------------------------------------------------------

--
-- Структура таблицы `messages_info`
--

CREATE TABLE IF NOT EXISTS `messages_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `topic` varchar(200) CHARACTER SET utf8 NOT NULL,
  `s_text` varchar(250) CHARACTER SET utf8 NOT NULL,
  `l_text` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `c_time` datetime NOT NULL,
  `e_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `topic` (`topic`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=97 ;

--
-- Дамп данных таблицы `messages_info`
--

INSERT INTO `messages_info` (`id`, `name`, `email`, `topic`, `s_text`, `l_text`, `c_time`, `e_time`) VALUES
(73, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:40:49', '0000-00-00 00:00:00'),
(74, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:01', '0000-00-00 00:00:00'),
(75, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:09', '0000-00-00 00:00:00'),
(76, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:16', '0000-00-00 00:00:00'),
(77, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:23', '0000-00-00 00:00:00'),
(78, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:32', '0000-00-00 00:00:00'),
(79, 'Swyat', 's.boichuk@inbox.ru', '', '...', '', '2013-04-26 10:41:38', '0000-00-00 00:00:00'),
(80, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:45', '0000-00-00 00:00:00'),
(81, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:56', '0000-00-00 00:00:00'),
(82, 'dhdhfhd', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:20', '0000-00-00 00:00:00'),
(83, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:33', '0000-00-00 00:00:00'),
(84, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:41', '0000-00-00 00:00:00'),
(85, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:58', '0000-00-00 00:00:00'),
(86, 'Swyat', 'swyatyxa@i.ua', 'zsdfvgdz', '...', '', '2013-04-26 11:19:50', '0000-00-00 00:00:00'),
(87, 'sssssssssssssssssssssssssssss', 'swyatyxa@i.ua', 'zsdfvgdz', '...', '', '2013-05-03 15:07:36', '0000-00-00 00:00:00'),
(88, 'Swyat', 'swyatyxa@i.ua', '<b>fff</b>', '<i>kosyi</i>...', '<i>kosyi</i>', '2013-05-06 13:20:00', '0000-00-00 00:00:00'),
(89, 'Swyat', 'swyatyxa@i.ua', '', '<b>ggg</b>...', '<b>ggg</b>', '2013-05-06 13:32:48', '0000-00-00 00:00:00'),
(92, 'Swyat', 'swyatyxa@i.ua', '', '<i>zvbzxcvb</i>...', '<i>zvbzxcvb</i>', '2013-05-07 13:44:20', '0000-00-00 00:00:00'),
(94, 'Swyat', 'swyatyxa@i.ua', '', '<u>dghnmdgh</u>...', '<u>dghnmdgh</u>', '2013-05-07 14:03:00', '0000-00-00 00:00:00'),
(95, 'swyat badslovo fff', '', '', '...', '', '2013-05-08 11:30:05', '0000-00-00 00:00:00'),
(96, 'swyat badslovo fff', '', '', '...', '', '2013-05-08 12:29:50', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
