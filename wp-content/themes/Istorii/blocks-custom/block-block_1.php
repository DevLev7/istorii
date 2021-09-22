
    <div id="hero" >
            <div data-src="#popup-order" data-fancybox class="modul-1 animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="0s">
                <div class="text">Первые 3 дня проживания – <strong>бесплатно</strong></div>
                <div  class="btn-arrow">
                    <span class="modul_text">Задать вопрос</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.366" height="18.194" viewBox="0 0 17.366 18.194">
                    <g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(-6.5 -6.086)">
                        <path id="Контур_5715" data-name="Контур 5715" d="M22.866,18H7.5" transform="translate(0 -2.817)" fill="none" stroke="#313936" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        <path id="Контур_5716" data-name="Контур 5716" d="M15.183,22.866,7.5,15.183,15.183,7.5" fill="none" stroke="#313936" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                    </svg>
                </div>
            </div>
            <div class="container-fluid">
                <div class="block_1">
                    <div class="row">
                        <div class="col-12">
                            <div class="content animate__fadeIn wow" data-wow-duration="3s" data-wow-delay="0s">
                                <?php echo get_field('bl1_text'); ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="favor_wrap">
                <?php 
                while( have_rows('rep1') ): the_row(); 
                    $text = get_sub_field('text');    
                ?>
                <div class="favor_item">
                    <div class="favor_content">
                        <?php echo $text; ?>
                    </div>
                </div>
                <?php 
                    endwhile;
                    wp_reset_query();
                    ?>	
            </div>
            <div class="favor_wrap_photo">
                <?php 
                while( have_rows('rep2') ): the_row(); 
                    $img = get_sub_field('img');    
                ?>
                <div class="favor_item">
                    <div class="image">
                        <img class="lazy" data-src="<?php echo $img; ?>" alt="">
                    </div>
                </div>
                <?php 
                    endwhile;
                    wp_reset_query();
                    ?>	
            </div>
    </div>