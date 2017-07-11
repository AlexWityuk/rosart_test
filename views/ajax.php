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