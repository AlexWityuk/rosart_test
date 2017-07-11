<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="mosaic" style="background-image: url(img/product_top_bg.jpg);">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a class="underscore" href="index.php">Главная</a></li>
				<li><span>Корзина</span></li>
			</ul>
		</div>
	</div>
	<section class="cart">
		<div class="wrapper">
			<div class="rows">
				<h1 class="title_">Моя корзина <span>(3)</span></h1>
				<a href="#" class="button || btn_2"><span>Оформить заказ</span> <i class="ic_dir_arrow"></i></a>
			</div>
			
			<table class="table_product || table_res">
				<thead>
					<tr>
						<th>Наименование товара</th>
						<th>КОЛИЧЕСТВО</th>
						<th>ИТОГО</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i=0; $i < 3; $i++) { ?>
					<tr>
						<td class="td_product" data-title="Наименование товара">
							<div class="td_mob">
								<a href="product.php">
									<div class="item"><div class="img" style="background-image: url(img/pic8.jpg);"></div></div>							
									<div class="item">
										<h4 class="tt">Девушка в красном  платке</h4>
										<div class="price">30,000 руб.</div>
									</div>
								</a>
							</div>
						</td>
						<td data-title="Колличество">
							<div class="td_mob">
								<div class="type_number">
									<span class="minus"></span>
									<input type="number" value="1">
									<span class="plus"></span>
								</div>
							</div>
						</td>
						<td data-title="Итого">
							<div class="td_mob">
								<div class="total_price">30,000 руб.</div>
								<button class="btn_del_cart || underscore">Удалить из корзины</button>
							</div>
						</td>
					</tr>
					<? } ?>
				</tbody>
			</table>

			<div class="cart_bottom">
				<div class="full_price">Итого: 90,000 руб.</div>
				<a href="#" class="button || btn_3"><span>Оформить заказ</span> <i class="ic_dir_arrow"></i></a>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
</body>
</html>