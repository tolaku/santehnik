<?php defined('PLUMBER') or die('Разве хорошо воровать?');?>	

	<!-- #page-title -->
	<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>Контакты</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="/">Главная</a> <i class="fa fa-angle-right"></i> <span>Контакты</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #contact-content -->
	<section id="contact-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
					<form action="http://santehnikpro.by/views/plumber/sendemail.php" class="contact-form">
						<p><input type="text" name="name" placeholder="Имя"></p>
						<p><input type="text" name="email" placeholder="Email"></p>
						<p><input type="text" name="subject" placeholder="Тема"></p>
						<p><textarea name="message" placeholder="Сообщение"></textarea></p>
						<p><button type="submit">Получить ответ</button></p>
					</form>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12  col-lg-offset-1  col-md-offset-0  col-sm-offset-0  col-xs-offset-0 contact-info">
					<h3>Контактная информация</h3>
					<p>У вас остались вопросы? Дайте нам знать. <br>И мы постораемся вам помочь.</p>
					<ul>
						<li class="clearfix">
							<img src="<?=TEMPLATE?>img/contact-page/icon/1.png" alt=""> 
							<div class="content">
								<h4>Офис</h4>
								<p> Беларусь, г. Пинск <br>Оказываем услуги по Беларуси</p>
							</div>
						</li>
						<li class="clearfix">
							<img src="<?=TEMPLATE?>img/contact-page/icon/2.png" alt=""> 
							<div class="content">
								<h4>Email</h4>
								<p>santehkostya@mail.ru</p>
							</div>
						</li>
						<li class="clearfix">
							<img src="<?=TEMPLATE?>img/contact-page/icon/3.png" alt=""> 
							<div class="content">
								<h4>Телефон</h4>
								<p>+375 (44) 454-04-44</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="google-map" id="contact-google-map" data-map-lat="52.1124967" data-map-lng="26.0634602" data-icon-path="<?=TEMPLATE?>img/resources/map-marker.png" data-map-title="Пинск" data-map-zoom="12"></div>
			</div>
		</div>
	</section> <!-- /#contact-content -->




	<!-- #emergency -->
<?php require_once 'inc/emergency.php';?>
<!-- /#emergency -->



