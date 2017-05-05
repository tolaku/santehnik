<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');



//####### Обработчик заказ-звонка #########//
function clear($var){
	$var = strip_tags(trim($var));
	return $var;
}

// определяем константы для получения писем
define( "RECIPIENT_NAME", "Santehnikpro.by" );
define( "RECIPIENT_EMAIL", "<tola_ku@mail.ru>" );

// полученные данные через форму определяем в переменные
$success = false;
$senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\+\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$city = isset( $_POST['city'] ) ? preg_replace( "/^[а-яА-ЯёЁa-zA-Z0-9]+$/", "", $_POST['city'] ) : "";


$senderName = isset($_POST['name']) ? clear($_POST['name']) : "";
$senderEmail = isset($_POST['email']) ? clear($_POST['email']) : "";
$phone = isset($_POST['phone']) ? clear($_POST['phone']) : "";
$city = isset($_POST['city']) ? clear($_POST['city']) : "";

// Если все значения существуют, отправляем по электронной почте
if ( $senderName && $senderEmail && $phone && $city ) {
	$recipient = RECIPIENT_NAME . " " . RECIPIENT_EMAIL . "";
	$subject = "Звонок с сайта: SANTEHNIKPRO.BY";
	$headers .= "Content-type: text/plain; charset=utf-8\r\n";
	$headers .= "From: " . $senderName . " <" . $senderEmail . ">";

// формируем сообщение
	$message =   " Имя: {$senderName} \r\n Email: {$senderEmail} \r\n Телефон: {$phone} \r\n Город: {$city}";
	$success = mail( $recipient, $subject, $message, $headers );
	echo "<center><p class='success'>Спасибо за обращение. <br> В ближайшее время мы с вами <br>свяжемся!</p></center>";
	exit;
}
//####### #обработчик заказ-звонка #########//

?>