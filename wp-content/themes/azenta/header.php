<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


 <?php 

 wp_head() ?>

  </head>
 
<body>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <nav class="main-menu">
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
        </nav>
        <div class="nav-logo-right">
            <ul>
               <?php if ( get_theme_mod( 'az_phone_handle' )) : ?>
                    <li>
                        <i class="icon_phone"></i>
                        <div class="info-text">
                            <span>Phone:</span>
                            <p><?php echo get_theme_mod( 'az_phone_handle' ); ?></p>
                        </div>
                    </li>
                <?php endif ?>
                <?php if ( get_theme_mod( 'az_address_handle' )) : ?>
                    <li>
                        <i class="icon_map"></i>
                        <div class="info-text">
                            <span>Address:</span>
                            <p><?php echo get_theme_mod( 'az_address_handle' ); ?></p>
                        </div>
                    </li>
                <?php endif ?>
                <?php if ( get_theme_mod( 'az_email_handle' )) : ?>
                    <li>
                        <i class="icon_mail"></i>
                        <div class="info-text">
                            <span>Email:</span>
                            <p><?php echo get_theme_mod( 'az_email_handle' ); ?></p>
                        </div>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="nav-logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="canvas-open">
                            <i class="icon_menu"></i>
                        </div>
                        <div class="logo">
                            <a href="/">
                                <?php if ( get_theme_mod( 'az_company_logo_header' )) : ?>
                                    <img src="<?php echo get_theme_mod( 'az_company_logo_header' ) ?>" alt="">
                                </a> 
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri('img/logo.png') ?>" alt="">
                                </a> 
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-logo-right">
                            <ul>
                                <?php if ( get_theme_mod( 'az_phone_handle' )) : ?>
                                    <li>
                                        <i class="icon_phone"></i>
                                        <div class="info-text">
                                            <span>Phone:</span>
                                            <p><?php echo get_theme_mod( 'az_phone_handle' ); ?></p>
                                        </div>
                                    </li>
                                <?php endif ?>
                                <?php if ( get_theme_mod( 'az_address_handle' )) : ?>
                                    <li>
                                        <i class="icon_map"></i>
                                        <div class="info-text">
                                            <span>Address:</span>
                                            <p><?php echo get_theme_mod( 'az_address_handle' ); ?></p>
                                        </div>
                                    </li>
                                <?php endif ?>
                                <?php if ( get_theme_mod( 'az_email_handle' )) : ?>
                                    <li>
                                        <i class="icon_mail"></i>
                                        <div class="info-text">
                                            <span>Email:</span>
                                            <p><?php echo get_theme_mod( 'az_email_handle' ); ?></p>
                                        </div>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <nav class="main-menu">
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
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->