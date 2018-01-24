<?php 
// запрет прямого обращения
define('PLUMBER', TRUE);

// подключение файла конфигураций
require_once '../config.php';

// подключаем файл функций пользовательской части
require_once '../functions/functions.php';

// подключаем файл функции административной части
require_once 'functions/functions.php';

// получаем массив меню
$page = pages();

// подключаем динамическую часть шаблона #content
$view = empty($_GET['view']) ? 'pages' : $_GET['view'];

switch($view){
	case('pages'):
	// страницы
	break;

	case('home'):
	// главная страница
	break;

	default:
	// если из адресной строки получено имя несуществуещего вида
	$view = 'pages';
}


// подключаем header
include TEMPLATE_ADMIN.'header.php';

// подключем leftbar
include TEMPLATE_ADMIN.'leftbar.php';

// подключаем content
include TEMPLATE_ADMIN.$view.'.php';

 ?>