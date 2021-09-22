<?php
	// параметры карточки 
	$size = get_field('size');
	$room = get_field('room');
	$area = get_field('area');
	$lounge = get_field('lounge');
	$washroom = get_field('washroom'); 
?>
	<ul>	
		<?php if($lounge){ ?>
		<li class="full"><span>+ комната отдыха</span></li>
		<?php } ?>
		<?php if($washroom){ ?>
		<li class="full"><span>+ помывочная</span></li>
		<?php } ?>
		
		<?php if($size){ ?>
		<li class="start"><span>Размеры:</span> <span>2.3×<?php echo $size; ?>м</span></li>
		<?php } ?>
		<?php if($area){ ?>
		<li><span>Площадь:</span> <span><?php echo $area; ?>м&sup2;</span></li>
		<?php } ?>
		<?php if($room){ ?>
		<li><span>Комнат:</span> <span><?php echo $room; ?> шт.</span></li>
		<?php } ?>
	</ul>