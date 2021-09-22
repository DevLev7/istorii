<?php


?>

<div class="details">
	<?php if(get_field('price-opt')['price4']){ ?>
	<div class="price">
		от <?php echo number_format(get_field('price-opt')['price4'], 0, '', '&nbsp;'); ?> руб.
	</div>
	<?php } ?>
</div>