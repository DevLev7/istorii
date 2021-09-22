<div id="block_5" >
<img  class="bl5_1 lazy" data-  src="<?php echo THEME_IMAGES; ?>/bl5_1.png" alt="">
<img  class="bl5_2 lazy" src="<?php echo THEME_IMAGES; ?>/bl5_2.png" alt="">
            <div class="container-fluid">
                <div class="block_5">
                    <div class="row">
                        <div class="col-12">
                            <div class="content ">
                                <div class="animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                <?php echo get_field('bl5_text'); ?>
                                </div>
                                
                                <div class="row">
                                <div class="col-ml-5 col-md-12">
                                    <div class="text_left">
                                     <?php echo get_field('bl5_text_left'); ?>
                                    </div>
                                    
                                </div>
                               
                                <div class="favor_wrap col-ml-7 col-md-12 animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="300ms">
                                    
                                <?php 
                                    while( have_rows('rep5') ): the_row(); 
                                    $icon = get_sub_field('icon');
                                        $text = get_sub_field('text');    
                                    ?>
                                    <div class="favor_item">
                                        <div class="icon">
                                        <?php echo file_get_contents($icon);?>
                                        </div>
                                        <div class="text"><?php echo $text; ?></div>
                                    </div>
                                    <?php 
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                                </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
             </div>
 </div>