<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

// подключение модели
require_once MODEL;

// подключаем функции
require_once 'functions/functions.php';

// подключение динамическую часть шаблона
$view = empty($_GET['view']) ? 'home' : $_GET['view'];

// выводим навигацию
$page = pages();

// проверяем на какой странице мы находимся через $view
switch ($view) {
	case ('home'):
		$slider_1 = sliderHome('1'); // слайдер №1
		$slider_2 = sliderHome('2'); // слайдер №2
		$slider_3 = sliderHome('3'); // слайдер №3

		## выводим контейнеры
		$who_we_are_a = container('who_we_are_a', 'home');
		$who_we_are_b = container('who_we_are_b', 'home');
		$who_we_are_c = container('who_we_are_c', 'home');

		## выводим услуги
		$uslugi = uslugi();

		## Выводим галлерею (gallery)
		$gallery = Gallers();

		## Выводим специалистов (specialist)
		$specialists = Specialists();

		## Выводим отзывы (testimonial)
		$testimonials = Testimonials();


	break;

	case ('gallery'):

	break;

	case('project'):

	break;

	case('uslugi'):

	break;

	case('contact'):

	break;

	case('about'):

	break;
	
	default:
		$view = 'home';
	break;
}

// подключение шаблона сайта
require_once TEMPLATE.'index.php';

?>