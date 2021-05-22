<?php
	function az_customize_register( $wp_customize ){
		header_contact_info_customizer_section( $wp_customize );
		company_logo_customizer_section( $wp_customize );
		footer_social_links_customizer_section( $wp_customize );
		slider_images_customizer_section( $wp_customize );
		partners_logos_customizer_section( $wp_customize );
		promotional_video_customizer_section( $wp_customize );
	};
?>