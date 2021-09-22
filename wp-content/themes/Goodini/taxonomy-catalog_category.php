<?php 
	get_header();
	
// Определение типа записи
	include(locate_template('template-parts/type-page.php'));
	
// Первый экран
	include_once(locate_template('template-parts/hero.php'));
?>

<div id="catalog-wrap">
<?php 
	$terms = get_terms( [
		'taxonomy' => 'catalog_category',
		'parent' => $term_cat_ID,
	] );
	
	$setting_cats = get_field('setting-cats',$field_postfix) ;
	$setting_products = get_field('setting-products',$field_postfix) ;
	
	$setting_catalog_cats = get_field('catalog-cats','option') ;
	$setting_catalog_products = get_field('catalog-products','option') ;

	if($terms && $setting_catalog_products['products-hidden-subcats']){
		$hidden_subcats = true;
	}
	

	// Если в текущей категории есть подкатегории
	if($terms && !$setting_cats['cats-hidden'] && !$setting_catalog_cats['subcats-hidden']){
?>


<section id="subcatalog" class="cat_card">
	<div class="container-fluid">
		<!--div class="header">
			<h2>Категории раздела <span class="text_color"><?php echo $post_name; ?></span></h2>
		</div-->
		<div class="row">
			<?php
			foreach( $terms as $term ){
				$term_name = $term -> name;
				$term_ID = $term -> term_id;
				$term_img_arr = get_field('setting-cats',$term)['image-cat'];
				$term_img_width = $term_img_arr['width'];
				$term_img_height = $term_img_arr['height'];				
				if($term_img_width > $term_img_height){
					$term_img_size = $term_img_arr['sizes']['item'];
				} else {
					$term_img_size = $term_img_arr['sizes']['team'];
				}
				//print("<pre>".print_r($term_img_arr,true)."</pre>");

			?>
			<div class="col-lg-25 col-ml-3 col-md-4 col-6">
				<a class="item autoheight" href="<?php echo get_term_link($term_ID); ?>" >
					<?php if($term_img_size){ ?>
					<div class="image">
						<img src="<?php echo $term_img_size; ?>" alt="<?php echo get_the_title(); ?>" />
					</div>
					<?php } ?>
					<div class="body">
						<div class="title">
							<?php echo $term_name; ?>
						</div>
					</div>
				</a>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<?php
	}
?>

<?php
	// Если не скрыты товары
	if(!$setting_products['products-hidden'] && !$setting_catalog_products['products-hidden'] && !$hidden_subcats){
?>

<section id="products" class="cat_card">
	<div class="container-fluid">
		<div class="header">
			<h2>Каталог товаров</h2>
		</div>
		<div class="row">
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => array('catalog'),
				'catalog_category' => $term_cat_slug,
				//'showposts' => 24,
				'paged' => $paged,
				//'post__in' => [1378,1379]
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
			<div class="col-lg-25 col-ml-3 col-md-4 col-6">
				<?php include(locate_template('catalog-parts/product-item.php'));?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

	<?php get_template_part('template-parts/pagination');?>

<?php
	}
?>

</div>

<?php	

//	Модули
	include(locate_template('template-parts/modules.php'));
	
//	Общие модули
	$field_postfix = 'option';
	$field_preffix_modules = 'common-blocks-cats_';
	include(locate_template('template-parts/modules.php'));
	
//	Менеджер
if(!$setting_catalog_cats['manager-hidden']){
	include_once(locate_template('blocks/block-manager.php'));
}
	
	get_footer(); 
?>