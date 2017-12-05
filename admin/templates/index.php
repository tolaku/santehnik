<?php
// подключаем динамическую часть шаблона #content
$view = empty($_GET['view']) ? 'pages' : $_GET['view'];

switch($view){
	case('pages'):
	// страницы
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