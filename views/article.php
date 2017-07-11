<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="article_top" style="background-image: url(img/article_bg.jpg);">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a class="underscore" href="index.php">Главная</a></li>
				<li><a class="underscore" href="blog.php">Блог</a></li>
				<li><a class="underscore" href="blog.php">Живопись</a></li>
				<li><span>Писать кистью по холсту</span></li>
			</ul>
			<div class="article_tt">
				<h1 class="ttl"><span>Писать кистью по холсту</span></h1>
			</div>
			<div class="article_info">
				<div class="tcell">
					<svg class="icon icon-eye"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-eye"></use></svg>&nbsp;<span>99 999</span>
				</div>
				<div class="tcell nowrap">
					<svg class="icon icon-calendar"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-calendar"></use></svg><span>15/04/2017</span>
				</div>
				<div class="tcell">
					<svg class="icon icon-pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-pencil"></use></svg><span>Мария Кюри</span>
				</div>
			</div>
		</div>
	</div>
	<section class="article">
		<div class="wrapper">
			<div class="content">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
				<p>
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</p>
				<p>
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</p>
				<p>
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut <a href="article.php">ссылка</a> unde omnis iste <strong>natus</strong> error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</p>
				<p>
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</p>
				<ul>
					<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
				</ul>
				<blockquote>Цитата. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
			</div>
			<div class="share_soc">
				<a href="#" target="_blank"><svg class="icon icon-twitter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-twitter"></use></svg></a>
				<a href="#" target="_blank"><svg class="icon icon-google"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-google"></use></svg></a>
				<a href="#" target="_blank"><svg class="icon icon-facebook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-facebook2"></use></svg></a>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
	<script>
		$(document).ready(function () {
			$('#active_menu_104').addClass('active');
		});
	</script>
</body>
</html>