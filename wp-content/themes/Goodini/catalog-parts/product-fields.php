<?php

	// Поля
	
	$images = get_field('image');
	$code = get_field('code');
	$intro = get_field('intro');
	$parameters = get_field('parameters');
	
	// Цены
	$price_start = get_field('price-start');
	$price_def = get_field('price');
	$price_sale = get_field('price-sale');
	$price_name = get_field('price-name');
	
	if($price_sale){
		$price = $price_sale;
	}else{
		$price = $price_def;
	}
	
	if($price_name){
		$price_name = $price_name;
	}else{
		$price_name = '&#8381;';
	}
	
	if($price_start){
		$price_start = 'от';
	}

	// Оптовые цены
	$price_opt = get_field('price-wholesale');
	$price_opt_1 = $price_opt['price1'];
	$price_opt_2 = $price_opt['price2'];
	$price_opt_3 = $price_opt['price3'];
	$price_opt_4 = $price_opt['price4'];
		
	// Условия оплаты
	$catalog_pay = get_field('catalog-pay','option');
	$catalog_pay_page = $catalog_pay['page']; // страница оплаты
	$catalog_pay_variants = $catalog_pay['pay']; // варианты оплаты
	
	if($catalog_pay_page){
		$catalog_pay_page_link = '<a href="'.get_permalink($catalog_pay_page).'">'.implode(', ', $catalog_pay_variants).'</a>';
	} else {
		$catalog_pay_page_link = '<span>'.implode(', ', $catalog_pay_variants).'</span>';
	}
	
	// Условия доставки
	$catalog_delivery = get_field('catalog-delivery','option');
	$catalog_delivery_page = $catalog_delivery['page']; // страница доставки
	$catalog_delivery_variants = $catalog_delivery['delivery']; // варианты доставки
	$catalog_delivery_free = $catalog_delivery['free']; // бесплатная доставка
	
	if($catalog_delivery_page){
		$catalog_delivery_page_link = '<a href="'.get_permalink($catalog_delivery_page).'">'.implode(', ', $catalog_delivery_variants).'</a>';
	} else {
		$catalog_delivery_page_link = '<span>'.implode(', ', $catalog_delivery_variants).'</span>';
	}
	
	
	$desc = get_field('desc');
	$specifications = get_field('specifications');
	$application = get_field('application');
	
	$docs = get_field('docs');
	
	$manager = get_field('form-manager','option');
	$manager_avatar = $manager['avatar-mini'];
	$manager_name = $manager['name'];
	$manager_position = $manager['position'];
	
	
	$taxonomys= get_the_terms( $post->ID, 'catalog_category' );
	$term_ID = $taxonomys[0]->term_id; // ID таксономии текущего поста
	$term_cat_slug = $taxonomys[0]->slug; // слуг таксономии текущего поста
	$term_parent_ID = $taxonomys[0]->parent; // ID родительской таксономии текущего поста
?>