 <div id="block_2" >
            <div class="container-fluid">
                <div class="block_2">
                    <div class="row">
                        <div class="col-12">
                            <div class="content ">
                                <div class="animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                 <?php echo get_field('bl2_text'); ?>
                                </div>
                                
                            <div class="slider_container">
                              <div class="main-slide">
                              <?php 
                                    while( have_rows('rep3') ): the_row(); 
                                        $name = get_sub_field('name');
                                        $mesta = get_sub_field('mesta');   
                                        $city = get_sub_field('city');   
                                        $cost = get_sub_field('cost');
                                        $gallery_arr = get_sub_field('img');
							                 
                                    ?>
                                    
                                  <div class="item_content ">
                                  
                                    <div class="col-ml-4 col-md-5 left_slider">
                                    <div class="slider-arrow2">
                                <div class="next2" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-38c9c651fdc5eee5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.21" height="19.147" viewBox="0 0 30.21 19.147"><g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1 1.414)"><path id="Контур_5715" data-name="Контур 5715" d="M7.5,18H35.71" transform="translate(-7.5 -9.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Контур_5716" data-name="Контур 5716" d="M7.5,23.819l8.16-8.16L7.5,7.5" transform="translate(12.55 -7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                        </div>
                                    <div class="prev2" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-38c9c651fdc5eee5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.21" height="19.147" viewBox="0 0 30.21 19.147"><g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1 1.414)"><path id="Контур_5715" data-name="Контур 5715" d="M35.71,18H7.5" transform="translate(-7.5 -9.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Контур_5716" data-name="Контур 5716" d="M15.66,23.819,7.5,15.66,15.66,7.5" transform="translate(-7.5 -7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/> </g></svg>
                                        </div>
                                        
                                    </div> 
                                    
                                        <div class="image_wrap swiper-container">
                                            <div class="image_slider swiper-wrapper">
                                                
                                            <?php foreach( $gallery_arr as $img ):  ?>
                                                <div class=" slide swiper-slide">
                                                <div class="image_container">
                                                    <img class="lazy" src="<?php echo $img['sizes']['item']; ?>" alt="">
                                                </div>
                                                </div>
                                                <?php 
                                        endforeach;
                                        ?>
                                            </div>
                                            </div>
                                    </div>
                                      
                                    
                                    
                                      <div class="item_wrap col-ml-8 col-md-7 col-sm-12">
                                          
                                        <div class="title-block">
                                            <div class="title"><?php echo $name; ?></div>
                                            <div class="city"><?php echo $city; ?></div>
                                        </div>
                                        <div class="cost-block">
                                            <div class="mesta"><?php echo $mesta; ?></div>
                                            <div class="cost"><?php echo $cost; ?></div>
                                        </div>
                                        <div class="button">
                                                <div data-src="#popup-order" anim="ripple" data-fancybox class="btn"><span>Записаться на экскурсию</span></div>
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