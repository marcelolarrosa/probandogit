<?php 

	function az_setup_theme(){
		register_nav_menu( 'primary', __(' Main Menu ', 'azenta') );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery','caption') );
    }

?>