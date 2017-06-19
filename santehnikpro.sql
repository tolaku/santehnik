-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 19 2017 г., 17:52
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `santehnikpro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `constants`
--

CREATE TABLE IF NOT EXISTS `constants` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `constants`
--

INSERT INTO `constants` (`id`, `title`, `name`, `text`) VALUES
(1, 'В шапке телефон и email', 'heder_telefon', '<li><a href="tel:+375444540444" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i> (44) 454-04-44 </a></li>\n						<li><a href="mailto:santehkostya@mail.ru" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i> santehkostya@mail.ru</a></li>');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url_page` varchar(255) NOT NULL,
  `position` int(3) NOT NULL,
  `parent_id` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `url_page`, `position`, `parent_id`) VALUES
(1, 'Главная', 'home', 1, 0),
(2, 'О нас', 'about', 2, 0),
(3, 'Услуги', 'project', 3, 0),
(4, 'Контакты', 'contact', 4, 0),
(5, 'Отопление', 'uslugi', 5, 3),
(6, 'Водоснабжение', 'uslugi', 6, 3),
(7, 'Канализация', 'uslugi', 1, 3),
(8, 'Сантех-посуда', 'uslugi', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `slider_home`
--

CREATE TABLE IF NOT EXISTS `slider_home` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slider_home`
--

INSERT INTO `slider_home` (`id`, `name`, `img`, `text`) VALUES
(1, 'Ключ в руке (слайдер 1)', 'img/slides/image1.jpg', 'Качество и гарантия'),
(2, 'Кран в руке (слайдер 2)', 'img/slides/image2.jpg', 'Справимся с поставленной задачей'),
(3, 'Ванне с краном (слайдер 3)', 'img/slides/image3.jpg', 'Наша работа');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
