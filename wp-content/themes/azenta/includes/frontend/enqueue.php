<?php

function up_enqueue() {
    $uri    = get_theme_file_uri();
    

    // Register styles
    wp_register_style('bootstrap-min', $uri . '/css/bootstrap.min.css');
    wp_register_style('font-awesome', $uri . '/css/font-awesome.min.css');
    wp_register_style('elegant-icons', $uri . '/css/elegant-icons.css');
    wp_register_style('themify-icons', $uri . '/css/themify-icons.css');
    wp_register_style('nice-select', $uri . '/css/nice-select.css');
    wp_register_style('jquery-ui-min', $uri . '/css/jquery-ui.min.css');
    wp_register_style('owl-carousel-min', $uri . '/css/owl.carousel.min.css');
    wp_register_style('magnific-popup', $uri . '/css/magnific-popup.css');
    wp_register_style('slicknav-min', $uri . '/css/slicknav.min.css');
    wp_register_style('az_stylesheet', $uri . '/style.css', [], time());


    // Register scripts
    wp_register_script('bootstrap-min', $uri . '/js/bootstrap.min.js', ['jquery'], '1.4.1', true );
    wp_register_script('jquery-magnific-popup', $uri . '/js/jquery.magnific-popup.min.js', [], false, true);
    wp_register_script('jquery-nice-select', $uri . '/js/jquery.nice-select.min.js', [], false, true);
    wp_register_script('jquery-slicknav', $uri . '/js/jquery.slicknav.js', [], false, true);
    wp_register_script('jquery-ui-min', $uri . '/js/jquery-ui.min.js', [], false, true);
    wp_register_script('owl-carousel-min', $uri . '/js/owl.carousel.min.js', [], false, true);
    wp_register_script('main', $uri . '/js/main.js', [], false, true);


    // Enqueue styles
    wp_enqueue_style('bootstrap-min');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('elegant-icons');
    wp_enqueue_style('themify-icons');
    wp_enqueue_style('nice-select');
    wp_enqueue_style('jquery-ui-min');
    wp_enqueue_style('owl-carousel-min');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('slicknav-min');
    wp_enqueue_style('az_stylesheet');


    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-min');
    wp_enqueue_script('jquery-magnific-popup');
    wp_enqueue_script('jquery-nice-select');
    wp_enqueue_script('jquery-slicknav');
    wp_enqueue_script('jquery-ui-min');
    wp_enqueue_script('owl-carousel-min');
    wp_enqueue_script('main');
}

?>