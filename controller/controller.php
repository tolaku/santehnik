<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

// подключение модели
require_once MODEL;

// подключаем функции
require_once 'functions/functions.php';

// подключение динамическую часть шаблона
$view = empty($_GET['view']) ? 'page' : $_GET['view'];

// выводим навигацию
$page = pages();

// проверяем на какой странице мы находимся через $view
switch ($view) {
	case ('project'):
		# code...
	break;

	case('contact'):

	break;

	case('about'):

	break;
	
	default:
		$view = 'page';
	break;
}

// подключение шаблона сайта
require_once TEMPLATE.'index.php';

?>