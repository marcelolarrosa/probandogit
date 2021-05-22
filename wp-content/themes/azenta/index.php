<?php

require_once ('wp-load.php');


$agents = new WP_Query(array(
        'post_type' => 'agents'
    )
);



get_header(); ?>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <?php if ( get_theme_mod( 'az_slider_image_1' ) ) : ?>
                <div class="single-hero-item set-bg" data-setbg="<?php echo get_theme_mod( 'az_slider_image_1' ); ?>">
            <?php else : ?>
                <div class="single-hero-item set-bg" data-setbg="<?php echo get_theme_file_uri()?>/img/hero/hero-1.jpg">
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-text">
                            <p class="room-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</p>
                            <h2>Villa 9721 Glen Creek</h2>
                            <div class="room-price">
                                <span>Start Form:</span>
                                <p>$3.000.000</p>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <i class="fa fa-arrows"></i>
                                    <p>5201 sqft</p>
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i>
                                    <p>8 Bed Room</p>
                                </li>
                                <li>
                                    <i class="fa fa-bath"></i>
                                    <p>7 Baths Bed</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p>1 Garage</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php if ( get_theme_mod( 'az_slider_image_2' ) ) : ?>
                <div class="single-hero-item set-bg" data-setbg="<?php echo get_theme_mod( 'az_slider_image_2' ); ?>">
            <?php else : ?>
                <div class="single-hero-item set-bg" data-setbg="<?php echo get_theme_file_uri()?>/img/hero/hero-2.jpg">
            <?php endif; ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text">
                                <p class="room-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</p>
                                <h2>Villa 9721 Glen Creek</h2>
                                <div class="room-price">
                                    <span>Start Form:</span>
                                    <p>$3.000.000</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>5201 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>8 Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>1 Garage</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( get_theme_mod( 'az_slider_image_3' ) ) : ?>
                <div class="single-hero-item set-bg" data-setbg="<?php echo get_theme_mod( 'az_slider_image_3' ); ?>">
            <?php else : ?>
                <div class="single-hero-item set-bg" data-setbg="<?php  echo get_theme_file_uri()?>/img/hero/hero-3.jpg"">
            <?php endif; ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text">
                                <p class="room-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</p>
                                <h2>Villa 9721 Glen Creek</h2>
                                <div class="room-price">
                                    <span>Start Form:</span>
                                    <p>$3.000.000</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>5201 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>8 Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>1 Garage</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail-pic">
            <div class="thumbs owl-carousel">
                <?php if ( get_theme_mod( 'az_slider_image_1' )) : ?>
                    <div class="item">
                        <img src="<?php echo get_theme_mod( 'az_slider_image_1' ); ?>" alt="">
                    <?php else : ?>
                    <div class="item">
                        <img src="<?php echo get_theme_file_uri()?>/img/hero/hero-1.jpg" alt="">
                <?php endif ?>
                </div>
                <?php if ( get_theme_mod( 'az_slider_image_2' )) : ?>
                    <div class="item">
                        <img src="<?php echo get_theme_mod( 'az_slider_image_2' ); ?>" alt="">
                    <?php else : ?>
                    <div class="item">
                        <img src="<?php echo get_theme_file_uri()?>/img/hero/hero-2.jpg" alt="">
                <?php endif ?>
                </div>
                <?php if ( get_theme_mod( 'az_slider_image_3' )) : ?>
                    <div class="item">
                        <img src="<?php echo get_theme_mod( 'az_slider_image_3' ); ?>" alt="">
                    <?php else : ?>
                    <div class="item">
                        <img src="<?php echo get_theme_file_uri()?>/img/hero/hero-3.jpg" alt="">
                <?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Search Form Section Begin -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div id="search-form-container" class="col-lg-10">
                    <div class="search-form-text">
                        <div class="search-text">
                            SEARCH FOR A PROPERTY
                        </div>
                    </div>
                    <form action="/property-search-results" class="filter-form" method="POST">
                        <div class="first-row">
                            <select name="sale-rent">
                                <option value="For Sale"> For Sale </option>
                                <option value="For Rent"> For Rent </option>
                            </select>
                            <select name="property-type">
                                <option value="Apartment"> Apartment </option>
                                <option value="House"> House </option>
                            </select>
                            <select name="state">
                               <option disabled selected> State </option>
                               <option value="Alabama"> Alabama </option>
                               <option value="California"> California </option>
                               <option value="Colorado"> Colorado </option>
                               <option value="Connecticut"> Connecticut </option>
                               <option value="Delaware"> Delaware </option>
                            </select>
                            <select name="rooms">
                                <option disabled selected>Rooms</option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                            </select>
                        </div>
                        <div class="second-row">
                            <select name="bathrooms">
                                <option disabled selected>Bathrooms</option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>
                            <button type="submit" class="search-btn">
                            <i class="fa fa-search"></i> SEARCH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form Section End -->

    <!-- How It Works Section Begin -->
    <section class="howit-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Find Your Dream House</span>
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="<?php echo get_theme_file_uri()?>/img/howit-works/howit-works-1.png" alt="">
                        <h4>Search & Find Apartment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="<?php echo get_theme_file_uri()?>/img/howit-works/howit-works-2.png" alt="">
                        <h4>Find a Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="<?php echo get_theme_file_uri()?>/img/howit-works/howit-works-3.png" alt="">
                        <h4>Talk To Agent</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Video Section Begin -->
    <div class="video-section set-bg" data-setbg="<?php echo get_theme_file_uri()?>/img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <?php if(get_theme_mod( 'az_promo_video_link' )) : ?>
                            <a href="<?php echo get_theme_mod( 'az_promo_video_link' ); ?>" class="play-btn video-popup">
                        <?php else : ?>
                            <a href="<?php set_theme_mod( 'az_promo_video_link', 'https://www.youtube.com/watch?v=7ehZkkhinrY' ); ?>" class="play-btn video-popup">
                        <?php endif; ?>
                            <i class="fa fa-play"></i>
                        </a>
                        <h4>Find The Perfect</h4>
                        <h2>Real Estate Agent Near You</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Agent Section Begin -->
    <section class="agent-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>We Are To Help You</span>
                        <h2>Our Agents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agent-carousel owl-carousel">  
                    <?php if($agents->have_posts()) : while ($agents->have_posts()) : $agents->the_post() ?>      
                        <div class="col-lg-3">
                            <div class="single-agent">
                                <div class="sa-pic">
                                    <?php if(get_field('acf_agent_picture', $agents->ID)) : ?>
                                        <img src="<?php the_field('acf_agent_picture', $agents->ID)['sizes']['medium']?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_file_uri('img/agent/placeholder-person.jpg');?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <h5><?php the_field('acf_agent_name', $agents->ID)?> 
                                    <span><?php the_field('acf_agent_position', $agents->ID)?></span>
                                </h5>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Agent Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="blog-section latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Blog & Events</span>
                        <h2>News Latest</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 

                $args = array (
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'publish_date',
                    'order' => 'DESC',
                    'posts_per_page' => 3
                );

                $post_query = new WP_Query($args);

                if($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post() ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="col-lg-4">
                            <div class="single-blog-item">
                                <div class="sb-pic">
                                    <?php if(get_the_post_thumbnail_url()) : ?>
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri('img/blog/placeholder-blog-img.jpg');?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="sb-text">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Adam Smith</li>
                                        <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                                    </ul>
                                    <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Partner Carousel Section Begin -->
    <div class="partner-section">
        <div class="container">
            <div class="partner-carousel owl-carousel">
                <?php if ( get_theme_mod( 'az_partner_logo_1' )) : ?>
                    <a href="#" class="partner-logo">
                        <div class="partner-logo-tablecell">
                            <img src="<?php echo get_theme_mod( 'az_partner_logo_1' ); ?>" alt="">
                        </div>
                    </a>
                <?php endif ?>
                <?php if ( get_theme_mod( 'az_partner_logo_2' )) : ?>
                    <a href="#" class="partner-logo">
                        <div class="partner-logo-tablecell">
                            <img src="<?php echo get_theme_mod( 'az_partner_logo_2' ); ?>" alt="">
                        </div>
                    </a>
                <?php endif ?>
                <?php if ( get_theme_mod( 'az_partner_logo_3' )) : ?>
                    <a href="#" class="partner-logo">
                        <div class="partner-logo-tablecell">
                            <img src="<?php echo get_theme_mod( 'az_partner_logo_3' ); ?>" alt="">
                        </div>
                    </a>
                <?php endif ?>
                <?php if ( get_theme_mod( 'az_partner_logo_4' )) : ?>
                    <a href="#" class="partner-logo">
                        <div class="partner-logo-tablecell">
                            <img src="<?php echo get_theme_mod( 'az_partner_logo_4' ); ?>" alt="">
                        </div>
                    </a>
                <?php endif ?>
                <?php if ( get_theme_mod( 'az_partner_logo_5' )) : ?>
                    <a href="#" class="partner-logo">
                        <div class="partner-logo-tablecell">
                            <img src="<?php echo get_theme_mod( 'az_partner_logo_5' ); ?>" alt="">
                        </div>
                    </a>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- Partner Carousel Section End -->


<?php get_footer(); ?>