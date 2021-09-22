<?php // Первый экран ?>
	<section id="product-hero" class="">	
		<div class="container-fluid">
		
			<?php
				// шапка первого экрана
				include_once(locate_template('catalog-parts/product-hero/product-head.php'));
				
				// первый экран
				include_once(locate_template('catalog-parts/product-hero/product-body.php'));
			?>
			
		</div>
	</section>