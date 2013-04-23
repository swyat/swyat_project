-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 23 2013 г., 14:23
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
  `login` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `permissions` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions` (`permissions`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `korustyvach_info`
--

INSERT INTO `korustyvach_info` (`id`, `login`, `password`, `code`, `permissions`) VALUES
(53, 'swyat', '15011992', '6ed84cdbd8', 'admin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
