<?php 
/* 
*Template Name:Blog Template
*/

require_once ('wp-load.php');

get_header(); 

?>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog List</h2>
                        <div class="breadcrumb-option">
                            <a href="#"><i class="fa fa-home"></i> Home</a>
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
						$s=get_search_query();
						$args = array(
	               	    	's' =>$s
			            );
				    // The Query
						$blog_search_results = new WP_Query( $args );
						if ( $blog_search_results->have_posts() ) {
						        _e("<h2 id='search-results-title' style='margin-bottom:40px;'> Search Results for: ".get_query_var('s')."</h2>");
						        while ( $blog_search_results->have_posts() ) {
						           $blog_search_results->the_post();
			                 	?>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-item">
                                <div class="sb-pic">
                                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                                </div>
                                <div class="sb-text">
                                    <h4><a href="./blog-details.html"><?php the_title(); ?></a></h4>
                                    <p><?php the_content();?></p>
                                    <ul>
                                        <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                        <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					                 <?php
						        }
						    }else{
						?>
					        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
					        <div class="alert alert-info">
					          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
					        </div>
					<?php } ?>
		            <!-- START PAGINATION -->
		            <?php 
		                echo "<div class='pagination-container'>";
		                    echo paginate_links(array(
		                        'total' => $blog_search_results->max_num_pages
		                    ));
		                echo "</div>";
		                wp_reset_query();
		            ?>
		            <!-- END PAGINATION -->
                </div>

                <div id="site-sidebar" class="col-lg-3 col-md-3"> 
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

<?php 

get_footer();

?>


