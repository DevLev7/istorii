<?php // Похожие товары ?>
<section id="product-semilar" class="cat_card">	
	<div class="container-fluid">
		<div class="header">
			<h2>Похожие товары</h2>
		</div>
		<div class="product-semilar-arrow"></div>
		<div class="slider">
			<?php 

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => array('catalog'),
				'catalog_category' => $term_cat_slug,
				'showposts' => 8,
				'paged' => $paged,
			);
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
				$product_img_arr = get_field('image')[0];
				$product_img_width = $product_img_arr['width'];
				$product_img_height = $product_img_arr['height'];				
				if($product_img_width > $product_img_height){
					$product_img_size = $product_img_arr['sizes']['item'];
				} else {
					$product_img_size = $product_img_arr['sizes']['team'];
				}

			?>
			<div class="slide">
				<?php include(locate_template('catalog-parts/product-item.php'));?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>