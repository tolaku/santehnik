<?php defined('PLUMBER') or die('Разве хорошо воровать?');?>
	
	<!-- #page-title -->
	<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>О нас</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="/">Главная</a> <i class="fa fa-angle-right"></i> <span>О нас</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #our-mission -->
	<section id="our-mission">
		<div class="container">
			<div class="section-title">
				<h1>Our Mission</h1>
			</div>
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudanti- <br>um, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-6">
							<ul>
								<li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
								<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
								<li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
								<li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
								<li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>										
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6">
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
				<div class="col-lg-5 col-md-5 col-sm-12">
					<div class="img-holder">
						<img src="<?=TEMPLATE?>img/about/1.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#our-mission -->


	<section id="featured">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 pull-right">
					<div class="col-lg-6 col-md-6">
						<div class="content clearfix">
							<div class="img-wrap pull-left wow fadeIn" data-wow-offset="3">
								<img src="<?=TEMPLATE?>img/about/icon/1.png" alt="">
							</div>
							<div class="content-wrap pull-right">
								<h2>24/7 availality</h2>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
							</div>
						</div>
						<div class="content clearfix">
							<div class="img-wrap pull-left wow fadeIn" data-wow-delay=".3s" data-wow-offset="3">
								<img src="<?=TEMPLATE?>img/about/icon/2.png" alt="">
							</div>
							<div class="content-wrap pull-right">
								<h2>No hidden cost</h2>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 ">
						<div class="content clearfix">
							<div class="img-wrap pull-left wow fadeIn" data-wow-delay=".6s" data-wow-offset="3">
								<img src="<?=TEMPLATE?>img/about/icon/3.png" alt="">
							</div>
							<div class="content-wrap pull-right">
								<h2>Certified Mechanics</h2>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
							</div>
						</div>
						<div class="content clearfix">
							<div class="img-wrap pull-left wow fadeIn" data-wow-delay=".9s" data-wow-offset="3">
								<img src="<?=TEMPLATE?>img/about/icon/4.png" alt="">
							</div>
							<div class="content-wrap pull-right">
								<h2>Affordable prices</h2>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="10">
					<img src="<?=TEMPLATE?>img/about/2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- подключение специалистов -->
	<?php require_once 'inc/special.php';?>


	<!-- #emergency -->
<?php require_once 'inc/emergency.php';?>
<!-- /#emergency -->


	<!-- #clients -->
	<section id="clients">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/1.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/2.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/3.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/4.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/5.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/3.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/4.png" alt="">
						</div>
						<div class="item">
							<img src="<?=TEMPLATE?>img/clients/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#clients -->
