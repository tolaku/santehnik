-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 21 2017 г., 17:57
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
-- Структура таблицы `slider_home`
--

CREATE TABLE IF NOT EXISTS `slider_home` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `h1` varchar(255) DEFAULT NULL,
  `div` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slider_home`
--

INSERT INTO `slider_home` (`id`, `name`, `img`, `h1`, `div`, `text`) VALUES
(1, 'Ключ в руке (слайдер 1)', 'img/slides/image1.jpg', '<span>качество</span><br>и гарантия', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua. Ut enim ad minim veniam exercitation.</p>'),
(2, 'Кран в руке (слайдер 2)', 'img/slides/image2.jpg', 'справимся с поставленной|задачей <br>вашего водопровода', 'class="caption skewfromright  light-plumber-slider-caption tp-resizeme" \n							data-x="0" \n							data-y="200" \n							data-speed="600" \n							data-start="1700" \n							data-easing="easeOutBack"> | class="caption randomrotate bold-plumber-slider-caption tp-resizeme" \n							data-x="0" \n							data-y="250" \n							data-speed="500" \n							data-start="2200" \n							data-easing="easeOutBack">', NULL),
(3, 'Ванне с краном (слайдер 3)', 'img/slides/image3.jpg', 'наша работа|ваше спокойствие|24 часа|профессиональная команда|Гарантированное качество|Бесплатная консультация|Невысокая цена', NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
