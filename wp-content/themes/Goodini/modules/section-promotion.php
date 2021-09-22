<?php  
$promotionsIDs = get_sub_field('promo'); 
$promotions_setting = get_field('promotions-setting','option'); 
$promotions_classes = implode(' ', $promotions_setting['style']);
if(!in_array('promo-full',$promotions_setting['style'])){
	$promotions_classes_nofull = 'promo-nofull';
}

?>

	<section id="<?php echo $building_row; ?>" class="promotions-section <?php echo $promotions_classes.' '.$promotions_classes_nofull;?>">
		<div class="slider" id="slider-promotions-<?php echo $building_row; ?>">
			<?php		
			if($promotionsIDs){				
				$args = array(
					'post_type' => array('promotions'),
					'showposts' => -1,
					'post__in' => $promotionsIDs,
					'orderby'=>'post__in'
				);
			}else{				
				$args = array(
					'post_type' => array('promotions'),
					'showposts' => -1,
				);
			}	
			
			$the_query = new WP_Query( $args );
			$count_actions = str_pad( $the_query->found_posts, 2, '0', STR_PAD_LEFT);
			while ( $the_query->have_posts() ) : $the_query->the_post();
				$title = get_the_title();
				
				// Баннеры
				$images = get_field('image'); 
				$images_LG = $images['lg']; 
				$images_MD = $images['md']; 
				$images_XS = $images['xs']; 

				// Детали
				$details = get_field('details'); 
				$deadline = $details['deadline']; 
				$price_start = $details['price-start']; 
				$price_end = $details['price-end']; 
				$price_text = $details['price-text']; 

				// Краткое описание
				$intro = get_field('intro'); 

				// Полное описание
				$content = get_field('content'); 

				// Примечания
				$small = get_field('small'); 

				// Товары по акции
				$productIDs = get_field('products'); 

				// Поиск текста и извлечение из него тега h2 для записи в alt изображения
				preg_match("~<h2>(.*)</h2>~",$intro,$alt_preg);
				$alt = strip_tags($alt_preg[1]);
			?>
			<div class="slide">
				<div class="item <?php echo $intro ? "intro-true" : ""; ?>">
					<picture class="image">
						<source srcset="<?php echo $images_XS['url'];?>" media="(max-width: 767px)">
						<source srcset="<?php echo $images_MD['url'];?>" media="(max-width: 1440px)">
						<img src="<?php echo $images_LG['url'];?>" alt="<?php echo $alt;?>">
					</picture>
					<?php if($intro){ ?>
						<div class="wrap list">
							<div class="intro">
								<?php echo $intro; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php 
			endwhile;
			wp_reset_query();
			?>
		</div>	
		<div class="slider-promotion-arrow" id="promotion-arrow-<?php echo $building_row; ?>"></div>
	</section>
			
	<script>
	$(document).ready(function(){
		$(<?php echo '"#slider-promotions-'.$building_row.'"'; ?>).slick({lazyLoad:"ondemand",slidesToShow:1,slidesToScroll:1,adaptiveHeight:!0,dots:!0,appendArrows:$(<?php echo '"#promotion-arrow-'.$building_row.'"'; ?>),prevArrow:'<button id="prev" type="button" class="slick-arrow"><svg viewBox="0 0 24 24"><path  d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" /></svg></button>',nextArrow:'<button id="next" type="button" class="slick-arrow"><svg viewBox="0 0 24 24"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" /></svg></button>',responsive:[{breakpoint:769,settings:{slidesToShow:1}}]});
	});
	</script>