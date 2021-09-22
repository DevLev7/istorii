<div id="block_3" >
            <div class="container-fluid">
                <div class="block_3">
                    <div class="row">
                        <div class="col-12">
                            <div class="content ">
                            <div class="animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                <?php echo get_field('bl3_text'); ?>
                        </div>
                                <div class="favor_wrap animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                <?php 
                                    while( have_rows('rep4') ): the_row(); 
                                        $text = get_sub_field('text');    
                                    ?>
                                    <div class="favor_item">
                                        <div class="text"><?php echo $text; ?></div>
                                    </div>
                                    <?php 
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <div class="text_block row animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                    <img  class="bl3_1 lazy" data-src="<?php echo THEME_IMAGES; ?>/bl3_1.png" alt="">
                                    <div class="item_left ">
                                        <?php echo get_field('bl3_text2'); ?>
                                        <div class="button ">
                                            <a  href=" <?php echo get_field('link_about'); ?>" anim="ripple"  class="btn">
                                                <span><?php echo get_field('bl3_btn'); ?></span>
                                                
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item_right animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="300ms">

                                        <div class="image">
                                            <img class="lazy" data-src=" <?php echo get_field('bl3_img'); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
             </div>
 </div>