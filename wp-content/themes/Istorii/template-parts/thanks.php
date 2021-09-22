<?php get_header(); ?>
<?php 
if ( !is_page_template(get_option( 'page_on_front' )) ) {
$hero_bg = get_field('group', get_option( 'page_on_front' ))['hero-bg']['url'];
$hero_bg_micro = get_field('group', get_option( 'page_on_front' ))['hero-bg']['sizes']['micro-item'];
?>
	<section id="hero" 
	class="<?php echo get_field('group', get_option( 'page_on_front' ))['hero-image'] ? "hero-image" : ""; ?>" 
	<?php echo $hero_bg ? 'style="background-image: url('.$hero_bg.'), url('.$hero_bg_micro.')"' : '' ; ?>
	>
<?php }else{ ?>
	<section id="hero" 	class="hero-image">	
<?php } ?>	
<div data-src="#popup-order" data-fancybox class="modul-1">
                <div class="text">Первые 3 дня проживания – <strong>бесплатно</strong></div>
                <div  class="btn-arrow">
                    <span class="modul_text">Задать вопрос</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.366" height="18.194" viewBox="0 0 17.366 18.194">
                    <g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(-6.5 -6.086)">
                        <path id="Контур_5715" data-name="Контур 5715" d="M22.866,18H7.5" transform="translate(0 -2.817)" fill="none" stroke="#313936" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        <path id="Контур_5716" data-name="Контур 5716" d="M15.183,22.866,7.5,15.183,15.183,7.5" fill="none" stroke="#313936" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                    </svg>
                </div>
            </div>
			<div class="row">
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-10">
					<div class="container-fluid">
					<div class="main">
						<div class="wrap">
							<div class="header list">
								<h2><span class="text_color">Спасибо</span>  за заявку!</h2>
							</div>
							<div class="intro list">
							В ближайшее время с вами свяжется наш менеджер и уточнит детали. 
							</div>
							<div class="button">
								 <a href="<?php echo home_url().'/';?>" class="btn"><span>Перейти на главную</span></a>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7 col-md-7  right_block">
				
				</div>
			</div>
	</section>
<?php get_footer(); ?>