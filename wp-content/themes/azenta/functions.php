<?php 

ini_set('xdebug.max_nesting_level', 3000);




// Hooking up our function to theme setup
add_action( 'init', 'properties_posttype' );
add_action( 'init', 'agents_posttype' );
add_action( 'tgmpa_register', 'az_register_required_plugins' );


// Includes
include( get_theme_file_path('/includes/frontend/enqueue.php') );
include( get_theme_file_path('/includes/custom-post-types.php') );
include( get_theme_file_path('/includes/theme-pages.php') );
include( get_theme_file_path('/includes/setup.php') );
include( get_theme_file_path('/includes/widgets.php') );
include( get_theme_file_path('/includes/customizer.php') ); // Customizer register
include( get_theme_file_path('/includes/customizer/header-contact-info.php') );
include( get_theme_file_path('/includes/customizer/footer-social-links.php') );
include( get_theme_file_path('/includes/customizer/slider-images-customizer.php') );
include( get_theme_file_path('/includes/customizer/partners-logos.php') );
include( get_theme_file_path('/includes/customizer/company-logo-customizer.php') );
include( get_theme_file_path('/includes/customizer/promotional-video.php') );
require_once( get_theme_file_path('/includes/libs/class-tgm-plugin-activation.php') );
include( get_theme_file_path('/includes/register-plugins.php') );
include( get_theme_file_path('/includes/advanced-custom-fields.php') );


//Hooks
add_action('wp_enqueue_scripts', 'up_enqueue');
add_action('after_setup_theme', 'az_setup_theme');
add_action('widgets_init', 'az_widgets');
add_action('customize_register', 'az_customize_register');
add_action('after_switch_theme', 'create_pages_on_theme_activation');

// The action acf/init works with Pro version of ACF. For basic version you have to use acf/register_fields to register your custom fields.
add_action('acf/register_fields', 'acf_add_local_field_group');



//Shortcodes




?>