-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 16 2013 г., 22:54
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
-- Структура таблицы `korustyvach_info`
--

CREATE TABLE IF NOT EXISTS `korustyvach_info` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `code` text NOT NULL,
  `permissions` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions` (`permissions`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Дамп данных таблицы `korustyvach_info`
--

INSERT INTO `korustyvach_info` (`id`, `login`, `password`, `code`, `permissions`) VALUES
(41, 'ddd', 'ddd', '588527aa90', ''),
(42, 'swyat', '15011992', '5582a0cd78', 'admin'),
(43, 'swiat', 'swiat', 'f8aa141299', ''),
(44, 'ssss', 'sssss', 'ec1c3a9085', ''),
(45, 'swt', 'swt', 'f7a1a7e561', ''),
(46, 'Walera', 'qweqwe', '7c0b030bf5', ''),
(47, 'sssss', 'sssss', 'a138882fd5', ''),
(48, 'xxx', 'xxx', '82cab6d299', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=112 ;

--
-- Дамп данных таблицы `messages_info`
--

INSERT INTO `messages_info` (`id`, `name`, `email`, `topic`, `s_text`, `l_text`, `c_time`, `e_time`) VALUES
(111, 'Swyatffddsfdf', 'swyatyxa@i.ua', 'tematika', 'jugjsdfhdghnfxzzhbdnfgnwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww...', 'jugjsdfhdghnfxzzhbdnfgnwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwqqqdsfvsdf', '2013-04-16 08:50:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `swyat`
--

CREATE TABLE IF NOT EXISTS `swyat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Цю таблицю не брати до уваги' AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `swyat`
--

INSERT INTO `swyat` (`id`, `name`, `email`) VALUES
(1, 'Swyat', 'swyatyxa@i.ua'),
(2, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
