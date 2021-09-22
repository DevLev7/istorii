<?php 
	$page_ID_contacts = get_page_by_title('Контакты')-> ID; // ID страницы контактов
	$page_ID_current = get_the_ID(); // ID текущей страницы
	
	if($page_ID_contacts == $page_ID_current){
?>

<section id="contacts" class="contacts-page">
	<div class="container-fluid">
		<div class="header">
			<h1><?php the_title(); ?> <?php if (is_plugin_active('multycity/multycity.php')) {echo do_shortcode('[city_gde]');} ?></h1>
		</div>
	</div>
	
<?php }else{ ?>

<section id="contacts">

<?php } ?>

	<div class="row bor">
		<div class="col-ml-6 left-wrap">
			<div class="left">
			
				<?php if($page_ID_contacts != $page_ID_current){ ?>
				<div class="header">
					<h2>Контакты <?php if (is_plugin_active('multycity/multycity.php')) {echo do_shortcode('[city_gde]');} ?></h2>
				</div>
				<?php } ?>
				
				<?php if (get_field('image_company', 'option')) { ?>
					<div class="image">
						<img src="<?php echo get_field('image_company', 'option'); ?>" alt="Офис <?php echo get_bloginfo("name"); ?>" title="Офис <?php echo get_bloginfo("name"); ?>">
					</div>
				<?php } ?>
				
				<ul class="main-list">
					<li>
						<span class="head">Телефон</span>
						<?php echo do_shortcode('[phone]') ?>
					</li>
					<?php if ((is_plugin_active('multycity/multycity.php') && do_shortcode('[city_email]')) || get_field('email', 'option')) { ?>
						<li>
							<span class="head">Email</span>
							<?php echo do_shortcode('[email]'); ?>
						</li>
					<?php } ?>
					<li>
						<span class="head">Адрес</span>
						<?php echo do_shortcode('[adress]'); ?>
					</li>
					<li>
						<span class="head">Координаты</span>
						<div id="contact_coordinate">
							<span><?php echo do_shortcode('[coordinate]'); ?></span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>
							<div class="message" id="coordinate-hover">Скопировать координаты</div>
							<div class="message" id="coordinate-copy">Скопировано</div>
						</div>
					</li>
					<?php if (do_shortcode('[phone_second]')) { ?>
						<li>
							<span class="head">Телефон (доп.)</span>
							<?php echo do_shortcode('[phone_second]') ?>
						</li>
					<?php } ?>
					<?php if (get_field('mode', 'option')) { ?>
						<li>
							<span class="head">Режим работы</span>
							<?php the_field('mode', 'option') ?>
						</li>
					<?php } ?>
					<?php if (get_field('in', 'option') || get_field('yt', 'option') || get_field('vk', 'option') || get_field('fb', 'option')) { ?>
						<li class="soc-block">
							<span class="head">Мы в соц.сетях</span>
							<?php get_template_part('template-parts/social-icons'); ?>
						</li>
					<?php } ?>
					<?php if (get_field('in', 'option') || get_field('yt', 'option') || get_field('vk', 'option') || get_field('fb', 'option')) { ?>
						<li class="soc-block">
							<span class="head">Пишите нам</span>
							<?php get_template_part('template-parts/messenger-icons'); ?>
						</li>
					<?php } ?>
				</ul>
				
				<?php if (get_field('offices', 'option')) { ?>
					<div class="list">
						<h2 class="head">Филиалы</h2>
						<ul>
							<?php
							while (have_rows('offices', 'option')) : the_row();
							?>
								<li>
									<?php echo get_sub_field('adress'); ?>
								</li>
							<?php
							endwhile;
							wp_reset_query();
							?>
						</ul>
					</div>
				<?php } ?>
				
				<div class="button">
					<button data-src="#popup-mess" anim="ripple" class="btn" data-fancybox="">
						<span>Оставить сообщение</span>
					</button>
				</div>
				
			</div>
		</div>
		<div class="col-ml-6 right-wrap">
			<div id="map-3"></div>
		</div>
	</div>
</section>

<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?load=package.standard&lang=ru-RU"></script>

<?php if (get_field('offices', 'option')) { ?>
	<script type="text/javascript">
		ymaps.ready(init);
		var myMap;

		function init() {

			myMap = new ymaps.Map('map-3', {
					center: [<?php echo get_field('offices-center', 'option'); ?>],
					zoom: <?php echo get_field('offices-zoom', 'option'); ?>
				}),
				myMap.behaviors.disable('scrollZoom')

			myMap.geoObjects
				.add(new ymaps.Placemark([<?php the_field('koordinati','option'); ?>], {
					balloonContent: 'Головной офис'
				}))
			<?php
			while (have_rows('offices', 'option')) : the_row();
				$department = get_sub_field('department');
				$phone = get_sub_field('phone');
				$adress = get_sub_field('adress');
				$coordinate = get_sub_field('coordinate');
				$mode = get_sub_field('mode');

				if ($department) {
					$department = $department . '</br>';
				}
				if ($phone) {
					$phone = $phone . '</br>';
				}
			?>
					.add(new ymaps.Placemark([<?php the_field('koordinati','option'); ?>], {
						balloonContent: '<?php echo $department . $adress . $phone . $mode; ?>'
					}))
			<?php
			endwhile;
			wp_reset_query();
			?>

		}
	</script>
<?php } else { ?>
	<script type="text/javascript">
		ymaps.ready(init);
		var myMap;

		function init() {

			myMap = new ymaps.Map('map-3', {
					center: [<?php echo do_shortcode('[coordinate]'); ?>],
					zoom: 16,
				}),
				myPlacemark = new ymaps.Placemark([<?php echo do_shortcode('[coordinate]'); ?>]);
			myMap.behaviors.disable('scrollZoom')
			myMap.geoObjects.add(myPlacemark);
		}
	</script>
<?php } ?>