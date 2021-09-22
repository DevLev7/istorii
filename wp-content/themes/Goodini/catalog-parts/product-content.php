<?php // Описание, характеристики, область применения, документы, менеджер ?>
<?php if($desc || $specifications || $application ){ ?>
	<section id="product-content" class="">	
	
		<div class="product-content-nav ancor">
			<div class="container-fluid">
				<ul>
					<?php if($desc){ ?><li><a href="#desc">О товаре</a></li><?php } ?>
					<?php if($specifications){ ?><li><a href="#specifications">Характеристики</a></li><?php } ?>
					<?php if($application){ ?><li><a href="#application">Область применения</a></li><?php } ?>
				</ul>
			</div>
		</div>
		
		<div class="product-content">
			<div class="container-fluid">
				<div class="row">
					<?php if($desc || $specifications || $application ){ ?>
					<div class="col-lg-8 col-ml-7">
			
						<?php if($desc){ ?>
						<div id="desc" class="list">
							<h2>О товаре</h2>
							<?php echo $desc; ?>
						</div>
						<?php } ?>
			
						<?php if($specifications){ ?>
						<div id="specifications" class="list">
							<h2>Характеристики</h2>
							<?php echo $specifications; ?>
						</div>
						<?php } ?>
			
						<?php if($application){ ?>
						<div id="application" class="list">
							<h2>Область применения</h2>
							<?php echo $application; ?>
						</div>
						<?php } ?>
				
					</div>
					<?php } ?>
					
					<div class="col-lg-4 col-ml-5">
					
						<div class="sidebar">
							<?php if($docs){ ?>
							<div class="docs gray-block">
								<h2>Документы</h2>
								<?php 
								while( have_rows('docs') ): the_row(); 
									$doc = get_sub_field('doc');
									$doc_url = $doc['url'];
									$doc_subtype = $doc['subtype'];
									$doc_size = round($doc['filesize']/1024, 1);
									$name = get_sub_field('name');
								?>
								<div class="doc">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.596 84.596" xmlns:v="https://vecta.io/nano"><path d="M55.284 0H19.768A11.4 11.4 0 0 0 8.384 11.384v61.828a11.4 11.4 0 0 0 11.384 11.384H64.83a11.4 11.4 0 0 0 11.383-11.384v-49.82L55.284 0zm1.658 10.853l9.561 10.686h-9.561V10.853zm7.886 67.743h-45.06a5.39 5.39 0 0 1-5.384-5.384V11.384A5.39 5.39 0 0 1 19.768 6h31.175v21.538h19.27v45.674c-.001 2.969-2.416 5.384-5.385 5.384zM20.824 60.649h42.947v6H20.824zm0-13.038h42.947v6H20.824zm0-13.036h42.947v6H20.824z"/></svg>
									<div class="doc-body">
										<a href="<?php echo $doc_url; ?>" class="doc-name" target="_blank">
											<?php echo $name; ?>
										</a>
										<div class="doc-detail">
											<?php echo $doc_size; ?> кБ, <?php echo $doc_subtype; ?> 
										</div>
									</div>
								</div>
								<?php 
								endwhile;
								wp_reset_query();
								?>
							</div>
							<?php } ?>
							
							<div class="manager ">
								<div class="avatar image_circle">
									<img src="<?php echo $manager_avatar; ?>" alt="<?php echo $manager_name; ?>" />
								</div>
								<div class="name-block">
									<div class="name">
										<?php echo $manager_name; ?>
									</div>
									<div class="position">
										<?php echo $manager_position; ?>
									</div>
									<div class="phone">
										<?php echo do_shortcode('[phone]'); ?>
									</div>
									<?php //get_template_part('template-parts/messenger-icons');?>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
	<?php } ?>