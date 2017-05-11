<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

// подключение модели
require_once MODEL;

// подключаем функции
require_once 'functions/functions.php';

// подключение динамическую часть шаблона
$view = empty($_GET['view']) ? 'page' : $_GET['view'];

// выводим header_contact
//constant($string);

// проверяем на какой странице мы находимся через $view
switch ($view) {
	case ('project'):
		# code...
	break;
	
	default:
		$view = 'page';
	break;
}

// подключение шаблона сайта
require_once TEMPLATE.'index.php';

?>