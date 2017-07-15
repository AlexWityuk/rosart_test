<div><span><?php echo $product_price.' руб'; ?></span><i class="currency_btn || js_DropBtn"></i></div>
<ul class="currency_box || js_DropBox">
	<?php foreach ($currency_arr as $currency_item) { ?>
	<li class="cur_item"><?php echo $currency_item; ?></li>
	<?php } ?>
</ul>