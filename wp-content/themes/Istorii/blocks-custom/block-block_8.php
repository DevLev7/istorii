<div id="block_8" >
   
   <div class="sq3"></div>
            <div class="container-fluid">
                <div class="block_8">
                    <div class="row">
                        <div class="col-12">
                            <div class="content ">
                                <div class="row mainrow">
                                    <div class="col-ml-4 col-md-12 text_block">
                                    <div class="animate__animated animate__fadeIn wow" data-wow-duration="2s" data-wow-delay="300ms">
                                    <?php echo get_field('bl8_text'); ?>
                                    </div>
                                    <div class="button">
                                        <a href="<?php echo get_field('link_rec'); ?>" anim="ripple" class="btn"><span><?php echo get_field('bl8_name_bnt'); ?></span></a>
                                    </div>
                                    </div>
                                    <div class="col-ml-8 col-md-12">
                                    <div class="slider-arrow1">
                                <div class="next1" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-38c9c651fdc5eee5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.21" height="19.147" viewBox="0 0 30.21 19.147"><g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1 1.414)"><path id="Контур_5715" data-name="Контур 5715" d="M7.5,18H35.71" transform="translate(-7.5 -9.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Контур_5716" data-name="Контур 5716" d="M7.5,23.819l8.16-8.16L7.5,7.5" transform="translate(12.55 -7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                        </div>
                                    <div class="prev1" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-38c9c651fdc5eee5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.21" height="19.147" viewBox="0 0 30.21 19.147"><g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1 1.414)"><path id="Контур_5715" data-name="Контур 5715" d="M35.71,18H7.5" transform="translate(-7.5 -9.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path id="Контур_5716" data-name="Контур 5716" d="M15.66,23.819,7.5,15.66,15.66,7.5" transform="translate(-7.5 -7.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/> </g></svg>
                                        </div>
                                        
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                    <div class="swiper-pagination"></div>
                                    <?php
            $reviews = [];
            // Уникальные отзывы
            if ( get_sub_field( 'reviews' ) ) {

                while (have_rows( 'repeater' )): the_row();
                    $reviews[] = [
                        'name'       => get_sub_field( 'name' ),
                        'review'     => get_sub_field( 'review' ),
                        'city'       => get_sub_field( 'city' ),
                        'position'   => get_sub_field( 'position' ),
                        'blockquote' => get_sub_field( 'blockquote' ),
                    ];
                endwhile;
                //wp_reset_query();

            }

            // отзывы из секции
            if ( get_sub_field( 'reviews-section' ) ) {
                $args = array(
                    'post_type' => array('reviews'),
                    'showposts' => -1,
                    'post__in'  => get_sub_field( 'reviews-section' ),
                    'orderby'   => 'post__in',
                );
            } else {
                $args = array(
                    'post_type'  => array('reviews'),
                    'showposts'  => -1,
                    'meta_query' => [
                        [ // Проверяет существование поля у записи
                            'key'     => 'review',
                            'compare' => 'EXISTS'
                        ],
                        [ // Проверяет заполненность поля
                            'key'     => 'review',
                            'compare' => '!=',
                            'value'   => ''
                        ]
                    ]
                );
            }
            $the_query = new WP_Query( $args );
            while ($the_query->have_posts()) : $the_query->the_post();
                $reviews[] = [
                    'name'       => get_the_title(),
                    'review'     => get_field( 'review' ),
                    'avatar'     => get_field( 'avatar' ),
                    'image'      => get_field( 'image' ),
                    'city'       => get_field( 'city' ),
                    'position'   => get_field( 'position' ),
                    'blockquote' => get_field( 'blockquote' ),
                ];

            endwhile;
            wp_reset_query();

          
            ?>

			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php
					$alt = get_the_title();
					
					$args = array(
						'post_type' => array('reviews'),
						'showposts' => -1,
						'meta_query'     => [
							[ // Проверяет существование поля у записи
								'key' => 'video-id',
								'compare' => 'EXISTS'
							],
							[ // Проверяет заполненность поля
								'key' => 'video-id',
								'compare' => '!=',
								'value' => ''
							]
						]
					);
					
					$the_query = new WP_Query( $args );
					$count_reviews = str_pad( $the_query->found_posts, 2, '0', STR_PAD_LEFT);
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$video = get_field('video-id');
						$YouTube_ID = YouTubeID($video); // ID видео с YouTube
					?>			
					<div class="slide swiper-slide">	
						<div class="video">
							<a class="video__link" href="https://youtu.be/<? echo $YouTube_ID; ?>" id="<? echo $YouTube_ID; ?>">
								<picture>
									<source srcset="https://i.ytimg.com/vi_webp/<? echo $YouTube_ID; ?>/mqdefault.webp" type="image/webp">
									<img class="video__media lazy" data-src="https://i.ytimg.com/vi/<? echo $YouTube_ID; ?>/mqdefault.jpg" alt="<? echo $video_desc ? $video_desc : $alt.' — '.$video_num.' / '.get_field('company', 'option')['brand'] ; ?>">
								</picture>
							</a>
							<button class="video__button" aria-label="Запустить видео">
                            <svg id="плэй" xmlns="http://www.w3.org/2000/svg" width="149" height="149" viewBox="0 0 149 149">
                            <circle id="Эллипс_11" data-name="Эллипс 11" cx="74.5" cy="74.5" r="74.5" fill="#718f79" opacity="0.55"/>
                            <circle id="Эллипс_12" data-name="Эллипс 12" cx="40" cy="40" r="40" transform="translate(35 35)" fill="#108f1c"/>
                            <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M28.784,14.562,4.91.448A3.237,3.237,0,0,0,0,3.249V31.47a3.253,3.253,0,0,0,4.91,2.8L28.784,20.164A3.252,3.252,0,0,0,28.784,14.562Z" transform="translate(63 56.998)" fill="#fff"/>
                            </svg>
							</button>
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
</div>