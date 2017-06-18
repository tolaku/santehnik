<?php defined('PLUMBER') or die('Разве хорошо воровать?');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Услуги сантехника || Минск - Брест - Пинск</title>
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="<?=TEMPLATE?>css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?=TEMPLATE?>css/responsive.css">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/respond.js"></script>
	<![endif]-->


</head>
<body>
	<!-- preloader -->
	<div class="preloader"></div>

	<!-- #topbar -->
	<section id="topbar">
		<div class="container">
			<div class="row">
				<div class="contact-info pull-right">
					<ul>
					<!-- Выводим телефон и email -->
					<?php $str = constants('heder_telefon'); echo $str['text'] ?>
					</ul>
				</div> <!-- /.contact-info -->
			</div>
		</div>
	</section> <!-- /#topbar -->

	<!-- header -->
	<header>
		<div class="search-box">
			<div class="container">
				<div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
					<form action="#">
						<input type="text" placeholder="Поиск"> <button type="submit"><i class="icon icon-Search"></i></button>
					</form>
				</div>
			</div>
		</div>
		<div class="cart-box">
			<div class="container">
				<div class="pull-right cart col-lg-6 col-xs-12">
					<p><i class="icon icon-FullShoppingCart"></i> У вас есть <span>1 товар</span> в корзине. Цена <span>$199</span></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
					<a href="/">
						<img src="<?=TEMPLATE?>img/resources/logo.png" alt="Santehnikpro">
					</a>
				</div>
				<nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container">
					<ul class="top-icons-wrap pull-right">
						<li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
						
					</ul>
					<button class="mainmenu-toggler">
						<i class="fa fa-bars"></i>
					</button>
					<ul class="mainmenu pull-right">
					
					<!-- Выводим навигацию -->
						<?php foreach($page as $key => $item): ?>
							<?php if(count($item) == 2): ?> <!-- <li class="current"> -->
								<li><a href="?view=<?=$item[1]?>" class="hvr-overline-from-left"><?=$item[0]?></a></li>
							<?php endif; ?>
							<?php if(count($item) > 2): ?>
							<li>
								<a href="?view=<?=$item[1]?>" class="hvr-overline-from-left"><?=$item[0]?></a>
								<ul class="submenu">
								<?php foreach($item['sub'] as $key => $sub): ?>
									<li><a href="?view=uslugi&amp;id=<?=$key?>"><?=$sub?></a></li>
								<?php endforeach; ?>
								</ul>
							</li>
							<?php endif; ?>
						<?php endforeach; ?>

					</ul>
				</nav>
			</div>
		</div>
	</header> <!-- /header -->