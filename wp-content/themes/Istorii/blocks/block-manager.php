
<?php 

$manager_ID = get_field($field_preffix_hero.'manager',$field_postfix); // ID страницы с сотрудником
$manager_header = get_field($field_preffix_hero.'manager-header',$field_postfix); 
$manager_desc = get_field($field_preffix_hero.'manager-desc',$field_postfix); //устаревшее поле, не обязательное
$manager_form = get_field($field_preffix_hero.'manager-form',$field_postfix);

	if($manager_header || get_field('form-text','option')){
	
	// Если выбран сотрудник на текущую страницу
	if($manager_ID){
		$image = get_field('avatar',$manager_ID);
		$name = get_the_title($manager_ID);
		$position = get_field('position',$manager_ID);
		
	// Подстановка данных сотрудника из Формы - Менеджер
	} else {
		$image = get_field('form-manager','option')['avatar'];
		$name = get_field('form-manager','option')['name'];
		$position = get_field('form-manager','option')['position'];
	}	

	$avatar_info = new SplFileInfo($image['url']);
	$avatar_ext = $avatar_info->getExtension();
	
	$manager_style = get_field('form','option')['style'];
	$manager_class = implode(' ', $manager_style);
									
	//	Адаптивное изображение
	$imageSize = '';
	include (locate_template('template-parts/lazy-image-responsive-IE.php'));
	?>
	
	<section id="manager" class="manager-1">
		<div class="container-fluid">
			<div class="wrap">
			
				<div class="left-wrap">	
					<div class="text-wrap">	
						<div class="utp">
							<?php if($manager_header){ ?>
							<div class="header">
								<?php echo $manager_header; ?>
							</div>
							<?php if($manager_desc){ ?>
							<div class="subheader">
								<?php echo $manager_desc; ?>
							</div>
							<?php } ?>
							<?php }else{ ?>
							<div class="header subheader">
								<?php the_field('form-text','option'); ?>
							</div>
							<?php } ?>
						</div>
						<div class="manager-label">
							<div class="name">
								<?php echo $name;?>
							</div>
							<div class="position">
								<?php echo $position;?>
							</div>
						</div>
			
						
					</div>
					<div class="avatar-wrap avatar-<?php echo $avatar_ext; ?>">
						<div class="avatar lazy-image" <?php echo $imageStyle; ?> >
							<div class=" progressive replace" data-href="<?php echo $image['url']; ?>">
								<img src="<? echo $image["sizes"]['micro'];?>" class="preview" alt="<?php echo $name; ?>" />
							</div>
						</div>
					</div>	
				</div>
				
				<div class="form-wrap <?php echo $manager_class; ?>">
					<?php 
					$formEmail = "";
					
					// Проверка на заполнение формы сначала на самой странице, если нет, то из блока Формы, ели и там пусто, то по умолчанию
					
					// Заголовок
					if($manager_form['head']){
						$formTitle = $manager_form['head'];
					}elseif(get_field('form','option')['head']){
						$formTitle = get_field('form','option')['head'];
					}else{
						$formTitle = "Заполните форму";
					}
					
					// Описание
					if($manager_form['desc']){
						$formDesk = $manager_form['desc'];
					}elseif(get_field('form','option')['desc']){
						$formDesk = get_field('form','option')['desc'];
					}else{
						$formDesk = "и мы перезвоним вам в самое ближайшее время";
					}
					
					// Поле почты
					if($manager_form['email']){
						$formEmail = $manager_form['email'];
					}elseif(get_field('form','option')['email']){
						$formEmail = get_field('form','option')['email'];
					}else{
						$formEmail = "";
					}
					
					// Текстовое поле
					if($manager_form['textarea']){
						$formTextarea = $manager_form['textarea'];
					}elseif(get_field('form','option')['textarea']){
						$formTextarea = get_field('form','option')['textarea'];
					}else{
						$formTextarea = "";
					}
					
					// Кнопка
					if($manager_form['btn']){
						$formBtn = $manager_form['btn'];
					}elseif(get_field('form','option')['btn']){
						$formBtn = get_field('form','option')['btn'];
					}else{
						$formBtn = "Отправить сообщение";
					}
					
					include (locate_template('blocks/block-form.php'));
					?>
				</div>
			</div>
		</div>
	</section>
	
	<? }else{ ?>
	
	<section id="no-manager">
		<div class="container-fluid">
			<div class="row">
				<div class="col-s">	
					<div class="wrap">	
						<div class="header">
							<h2>Вам нужно больше информации?</h2>
							<p>Не стесняйтесь обращаться к нам!</p>
						</div>
						<div class="button">
							 <div data-src="#popup-mess" data-fancybox class="btn" anim="ripple"><span>Оставить сообщение</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<? } ?>