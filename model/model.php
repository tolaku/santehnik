<?php 
defined('PLUMBER') or die('Разве хорошо воровать?');

/* выводим значения из constant */
function constants($str){
	global $db;
	$query = "SELECT text FROM constants WHERE name = '$str'";
	$result = mysqli_query($db, $query) or die(mysql_error());

	$string = mysqli_fetch_assoc($result);

	return $string['text'];
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

	// вынимаем данные для h1 
	if(!empty($sliderHome[0]['h1'])){ 
		$sliderHome[0]['h1'] = explode("|", $sliderHome[0]['h1']);
	}
	// вынимаем данные для div
	if(!empty($sliderHome[0]['div'])){
		$sliderHome[0]['div'] = explode("|", $sliderHome[0]['div']);
	}

	return $sliderHome[0]; 
}
/* :выводим слайдера на странице home */

/* Получаем данные по container */
function container($name, $page){
	global $db;
	$query = "SELECT * FROM container WHERE name = '$name' AND page = '$page'";
	$result = mysqli_query($db, $query);

	$string = array();
	$string = mysqli_fetch_assoc($result);

	return $string;
}
/* :получаем данные по container */

/* Выводим данные по услугам */
function uslugi(){
	global $db;
	$query = "SELECT a.id, a.name, b.latina, b.img, b.text, b.list FROM pages a
	JOIN uslugi b 
	ON a.id = b.page_id AND a.url_page = 'uslugi'";

	$result = mysqli_query($db, $query);

	$uslugi = array();
	while($row = mysqli_fetch_assoc($result)){
		$uslugi[$row['id']] = $row;
		$uslugi[$row['id']]['list'] = explode("|", $uslugi[$row['id']]['list']);
	}
	return $uslugi;
}
/* :выводим данные по услугам */

/* Выводим галлерею (gallery) */
	function Gallers(){
		global $db;
		$query = "SELECT * FROM gallery";
		$result = mysqli_query($db, $query);

		$gallers = array();
		while($row = mysqli_fetch_assoc($result)){
			$gallers[] = $row;
		}
		return $gallers;
	}
/* :выводим галлерею (gallery) */

/* Выводим специалистов (specialist) */
function Specialists(){
	global $db;
	$query = "SELECT * FROM specialist";
	$result = mysqli_query($db, $query);

	$specialists = array();
	while($row = mysqli_fetch_assoc($result)){
		$specialists[] = $row;
	}
	return $specialists;
}
/* :выводим специалистов (specialist) */

/* Выводим отзывы (Testimonials) */
function Testimonials(){
	global $db;
	$query = "SELECT * FROM testimonials";
	$result = mysqli_query($db, $query);

	$testimonials = array();
	while($row = mysqli_fetch_assoc($result)){
		$testionials[] = $row; 
	}
	return $testionials;
}
/* :выводим отзывы (Testimonials) */

?>