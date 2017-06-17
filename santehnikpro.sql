-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 17 2017 г., 15:05
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
(1, 'В шапке телефон и email', 'heder_telefon', '<li><a href="tel:+375444540444" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i> (44) 454-04-44 </a></li>\n						<li><a href="mailto:santehkostya@mail.ru" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i> santehkostya@mail.ru</a></li>');

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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `constants`
--
ALTER TABLE `constants`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `constants`
--
ALTER TABLE `constants`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
