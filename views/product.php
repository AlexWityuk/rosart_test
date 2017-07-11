<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="mosaic" style="background-image: url(/views/img/product_top_bg.jpg);">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a class="underscore" href="index.php">Главная</a></li>
				<li><a class="underscore" href="catatlog.php">Каталог</a></li>
				<li><a class="underscore" href="category.php">Живопись</a></li>
				<li><span>Название картины</span></li>
			</ul>
		</div>
	</div>
	<section class="product">
		<div class="wrapper">
			<div class="product_picture">
				<div class="img" style="background-image: url(/views/img/pic8.jpg);"></div>
			</div>
			<div class="product_info">
				<h1 class="title_"><?php echo $product['name']; ?></h1>
				<div class="currency || js_DropWrap">
					<div><span><?php echo $product['price']; ?></span>
						<i class="currency_btn || js_DropBtn"></i></div>
					<ul class="currency_box || js_DropBox">
						<li class="cur_item">RUB</li>
						<li class="cur_item">EUR</li>
					</ul>
				</div>
				<p class="pp"><?php echo $product['master']; ?></p>
				<p class="pp"><?php echo $product['technika']; ?></p>
				<p class="pp">1,12 х 0,6 м</p>
				<p class="pp"><?php echo $product['date']; ?></p>
				<button class="button"><span>Добавить в корзину</span>
					<i class="ic_dir_arrow"></i></button>
				<div class="social">
					<a href="#" target="_blank"><svg class="icon icon-facebook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/views/img/svgdefs.svg#icon-facebook"></use></svg></a>
					<a href="#" target="_blank"><svg class="icon icon-vk"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/views/img/svgdefs.svg#icon-vk"></use></svg></a>
				</div>
			</div>
		</div>
	</section>
	<section class="reviewed">
		<div class="wrapper">
			<div class="title_">Просмотренные товары</div>
			<div class="reviewed_items">
			<?php for ($i=1; $i < 5; $i++) { ?>
				<a href="product.php" class="reviewed_item">
					<div class="img" style="background-image: url(/views/img/pic1<?=$i?>.jpg);"></div>
					<h3 class="hh"><span>Цикл Литографий «Маскарад» Лит.№26</span></h3>
					<div class="price">30,000 руб.</div>
				</a>
			<? } ?>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
	<script>
		$(document).ready(function () {
			$('#active_menu_3').addClass('active');
		});
	</script>
</body>
</html>