<?php 
	get_header();
	
// Определение типа записи
	include_once(locate_template('template-parts/type-page.php')); 

// первый экран
	include_once(locate_template('template-parts/hero.php'));
	
// Клиенты, Партнёры, Твиты
	get_template_part('template-parts/hero-bottom'); 
	
// Модули
	include_once(locate_template('template-parts/modules.php'));
	
// Отзывы, Директор, Сотрудники, Диалоги, Документы, Клиенты, Партнёры, FAQ, Филиалы
	get_template_part('template-parts/not_modules');
	
//	Менеджер
	include_once(locate_template('blocks/block-manager.php'));

//	Смежные статьи
if(in_array("similar", get_field('sections','option')) && !in_array(get_the_ID(),get_field('similar-setting','option')['disable'])){ 
	get_template_part('blocks/block','similar');
}
	
	get_footer(); 
?>