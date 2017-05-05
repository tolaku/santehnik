<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

// шапка сайта
require_once 'inc/header.php'; 

// подключение страниц сайта
include $view.'.php';

// футер сайта
require_once 'inc/footer.php'; 

?>

	