<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="adb_pic_wd" style="background-image: url(/views/img/category_bg.jpg);">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a class="underscore" href="index.php">Главная</a></li>
				<li><a class="underscore" href="index.php">Каталог</a></li>
				<li><span>Живопись</span></li>
			</ul>
		</div>
	</div>
	<section class="category">
		<div class="wrapper">
			<h1 class="title">Каталог</h1>
			<div class="category_nav">
				<a href="" class="button" value="6"><span>Живопись</span><i class="ic_dir_arrow"></i></a>
				<a href="" class="button" value="7"><span>Графика</span><i class="ic_dir_arrow"></i></a>
				<a href="" class="button" value="8"><span>Изделия</span><i class="ic_dir_arrow"></i></a>
			</div>
			<div class="rows">
				<!-- CATEGORY SIDEBAR -->
				<aside class="category_sidebar">
					<h3 class="h3">Показать</h3>
					<div class="filterWrap isOpened">
						<div class="filterHead">Все категории</div>
						<ul class="filterBody">
							<li class="filter_category_all_list" value="all"><a href="">Все</a></li>
							<?php foreach ($categoriesList as $category) { ?>
							<li class="filter_category_all_list" value="<?php echo $category['id']; ?>">
								<a href="">
								<?php echo $category['name']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Цена</div>
						<div class="filterBody filterSlider">
							<div id="filter_price"></div>
							<div class="rows">
								<input type="text" id="amount_from" class="from" readonly style="border:0;">
								<input type="text" id="amount_to" class="to" readonly style="border:0;">
							</div>
						</div>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Мастер</div>
						<ul class="filterBody">
							<?php $i = 1; foreach ($categoriesList as $category) { 
								if ($category['subid']==1) {?>
							<li>
								<input type="checkbox" class="checkbox" id="<?php echo 'filter_ch_'.$i;?>" 
								value="<?php echo $category['id'];?>">
								<label for="<?php echo 'filter_ch_'.$i;?>"><?php echo $category['name'] ?></label>
							</li>
							<?php $i++; }} ?>
						</ul>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Категория</div>
						<ul class="filterBody">
							<?php $j = 1; foreach ($categoriesList as $category) { 
								if ($category['subid']==2) {?>
							<li>
								<input type="checkbox" class="checkbox" id="<?php echo 'filter_cc_'.$j;?>" 
								value="<?php echo $category['id'];?>">
								<label for="<?php echo 'filter_cc_'.$j;?>"><?php echo $category['name'] ?></label>
							</li>
							<?php $j++; }} ?>
						</ul>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Техника</div>
						<ul class="filterBody">
							<?php $k = 1; foreach ($categoriesList as $category) { 
								if ($category['subid']==3) {?>
							<li>
								<input type="checkbox" class="checkbox" id="<?php echo 'filter_ct_'.$k?>" 
								value="<?php echo $category['id'];?>">
								<label for="<?php echo 'filter_ct_'.$k?>"><?php echo $category['name'] ?></label>
							</li>
							<?php $k++; }} ?>
						</ul>
					</div>
				</aside>
				<!-- CATEGORY CONTENT -->
				<div class="category_content">
					<div class="rows">
						<select name="select_sort_product" class="filter_sort_by" data-placeholder="Сортировка">
							<option value=""></option>
							<option value="p.date DESC">Новейшие</option>
							<option value="p.price ASC">По возрастанию цены</option>
							<option value="p.price DESC">По убыванию цены</option>
							<option value="p.name ASC">Название А-Я</option>
							<option value="p.name DESC">Название Я-А</option>
						</select>
					</div>
					<div class="category_items">
						<?php foreach ($productsList as $product) { ?>
						<div class="category_item" style="background-image: url(<?php echo $product['url']; ?>);">
							<div class="img" style="background-image: url(<?php echo $product['url']; ?>);"></div>
							<div class="category_info">
								<h3 class="hh"><span><?php echo $product['name']; ?></span></h3>
								<div class="currency || js_DropWrap">
									<div><span><?php echo $product['price']; ?></span><i class="currency_btn || js_DropBtn"></i></div>
									<ul class="currency_box || js_DropBox">
										<li class="cur_item">USD</li>
										<li class="cur_item">EUR</li>
									</ul>
								</div>
								<div class="category_btns">
									<a href="/product/<?php echo $product['id'];?>" class="button"><span>Подробнее</span><i class="ic_dir_arrow"></i></a>
									<button class="button"><span>В корзину</span><svg class="icon icon-cart"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-cart"></use></svg></button>
								</div>
							</div>
						</div>
						<? } ?>
					</div>
					<?php include('blocks/pagination.php'); ?>
				</div>
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