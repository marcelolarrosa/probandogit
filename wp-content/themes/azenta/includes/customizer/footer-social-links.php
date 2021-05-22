<?php
	function footer_social_links_customizer_section( $wp_customize ) {
		$wp_customize->add_section( 'az_footer_social_links', [
			'title' => __('Footer Social Links','azenta'),
			'priority' => 2
		]);
		


		$wp_customize->add_setting( 'az_facebook_handle',[
			'default' => 'https://facebook.com',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_instagram_handle',[
			'default' => 'https://instagram.com',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_twitter_handle',[
			'default' => 'https://twitter.com',
			'transport' => 'refresh'
		]);



		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_facebook_handle',
			array(
				'label' 	=>	__( 'Facebook', 'azenta' ),
				'section' 	=>	'az_footer_social_links',
				'settings'	=>	'az_facebook_handle',
				'type'		=>	'text'
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_instagram_handle',
			array(
				'label' 	=>	__( 'Instagram', 'azenta' ),
				'section' 	=>	'az_footer_social_links',
				'settings'	=>	'az_instagram_handle',
				'type'		=>	'text'
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_twitter_handle',
			array(
				'label' 	=>	__( 'Twitter', 'azenta' ),
				'section' 	=>	'az_footer_social_links',
				'settings'	=>	'az_twitter_handle',
				'type'		=>	'text'
				)
			) 
		);
	}

?>