<?php 
$mail_order = get_field('order','option');
$mail_parts = explode("@", $mail_order);
$mail_part_0 = $mail_parts[0];
$mail_part_1 = $mail_parts[1];


// Сайт закрыт от индексации
if (get_option('blog_public') == '0') {
	$no_index = "<li>Сайт закрыт от индексации</li>";
}

// Проверка версии php
if(phpversion()<7){
	$phpversion = "<li>Старая версия PHP: ".phpversion()."</li>";
}

// Проверка на почту
if(!$mail_order){
	$message = "<li>Почта не прописана</li>";
}elseif($mail_order != 'multy@b2b-c.ru' && $mail_order != 'info@b2b-c.ru' && ($mail_part_1 == 'b2b-c.ru' || $mail_part_1 == 'kp16.ru' || $mail_part_0 == 'skwisgard') ){ 
	$message = "<li>Прописана почта разработчика: ".$mail_order.'</li>';
}

// Наименование бренда
if(!get_field('company', 'option')['brand']){
if(!get_bloginfo('name')){
	$brand = "<li>Название компании не прописано</li>";
}
}


// Favicon
if(!$favicon_url = get_field('logos','option')['favicon']){
	$favicon = "<li>Нет favicon</li>";
}

// Картинка первого экрана
$hero_group = get_field($field_preffix_hero.'group',$field_postfix);
$hero_bg = $hero_group['hero-bg']['url'];
$hero_bg_sm = $hero_group['hero-bg-sm'];
$hero_image = $hero_group['hero-image']['url'];

if($hero_bg){
if(!$hero_bg_sm && !$hero_image){
	$hero_img = "<li>Нет картинки первого экрана мобильников</li>";
}
}

// Картинка мессенджеров
if(!$hero_bg_sm){
if(!get_field('logos','option')['messenger']){
	$ogimage = "<li>Нет картинки для мессенджеров</li>";
}
}


$page_ID_privacy = get_page_by_title('Политика конфиденциальности')->ID;
if(get_post($page_ID_privacy)->post_content){
	$privacy = '<li>Страница <a href="'.get_page_link(get_page_by_title("Политика конфиденциальности")).'">политики конфиденциальности</a> не пуста</li>'; 
}
?>
	<?php if($no_index || $message || $phpversion || $brand || $ogimage || $favicon || $hero_img || $privacy){ ?>
	<section id="warning">
		<div class="container-fluid">
			<div class="text">
				<h3>Внимание!</h3>
				<ul>
					<?php echo $brand ? $brand : "" ; ?>
					<?php echo $ogimage ? $ogimage : "" ; ?>
					<?php echo $favicon ? $favicon : "" ; ?>
					<?php echo $hero_img ? $hero_img : "" ; ?>
					<?php echo $privacy ? $privacy : "" ; ?>
				</ul>
				<ul>
					<?php echo $no_index ? $no_index : "" ; ?>
					<?php echo $message ? $message : "" ; ?>
					<?php echo $phpversion ? $phpversion : "" ; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php } ?>