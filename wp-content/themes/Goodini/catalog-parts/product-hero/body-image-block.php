<div class="image-block">
	<div class="image-block-flex">
		<div class="images-nav">
			<div class="slider-nav">
			<?php
			foreach( $images as $image ):
			?>
				<div class="image">
					<img src="<?php echo $image['sizes']['micro']; ?>" >
				</div>
			<?php 
			endforeach;
			?>
			</div>
		</div>
		<div class="images">
			<div class="slider">
			<?php
			foreach( $images as $image ):
			?>
				<a class="image" data-fancybox href="<?php echo $image['url']; ?>">
					<img src="<?php echo $image['sizes']['team']; ?>" >
				</a>
			<?php 
			endforeach;
			?>
			</div>
		</div>
	</div>
</div>