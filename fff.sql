-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 15 2013 г., 13:33
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
  `keyWords` varchar(1000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `topic` (`topic`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=130 ;

--
-- Дамп данных таблицы `messages_info`
--

INSERT INTO `messages_info` (`id`, `name`, `email`, `topic`, `s_text`, `l_text`, `c_time`, `e_time`, `keyWords`) VALUES
(73, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:40:49', '0000-00-00 00:00:00', ''),
(74, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:01', '0000-00-00 00:00:00', ''),
(75, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:09', '0000-00-00 00:00:00', ''),
(76, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:16', '0000-00-00 00:00:00', ''),
(77, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:23', '0000-00-00 00:00:00', ''),
(78, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:32', '0000-00-00 00:00:00', ''),
(79, 'Swyat', 's.boichuk@inbox.ru', '', '...', '', '2013-04-26 10:41:38', '0000-00-00 00:00:00', ''),
(80, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:45', '0000-00-00 00:00:00', ''),
(81, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:41:56', '0000-00-00 00:00:00', ''),
(82, 'dhdhfhd', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:20', '0000-00-00 00:00:00', ''),
(83, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:33', '0000-00-00 00:00:00', ''),
(84, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:41', '0000-00-00 00:00:00', ''),
(85, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-04-26 10:42:58', '0000-00-00 00:00:00', ''),
(86, 'Swyat', 'swyatyxa@i.ua', 'zsdfvgdz', '...', '', '2013-04-26 11:19:50', '0000-00-00 00:00:00', ''),
(87, 'sssssssssssssssssssssssssssss', 'swyatyxa@i.ua', 'zsdfvgdz', '...', '', '2013-05-03 15:07:36', '0000-00-00 00:00:00', ''),
(88, 'Swyat', 'swyatyxa@i.ua', '<b>fff</b>', '<i>kosyi</i>...', '<i>kosyi</i>', '2013-05-06 13:20:00', '0000-00-00 00:00:00', ''),
(89, 'Swyat', 'swyatyxa@i.ua', '', '<b>ggg</b>...', '<b>ggg</b>', '2013-05-06 13:32:48', '0000-00-00 00:00:00', ''),
(92, 'Swyat', 'swyatyxa@i.ua', '', '<i>zvbzxcvb</i>...', '<i>zvbzxcvb</i>', '2013-05-07 13:44:20', '0000-00-00 00:00:00', ''),
(94, 'Swyat', 'swyatyxa@i.ua', '', '<u>dghnmdgh</u>...', '<u>dghnmdgh</u>', '2013-05-07 14:03:00', '0000-00-00 00:00:00', ''),
(95, 'swyat badslovo fff', '', '', '...', '', '2013-05-08 11:30:05', '0000-00-00 00:00:00', ''),
(96, 'swyat badslovo fff', '', '', '...', '', '2013-05-08 12:29:50', '0000-00-00 00:00:00', ''),
(97, 'Swyat', 'swyatyxa@i.ua', ' xxxxx ', 'qdfgqsrgqergsssss...', 'qdfgqsrgqergsssss', '2013-05-08 18:57:16', '0000-00-00 00:00:00', ''),
(98, 'asdas', '', '', '<u>asdga<u></u>sfbadf</u><u></u><i></i><b></b>...', '<u>asdga<u></u>sfbadf</u><u></u><i></i><b></b>', '2013-05-08 19:12:00', '0000-00-00 00:00:00', ''),
(99, 'ssyat ', 'swyatyxa@i.ua', 'swyat ', 'swyat...', 'swyat', '2013-05-13 23:44:41', '0000-00-00 00:00:00', ''),
(100, 'ssssyatyyyyyyyyyyy ', 's.boichuk@inbox.ru', 'xxx ', 'xxx...', 'xxx', '2013-05-14 00:10:54', '0000-00-00 00:00:00', ''),
(101, 'Swyat', 'swyatyxa@i.ua', '', '...', '', '2013-05-14 11:07:58', '0000-00-00 00:00:00', 'dfgdfsfgafadkj zdfkbajf zxfmkvbjf_zxfbzxdf '),
(102, 'zxdvx ', '', '', '<i></i><b>sdfgSdf</b> ...', '<i></i><b>sdfgSdf</b> ', '2013-05-14 11:10:00', '0000-00-00 00:00:00', ''),
(103, 'swyat ', '', '', '...', '', '2013-05-14 14:30:42', '0000-00-00 00:00:00', 'Array'),
(104, 'Swyat ', '', '', '...', '', '2013-05-14 14:33:49', '0000-00-00 00:00:00', '0'),
(105, 'Swyat ', '', '', '...', '', '2013-05-14 14:37:06', '0000-00-00 00:00:00', '0'),
(106, 'Swyat ', '', '', '...', '', '2013-05-14 14:39:06', '0000-00-00 00:00:00', '0'),
(107, 'Swyat ', '', '', '...', '', '2013-05-14 14:40:30', '0000-00-00 00:00:00', '0'),
(108, 'Swyat ', '', '', '...', '', '2013-05-14 14:41:33', '0000-00-00 00:00:00', '0'),
(109, 'Swyat ', '', '', 'werghwer...', 'werghwer', '2013-05-14 14:43:04', '0000-00-00 00:00:00', '0'),
(110, 'Swyat ', '', '', '...', '', '2013-05-14 14:44:26', '0000-00-00 00:00:00', '0'),
(118, 'nowe ', '', '', '...', '', '2013-05-14 15:05:43', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/silca1>silca1</a> <a href =/project/Search/searching/searchIn/url/value/silca2>silca2</a> <a href =/project/Search/searching/searchIn/url/value/silca3>silca3</a> <a href =/project/Search/searching/searchIn/url/value/silca4>silca4</a> '),
(119, 'swyat ', '', '', '...', '', '2013-05-14 15:06:07', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/silca1>silca1</a> <a href =/project/Search/searching/searchIn/url/value/silca2>silca2</a> <a href =/project/Search/searching/searchIn/url/value/silca3>silca3</a> <a href =/project/Search/searching/searchIn/url/value/silca4>silca4</a> '),
(120, 'swyat ', '', '', '...', '', '2013-05-14 15:06:16', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/silca1>silca1</a> <a href =/project/Search/searching/searchIn/url/value/silca2>silca2</a> <a href =/project/Search/searching/searchIn/url/value/silca3>silca3</a> <a href =/project/Search/searching/searchIn/url/value/silca4>silca4</a> '),
(121, 'nowiche ', '', '', '...', '', '2013-05-14 15:07:59', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/silca1>silca1</a> <a href =/project/Search/searching/searchIn/url/value/silca2>silca2</a> <a href =/project/Search/searching/searchIn/url/value/silca3>silca3</a> <a href =/project/Search/searching/searchIn/url/value/silca4>silca4</a> <a href =/project/Search/searching/searchIn/url/value/></a> '),
(122, 'swyat ', 'asdee', '', '...', '', '2013-05-14 16:27:55', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/swyat>swyat</a> '),
(123, 'swyat  xxxxx  fff ', 'swyat@i.ua', '', '...', '', '2013-05-14 22:47:58', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/></a> '),
(124, 'igor ', '', '', 'igor ...', 'igor ', '2013-05-14 22:56:07', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/igor>igor</a> <a href =/project/Search/searching/searchIn/url/value/></a> '),
(125, 'swy ', '', '', '...', '', '2013-05-14 23:32:40', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/dasds>dasds</a> <a href =/project/Search/searching/searchIn/url/value/sfdefe>sfdefe</a> <a href =/project/Search/searching/searchIn/url/value/dfff>dfff</a> '),
(126, 'sdd ', '', '', '...', '', '2013-05-14 23:34:32', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/IncUrl+fucj>fuck</a> <a href =/project/Search/searching/searchIn/url/value/IncUrl+fucj>dfuck</a> '),
(127, 'ddd ', '', '', '...', '', '2013-05-14 23:35:44', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/ddd>ddd</a> <a href =/project/Search/searching/searchIn/url/value/dff>dff</a> '),
(128, 'sw ', '', '', '...', '', '2013-05-14 23:44:41', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/sd%2aasddef>sd+sddef</a> <a href =/project/Search/searching/searchIn/url/value/dfef>dfef</a> '),
(129, 'Swyat Boy ', '', '', '...', '', '2013-05-15 00:41:25', '0000-00-00 00:00:00', '<a href =/project/Search/searching/searchIn/url/value/Swyat>Swyat</a> <a href =/project/Search/searching/searchIn/url/value/></a> <a href =/project/Search/searching/searchIn/url/value/></a> ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
