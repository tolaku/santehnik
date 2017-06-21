-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 21 2017 г., 22:57
-- Версия сервера: 5.7.18-0ubuntu0.16.04.1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `santehnikpro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `slider_home`
--

CREATE TABLE `slider_home` (
  `id` int(1) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `h1` text,
  `div` text,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider_home`
--

INSERT INTO `slider_home` (`id`, `name`, `img`, `h1`, `div`, `text`) VALUES
(1, 'Ключ в руке (слайдер 1)', 'img/slides/image1.jpg', '<span>качество</span><br>и гарантия', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua. Ut enim ad minim veniam exercitation.</p>'),
(2, 'Кран в руке (слайдер 2)', 'img/slides/image2.jpg', 'справимся с поставленной|задачей <br>вашего водопровода', 'class="caption skewfromright  light-plumber-slider-caption tp-resizeme" \n							data-x="0" \n							data-y="200" \n							data-speed="600" \n							data-start="1700" \n							data-easing="easeOutBack" | class="caption randomrotate bold-plumber-slider-caption tp-resizeme" \n							data-x="0" \n							data-y="250" \n							data-speed="500" \n							data-start="2200" \n							data-easing="easeOutBack"', NULL),
(3, 'Ванне с краном (слайдер 3)', 'img/slides/image3.jpg', '<h1>наша работа</h1> | <h1>ваше спокойствие</h1> | <i class="fa fa-check"></i> 24 часа | <i class="fa fa-check"></i> профессиональная команда | <i class="fa fa-check"></i> Гарантированное качество | <i class="fa fa-check"></i> Бесплатная консультация | <i class="fa fa-check"></i> Невысокая цена', 'class="caption fade tp-resizeme bold-pxslider-caption"\n							data-x="780" \n							data-y="95" \n							data-speed="500" \n							data-start="1700" | class="caption lfl tp-resizeme light-pxslider-caption"\n							data-x="780" \n							data-y="145" \n							data-speed="500" \n							data-start="2200" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="225" \n							data-speed="500" \n							data-start="2400" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="290" \n							data-speed="500" \n							data-start="2600" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="355" \n							data-speed="500" \n							data-start="2800" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="420" \n							data-speed="500" \n							data-start="3000" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="485" \n							data-speed="500" \n							data-start="3000"', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `slider_home`
--
ALTER TABLE `slider_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `slider_home`
--
ALTER TABLE `slider_home`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
