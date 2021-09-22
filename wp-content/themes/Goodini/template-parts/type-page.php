<?php 

// Если страница является таксономией
if( is_tax() ){
	// Тип таксономии
	$object = get_queried_object();

	$field_preffix = '';
	$field_preffix_hero = $field_preffix;
	$field_preffix_modules = $field_preffix;	
	$field_postfix = $object->taxonomy.'_'.$object->term_id;
	$post_name = $object->name;
	
	$term_cat_ID = $object->term_id;
	$term_cat_slug = $object->slug;
	
// Если это страница каталога
} elseif( is_post_type_archive() ){
	// Тип произвольной записи
	$object = get_queried_object();
	$object_name = get_queried_object() -> name;
	$object_label = get_queried_object() -> label;
	
	$field_preffix = $object_name.'_';
	$field_preffix_hero = 'hero-'.$field_preffix;
	$field_preffix_modules = 'modules-'.$field_preffix;	
	$field_postfix = 'option';
	$post_name = $object_label;

// Если это просто страница
} else { 
	$field_preffix = '';
	$field_preffix_hero = $field_preffix;
	$field_preffix_modules = $field_preffix;		
	$field_postfix = get_the_ID();
	$post_name = get_the_title();
}
?>