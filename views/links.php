<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
	<style>
		.demo {width: 50%;float: left;padding: 5rem 10rem;}
		.demo li {margin-bottom: 1rem;font-size: 2rem}
	</style>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="mosaic" style="background-image: url(img/product_top_bg.jpg);">&nbsp;</div>
	<div class="wrapper">
		<ul class="demo">
			<li><a href="index.php" target="_blank" class="underscore_rev">Главня</a></li>
			<li><a href="about.php" target="_blank" class="underscore_rev">О галерее</a></li>
			<li><a href="masters.php" target="_blank" class="underscore_rev">Мастера</a></li>
			<li><a href="master.php" target="_blank" class="underscore_rev">Мастер</a></li>
			<li><a href="catalog.php" target="_blank" class="underscore_rev">Каталог</a></li>
			<li><a href="category.php" target="_blank" class="underscore_rev">Подкатегории</a></li>
			<li><a href="product.php" target="_blank" class="underscore_rev">Карточка товара</a></li>
			<li><a href="blog.php" target="_blank" class="underscore_rev">Блог</a></li>
			<li><a href="blog_popular.php" target="_blank" class="underscore_rev">Популярные статьи</a></li>
			<li><a href="article.php" target="_blank" class="underscore_rev">Конкретная статья</a></li>
		</ul>
		<ul class="demo">
			<li><a href="contacts.php" target="_blank" class="underscore_rev">Контакты</a></li>
			<li><a href="how_buy.php" target="_blank" class="underscore_rev">Как купить</a></li>
			<li><a href="cart.php" target="_blank" class="underscore_rev">Корзина</a></li>
			<li><a href="dashboard.php" target="_blank" class="underscore_rev">Личный кабинет</a></li>
			<li><a href="search.php" target="_blank" class="underscore_rev">Результаты поиска</a></li>
			<li><a href="404.php" target="_blank" class="underscore_rev">404</a></li>
			<li><h3>Модальные окна</h3></li>
			<li><a href="#" class="underscore_rev" onclick="$('.modal_feedback').dialog();return false;">Заказать звонок</a></li>
			<li><a href="#" class="underscore_rev" onclick="$('.modal_alert_book').dialog();return false;">Вы успешно подписаны на рассылку</a></li>
			<li><a href="#" class="underscore_rev" onclick="$('.modal_registration').dialog();return false;">Регистрация</a></li>
			<li><a href="#" class="underscore_rev" onclick="$('.modal_login').dialog();return false;">Вход</a></li>
		</ul>
	</div>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
</body>
</html>