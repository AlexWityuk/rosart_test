<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="contacts_top" style="background-image: url(img/contacts_bg.jpg);"></div>
	<section class="contacts">
		<div class="wrapper">
			<div class="contacts_info">
				<h2 class="title_">Контакты</h2>
				<p class="p1">Связаться с нами можно либо через форму обратной связи (расположенной справа), либо по телефону или электронному адресу:</p>
				<h3 class="h4">Номер телефона</h3>
				<p>
					<a class="ic" href="tel:+7 (951) 676 34 65">
						<svg class="icon icon-phone"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-phone"></use></svg>
						<span class="underscore">+7 (951) 676 34 65</span>
					</a>
				</p>
				<h3 class="h4">Электронная почта</h3>
				<p>
					<a class="ic" href="mailto:mail@rosart.club" target="_blank">
						<svg class="icon icon-mail"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-mail"></use></svg>
						<span class="underscore_rev">mail@rosart.club</span>
					</a>
				</p>
				<h3 class="h4">Адрес</h3>
				<p class="ic">
					<svg class="icon icon-location"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-location"></use></svg>
					Санкт-Петербург, ул. 7-ая Красноармейская 25 лит. А, помещение <br> 20-H <br> ООО «ВЕРСА» <br> ИНН 7839071534 <br> ОГРН 1167847362638​
				</p>
			</div>
			<div class="contacts_form">
				<form action="#" class="feedback">
					<h2 class="title_">Написать нам</h2>
					<p class="p1">Возникли вопросы, оставьте заявку и мы с Вами свяжемся</p>
					<div class="input_effect">
						<input name="" type="text" class="input">
						<label class="labels">Как Вас зовут?</label>
					</div>
					<div class="input_effect">
						<input id="" name="" type="email" class="input">
						<label class="labels">Эллектронная почта</label>
					</div>
					<input name="" type="text" class="input" placeholder="+ _ _ ( _ _ _ ) _ _ _ - _ _ - _ _">
					<div class="input_effect">
						<textarea name="" class="input"></textarea>
						<label class="labels">Какой у Вас вопрос?</label>
					</div>
					<button class="button">Отправить</button>
				</form>
			</div>
		</div>
	</section>

	<div class="b_subscribe">
		<div class="wrapper">
			<h3 class="title">Спецпредложения</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum dolor sit ame laoreet</p>
			<form action="#" class="subscribe">
				<input type="email" class="input" placeholder="Электронная почта">
				<button class="button"><span>Подписаться</span> <i class="ic_dir_arrow"></i></button>
			</form>
		</div>
	</div>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
	<script>
		$(document).ready(function () {
			$('#active_menu_5').addClass('active');
		});
	</script>
</body>
</html>