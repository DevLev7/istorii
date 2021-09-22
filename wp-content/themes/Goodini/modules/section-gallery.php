<?php
// Массив изображений
$gallery_arr = get_sub_field('images');

// Общее количество изображений
$gallery_count = count($gallery_arr);
if($gallery_count == 6) {
	$gallery_class = "col-md-4 col-6";
}elseif($gallery_count % 5 == 0 || $gallery_count % 9 == 0) {
	$gallery_class = "col-ml-25 col-md-4 col-6";
}else{
	$gallery_class = "col-ml-3 col-md-4 col-6";
}

//Стиль блока
$gallery_style = get_sub_field('style')['type'];

//Отключить зуммирование
$zoom_off = get_sub_field('style')['zoom'];
				
//	Адаптивное изображение
$imageSize = 'item';
include (locate_template('template-parts/lazy-image-responsive-IE.php'));
?>

	<section id="<?php echo $building_row; ?>" class="gallery gallery-<?php echo $gallery_style; ?>">
		<div class="container-fluid">
			<div class="header list">
				<?php the_sub_field('header'); ?>
			</div>
			
			<?php if($gallery_style=='slider'){ ?>
			
			<div class="row">
				<div class="col-s">
					<div class="slider slider-center" id="slider-center-<?php echo $building_row; ?>">
					<?php
					foreach( $gallery_arr as $image ):
					?>
						<div class="image">
							<? if(!$zoom_off) { ?>
							<a href="<?php echo $image['url']; ?>" class="" data-fancybox='images-<?php echo $building_row; ?>'>
							<? }else{ ?>
							<div class="">
							<? } ?>
								<img src="<?php echo $image['sizes']['item']; ?>" >
							<? echo $zoom_off ? '</div>' : '</a>' ; ?>
						</div>
					<?php 
					endforeach;
					?>
					</div>
					<div id="gallery-<?php echo $building_row; ?>" class="gallery-arrow-center"></div>
				</div>
			</div>
			
			<script>
			$(document).ready(function(){
				$(<?php echo '"#slider-center-'.$building_row.'"'; ?>).slick({lazyLoad:"ondemand",slidesToShow:3,slidesToScroll:1,dots:!0,centerMode:!0,appendArrows:$(<?php echo '"#gallery-'.$building_row.'"'; ?>),prevArrow:'<button id="prev" type="button" class="slick-arrow"><svg viewBox="0 0 24 24"><path  d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" /></svg></button>',nextArrow:'<button id="next" type="button" class="slick-arrow"><svg viewBox="0 0 24 24"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" /></svg></button>',responsive:[{breakpoint:769,settings:{slidesToShow:1}}]});
			});
			</script>
			
			<?php }elseif($gallery_style=='docs'){ ?>
			
			<div class="row">
				<div class="col-m">
					<div class="slider slider-docs">
					<?php
					foreach( $gallery_arr as $image ):
					?>
						<div class="image">
							<? if(!$zoom_off) { ?>
							<a href="<?php echo $image['url']; ?>" class="frame" data-fancybox='docs-<?php echo $building_row; ?>'>
							<? }else{ ?>
							<div class="frame">
							<? } ?>
								<img src="<?php echo $image['sizes']['team']; ?>" >
							<? echo $zoom_off ? '</div>' : '</a>' ; ?>
						</div>
					<?php 
					endforeach;
					?>
					</div>
					<div class="gallery-arrow-docs"></div>
				</div>
			</div>
			
			<?php }else{ ?>
			
			<div class="gallery-grid">
				<div class="row">
				<?php
				foreach( $gallery_arr as $image ):
					$imageHeight = $image['sizes']['item-height'];
					$imageWidth = $image['sizes']['item-width'];
					$imagePadding = $imageHeight / $imageWidth * 100;

					if($imagePadding < 80){ // костыль для IE (не поддерживает min() / max())
						$imageStylePadding = $imagePadding.'%';
					}else{
						$imageStylePadding = $imageHeight.'px';
					}

					$imageStyle = 'style="
						padding-bottom: '.$imageStylePadding.'; 
						padding-bottom: min('.$imagePadding.'%,'.$imageHeight.'px);
						max-width: '.$imageWidth.'px;
						max-height: '.$imageHeight.'px;
					"';
				?>
					<div class="<?php echo $gallery_class; ?>">
						<div class="image">
							<? if(!$zoom_off) { ?>
							<a href="<?php echo $image['url']; ?>" class="lazy-image" <?php echo $imageStyle; ?> data-fancybox='images-<?php echo $building_row; ?>'>
							<? }?>
								<div class=" progressive replace" data-href="<?php echo $image['sizes']['item']; ?>">
									<img src="<? echo $image["sizes"]['micro-item'];?>" class="preview" alt="<?php echo get_the_title(); ?>-<?php echo get_row_index(); ?>" />
								</div>
							<? if(!$zoom_off) { ?>
							</a>
							<? }?>
						</div>
					</div>
				<?php 
				endforeach;
				?>
				</div>
			</div>
			
			<?php } ?>
			
			<div class="row">
				<div class="col-s">
					<div class="footer list">
						<?php the_sub_field('footer'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>