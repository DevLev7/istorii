<?php 
/*
	Первый экран
	====================
*/

$hero_bg_style = "";
$hero_image_class = "";
$hero_white_text_class = "";
$hero_group = get_field($field_preffix_hero.'group',$field_postfix);
	
// Фоновая картинка
$hero_bg = $hero_group['hero-bg']['url'];
if($hero_bg){
	$hero_bg_style = 'style="background-image: url('.$hero_bg.')"';
}

// Фоновая картинка для мобильников
$hero_bg_sm = $hero_group['hero-bg-sm'];

// Персонаж
$hero_image = $hero_group['hero-image']['url'];
if($hero_image){
	$hero_image_class = "hero-image";
}

// Белый текст
$hero_white_text = $hero_group['hero-white_text'];
if($hero_white_text){
	$hero_white_text_class = "hero-white";
}

// Заголовок и описание
$hero_header = get_field($field_preffix_hero.'hero-header',$field_postfix);

// Преимущества
$hero_benefits = get_field($field_preffix_hero.'benefits',$field_postfix);
$hero_benefits_count = count($hero_benefits);

// Кнопка
$hero_btn = $hero_group['hero-btn'];
$hero_btn_desc = $hero_group['hero-btn-desc'];
$hero_id_marquiz = $hero_group['id_marquiz'];

// Определение мобильного устройства
get_template_part('functions/Mobile_Detect');
$detect = new Mobile_Detect;

// Если есть текст в поле "hero-header", то будет выводиться большое окно с текстом, картинкой и кнопкой, в противном случае - заглушка с хлебными крошками и названием
if($hero_header) {

// Если это декстоп
if( !$detect->isMobile() && !$detect->isTablet() ){ 
?>

	<section id="hero" class="<?php echo $hero_image_class; ?> <?php echo $hero_white_text_class; ?>" <?php echo $hero_bg_style; ?>>
	
<?php 
// Если это мобильник или планшет и ЕСТЬ специальная картинка под них 
}elseif($hero_bg_sm){ ?>
	
	<section id="hero">
		
<?php 
// Если это мобильник или планшет и НЕТ специальной картинка под них 
} else { ?>
	
	<section id="hero" class="<?php echo $hero_image_class; ?> <?php echo $hero_white_text_class; ?>" <?php echo $hero_bg_style; ?>>
	
<?php 
} 
?>

		<?php // Картинка персонажа ?>
		<?php if($hero_image){ ?>
		<div class="hero-image-sm" style="background-image: url(<?php echo $hero_bg; ?>)">
			<div class="image">
				<img src="<?php echo $hero_image; ?>">
			</div>
			
			<?php if($hero_group['hero-name']){ ?>
			<div class="name-block">
				<div class="name"><?php echo get_field($field_preffix_hero.'group')['hero-name']; ?></div>
				<div class="position"><?php echo get_field($field_preffix_hero.'group')['hero-position']; ?></div>
			</div>
			<?php } ?>
			
		</div>
		<?php } ?>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 col-lg-8 col-ml-7 col-12">
					<div class="main">
						<div class="wrap">
						
							<? // если есть меню, включаем крошки. Актуально для лендов ?>
							<? if ( has_nav_menu( 'main_menu' ) ){?>
							<div id="breadcrumbs">
								<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
							</div>
							<? } ?>
							
							<? // Картинка для мобильников ?>
							<?php if( $detect->isMobile() || $detect->isTablet() ){ ?>
							<div class="image">
								<img src="<?php echo $hero_bg_sm; ?>">
							</div>
							<?php } ?>
						
							<? // Заголовок и описание ?>
							<div class="header list">
								<?php echo $hero_header; ?>
							</div>
							
							<? // Преимущества ?>
							<?php if($hero_benefits){ ?>
							<ul class="benefits benefits-<?php echo $hero_benefits_count; ?> ">
							<?php 					
							while( have_rows($hero_benefits) ): the_row(); 
								$icon = get_sub_field('icon');
								$text = get_preg_field('text', 1);
								?>	
								<li>
									<?php if($icon){ ?>
									<span class="icon"><img src="<?php echo $icon; ?>" alt="<?php echo $text; ?>"></span>
									<?php } ?>
									<span class="text"><?php echo $text; ?></span>
								</li>
							<?php 
							endwhile;
							wp_reset_query();
							?>
							</ul>
							<?php } ?>
							
							<? // Кнопка ?>
							<?php if($hero_id_marquiz){ ?>
							<div class="button">
								<a data-marquiz="<?php echo $hero_id_marquiz; ?>" href="#popup:marquiz_<?php echo $hero_id_marquiz; ?>" class="btn" anim="ripple">
									<span><?php echo $hero_btn; ?></span>
								</a>
								 <div class="hero-btn-desc"><?php echo $hero_btn_desc; ?></div>
							</div>
							<?php }elseif($hero_btn){ ?>
							<div class="button">
								 <button data-src="#popup-order" data-fancybox class="btn" anim="ripple"><span><?php echo $hero_btn; ?></span></button>
								 <div class="hero-btn-desc"><?php echo $hero_btn_desc; ?></div>
							</div>
							<?php } ?>
							
						</div>
					</div>
				</div>
				<?php if($hero_group['hero-image']){ ?>
				<div class="col-xl-5 col-lg-4 col-ml-5 col-md-5 hidden-sm hidden-xs">
					<div class="hero-image">
						<div class="image">
							<img src="<?php echo $hero_group['hero-image']; ?>">
						</div>
						<?php if($hero_group['hero-name']){ ?>
						<div class="name-block">
							<div class="name"><?php echo $hero_group['hero-name']; ?></div>
							<div class="position"><?php echo $hero_group['hero-position']; ?></div>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>

<?php }else{ ?>

	<section id="hero" class="no-content <?php echo $hero_group['hero-image'] ? "hero-image" : ""; ?> <?php echo $hero_group['hero-white_text'] ? "hero-white" : ""; ?>">		
		<div class="container-fluid">
			<div class="row">
				<div class="col-m">
					<div class="main">
						<div class="wrap ct">
							<div id="breadcrumbs">
								<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
							</div>
							<div class="header list">
								<h1><?php echo $post_name; ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php } ?>