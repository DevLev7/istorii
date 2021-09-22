<div class="text-block">

	<?php if( $intro){ ?>
	<div class="intro list">
		<?php echo $intro; ?>
	</div>
	<?php } ?>
	
	<div class="details">
		<ul>
			<li>Ткань: <span class="value"><?php the_field('material'); ?></span></li>
			<li>Состав: <span class="value"><?php the_field('composition'); ?></span></li>
			<li>Плотность: <span class="value"><?php the_field('density'); ?> г/м&sup2;</span></li>
			<li>Качество ткани: <span class="value"><?php the_field('quality'); ?></span></li>
			<li>Страна: <span class="value"><?php the_field('country'); ?></span></li>
		</ul>
		<ul>
			<li>Размеры: <span class="value"><?php the_field('size'); ?></span></li>
			<li>Длина: <span class="value"><?php the_field('length'); ?></span></li>
			<li>Цвета: <span class="value"><?php the_field('color'); ?></span></li>
			<li>Нанесение: <span class="value"><?php the_field('applying'); ?></span></li>
			<li>Срок изготовления: <span class="value"><?php the_field('time'); ?></span></li>
		</ul>
	</div>
	
</div>