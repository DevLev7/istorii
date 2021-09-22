<?php 
$type = get_sub_field('style')['type'];

//	Тип кнопки 
$btn_type = get_sub_field('style')['btn-type'];

//	Цвет фона
$bg_color = get_sub_field('style')['bg_color'];
$bg_color_color = '';
if($bg_color!='style-bg-none'){
	$bg_color_color = "bg-color";
} 

//	Цвет фона буллитов
$itembg_color = get_sub_field('style')['item-bg-color'];

// Дополнительный класс
$add_class = get_sub_field('style')['class'];

// Проверка и вывод классов оформления секции
$design_arr = get_sub_field('style')['design'];				// массив блока Внешний вид

if( $design_arr ){
	$design="";
	foreach( $design_arr as $design_key ){ $design .=' design-'.$design_key; }
}
$design_circle = in_array ('circle', $design_arr);			// проверяет, влючено ли оформление круглой картинки
$design_text = in_array ('text', $design_arr);			// проверяет, влючен ли текст в картинке
if($design_circle && !$design_text){
	$design_circle_img = "-circle";
}
$design_full = in_array ('full', $design_arr);			// проверяет, отключена ли обрезка фото
if($design_full){
	$design_size_img = "team";
	$design_size_img_th = "micro";
}else{
	$design_size_img = "item";
	$design_size_img_th = "micro-item";
}

