<?php // Карточка товара ?>
<a class="item autoheight" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
	<?php if($product_img_size){ ?>
	<div class="image">
		<img src="<?php echo $product_img_size; ?>" alt="<?php echo get_the_title(); ?>" />
	</div>
	<?php } ?>
	<div class="body">
		<div class="title">
			<?php the_title(); ?>
		</div>
		<?php get_template_part('template-parts/products-details'); ?>
	</div>
</a>