<div id="modules">

<?php
	
	
	// Конструктор страниц
	if( have_rows($field_preffix_modules.'building',$field_postfix) ): 
	$rows = 1;
		// Циклы конструктора
		while ( have_rows($field_preffix_modules.'building',$field_postfix) ) : the_row(); 
		$building_row = 'sec-'.$rows++;
		set_query_var( 'building_row', $building_row );

			// Баннеры-карточки
			if( get_row_layout() == 'banner-cart' ) {
				get_template_part('modules/section', 'banner-cart');
			}

			// Содержимое
			if( get_row_layout() == 'columns' ) {
				get_template_part('modules/section', 'columns');
			}

			// Буллиты
			if( get_row_layout() == 'bullets' ) {
				get_template_part('modules/section', 'bullets');
			}

			// Списки
			if( get_row_layout() == 'lists' ) {
				get_template_part('modules/section', 'lists');
			}
			
			// Карточки
			if( get_row_layout() == 'cards' ) {
				get_template_part('modules/section', 'cards');
			}

			// Спойлеры
			if( get_row_layout() == 'faq' ) {
				get_template_part('modules/section', 'spoiler');
			}

			// Файлы
			if( get_row_layout() == 'files' ) {
				get_template_part('modules/section', 'files');
			}
			
			// Директор
			if( get_row_layout() == 'boss' ) {
				get_template_part('modules/section', 'boss');
			}
			
			// Фото
			if( get_row_layout() == 'gallery' ) {
				get_template_part('modules/section', 'gallery');
			}

			// Видео
			if( get_row_layout() == 'videos' ) {
				get_template_part('modules/section', 'videos');
			}
			
			// Каталог
			if( get_row_layout() == 'catalog' ) {
				get_template_part('modules/section', 'catalog');
			}
			
			// Отзывы
			if( get_row_layout() == 'reviews' ) {
				get_template_part('modules/section', 'reviews');
			}
			
			// Партнёры
			if( get_row_layout() == 'partners' ) {
				get_template_part('modules/section', 'partners');
			}
			
			// Клиенты
			if( get_row_layout() == 'clients' ) {
				get_template_part('modules/section', 'clients');
			}
			
			// Кейсы
			if( get_row_layout() == 'cases' ) {
				get_template_part('modules/section', 'cases');
			}

			// Сотрудники
			if( get_row_layout() == 'team' ) {
				get_template_part('modules/section', 'team');
			}

			// FAQ
			if( get_row_layout() == 'faq-list' ) {
				get_template_part('modules/section', 'faq');
			}

			// Контакты
			if( get_row_layout() == 'contacts' ) {
				get_template_part('modules/section', 'contacts');
			}

			// Диалоги
			if( get_row_layout() == 'dialogs' ) {
				get_template_part('modules/section', 'dialogs');
			}

			// Произвольные блоки
			if( get_row_layout() == 'custom' ) {
				get_template_part('modules/section', 'custom');
			}

			// Произвольные секции
			if( get_row_layout() == 'custom-section' ) {
				get_template_part('modules/section', 'custom-section');
			}

			// Акции
			/*if( get_row_layout() == 'actions' ) {
				get_template_part('modules/section', 'actions');
			}*/

			// Акции
			if( get_row_layout() == 'promotion' ) {
				get_template_part('modules/section', 'promotion');
			}

		endwhile;
	endif;
?>

	</div>