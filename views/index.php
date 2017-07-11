<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body>
	<?php include('blocks/header.php'); ?>
	<section class="main_adb || topPadidng">
		<div class="posTop"></div>
		<div class="main_adb_content" style="background-image: url(/views/img/main_adb.jpg);">
			<div class="wrapper">
				<h2 class="hh">Галерея РосАрт</h2>
				<h4 class="pp">Искусство русских мастеров</h4>
				<a href="catalog" class="button"><span>Каталог
				</span> <i class="ic_dir_arrow"></i></a>
			</div>
		</div>
	</section>
	<section class="catalog">
		<div class="wrapper">
			<?php include('blocks/catalog_items.php'); ?>
		</div>
	</section>
	<div class="main_bg" style="background-image: url(/views/img/main_bg.jpg);">
		<div class="wrapper">
			<main class="b_about">
				<div class="column cl1">
					<div class="double_pic">
						<div class="pic || wow slideInLeft" data-wow-offset="100" data-wow-delay="0.5s" data-wow-duration="1s" style="background-image: url(/views/img/pic4.jpg);"></div>
						<div class="pic ||  wow zoomIn" data-wow-offset="200" data-wow-delay="2s" data-wow-duration="1s" style="background-image: url(/views/img/pic5.jpg);"></div>
					</div>
				</div>
				<div class="column cl2">
					<h1 class="title_">О Галерее</h1>
					<p>РОСАРТ — галерея современного русского искусства. Галерея произведений настоящих мастеров для истинных ценителей.</p>
					<p>
						РОСАРТ — это не только магазин произведений современных российских мастеров, но и своеобразный клуб для истинных ценителей изобразительного и прикладного искусства и авторов, чей талант и мастерство нуждаются в поддержке. Такую поддержку можете оказать художникам именно Вы, истинные ценители искусства. Приобретая их произведения в свои коллекции, Вы оказываете неоценимую помощь в сохранении Русского национального наследия и создаете возможность для мастера не отвлекаться на вопросы самостоятельной продажи своих работ, а продолжать творить, снова и снова.
					</p>
					<a href="about.php" class="read_more"><span>Подробнее</span> <i class="ic_dir_arrow"></i></a>
				</div>
			</main>
			<section class="forwhom">
				<div class="column cl1">
					<div class="double_pic_rev">
						<div class="pic || wow slideInUp" data-wow-offset="100" data-wow-delay="0.5s" data-wow-duration="1s" style="background-image: url(/views/img/pic7.jpg);"></div>
						<div class="pic || wow fadeIn" data-wow-offset="200" data-wow-delay="2s" data-wow-duration="1s" style="background-image: url(/views/img/pic6.jpg);"></div>
					</div>
				</div>
				<div class="column cl2">
					<h3 class="title_">Для кого?</h3>
					<div class="pp">
						<p>Краткая информация: Sed ut perspiciatis unde omnis iste natus</p>
					</div>
					<div class="forwhom_items">
						<div class="forwhom_item">
							<svg class="icon icon-painting"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/views/img/svgdefs.svg#icon-painting"></use></svg>
							<span>Любители искусства</span>
						</div>
						<div class="forwhom_item">
							<svg class="icon icon-gift"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/views/img/svgdefs.svg#icon-gift"></use></svg>
							<span>В подарок</span>
						</div>
						<div class="forwhom_item">
							<svg class="icon icon-landscape"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/views/img/svgdefs.svg#icon-landscape"></use></svg>
							<span>Коллекционерам картин</span>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<section class="gallery">
		<div class="wrapper">
			<h2 class="title_">Галерея</h2>
			<div id="mygallery" class="gallery_grid">
				<?php for ($i=11; $i <=16 ; $i++) { ?>
				<a href="img/pic<?=$i?>.jpg"><img src="/views/img/pic<?=$i?>.jpg" alt="img"></a>
				<? } ?>
			</div>
		</div>
	</section>
	<section class="special" style="background-image: url(/views/img/red_bg.jpg);">
		<div class="wrapper">
			<div class="column cl1">
				<div class="special_content">
					<h2 class="title_">Спецпредложения</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum dolor sit ame laoreet.</p>
					<form action="" class="subscribe">
						<input type="email" class="input" placeholder="Электронная почта">
						<button class="button"><span>Подписаться</span> <i class="ic_dir_arrow"></i></button>
					</form>
				</div>
			</div>
			<div class="column cl2"><img src="/views/img/frame.png" alt="img"></div>
		</div>
	</section>
	<section class="b_contacts">
		<div class="wrapper">
			<h2 class="title_">Контакты</h2>
			<div class="rows">
				<div class="column1">
					<p class="p1">Связаться с нами можно либо через форму обратной связи (расположенной слева), либо по телефону или электронному адресу:</p>
					<div class="rows">
						<div class="coln1">
							<p class="ic">
								<a href="tel:+7 (951) 676-34-65" target="_blank"><svg class="icon icon-phone"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-phone"></use></svg>+7 (951) 676-34-65</a>
							</p>
							<p class="ic">
								<a href="mailto:mail@rosart.club" target="_blank"><svg class="icon icon-envelope"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-envelope"></use></svg><span class="underscore_rev">mail@rosart.club</span></a>
							</p>
						</div>
						<div class="coln2">
							<p class="ic">
								<svg class="icon icon-marker"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-marker"></use></svg>
								Санкт-Петербург, ул. 7-ая Красноармейская 25 лит. А, помещение 20-H <br>ООО «ВЕРСА», ИНН 7839071534, ОГРН 1167847362638​
							</p>
						</div>
					</div>
				</div>
				<div class="column2">
					<p>Возникли вопросы, оставьте заявку и мы с Вами свяжемся</p>
					<button class="button" onclick="$('.modal_feedback').dialog()"><span>заказать звонок</span><i class="ic_dir_arrow"></i></button>
				</div>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>

	<script>
		$(document).ready(function () {
			$('#active_menu_1').addClass('active');

			$("#mygallery").justifiedGallery({
				rowHeight : 420,
				lastRow : 'nojustify',
				margins : 15,
				captions: false,
				rel : 'gallery1',

			}).on('jg.complete', function () {
				$(this).find('a').colorbox({
					maxWidth : '80%',
					maxHeight : '80%',
					opacity : 0.8,
					transition : 'elastic',
					current : '',
				});
			});


		});
	</script>
</body>
</html>