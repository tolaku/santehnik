<?php defined('PLUMBER') or die('Закрыт доступ!'); 


/* выводим страницы в header */
function pages(){
	global $db;
	$query = "SELECT * FROM pages ORDER BY position, parent_id, name";
	$result = mysqli_query($db, $query) or die(mysql_query(query));

	$page = array();
	while($row = mysqli_fetch_assoc($result)){
		if(!$row['parent_id']){
			$page[$row['id']]['name'] = $row['name'];
			$page[$row['id']][] = $row['url_page'];
		}else{
			$page[$row['parent_id']]['sub'][$row['id']] = $row['name'];
		}
	}
	return $page;
}

/* выводим имена слайдеров */
function slider(){
	global $db;
	$query = "SELECT id, name FROM slider_home";
	$result = mysqli_query($db, $query);

	$slider = array();
	while($row = mysqli_fetch_assoc($result)){
		$slider[] = $row;
	}
	return $slider;
}
/* :выводим имена слайдеров */

/* выводим данные слайдера по ID */
function get_slider($id){
	global $db;
	$query = "SELECT * FROM slider_home WHERE id = $id";
	$result = mysqli_query($db, $query);

	$get_slider = mysqli_fetch_assoc($result);
	return $get_slider;
}
/* :выводим данные слайдера по ID */
?>