-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 21 2017 г., 17:55
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `constants`
--

INSERT INTO `constants` (`id`, `title`, `name`, `text`) VALUES
(1, 'В шапке телефон', 'header_telefon', '+375 (44) 454-04-44'),
(2, 'Звоните нам и мы..', 'promotional_text', '<p>Звоните нам и мы оперативно решим вашу сантехнику <b>в любое для вас время.</b></p>'),
(3, 'Услуги которые мы предлагаем', 'uslugi_name', '<h1>Услуги которые мы предлагаем</h1>'),
(4, 'В шапке email', 'header_mail', 'santehkostya@mail.ru'),
(6, 'Аварийная утечка', 'emergency', '<h2>Аварийная утечка &amp; <span>Лопнула труба</span></h2>');

-- --------------------------------------------------------

--
-- Структура таблицы `container`
--

CREATE TABLE IF NOT EXISTS `container` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `page` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `text` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `container`
--

INSERT INTO `container` (`id`, `title`, `name`, `page`, `img`, `text`) VALUES
(1, 'Сантехник', 'who_we_are_a', 'home', 'img/who-we-are/1.jpg', '<h2>Сантехник</h2>\n						<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. </p>'),
(2, 'Сантехник в производстве', 'who_we_are_b', 'home', 'img/who-we-are/2.jpg', '<h2>сантехник в производстве</h2>\r\n					<p>Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p>'),
(3, 'Сантехник дома', 'who_we_are_c', 'home', 'img/who-we-are/3.jpg', '<h2>сантехник дома</h2>\r\n					<p>Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `h4_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `span_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img_max` varchar(255) CHARACTER SET utf8 NOT NULL,
  `width` int(1) NOT NULL DEFAULT '1',
  `height` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `h4_name`, `span_name`, `img`, `img_max`, `width`, `height`) VALUES
(1, 'Установка умывальника', 'со шкафчиком из массива берёзы', '1.jpg', '1_max.jpg', 1, 0),
(2, 'Сборка', 'Переключатель подачи воды', '2.jpg', '2_max.jpg', 1, 0),
(3, 'Установка труб', 'В ванной комнате', '3.jpg', '3_max.jpg', 1, 1),
(4, 'Унитаз и биде', 'Установка и навеска на инсталляцию биде и унитаза', '4.jpg', '4_max.jpg', 1, 0),
(5, 'Гребёнка сборной фирмы KAN 2', 'Обвязка гребёнок тёплого пола и батарей', '5.jpg', '5_max.jpg', 2, 0),
(6, 'Котельная', 'Котельная', '6.jpg', '6_max.jpg', 1, 0);

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
  `h1` text,
  `div` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slider_home`
--

INSERT INTO `slider_home` (`id`, `name`, `img`, `h1`, `div`, `text`) VALUES
(1, 'Ключ в руке (слайдер 1)', 'img/slides/image1.jpg', '<span>качество</span><br>и гарантия', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua. Ut enim ad minim veniam exercitation.</p>'),
(2, 'Кран в руке (слайдер 2)', 'img/slides/image2.jpg', 'справимся с поставленной|задачей <br>вашего водопровода', 'class="caption skewfromright  light-plumber-slider-caption tp-resizeme" \n							data-x="0" \n							data-y="200" \n							data-speed="600" \n							data-start="1700" \n							data-easing="easeOutBack" | class="caption randomrotate bold-plumber-slider-caption tp-resizeme" \n							data-x="0" \n							data-y="250" \n							data-speed="500" \n							data-start="2200" \n							data-easing="easeOutBack"', NULL),
(3, 'Ванне с краном (слайдер 3)', 'img/slides/image3.jpg', '<h1>наша работа</h1> | <h1>ваше спокойствие</h1> | <i class="fa fa-check"></i> 24 часа | <i class="fa fa-check"></i> профессиональная команда | <i class="fa fa-check"></i> Гарантированное качество | <i class="fa fa-check"></i> Бесплатная консультация | <i class="fa fa-check"></i> Невысокая цена', 'class="caption fade tp-resizeme bold-pxslider-caption"\n							data-x="780" \n							data-y="95" \n							data-speed="500" \n							data-start="1700" | class="caption lfl tp-resizeme light-pxslider-caption"\n							data-x="780" \n							data-y="145" \n							data-speed="500" \n							data-start="2200" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="225" \n							data-speed="500" \n							data-start="2400" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="290" \n							data-speed="500" \n							data-start="2600" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="355" \n							data-speed="500" \n							data-start="2800" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="420" \n							data-speed="500" \n							data-start="3000" | class="caption lfl tp-resizeme simple-pxslider-caption"\n							data-x="780" \n							data-y="485" \n							data-speed="500" \n							data-start="3000"', '');

-- --------------------------------------------------------

--
-- Структура таблицы `specialist`
--

CREATE TABLE IF NOT EXISTS `specialist` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `snipet` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `specialist`
--

INSERT INTO `specialist` (`id`, `name`, `snipet`, `img`) VALUES
(1, 'Константин', 'Сантехник-механик', '1.png'),
(2, 'Rock Leue', 'Plumbing Mechanic', '2.png'),
(3, 'Michale cock', 'Plumbing Mechanic', '3.png'),
(4, 'Rock Leue', 'Plumbing Mechanic', '4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `snipet` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `float` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `snipet`, `img`, `float`) VALUES
(1, 'merry Smith', 'Sed ut perspiciatis unde omnis iste natus er aer or sit voluptatem acc all santium doloremqe laudantium totam.', '1.jpg', 'wow bounceInLeft hvr-float-shadow'),
(2, 'Анатолий', 'Наша семья, осталось очень довольна работой сантехника Константина, поразила скорость и качество. Благодарим Вас за работу. т.(44) 532-36-04', '2.jpg', 'hvr-float-shadow'),
(3, 'merry Smith', 'Sed ut perspiciatis unde omnis iste natus er aer or sit voluptatem acc all santium doloremqe laudantium totam.', '3.jpg', 'col-lg-offset-0 col-md-offset-0 col-sm-offset-3 wow bounceInRight hvr-float-shadow');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE IF NOT EXISTS `uslugi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `latina` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `text` text CHARACTER SET utf8,
  `list` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id`, `page_id`, `latina`, `img`, `text`, `list`) VALUES
(1, 5, 'otoplenie', 'img/project-v5/1.jpg', '<p>Сюда входит установка котла, бойлера, насоса, расширительного бака, труб отопления и так далее.</p>', 'Установка и обвязка котла | Установка и монтаж бойлера | Монтаж циркуляционного насоса'),
(2, 6, 'vodosnabshenie', 'img/project-v5/1.jpg', '<p>Сюда входит установка насоса водоснабжения</p>', 'Насос водоснабжения | Насос ...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
