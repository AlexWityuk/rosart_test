<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<section class="masters">
		<div class="wrapper">
			<div class="adb_picture" style="background-image: url(img/masters_bg.jpg);"></div>
			<h1 class="title_">Мастера</h1>
			<div class="masters_items">
				<div class="masters_item">
					<div class="masters_img" style="background-image: url(img/pic20.jpg);"></div>
					<div class="masters_body">
						<h3 class="hh">Рейпольский А.Д.</h3>
						<p>Художник-живописец</p>
						<p>График</p>
						<div class="btns_wr">
							<a href="master.php" class="button">Биография</a>
							<a href="#" class="button">Работы</a>
						</div>
					</div>
				</div>
				<div class="masters_item">
					<div class="masters_img" style="background-image: url(img/pic21.jpg);"></div>
					<div class="masters_body">
						<h3 class="hh">МИТКОВ ПАВЕЛ</h3>
						<p>Художник-живописец</p>
						<div class="btns_wr">
							<a href="master.php" class="button">Биография</a>
							<a href="#" class="button">Работы</a>
						</div>
					</div>
				</div>
				<div class="masters_item">
					<div class="masters_img" style="background-image: url(img/pic22.jpg);"></div>
					<div class="masters_body">
						<h3 class="hh">РУДАЕВА Е.Л.</h3>
						<p>Художник-живописец</p>
						<div class="btns_wr">
							<a href="master.php" class="button">Биография</a>
							<a href="#" class="button">Работы</a>
						</div>
					</div>
				</div>
				<div class="masters_item">
					<div class="masters_img" style="background-image: url(img/pic23.jpg);"></div>
					<div class="masters_body">
						<h3 class="hh">УРКИНЕЕВ Д.Л.</h3>
						<p>Художник-живописец</p>
						<div class="btns_wr">
							<a href="master.php" class="button">Биография</a>
							<a href="#" class="button">Работы</a>
						</div>
					</div>
				</div>
				<div class="masters_item">
					<div class="masters_img" style="background-image: url(img/pic24.jpg);"></div>
					<div class="masters_body">
						<h3 class="hh">ГУСЕВ ВАЛЕРИЙ</h3>
						<p>Художник</p>
						<p>Каменная живопись</p>
						<div class="btns_wr">
							<a href="master.php" class="button">Биография</a>
							<a href="#" class="button">Работы</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>

	<script>
		$(document).ready(function () {
			$('#active_menu_2').addClass('active');
		});
	</script>
</body>
</html>