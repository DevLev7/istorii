<div class="product-body">
	<div class="product-flex">
		<?php
			// Картинки
			include_once(locate_template('catalog-parts/product-hero/body-image-block.php'));
			
			// Краткое описание и детали
			include_once(locate_template('catalog-parts/product-hero/body-text-block.php'));
			
			// Цены, доставка и оплата
			include_once(locate_template('catalog-parts/product-hero/body-order-block.php'));
		?>
	</div>
</div>