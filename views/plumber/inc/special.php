
<!-- #our-specialist -->
	<section id="our-specialist">
		<div class="container">
			<div class="section-title">
				<h1>Встретиться со специалистом</h1>
			</div>
			<div class="row">
			<?php if($specialists == true): ?>
				<?php foreach($specialists as $value): ?>
				<div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="0"> 
					<!-- .single-member -->
					<div class="single-member hvr-bounce-to-bottom">
						<img src="<?=TEMPLATE?>img/our-specialist/<?=$value['img']?>" alt="">
						<div class="info hvr-bounce-to-top">
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<h2><?=$value['name']?></h2>
							<p class="position"><?=$value['snipet']?></p>
						</div>
					</div> <!-- /.single-member -->
				</div>
				<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
	</section> <!-- /#our-specialist -->