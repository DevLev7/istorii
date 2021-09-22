<?php
	get_header();
	
	// Переменные 
	include_once(locate_template('catalog-parts/product-fields.php'));
	
	// Первый экран
	include_once(locate_template('catalog-parts/product-hero.php'));
	
	// Описание, характеристики, область применения, документы, менеджер
	include_once(locate_template('catalog-parts/product-content.php'));
	
	// Похожие товары
	include_once(locate_template('catalog-parts/product-semilar.php'));
	
	get_footer();
?>