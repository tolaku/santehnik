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
						<li><a href="tel:+375444540444" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i> (44) 454-04-44 </a></li>
						<li><a href="mailto:santehkostya@mail.ru" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i> santehkostya@mail.ru</a></li>
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

					<!-- Главная -->
					<?php if($view == 'page'):?>
						<li class="current">
					<?php else:?>
						<li>
					<?php endif; ?>
							<a href="/" class="hvr-overline-from-left">Главная</a></li>
					<!-- #Главная -->

					<!-- О нас -->
					<?php if($view == 'about'):?>
						<li class="dropdown current">
					<?php else:?>
						<li class="dropdown">
					<?php endif; ?>
							<a href="?view=about" class="hvr-overline-from-left">О нас</a>
							<ul class="submenu">
								<li><a href="?view=team">Наш коллектив</a></li>
								<li class="dropdown"><a href="?view=testimonials-v1">Отзывы</a>
									<ul class="submenu">
										<li><a href="?view=testimonials-v1">Отзывы V1</a></li>
										<li><a href="?view=testimonials-v2">Отзывы V2</a></li>
									</ul>
								</li>
								<li><a href="?view=faq">Вопрос-ответ</a></li>
							</ul>
						</li>
					<!-- #О нас -->

					<!-- Услуги -->	
					<?php if($view == 'project'):?>
						<li class="dropdown current">
					<?php else:?>
						<li class="dropdown">
					<?php endif; ?>
							<a href="?view=project" class="hvr-overline-from-left">Услуги</a>
							<ul class="submenu">
								<li><a href="?view=uslugi&amp;id=1">Отопление</a></li>
								<li><a href="?view=uslugi&amp;id=2">Водоснабжение</a></li>
								<li><a href="?view=uslugi&amp;id=3">Канализация</a></li>
								<li><a href="?view=uslugi&amp;id=4">Сантех-посуда</a></li>
								<li><a href="?view=uslugi&amp;id=5">Сантех-оборудование</a></li>
							</ul>
							</li>
					<!-- #Услуги -->	

					<!-- Контакты -->
					<?php if($view == 'contact'):?>
						<li class="current">
					<?php else:?>
						<li>
					<?php endif; ?>
						<a href="?view=contact" class="hvr-overline-from-left">Контакты</a></li>
					<!-- #Контакты -->
					</ul>
				</nav>
			</div>
		</div>
	</header> <!-- /header -->