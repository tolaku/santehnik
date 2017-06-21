<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

/* выводим значения из constant */
function constants($str){
	global $db;
	$query = "SELECT text FROM constants WHERE name = '$str'";
	$result = mysqli_query($db, $query) or die(mysql_error());

	$string = mysqli_fetch_assoc($result);
	return $string;
}

/* выводим страницы в header */
function pages(){
	global $db;
	$query = "SELECT * FROM pages ORDER BY position, parent_id, name";
	$result = mysqli_query($db, $query) or die(mysql_query(query));

	$page = array();
	while($row = mysqli_fetch_assoc($result)){
		if(!$row['parent_id']){
			$page[$row['id']][] = $row['name'];
			$page[$row['id']][] = $row['url_page'];
		}else{
			$page[$row['parent_id']]['sub'][$row['id']] = $row['name'];
		}
	}
	return $page;
}

/* выводим слайдера на странице home */
function sliderHome($slider){
	global $db;
	$query = "SELECT * FROM slider_home WHERE id = $slider";
	$result = mysqli_query($db, $query);

	$sliderHome = array();
	$sliderHome[] = mysqli_fetch_assoc($result);

	// вынимаем данные из h1 
	if(!empty($sliderHome[0]['h1'])){ 
		$sliderHome[0]['h1'] = explode("|", $sliderHome[0]['h1']);
	}
	// вынимаем данные из div
	if(!empty($sliderHome[0]['div'])){
		$sliderHome[0]['div'] = explode("|", $sliderHome[0]['div']);
	}

	return $sliderHome[0]; 
}
/* :выводим слайдера на странице home */

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