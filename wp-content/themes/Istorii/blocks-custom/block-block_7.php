<div id="block_7" >
    <svg class="line" xmlns="http://www.w3.org/2000/svg" width="1216" height="16.972" viewBox="0 0 1216 16.972">
    <g id="Сгруппировать_611" data-name="Сгруппировать 611" transform="translate(-704 -6379.762)">
        <rect id="Прямоугольник_158" data-name="Прямоугольник 158" width="1207.515" height="2" transform="translate(712.485 6387.247)" fill="#d7e5d8"/>
        <rect id="Прямоугольник_159" data-name="Прямоугольник 159" width="12" height="12" transform="translate(712.485 6379.762) rotate(45)" fill="#108f1c"/>
        <rect id="Прямоугольник_160" data-name="Прямоугольник 160" width="12" height="12" transform="translate(1094.485 6379.763) rotate(45)" fill="#108f1c"/>
        <rect id="Прямоугольник_161" data-name="Прямоугольник 161" width="12" height="12" transform="translate(1476.485 6379.763) rotate(45)" fill="#108f1c"/>
    </g>
    </svg>
    <img  class="bl7_1 lazy" src="<?php echo THEME_IMAGES; ?>/bl7_1.png" alt="">
            <div class="container-fluid">
                <div class="block_7">
                    <div class="row">
                        <div class="col-12">
                            <div class="content ">
                            <div class="animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                <?php echo get_field('bl7_text'); ?>
                                </div>
                                <div class="slider-arrow">
                                <div class="next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-38c9c651fdc5eee5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.21" height="19.147" viewBox="0 0 30.21 19.147"><g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1 1.414)"><path id="Контур_5715" data-name="Контур 5715" d="M7.5,18H35.71" transform="translate(-7.5 -9.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Контур_5716" data-name="Контур 5716" d="M7.5,23.819l8.16-8.16L7.5,7.5" transform="translate(12.55 -7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                        </div>
                                    <div class="prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-38c9c651fdc5eee5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.21" height="19.147" viewBox="0 0 30.21 19.147"><g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1 1.414)"><path id="Контур_5715" data-name="Контур 5715" d="M35.71,18H7.5" transform="translate(-7.5 -9.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Контур_5716" data-name="Контур 5716" d="M15.66,23.819,7.5,15.66,15.66,7.5" transform="translate(-7.5 -7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/> </g></svg>
                                        </div>
                                        
                                    </div>
                            <div class="row">
                                <div class="col-ml-4 col-md-1"></div>
                                <div class="col-ml-8 col-md-11 sliders swiper-container animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="300ms">
                                    <div class="swiper-wrapper">
                                <?php 
                                        while( have_rows('rep7') ): the_row(); 
                                    
                                            $img = get_sub_field('img');   
                                            $title = get_sub_field('title');
                                            $text = get_sub_field('text');     
                                        ?>
                                    <div class="slide swiper-slide">
                                        <div class="slide_wrap">
                                        <div class="image">
                                            <img class="lazy" src="<?php echo $img; ?>" alt="">
                                        </div>
                                        <div class="favor_content">
                                            <div class="title"><?php echo $title; ?></div>
                                            <div class="text"><?php echo $text; ?></div>
                                            
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
 </div>