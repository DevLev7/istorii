<?
//	Формирует массив $building_rows названий используемых секций
$building_rows = array();
foreach( get_field('building') as $building_row ):
	$building_rows[] = $building_row['acf_fc_layout'];
endforeach;

//	Клиенты
if (!in_array("clients", $building_rows) && in_array("clients", get_field('sections','option')) && get_field('sections-setting','option')['clients'] && get_field('sections-setting','option')['clients-top']){ 
	get_template_part('blocks/block','clients');
}

//	Партнёры
if (!in_array("partners", $building_rows) && in_array("partners", get_field('sections','option')) && get_field('sections-setting','option')['partners'] && get_field('sections-setting','option')['partners-top']){ 
	get_template_part('blocks/block','partners');
}

//	Твиты
if (in_array("twit", get_field('sections','option'))){ 
	get_template_part('blocks/block','twit');
}
?>