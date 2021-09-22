	<div class="mobile menus">
		<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { ?>
		<div class="city">
			Ваш город:
			<span class="city_span" title="Изменить город">
				<?php echo do_shortcode( '[city_i]' ) ?>
			</span>
		</div>
		<?php } ?>
		
		
		
		<div class="flex">
			<div class="flexcolumn">
				<div class="contact">
					<div class="place">
					<svg xmlns="http://www.w3.org/2000/svg" width="16.935" height="23" viewBox="0 0 16.935 23">
					<g id="placeholder-filled-point_4_" data-name="placeholder-filled-point (4)" transform="translate(-12.883)">
						<path id="Контур_5713" data-name="Контур 5713" d="M21.35,0a8.477,8.477,0,0,0-8.467,8.468,8.26,8.26,0,0,0,.741,3.456,53.389,53.389,0,0,0,7.37,10.912.472.472,0,0,0,.714,0,53.416,53.416,0,0,0,7.37-10.912,8.256,8.256,0,0,0,.741-3.456A8.478,8.478,0,0,0,21.35,0Zm0,12.866a4.4,4.4,0,1,1,4.4-4.4A4.4,4.4,0,0,1,21.35,12.866Z" transform="translate(0)" fill="#058641"></path>
					</g>
					</svg>
					<div class="text">Казань, Нижнекамск</div>
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
				</div>
			
				<nav class="menu__nav">
					<?php wp_nav_menu( array(
						'theme_location' => 'main_menu',
						'fallback_cb' => ''
					) ); ?>
				</nav>
				<?php //get_template_part('template-parts/messenger-icons');?>
				<?php get_template_part('template-parts/social-icons');?>	
			</div>
		</div>
	
	</div>

	<div class="mobile-icon ">
		
		<div class="open">
			<span class="cls"></span>
			<span></span>
			<span class="cls"></span>
		</div>
		<div class="menu">
			Меню
		</div>
	</div>