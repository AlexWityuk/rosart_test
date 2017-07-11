<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<section class="catalog_page">
		<div class="wrapper">
			<div class="adb_picture" style="background-image: url(img/catalog_bg.jpg);"></div>
			<h1 class="title_">Каталог</h1>
			<?php include('blocks/catalog_items.php'); ?>
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