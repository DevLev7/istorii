<div id="not_modules">
<? 

//	Формирует массив $building_rows названий используемых секций
$building_rows = array();
foreach( get_field('building') as $building_row ):
	$building_rows[] = $building_row['acf_fc_layout'];
endforeach;

//	Отзывы
if (!in_array("reviews", $building_rows) && (get_field('reviews-setting','option')['every']==true) && in_array("reviews", get_field('sections','option')) && !in_array(get_the_ID(),get_field('reviews-setting','option')['disable'])){ 
	get_template_part('blocks/block','reviews');
}

//	Директор
if (!in_array("boss", $building_rows) && get_field('boss-image','option') && get_field('boss-desc','option')['text'] && !in_array(get_the_ID(),get_field('boss-setting','option')['exclude'])){ 
	get_template_part('blocks/block','boss');
}

//	Сотрудники
if (!in_array("team", $building_rows) && (get_field('team-setting','option')['every']==true) && in_array("team", get_field('sections','option')) && !in_array(get_the_ID(),get_field('team-setting','option')['disable'])){ 
	get_template_part('blocks/block','team');
}

//	Диалоги
if (!in_array("dialogs", $building_rows) && (get_field('dialogs-setting','option')['every']==true) && in_array("dialogs", get_field('sections','option')) && !in_array(get_the_ID(),get_field('dialogs-setting','option')['disable'])){ 
	get_template_part('blocks/block','dialogs');
}

//	Документы
if (in_array("docs", get_field('sections','option')) && !in_array(get_the_ID(),get_field('docs-setting','option')['exclude'])){ 
	get_template_part('blocks/block','docs');
}

//	Клиенты
if (!in_array("clients", $building_rows) && in_array("clients", get_field('sections','option')) && get_field('sections-setting','option')['clients'] && !get_field('sections-setting','option')['clients-top']){ 
	get_template_part('blocks/block','clients');
}

//	FAQ
if (!in_array("faq-list", $building_rows) && in_array("faq", get_field('sections','option')) && get_field('sections-setting','option')['faq']){ 
	get_template_part('blocks/block','faq');
}

//	Партнёры
if (!in_array("partners", $building_rows) && in_array("partners", get_field('sections','option')) && get_field('sections-setting','option')['partners'] && !get_field('sections-setting','option')['partners-top']){ 
	get_template_part('blocks/block','partners');
}

//	Филиалы
if(get_field('offices', 'option') && get_field('offices-header', 'option')){ 
	get_template_part('blocks/block','offices');
}
?>
	</div>