
<?php 
/* 
*Template Name:Properties
*/
  
  require_once ('wp-load.php');


if(isset($_POST) && !empty($_POST)) {
  $searched_sale_rent = $_POST['sale-rent'];
  $searched_property_type = $_POST['property-type'];
  $searched_state = $_POST['state'];
  $searched_rooms = $_POST['rooms'];
  $searched_bathrooms = $_POST['bathrooms'];

  $currentPage = get_query_var('paged');

  $args = array(
      'post_type'   => 'properties',
      'numberposts'   =>  -1,
      'meta_query'  => array(
        'relation'    => 'AND',
        array(
          'key'   => 'acf_sale_rent',
          'value'     => $searched_sale_rent,
          'compare' => 'LIKE'
        ),
        array(
          'key'   => 'acf_property_type',
          'value'     => $searched_property_type,
          'compare' => 'LIKE'
        ),
        array(
          'key'   => 'acf_state',
          'value'     => $searched_state,
          'compare' => 'LIKE'
        ),
        array(
          'key'   => 'acf_rooms',
          'value'     => $searched_rooms,
          'compare' => 'LIKE'
        ),
        array(
          'key'   => 'acf_bathrooms',
          'value'     => $searched_bathrooms,
          'compare' => 'LIKE'
        ),
      ),
    );

  $searched_properties = new WP_Query($args);


} else {
  $searched_sale_rent = null;
  $searched_property_type = null;
  $searched_state = null;
  $searched_rooms = null;
  $searched_bathrooms = null;



  $args = array(
    'post_type'   => 'properties',
    'posts_per_page' => '5',
  );
  
  $searched_properties = new WP_Query($args);
}


get_header();

?>



<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Properties</h2>
                    <div class="breadcrumb-option">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Properties</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section Begin -->

  <!-- Top Properties Section Begin -->
  <div class="top-properties-section spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="properties-title">
                      <div class="section-title">
                          <span>Top Property For You</span>
                          <h2>Top Properties</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="top-properties-carousel owl-carousel">
              <div class="single-top-properties">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="stp-pic">
                              <img src="<?php echo get_theme_file_uri()?>/img/properties/properties-1.jpg" alt="">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="stp-text">
                              <div class="s-text">For Sale</div>
                              <h2>Villa 9721 Glen Creek</h2>
                              <div class="room-price">
                                  <span>Start From:</span>
                                  <h4>$3.000.000</h4>
                              </div>
                              <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
              <div class="single-top-properties">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="stp-pic">
                              <img src="<?php echo get_theme_file_uri()?>/img/properties/properties-2.jpg" alt="">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="stp-text">
                              <div class="s-text">For Sale</div>
                              <h2>Villa 9721 Glen Creek</h2>
                              <div class="room-price">
                                  <span>Start From:</span>
                                  <h4>$3.000.000</h4>
                              </div>
                              <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
  </div>
  <!-- Top Properties Section End -->
<!-- Property Section Begin -->
<section class="property-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="property-sidebar">
          <h4>Search</h4>
          <form action="" class="sidebar-search" method="POST">
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
                <option value="5"> 5 </option>
            </select>
            <select name="bathrooms">
                <option disabled selected>Bathrooms</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select>
            <button type="submit" class="search-btn">Search</button>
          </form>
          <div class="best-agents">
              <h4>Best Agents</h4>
              <a href="#" class="ba-item">
                  <div class="ba-pic">
                      <img src="<?php echo get_theme_file_uri();?>/img/agent/best-agent-1.jpg" alt="">
                  </div>
                  <div class="ba-text">
                      <h5>Lester Bradley</h5>
                      <span>Company Agents</span>
                      <p class="property-items">6 property </p>
                  </div>
              </a>
              <a href="#" class="ba-item">
                  <div class="ba-pic">
                      <img src="<?php echo get_theme_file_uri();?>/img/agent/best-agent-2.jpg" alt="">
                  </div>
                  <div class="ba-text">
                      <h5>Janie Blair</h5>
                      <span>Company Agents</span>
                      <p class="property-items">6 property </p>
                  </div>
              </a>
              <a href="#" class="ba-item">
                  <div class="ba-pic">
                      <img src="<?php echo get_theme_file_uri();?>/img/agent/best-agent-3.jpg" alt="">
                  </div>
                  <div class="ba-text">
                      <h5>Sophia Cole</h5>
                      <span>Marketing & Ceo</span>
                      <p class="property-items">6 property </p>
                  </div>
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <h4 class="property-title">Properties</h4>
        <div class="property-list">
          <?php if($searched_properties->have_posts()) : while ($searched_properties->have_posts()) : $searched_properties->the_post() ?>
          <div class="single-property-item">
            <a href="<?php the_permalink(); ?>">
              <div class="row">
                <div class="col-md-4">
                  <div class="property-pic">
                    <?php if(get_field('property_image')) : ?>
                      <img src="<?php the_field('property_image', $searched_properties->ID)['sizes']['medium'] ?>" alt="" />
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri('/img/blog/placeholder-blog-img.jpg' . $searched_properties->ID) ?>" alt="" />
                    <?php endif ; ?>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="property-text">
                    <div class="s-text"> Direccion
                    </div>
                      <h5 class="r-title"> </h5>
                    <div class="room-price">
                        <span>Start From:</span>
                        <h5>$3.000.000</h5>
                    </div>
                    <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave.
                        Ballston Spa, NY
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore.
                    </p>
                    <ul class="room-features">
                      <li>
                        <i class="fa fa-arrows"></i>
                        <p>5201 sqft</p>
                      </li>
                      <li>
                        <i class="fa fa-bed"></i>
                        <p><?php the_field('acf_rooms', $searched_properties->ID);?> Bed Room</p>
                      </li>
                      <li>
                        <i class="fa fa-bath"></i>
                        <p><?php the_field('acf_bathrooms', $searched_properties->ID);?> Baths Bed</p>
                      </li>
                      <li>
                        <i class="fa fa-car"></i>
                        <p>1 Garage</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
  
<!-- Property Section End -->
<div class="partner-section">
    <div class="container">
        <div class="partner-carousel owl-carousel owl-loaded owl-drag">          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1340px, 0px, 0px); transition: all 0s ease 0s; width: 4020px;"><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-1.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-2.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-3.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-4.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-5.png" alt="">
                </div>
            </a></div><div class="owl-item active" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-1.png" alt="">
                </div>
            </a></div><div class="owl-item active" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-2.png" alt="">
                </div>
            </a></div><div class="owl-item active" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-3.png" alt="">
                </div>
            </a></div><div class="owl-item active" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-4.png" alt="">
                </div>
            </a></div><div class="owl-item active" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-5.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                  <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-1.png" alt="">
              </div>
          </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-2.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-3.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-4.png" alt="">
                </div>
            </a></div><div class="owl-item cloned" style="width: 68px; margin-right: 200px;"><a href="#" class="partner-logo">
                <div class="partner-logo-tablecell">
                    <img src="<?php echo get_theme_file_uri();?>/img/partner/partner-5.png" alt="">
                </div>
            </a></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    </div>
</div>

<?php get_footer();?>