<?php defined('PLUMBER') or die('Разве хорошо воровать?');?>

	<!-- #page-title -->
	<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>Нет результатов поиска</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="/">Главная</a> <i class="fa fa-angle-right"></i> <span>Нет результатов поиска</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #search-results -->
	<section id="blog-post" class="search-results">
		<div class="container">
			<div class="row">
				<!-- .no-search-content -->
				<div class="col-lg-8 no-search-content">
				    <h2>Нет результатов поиска</h2>
					<!-- article -->
					<article>
					    <h3>Suggestions:</h3>
						<div class="suggesion">
							<i class="fa fa-angle-right"></i> Убедитесь, что все слова написаны правильно
						</div>
						<div class="suggesion">
							<i class="fa fa-angle-right"></i> Попробуйте изменить ваш ключевой запрос
						</div>
						<div class="suggesion">
							<i class="fa fa-angle-right"></i> Try more general keywords, especially if you are attempting a name
						</div>
						<div class="suggesion-input">
							<input type="text">
							<input type="button" value="ПОИСК">
						</div>
						
					</article> <!-- /article -->


				</div> <!-- /.no-search-content -->

				<!-- .sidebar -->
				<?php require_once 'inc/rightbar.php';?>
				<!-- /.sidebar -->

			</div>
		</div>
	</section> <!-- /#blog-post -->





	<!-- #emergency -->
	<?php require_once 'inc/rightbar.php';?>
	<!-- /#emergency -->
