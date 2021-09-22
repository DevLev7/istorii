<div id="block_6" >
            <div class="container-fluid">
            <div class="animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                <?php echo get_field('bl6_text'); ?>
                </div>
            </div>
                <div class="block_6">
                    <div class="row">
                        <div class="col-12">
                            <div class="content ">
                              
                                <div class="tabs">
                                    <div class="tabheader">
                                        <?php 
                                        while( have_rows('rep6') ): the_row(); 
                                    
                                            $name = get_sub_field('name');    
                                        ?>
                                            <div class="tabheader_item">
                                                <?php echo $name; ?>
                                            </div>
                                            <?php 
                                        endwhile;
                                        wp_reset_query();
                                        ?>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="tabcontent_items">
                                            <?php 
                                                while( have_rows('rep6') ): the_row(); 
                                            
                                                    $text = get_sub_field('text');  
                                                    $img = get_sub_field('img');     
                                                ?>
                                            <div class="tabcontent_item">
                                                <div class="row">
                                                    <div class="item_left col-ml-4 col-md-5">
                                                    <?php echo $text; ?>
                                                    </div>
                                                    <div class="item_right col-ml-8 col-md-7">
                                                        <img class="lazy" data-src="<?php echo $img; ?>" alt="">
                                                    </div>
                                                </div>
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