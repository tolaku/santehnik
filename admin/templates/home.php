<?php defined('PLUMBER') or die('Закрыт доступ'); ?>
<?php //print_arr($slider); ?>
		<div class="content">
			<h2>Слайдер</h2>

			<table class="tabl" cellspacing="1">
			  <tr>
				<th class="number">№</th>
				<th class="str_name">Название слайдера</th>
				<th class="str_action">Действие</th>
			  </tr>
			  <?php $i=1;  ?>
			   <?php foreach($slider as $item): // выводим имена слайдеров главной страницы?>
				  <tr>
					<td><?=$i?></td>
					<td class="name_page"><?=$item['name']?></td>
					<td><a href="?view=edit_slider&amp;id=<?=$item['id']?>" class="edit">изменить</a></td>
				  </tr>
				  <?php $i++; ?>
			  <?php endforeach; ?>
			</table>

	

		</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>