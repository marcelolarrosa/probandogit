<?php
	function promotional_video_customizer_section( $wp_customize ) {
		$wp_customize->add_section( 'az_promotional_video_section', [
			'title' => __('Home Promotional Video','azenta'),
			'priority' => 2
		]);
		

		$wp_customize->add_setting( 'az_promo_video_link',[
			'default' => 'https://www.youtube.com/watch?v=Lg0F4LW3Biw',
			'transport' => 'refresh'
		]);


		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_promo_video_link',
			array(
				'label' 	=>	__( 'Promotional Video Link', 'azenta' ),
				'section' 	=>	'az_promotional_video_section',
				'settings'	=>	'az_promo_video_link'
				)
			) 
		);
	}

?>