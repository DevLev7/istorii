	<footer id="footer">
		<div class="container-fluid">
			<div class="row">			
				<div class="col-lg-3 col-ml-3 col-md-4 col-sm-6 col-12 col logo_foot">
					<div class="footer-logo <?php echo !get_field('logos','option')['footer']? "no-logo" : "" ; ?>">
						<a href="<?php echo HOME_URI; ?>" class="img_link">
							<img src="<?php echo get_field('logos','option')['footer']? get_field('logos','option')['footer'] : get_field('logos','option')['header'] ; ?>" alt="Логотип <?php echo get_field('company', 'option')['brand']; ?>" />
						</a>
					</div>
					<div class="descriptor">
						<?php the_field('descriptor', 'option'); ?>
					</div>
					
				</div>
				<div class="col-lg-7 col-ml-6 col-md-7 col-sm-7 col-12 col main">
					<? if ( has_nav_menu( 'footer_menu-1' ) ){?>
					<div class="footer-head">
						<?php 
						$id = get_nav_menu_locations()['footer_menu-1'];
						$menu = wp_get_nav_menu_object( $id );
						echo get_field('menu-name-1', $menu);
						?>
					</div>
					<div class="footer-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer_menu-1',
							'fallback_cb' => ''
						) ); ?>
					</div>
					<? } ?>
				</div>
				<!-- <div class="col-lg-4 col-ml-3 col-sm-8 col-12 col">
					<? if ( has_nav_menu( 'footer_menu-2' ) ){?>
					<div class="footer-head">
						<?php 
						$id = get_nav_menu_locations()['footer_menu-2'];
						$menu = wp_get_nav_menu_object( $id );
						echo get_field('menu-name-2', $menu);
						?>
					</div>
					<div class="footer-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer_menu-2',
							'fallback_cb' => ''
						) ); ?>
					</div>
					<? } ?>
				</div> -->
				<div class="col-lg-2 col-ml-3 col-md-5 col-sm-6 col-12 col" itemscope itemtype="http://schema.org/Organization">
					
					<ul class="footer-contacts">
						<li itemprop="name"><?php echo get_field('company', 'option')['brand']; ?></li>
							<li class="adress_foot" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<svg  class="loc" xmlns="http://www.w3.org/2000/svg" width="16.935" height="23" viewBox="0 0 16.935 23">
						<g id="placeholder-filled-point_4_" data-name="placeholder-filled-point (4)" transform="translate(-12.883)">
							<path id="Контур_5713" data-name="Контур 5713" d="M21.35,0a8.477,8.477,0,0,0-8.467,8.468,8.26,8.26,0,0,0,.741,3.456,53.389,53.389,0,0,0,7.37,10.912.472.472,0,0,0,.714,0,53.416,53.416,0,0,0,7.37-10.912,8.256,8.256,0,0,0,.741-3.456A8.478,8.478,0,0,0,21.35,0Zm0,12.866a4.4,4.4,0,1,1,4.4-4.4A4.4,4.4,0,0,1,21.35,12.866Z" transform="translate(0)" fill="#058641"></path>
						</g>
						</svg>
							<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { ?>
							<span itemprop="addressLocality">г. <?php echo do_shortcode( '[city_i]'); ?>, </span>
							<?php  } ?>
							<span itemprop="streetAddress"><?php echo do_shortcode('[adress]'); ?></span></li>
						<li itemprop="telephone"><div class="phone_foot"><svg class="tel" viewBox="0 0 24 24">
								<path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
							</svg>  <?php echo do_shortcode('[phone]') ?> </div> <span data-src="#popup-call" class="link" data-fancybox="">Заказать звонок</span>	</li>
					
						<li><?php echo do_shortcode('[email]'); ?></li>
					</ul>
					<?php get_template_part('template-parts/social-icons');?>
					<?php //get_template_part('template-parts/messenger-icons');?>
				</div>
			</div>
		</div>
	</footer>
	
	<footer id="footer-2">
		<div class="container-fluid">
			<div class="b2b-copy-inline">
			</div>
			<?php echo get_field('company', 'option')['name'] ? get_field('company', 'option')['name'].'<span class="sepa">/</span>' : "" ; ?> 
			<?php echo get_field('company', 'option')['ogrn'] ? 'ОГРН '.get_field('company', 'option')['ogrn'].'<span class="sepa">/</span>' : "" ; ?> 
			<?php echo get_field('company', 'option')['inn'] ? 'ИНН '.get_field('company', 'option')['inn'].'<span class="sepa">/</span>' : "" ; ?> 
			Сайт не является публичной офертой. <nobr><?php echo date('Y'); ?>г.</nobr><span class="sepa">/</span>
			<a href="<?php echo get_privacy_policy_url(); ?>">Политика конфиденциальности</a><span class="sepa">/</span>
			<div id="copyright" class="copy-black">
						<? 
						/*доступные классы: 
							copy-black - черные буквы и белая подложка 
							copy-white - белые буквы и черная подложка 
							copy-inline - display: inline-block
							copy-link - без подложки
							copy-right - позиционирование справа
						*/?>
						<?php get_template_part('template-parts/copyright');?>
					</div>
		</div>
	</footer>