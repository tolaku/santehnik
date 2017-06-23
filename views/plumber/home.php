<?php defined('PLUMBER') or die('Разве хорошо воровать?');?>

		<!-- #banner -->
	<section id="banner">
		<div class="banner-container">
			<div class="banner home-v1">
				<ul>

					<li 
						class="slider-1" 
						data-transition="fade" 
						data-slotamount="7" 
						data-thumb="<?=TEMPLATE?><?=$slider_1['img']; ?>"
						data-title="эксперты">
						
						<img 
							src="<?=TEMPLATE?><?=$slider_1['img']; ?>" 
							data-bgrepeat="no-repeat" 
							data-bgfit="cover" 
							data-bgposition="top center"
							alt="slider image">
						
						<!-- .banner-txt -->
						<div 
							class="caption zoomin banner-txt col-lg-5 tp-resizeme" 
							data-x="0" 
							data-y="110" 
							data-speed="700" 
							data-start="1700"  
							data-easing="easeOutBack">
							<!-- выводим заголовки в слайдере №1 -->
							<?php if(!empty($slider_1['h1']) AND $slider_1['h1'] >= 1): ?>
								<?php foreach($slider_1['h1'] as $slider_1_h1): ?>
									<h1 style=""><?=$slider_1_h1?></h1>
								<?php endforeach; ?>
							<?php endif; ?>

							<!-- выводим текст в слайдере №1 -->
							<?=$slider_1['text']?>
							<button class="hvr-bounce-to-right">Узнать больше</button>
						</div> <!-- /.banner-txt -->

						<!-- .banner-form -->
						<div 
							class="banner-form col-lg-3 caption lfb" 
							data-x="820" 
							data-y="110" 
							data-speed="500" 
							data-start="1900"  
							data-easing="easeOutBack" >

							<div class="tab-title clearfix">
							</div>
							<div class="tab-content">
								<div id="residential">
									<p class="txt-highlight">заказать звонок</p>
									<form class="rqa-form" action="#" method="post">
										<p>
											<label>Имя:</label>
											<input type="text" id="name" name="name">
										</p>
										<p>
											<label>Email:</label>
											<input type="text" id="email" name="email">
										</p>
										<p>
											<label>Тел.:</label>
											<input type="text" id="phone" name="phone">
										</p>
										<p>
											<label>Город:</label>
											<input type="text" id="city" name="city">
										</p>
										<p class="clearfix">
											<button class="hvr-bounce-to-right" type="submit">получить ответ</button>
										</p>
									</form>
								</div>
							</div>
						</div> <!-- /.banner-form -->
					</li>
					<li 
						class="slider-2" 
						data-transition="fade" 
						data-slotamount="7" 
						data-thumb="<?=TEMPLATE?><?=$slider_2['img']?>"
						data-title="гарантия">

						<img 
							src="<?=TEMPLATE?><?=$slider_2['img']?>" 
							data-bgrepeat="no-repeat" 
							data-bgfit="cover" 
							data-bgposition="top center"
							alt="slider image">
						<?php if(!empty($slider_2['h1']) AND !empty($slider_2['div'])): ?>
						<?php foreach(array_combine($slider_2['h1'], $slider_2['div']) as $slider_2_h1 => $slider_2_div): ?>
							<!-- Выводим div class и data для заголовков в слайдере №2 -->
							<div 
								<?=$slider_2_div?> 
								>
							<!-- Выводим заголовки в слайдере №2 -->
								<h1><?=$slider_2_h1?></h1>
							</div>
						<?php endforeach; ?>
						<?php endif; ?>

					</li>
					<li 
						class="slider-3" 
						data-transition="fade" 
						data-slotamount="7" 
						data-thumb="<?=TEMPLATE?><?=$slider_3['img']?>"
						data-title="24 часа">

						<img 
							src="<?=TEMPLATE?><?=$slider_3['img']?>" 
							data-bgrepeat="no-repeat" 
							data-bgfit="cover" 
							data-bgposition="center center"
							alt="slider image">
						
						<?php if(!empty($slider_3['h1']) AND !empty($slider_3['div'])): ?>
						<?php foreach(array_combine($slider_3['h1'], $slider_3['div']) as $slider_3_h1 => $slider_3_div): ?>
							<!-- Выводим div class и data для заголовков в слайдере №2 -->
							<div 
								<?=$slider_3_div?> 
								>
							<!-- Выводим заголовки в слайдере №2 -->
								<?=$slider_3_h1?>
							</div>
						<?php endforeach; ?>
						<?php endif; ?>
						
					</li>

				</ul>
			</div>
		</div>
	</section> <!-- /#banner -->



	<!-- #promotional-text -->
	<section id="promotional-text">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php $str = constants('promotional_text'); echo $str['text'] ?>
				</div>
			</div>
		</div>
	</section> <!-- /#promotional-text -->
	
	<!-- #who-we-are -->
	<section id="who-we-are">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 large-box col-sm-12 col-xs-12 wow zoomIn hvr-float-shadow" data-wow-duration=".5s">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img-holder">
						<img src="<?=TEMPLATE?><?=$who_we_are_a['img'];?>" alt="">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hvr-bounce-to-left">
						<?=$who_we_are_a['text'];?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">
					<div class="img-holder">
						<img src="<?=TEMPLATE?><?=$who_we_are_b['img'];?>" alt="">
					</div>
					<?=$who_we_are_b['text'];?>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn" data-wow-duration=".5s" data-wow-delay="1s">
					<div class="img-holder">
						<img src="<?=TEMPLATE?><?=$who_we_are_c['img'];?>" alt="">
					</div>
					<?=$who_we_are_c['text'];?>
				</div>
			</div>
		</div>
	</section> <!-- /#who-we-are -->

	<!-- #service-we-provide -->
	<section id="service-we-provide">
		<div class="container">
			<div class="section-title">
				<h1>Услуги которые мы предлагаем</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 wow slideInLeft">
					<div class="service-tab-title">
						<ul class="clearfix">
							<li class="active" data-tab-name="drain">Монтаж отопления</li>
							<li data-tab-name="bath">Монтаж водоснабжения</li>
							<li data-tab-name="kitchen">Монтаж канализации</li>
							<li data-tab-name="outside">Сантехническая посуда</li>
							<li data-tab-name="broken">Установка оборудования</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 wow slideInRight">
					<div class="row">
						<div class="service-tab-content clearfix">
							<div id="plumbing">
								<div class="col-lg-8 col-md-7 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <br> dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent <br> ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo <br> inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
							<div id="bath">
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
							<div id="kitchen">
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
							<div id="drain">
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
							<div id="toilet">
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
							<div id="broken">
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
							<div id="outside">
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
									<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<img src="<?=TEMPLATE?>img/service-we-provide/1.jpg" alt="">
										</div>
										<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
											<ul>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
												<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
									<img src="<?=TEMPLATE?>img/service-we-provide/2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#service-we-provide -->

	<!-- #our-projects -->
	<section id="our-projects">
		<div class="container">
			<div class="section-title">
				<h1>Наши работы</h1>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 masonary-gallery">
					<div class="masonary-item width-1">
						<a class="fancybox" href="<?=TEMPLATE?>img/our-projects/1_max.jpg"><div class="img-wrap">
							<img src="<?=TEMPLATE?>img/our-projects/1.jpg" alt="">
							<div class="content-wrap">
								<div class="border">
									<div class="content">
										<h4>Установка умывальника</h4>
										<span>со шкафчиком из массива берёзы</span>
									</div>
								</div>
							</div>
						</div></a>
					</div>
					<div class="masonary-item width-1">
						<a class="fancybox" href="<?=TEMPLATE?>img/our-projects/2_max.jpg"><div class="img-wrap">
							<img src="<?=TEMPLATE?>img/our-projects/2.jpg" alt="">
							<div class="content-wrap">
								<div class="border">
									<div class="content">
										<h4>Сборка</h4>
										<span>Переключатель подачи воды</span>
									</div>
								</div>
							</div>
						</div></a>
					</div>		
					<div class="masonary-item width-1 height-1">
						<a class="fancybox" href="<?=TEMPLATE?>img/our-projects/3_max.jpg"><div class="img-wrap">
							<img src="<?=TEMPLATE?>img/our-projects/3.jpg" alt="">
							<div class="content-wrap">
								<div class="border">
									<div class="content">
										<h4>Установка труб</h4>
										<span>В ванной комнате</span>
									</div>
								</div>
							</div>
						</div></a>
					</div>		
					<div class="masonary-item width-1">
						<a class="fancybox" href="<?=TEMPLATE?>img/our-projects/4_max.jpg"><div class="img-wrap">
							<img src="<?=TEMPLATE?>img/our-projects/4.jpg" alt="">
							<div class="content-wrap">
								<div class="border">
									<div class="content">
										<h4>Унитаз и биде</h4>
										<span>Установка и навеска на инсталляцию биде и унитаза</span>
									</div>
								</div>
							</div>
						</div></a>
					</div>		
					<div class="masonary-item width-2">
						<a class="fancybox" href="<?=TEMPLATE?>img/our-projects/5_max.jpg"><div class="img-wrap">
							<img src="<?=TEMPLATE?>img/our-projects/5.jpg" alt="">
							<div class="content-wrap">
								<div class="border">
									<div class="content">
										<h4>Гребёнка сборной фирмы KAN 2</h4>
										<span>Обвязка гребёнок тёплого пола и батарей</span>
									</div>
								</div>
							</div>
						</div></a>
					</div>					
					<div class="masonary-item width-1">
						<a class="fancybox" href="<?=TEMPLATE?>img/our-projects/6_max.jpg"><div class="img-wrap">
							<img src="<?=TEMPLATE?>img/our-projects/6.jpg" alt="">
							<div class="content-wrap">
								<div class="border">
									<div class="content">
										<h4>Котельная</h4>
										<span>Полная установка котла с подключением</span>
									</div>
								</div>
							</div>
						</div></a>
					</div>

				</div>

			</div>
			<div class="view-all-btn"><a href="project-v1.html" class="view-all hvr-bounce-to-right">посмотреть все</a></div>
		</div>
	</section> <!-- /#our-projects -->

	<!-- подключение к специалистам -->
	<?php require_once 'inc/special.php'; ?>

	<!-- #testimonials -->
	<section id="testimonials">
		<div class="container">
			<div class="section-title">
				<h1>Что говорят наши клиенты</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 wow bounceInLeft hvr-float-shadow">
					<!-- .single-testimonial -->
					<div class="single-testimonial  hvr-bounce-to-bottom">
						<div class="profile-info pull-left">
							<img src="<?=TEMPLATE?>img/testimonial/1.jpg" alt="">
							<h2>merry Smith</h2>
						</div>
						<div class="content pull-left">
							<p><i class="fa fa-quote-left"></i> Sed ut perspiciatis unde omnis iste natus er aer or sit voluptatem acc all santium doloremqe laudantium totam.</p>
						</div>
					</div> <!-- /.single-testimonial -->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 hvr-float-shadow">
					<!-- .single-testimonial -->
					<div class="single-testimonial  hvr-bounce-to-bottom">
						<div class="profile-info pull-left">
							<img src="<?=TEMPLATE?>img/testimonial/2.jpg" alt="">
							<h2>Анатолий</h2>
						</div>
						<div class="content pull-left ">
							<p><i class="fa fa-quote-left"></i> Наша семья, осталось очень довольна работой сантехника Константина, поразила скорость и качество. Благодарим Вас за работу. т.(44) 532-36-04</p>
						</div>
					</div> <!-- /.single-testimonial -->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 wow bounceInRight hvr-float-shadow">
					<!-- .single-testimonial -->
					<div class="single-testimonial  hvr-bounce-to-bottom">
						<div class="profile-info pull-left">
							<img src="<?=TEMPLATE?>img/testimonial/3.jpg" alt="">
							<h2>merry Smith</h2>
						</div>
						<div class="content pull-left">
							<p><i class="fa fa-quote-left"></i> Sed ut perspiciatis unde omnis iste natus er aer or sit voluptatem acc all santium doloremqe laudantium totam.</p>
						</div>
					</div> <!-- /.single-testimonial -->
				</div>
			</div>
		</div>
	</section>	<!-- /#testimonials -->

	<!-- #emergency -->
<?php require_once 'inc/emergency.php';?>
<!-- /#emergency -->