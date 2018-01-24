<?php defined('PLUMBER') or die('Закрыт доступ'); ?>
	<div class="content-main">
		<div class="leftBar">
			<ul class="nav-left">
				<!-- Выводим навигацию -->
						<?php foreach($page as $key => $item): ?>
							<?php if(count($item) == 2): ?> <!-- <li class="current"> -->
								<li><a href="?view=<?=$item[0]?>" class="hvr-overline-from-left"><?=$item['name']?></a></li>
							<?php endif; ?>
							<?php if(count($item) > 2): ?>
							<li>
								<a href="?view=<?=$item[0]?>" class="hvr-overline-from-left"><?=$item['name']?></a>
								<ul class="submenu">
								<?php foreach($item['sub'] as $key => $sub): ?>
									<li><a href="?view=uslugi&amp;id=<?=$key?>"><?=$sub?></a></li>
								<?php endforeach; ?>
								</ul>
							</li>
							<?php endif; ?>
						<?php endforeach; ?>
				<li><a href="#" class="nav-activ">Основные страницы</a></li>
			
			</ul>
		</div> <!-- .leftBar -->