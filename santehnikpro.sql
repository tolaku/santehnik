-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 24 2017 г., 16:39
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
-- Структура таблицы `constants`
--

CREATE TABLE `constants` (
  `id` int(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `constants`
--

INSERT INTO `constants` (`id`, `title`, `name`, `text`) VALUES
(1, 'В шапке телефон и email', 'heder_telefon', '<li><a href="tel:+375444540444" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i> (44) 454-04-44 </a></li>\n						<li><a href="mailto:santehkostya@mail.ru" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i> santehkostya@mail.ru</a></li>'),
(2, 'Звоните нам и мы..', 'promotional_text', '<p>Звоните нам и мы оперативно решим вашу сантехнику <b>в любое для вас время.</b></p>'),
(3, 'Услуги которые мы предлагаем', 'uslugi_name', '<h1>Услуги которые мы предлагаем</h1>');

-- --------------------------------------------------------

--
-- Структура таблицы `container`
--

CREATE TABLE `container` (
  `id` int(3) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `text` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `container`
--

INSERT INTO `container` (`id`, `title`, `name`, `page`, `img`, `text`) VALUES
(1, 'Сантехник', 'who_we_are_a', 'home', 'img/who-we-are/1.jpg', '<h2>Сантехник</h2>\n						<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. </p>'),
(2, 'Сантехник в производстве', 'who_we_are_b', 'home', 'img/who-we-are/2.jpg', '<h2>сантехник в производстве</h2>\r\n					<p>Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p>'),
(3, 'Сантехник дома', 'who_we_are_c', 'home', 'img/who-we-are/3.jpg', '<h2>сантехник дома</h2>\r\n					<p>Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url_page` varchar(255) NOT NULL,
  `position` int(3) NOT NULL,
  `parent_id` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `text` text CHARACTER SET utf8,
  `list` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id`, `page_id`, `img`, `text`, `list`) VALUES
(1, 5, 'img/project-v5/1.jpg', '<p>Сюда входит установка котла, бойлера, насоса, расширительного бака, труб отопления и так далее.</p>', 'Установка и обвязка котла | Установка и монтаж бойлера | Монтаж циркуляционного насоса');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `constants`
--
ALTER TABLE `constants`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_home`
--
ALTER TABLE `slider_home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `constants`
--
ALTER TABLE `constants`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `container`
--
ALTER TABLE `container`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `slider_home`
--
ALTER TABLE `slider_home`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
