<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="blog_top" style="background-image: url(img/blog_bg.jpg);">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a class="underscore" href="index.php">Главная</a></li>
				<li><span>Блог</span></li>
			</ul>
		</div>
	</div>
	<section class="blog">
		<div class="wrapper">
			<div class="blog_nav">
				<a href="blog_popular.php" class="button">Популярные статьи</a>
				<a href="blog.php" class="button">Живопись</a>
				<a href="blog.php" class="button">Графика</a>
				<a href="blog.php" class="button">Изделия</a>
			</div>
			<div class="blog_items">
				<?php for ($i=0; $i < 2; $i++) { ?>
				<div class="blog_item">
					<div class="blog_pic"><a href="article.php" class="img"><i style="background-image: url(img/pic2.jpg);"></i></a></div>
					<div class="blog_content">
						<h2 class="h3">Мистические картины русских художников</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<a href="article.php" class="more"><span class="underscore">Читать полностью</span> <i class="arr_right"></i></a>
					</div>
				</div>
				<? } ?>
			</div>
		</div>
		<?php include('blocks/pagination.php'); ?>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
	<script>
		$(document).ready(function () {
			$('#active_menu_4').addClass('active');
		});
	</script>
</body>
</html>