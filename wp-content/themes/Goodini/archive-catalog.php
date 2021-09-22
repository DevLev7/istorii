<?php 
	get_header();
	
// Определение типа записи
	include(locate_template('template-parts/type-page.php'));
	
// первый экран
	include_once(locate_template('template-parts/hero.php'));
	
// Модули
	include_once(locate_template('template-parts/modules.php'));
	
//	Менеджер
	include_once(locate_template('blocks/block-manager.php'));


	get_footer(); 
?>