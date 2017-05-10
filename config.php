<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

// адрес нашего сайта
define('PATH', 'http://santehnikpro.loc/');

// константа которая будет ссылатся на model
define('MODEL', 'model/model.php');

// константа controller
define('CONTROLLER', 'controller/controller.php');

// шаблоны сайтов
define('VIEW', 'views/');

// шаблон самого сайта
define('TEMPLATE', VIEW.'plumber/');


// подключение к базе данных
define('HOST', 'localhost'); // подключение к серверу БД
define('USER_BD', 'shkola'); // пользователь БД
define('PASS_BD', '123'); // пароль БД
define('NAME_BD', 'santehnikpro'); // имя БД

$db = mysqli_connect(HOST, USER_BD, PASS_BD) or die('Нет подключение к серверу!');
mysqli_select_db($db, NAME_BD) or die('Нет подключения к БД');
mysqli_query($db, "SET NAMES 'UTF8'") or die('Кодировка не подключена!');
?>