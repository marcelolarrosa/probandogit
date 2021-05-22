<?php 
/* 
*Template Name:Blog Template
*/

require_once ('wp-load.php');

get_header(); ?>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog List</h2>
                        <div class="breadcrumb-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Blog Default</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section Begin -->



    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="flex-container" style="display:flex;">
                <div class="row">
                    <?php 
                    
                    $currentPage = get_query_var('paged');

                    $post_query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'paged' => $currentPage
                    ));

                    if ( $post_query->have_posts() ) : 

                          add_filter("the_content", "limitContentFilter");

                          function limitContentFilter($content)
                          {
                            // Take the existing content and return a subset of it
                            return substr($content, 0, 300);
                          }
                        while ( $post_query->have_posts() ) : $post_query->the_post();
                     
                    ?>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="single-blog-item">
                                    <div class="sb-pic">
                                        <?php if(get_the_post_thumbnail_url()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                                        <?php else : ?>
                                            <img src="<?php echo get_theme_file_uri('img/blog/placeholder-blog-img.jpg');?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="sb-text">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_content('Real More', TRUE);?></p>
                                        <ul>
                                            <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                            <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php 
                            endwhile;
                            endif;
                        ?>
                    <!-- START PAGINATION -->
                    <?php 
                        echo "<div class='pagination-container'>";
                            echo paginate_links(array(
                                'total' => $post_query->max_num_pages
                            ));
                        echo "</div>";
                        wp_reset_query();
                    ?>
                    <!-- END PAGINATION -->
                </div>

                <div id="site-sidebar" class="col-lg-3 col-md-4"> 
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

<?php 

get_footer();

?>


