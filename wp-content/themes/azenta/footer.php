
    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="<?php echo get_theme_file_uri()?>/img/footer-bg.jpg">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="<?php site_url(); ?>">
                                    <?php if ( get_theme_mod( 'az_company_logo_footer' )) : ?>
                                        <img src="<?php echo get_theme_mod( 'az_company_logo_footer' ) ?>" alt="">
                                    </a> 
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri('img/footer-logo.png') ?>" alt="">
                                    </a> 
                                    <?php endif; ?>
                                </a>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates.</p>
                            <form action="#" class="newslatter-form">
                                <input type="text" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div id="footer-quick-links" class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Quick Links</h4>
                            <ul>
                                <?php 
                                if( has_nav_menu('primary') ){
                                    wp_nav_menu([
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'fallback_cb' => false,
                                        'depth' => 1,
                                    ]);
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="footer-social" class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Social</h4>
                            <ul class="social">
                                <li>
                                    <i class="ti-facebook"></i> 
                                    <?php if ( get_theme_mod( 'az_facebook_handle' )) : ?>
                                        <a href="<?php echo get_theme_mod( 'az_facebook_handle' ); ?>">Facebook</a> 
                                    <?php else : ?>
                                        <a href="<?php set_theme_mod('az_facebook_handle','facebook.com'); ?>">Facebook</a> 
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <i class="ti-instagram"></i> 
                                    <?php if ( get_theme_mod( 'az_instagram_handle' )) : ?>
                                        <a href="<?php echo get_theme_mod( 'az_instagram_handle' ); ?>">Instagram</a> 
                                    <?php else : ?>
                                        <a href="<?php set_theme_mod('az_instagram_handle','instagram.com'); ?>">Instagram</a> 
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <i class="ti-twitter"></i> 
                                    <?php if ( get_theme_mod( 'az_twitter_handle' )) : ?>
                                        <a href="<?php echo get_theme_mod( 'az_twitter_handle' ); ?>">Twitter</a> 
                                    <?php else : ?>
                                        <a href="<?php set_theme_mod('az_twitter_handle','twitter.com'); ?>">Twitter</a> 
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="contact-option">
                                <li>
                                    <i class="icon_phone"></i>
                                    <?php 
                                        if ( get_theme_mod( 'az_phone_handle' )) :
                                            echo get_theme_mod( 'az_phone_handle' );
                                        else:
                                            set_theme_mod('az_phone_handle','(+12) 99 757 472'); 
                                        endif;
                                    ?>
                                </li>
                                <li>
                                    <i class="icon_map"></i>
                                    <?php 
                                        if ( get_theme_mod( 'az_address_handle' )) :
                                            echo get_theme_mod( 'az_address_handle' );
                                        else:
                                            set_theme_mod('az_address_handle','Montevideo, Uruguay'); 
                                        endif;
                                    ?>
                                </li>
                                <li>
                                    <i class="icon_mail"></i>
                                    <?php 
                                        if ( get_theme_mod( 'az_email_handle' )) :
                                            echo get_theme_mod( 'az_email_handle' );
                                        else:
                                            set_theme_mod('az_email_handle','mlarrosa90@gmail.com');
                                        endif;
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>, distributed by <a href="https://bootthemes.com/" target="_blank">BootThemes</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    
  
 <?php wp_footer() ?>
    
  </body>
</html>