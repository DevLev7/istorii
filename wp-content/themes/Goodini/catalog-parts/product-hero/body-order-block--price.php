<div class="price-row">
	<div class="price-left">
		<?php if($price_sale){ ?>
		<div class="price-del">
			<?php echo number_format($price_def, 0, '', '&nbsp;'); ?> <?php echo $price_name; ?>
		</div>
		<?php } ?>
		<div class="price-def">
			<?php echo $price_start; ?> <?php echo number_format($price, 0, '', '&nbsp;'); ?> <?php echo $price_name; ?>
		</div>
	</div>
	<div class="price-right">
		Экономия
		<span><?php echo number_format($price_def-$price_sale, 0, '', '&nbsp;'); ?> <?php echo $price_name; ?></span>
	</div>
</div>

<div class="button">
	 <button data-src="#popup-order" data-fancybox class="btn" anim="ripple"><span>Заказать</span></button>
</div>