?>
	<section id="<?php echo $building_row; ?>" class="bullets bullets-<?php echo $type; ?> <?php echo $bg_color_color.' '.$bg_color; ?> <?php echo $design; ?> <?php echo $itembg_color; ?> <?php echo $add_class; ?> ">
		<div class="container-fluid">
		
			<?php if(get_sub_field('header')){ ?>
			<div class="header list">
				<?php the_sub_field('header'); ?>
			</div>
			<?php } ?>
			
			<div class="row ">
			<?php 
			// Общее количество буллитов
			$count = count( get_sub_field( 'repeater' ) );
			$item_num = 0;
			
			while( have_rows('repeater') ): the_row(); 
				$item_num++;
				$image = get_sub_field('icon');
				$gallery_arr = get_sub_field('gallery');
				$num = get_sub_field('num');
				$head = get_preg_field('head', 1);
				$desc = get_sub_field('desk');
				
				// Ссылки и кнопки
				$links = get_sub_field('link-block');
				$link_catalog = $links['catalog'];
				$link_product = $links['product'];
				$link_page = $links['page'];
				$link_link = $links['link'];
				$link_btn = $links['btn'];
				$link_name = $links['name'];
				
				// Если массив ссылок пуст, выводим просто div
				if(empty(array_filter($links)) || empty(array_filter($btn_type)) || $btn_type == 'none'){
					$item_start = '<div class="item autoheight">';
					$item_end = '</div>';
				} else {
					
					// Кнопка
					if($link_btn){
						$item_start = '<div data-fancybox data-src="#'.$link_btn.'" class="item autoheight">';
						$item_end = '</div>';
					// Сссылка текстом
					}elseif($link_link){
						$item_start = '<a href="'.$link_link.'" class="item autoheight">';
						$item_end = '</a>';
					// Ссылка на страницу
					}elseif($link_page){
						$item_start = '<a href="'.get_permalink($link_page).'" class="item autoheight">';
						$item_end = '</a>';
					// Ссылка на категорию каталога
					}elseif($link_catalog){
						$item_start = '<a href="'.get_term_link($link_catalog).'" class="item autoheight">';
						$item_end = '</a>';
					// Ссылка на товар
					}elseif($link_product){
						$item_start = '<a href="'.get_permalink($link_product).'" class="item autoheight">';
						$item_end = '</a>';
					}
				}
				
				if($link_name){
						$link_name = $link_name;
					}else{
						// Название кнопки, если она есть
						if($link_btn){
							switch ($link_btn) {
							case 'call':
								$link_name = "Заказать звонок";
								break;
							case 'consultation':
								$link_name = "Получить консультацию";
								break;
							case 'order':
								$link_name = "Оставить заявку";
								break;
							case 'price':
								$link_name = "Уточнить стоимость";
								break;
							case 'question':
								$link_name = "Задать вопрос";
								break;
							case 'lead':
								$link_name = "Записаться";
								break;
							case 'action':
								$link_name = "Участвовать";
								break;
							}
						}else{
							$link_name = 'Подробнее';
						}
					}
					
				//	Проверим, крупные ли блоки
				if(in_array ('big', $design_arr)) {
					if($count==2) {
						$count_class = "col-sm-6 col-12 full-columns-2";
					}elseif ($count % 6 == 0){
						$count_class = "col-md-6 col-sm-12 col-12 full-columns-5";
					}elseif ($count % 5 == 0){
						$count_class = "col-lg-4 col-md-6 col-sm-12 col-12 full-columns-5";
					}elseif ($count % 4 == 0){
						$count_class = "col-ml-6 col-md-6 col-sm-12 col-12 full-columns-4";
					}else{
						$count_class = "col-ml-4 col-md-6 col-sm-12 col-12";
					}
				//	Проверим, мелкие ли блоки
				}elseif(in_array ('small', $design_arr)) {
					if($count==2) {
						$count_class = "col-md-4 col-6 full-columns-2";
					}elseif ($count % 6 == 0){
						$count_class = "col-ml-2 col-md-3 col-sm-4 col-6 ";
					}elseif ($count == 5 || $count == 9 || $count == 10 ){
						$count_class = "col-ml-25 col-md-3 col-sm-4 col-6 ";
					}else{
						$count_class = "col-ml-3 col-sm-4 col-6";
					}
				}else{
					if($count==2) {
						$count_class = "col-sm-6 col-6 full-columns-2";
					}elseif ($count % 5 == 0){
						$count_class = "col-ml-25 col-md-4 col-sm-6 col-6 full-columns-5";
					}elseif ($count % 4 == 0){
						$count_class = "col-ml-3 col-md-6 col-sm-6 col-6 full-columns-4";
					}elseif ($count == 1){
						$count_class = "col-md-6 col-12";
					}else{
						$count_class = "col-ml-4 col-md-4 col-sm-6 col-6";
					}
				}
				
				//	Адаптивное изображение
				$imageSize = $design_size_img;
				include (locate_template('template-parts/lazy-image-responsive-IE.php'));
				
				?>	
				<div class="<?php echo $count_class; ?> col bul">
				
					<?php //Оболочка item ?>
					<?php echo $item_start; ?>
					
						<?php // Картинка ?>
						<?php if(($type=='image') && ($image)){ ?>
						<div class="image">
							<div class="lazy-image" <?php echo $imageStyle; ?> >
								<div class=" progressive replace" data-href="<?php echo $image['sizes'][$design_size_img.$design_circle_img]; ?>">
									<img src="<? echo $image["sizes"][$design_size_img_th];?>" class="preview" alt="<?php echo strip_tags($head); ?>" />
								</div>
							</div>
						</div>
						<?php } ?>
					
						<?php // Слайдер ?>
						<?php if(($type=='slider')){ ?>
						<div data-src="<?php echo $gallery_arr[0]['url']; ?>" class="bul-gallery <?php echo $gallery_arr ? "bul-gallery-slider" : ""; ?>" data-fancybox='images-<?php echo $building_row.'-'.$item_num; ?>'>
						<?php
						$item_image = 0;
						foreach( $gallery_arr as $image ):
						$item_image++;
						if($item_image==1){
						?>
							<img src="<? echo $image["sizes"][$design_size_img];?>" alt="<?php echo strip_tags($head); ?>" />
						<?php 
						}else{
						?>
							<a href="<?php echo $image['url']; ?>" class="image" data-fancybox='images-<?php echo $building_row.'-'.$item_num; ?>'>
								<img src="<? echo $image["sizes"][$design_size_img];?>" alt="<?php echo strip_tags($head); ?>" />
							</a>
						<?php 
						}
						endforeach;
						?>
						</div>
						<?php } ?>
						
						<?php // Иконка ?>
						<?php if(($type=='icon') &&($image)){ ?>
						<div class="icon">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo strip_tags($head); ?>">
						</div>
						<?php } ?>
						
						<?php // Клиенты ?>
						<?php if(($type=='clients') &&($image)){ ?>
						<div class="icon">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo strip_tags($head); ?>">
						</div>
						<?php } ?>
						
						<?php // Цифры ?>
						<?php if(($type=='nums') && ($num)){ ?>
						<div class="num">
							<?php echo $num; ?>
						</div>
						<?php } ?>
						
						<?php // Этапы ?>
						<?php if($type=='steps'){ ?>
						<div class="steps">
							<?php echo sprintf("%02d",$item_num); ?>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430.41 24.98">
								<path class="cls-1" d="M.2 24l5.88-1.19"/>
								<path d="M17.89 20.49C84.52 7.76 148.76 1 215.2 1c67.16 0 135.16 7.15 203.22 20.61" stroke-dasharray="12.03 12.03" fill="none" stroke-miterlimit="10" stroke-width="2"/>
								<path class="cls-1" d="M424.32 22.79L430.2 24"/>
							</svg>
						</div>
						<?php } ?>
						
						<?php // Плюс ?>
						<?php if($type=='plus'){ ?>
						<div class="plus">
							<svg viewBox="0 0 24 24">
								<path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"></path>
							</svg>
						</div>
						<?php } ?>
						
						<div class="body">
							<?php if($head){ ?>
							<div class="head <?php echo $desc ? "bottom-margin" : ""; ?>">
								<?php echo $head; ?>
							</div>
							<?php } ?>
						
							<?php if($desc){ ?>
							<div class="desc list">
								<?php echo $desc; ?>
							</div>
							<?php } ?>
						</div>
						
						<?php if(($btn_type!= 'none') && (!empty(array_filter($links)))){ ?>
						<?php if($link_btn){ ?>
						<div class="button">
							<button class="btn" data-fancybox data-src="#popup-<?php echo $link_btn; ?>" anim="ripple">
								<span><?php echo $link_name; ?></span>
							</button>
						</div>
						<?php }elseif($btn_type!= 'hidden'){ ?>
						<div class="link-desc">
							<?php echo $link_name; ?>
						</div>
						<?php } ?>
						<?php } ?>
						
					<?php //Оболочка item закрыта ?>
					<?php echo $item_end; ?>
					
					<?php //Если выбраны "Шаги" ?>
					<?php if(($type=='steps')&&($item_num==$count)){ ?>
					<div id="check">
						<svg viewBox="0 0 24 24">
							<path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"></path>
						</svg>
					</div>
					<?php } ?>
					
				</div>
			<?php 
			endwhile;
			wp_reset_query();
			?>
			</div>
			
			<?php if(get_sub_field('footer')){ ?>
			<div class="row">
				<div class="col-s">
					<div class="footer list">
						<?php the_sub_field('footer'); ?>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</section>