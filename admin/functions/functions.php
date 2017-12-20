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

?>