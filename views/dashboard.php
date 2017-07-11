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
				<li><span>Личный кабинет</span></li>
			</ul>
		</div>
	</div>
	<section class="dashboard">
		<div class="wrapper">
			<h1 class="title">Личный кабинет</h1>
			<div class="tab_wrapper">
				<ul class="tab_menu || dashboard_head">
					<li class="button active"><span>Мои данные</span><i class="ic_dir_arrow"></i></li>
					<li class="button"><span>мои заказы</span><i class="ic_dir_arrow"></i></li>
				</ul>

				<div class="tab_content || dashboard_body">
					<!-- мои данные -->
					<div class="tab_item">
						<form action="#" class="dashboard_form">
							<label class="labels">Ваше Имя</label><input type="text" class="input" placeholder="Как вас зовут">
							<label class="labels">Электронная почта</label><input type="email" class="input" placeholder="mymail@mail.ru">
							<label class="labels">Номер телефона</label><input type="text" class="input" placeholder="+38 (050) 81 81 811">
							<label class="labels">Введите новый пароль</label><input type="text" class="input" placeholder="">
							<button class="button btn_1">сменить пароль</button>
							<div class="soc_accounts">
								<p>Связанные аккаунты</p>
								<a href="#" class="button">Facebook</a>
								<a href="#" class="button">Vkontakte</a>
							</div>
							<button class="button || btn_wd">Сохранить изменения</button>
						</form>
					</div>
					<!-- мои заказы -->
					<div class="tab_item">

						<!-- если есть заказы - выводится таблица -->
						<table class="table_product || table_res">
							<thead>
								<tr>
									<th>Наименование товара</th>
									<th>Дата заказа</th>
									<th>Статус</th>
								</tr>
							</thead>
							<tbody>
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
									<td data-title="Дата заказа">
										<div class="td_mob">
											<p>18.04.2017</p>
										</div>
									</td>
									<td data-title="Статус">
										<div class="td_mob">
											<p>Передан в обработку</p>
											<button class="btn_follow_prod || underscore">Отследить товар</button>
										</div>
									</td>
								</tr>
								<?php for ($i=0; $i < 2; $i++) { ?>
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
									<td data-title="Дата заказа">
										<div class="td_mob">
											<p>18.04.2017</p>
										</div>
									</td>
									<td data-title="Статус">
										<div class="td_mob">
											<p>Доставлен</p>
										</div>
									</td>
								</tr>
								<? } ?>
							</tbody>
						</table>

						<!-- если заказов нет -->

						<div class="no_orders" style="display: none;">
							<p>Ваша история заказов пуста</p>
							<a href="#" class="button"><span>перейти в каталог</span> <i class="ic_dir_arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
</body>
</html>