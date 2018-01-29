<?php defined('PLUMBER') or die('Закрыт доступ'); ?>
<?php print_arr($get_slider); ?>
		<div class="content">
			<h2>Редактируем слайдер</h2>
			<form action="" method="post">
			  <label for="name">Название:</label><br />
			  <input type="text" name="name" value="<?=$get_slider['name']?>"><br />
			  <label for="img">Фото:</label><br />
			  <input type="text" name="img" value="<?=$get_slider['img']?>"><br /><br />
			  <label>Загаловки:</label><br />
			  <input type="text" name="h1" value="<?=$get_slider['h1']?>"><br /><br />
			  <label>Текст:</label><br />
			  <textarea><?=$get_slider['text']?></textarea>
			</form>
			
<br><br>
			<a href="#"><button class="button_save">Сохранить</button></a>
	

		</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>