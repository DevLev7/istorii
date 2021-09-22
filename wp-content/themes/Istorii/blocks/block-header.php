	<header id="header" class="">
		<div class="container-fluid">
				<div class="container">
				<div class="content">
					<div class="row">
						<div class="col place">
						<svg xmlns="http://www.w3.org/2000/svg" width="16.935" height="23" viewBox="0 0 16.935 23">
						<g id="placeholder-filled-point_4_" data-name="placeholder-filled-point (4)" transform="translate(-12.883)">
							<path id="Контур_5713" data-name="Контур 5713" d="M21.35,0a8.477,8.477,0,0,0-8.467,8.468,8.26,8.26,0,0,0,.741,3.456,53.389,53.389,0,0,0,7.37,10.912.472.472,0,0,0,.714,0,53.416,53.416,0,0,0,7.37-10.912,8.256,8.256,0,0,0,.741-3.456A8.478,8.478,0,0,0,21.35,0Zm0,12.866a4.4,4.4,0,1,1,4.4-4.4A4.4,4.4,0,0,1,21.35,12.866Z" transform="translate(0)" fill="#058641"/>
						</g>
						</svg>
						<div class="text">
							<?php the_field('adress', 'option'); ?>
						</div>
						<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { 
							get_template_part('template-parts/multycity');
						} ?>
						</div>
						<div class="logotype col">
							<div class="logo">
								<a href="<?php echo HOME_URI; ?>" class="img_link">
									<img src="<?php echo get_field('logos','option')['header']; ?>" alt="Логотип <?php echo get_field('company', 'option')['brand']; ?>" />
								</a>
								</div>
							<div class=" descriptor">
									<div class="text">
										<?php the_field('descriptor', 'option'); ?>
									</div>
							</div>
						</div>
						<div id="search_box" class="col">
							<form role="search" class="hideLabels search_form_popup" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
								<div class="form-group animate-top">
									<input type="text" class="form-control" required="required" minlength="1"value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск">
									<button class="search_btn" type="submit" id="searchsubmit">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20.716" viewBox="0 0 20 20.716">
								<path id="search" d="M20.68,18.869l-4.93-5.128a8.361,8.361,0,1,0-6.4,2.987,8.274,8.274,0,0,0,4.792-1.514l4.968,5.167a1.091,1.091,0,1,0,1.572-1.512ZM9.348,2.182A6.182,6.182,0,1,1,3.166,8.364,6.189,6.189,0,0,1,9.348,2.182Z" transform="translate(-0.984)" fill="#108f1c"/>
								</svg>
								</button>
							</div>
							</form>
						</div>
						<div class="col contacts">
							<svg viewBox="0 0 24 24">
								<path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
							</svg>
							<?php echo do_shortcode('[phone]') ?>
							
						</div>
						<div class="call">
						<span data-src="#popup-call" class="link" data-fancybox="" title="Оставьте свой номер и мы перезвоним вам">
									Заказать звонок
								</span>	
						</div>
					</div>
				</div>
				</div>
			</div>
			
		</div>
		
	</header>
	
	<? if ( has_nav_menu( 'main_menu' ) ){?>
	<nav id="menu">
		<div class="container-fluid">
			<div class="menu_block">
				<?php wp_nav_menu( array(
					'theme_location' => 'main_menu',
					'fallback_cb' => ''
				) ); ?>
			</div>
		</div>
	</nav>
	<? } ?>