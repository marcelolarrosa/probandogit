<?php 
	function slider_images_customizer_section($wp_customize){
		$wp_customize->add_section( 'az_slider_images', [
			'title' => __('Slider Images','azenta'),
			'priority' => 1
		]);

		$wp_customize->add_setting( 'az_slider_image_1',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_slider_image_2',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_slider_image_3',[
			'default' => '',
			'transport' => 'refresh'
		]);


		$wp_customize->add_control( new WP_Customize_Upload_Control (
				$wp_customize,
				'az_slider_image_1',
				array(
					'label'	    => __('Slider Image 1', 'azenta'),
					'section'   => 'az_slider_images',
					'settings'  => 'az_slider_image_1'
				)
			)
		);

		$wp_customize->add_control( new WP_Customize_Upload_Control (
				$wp_customize,
				'az_slider_image_2',
				array(
					'label'	    => __('Slider Image 2', 'azenta'),
					'section'   => 'az_slider_images',
					'settings'  => 'az_slider_image_2'
				)
			)
		);

		$wp_customize->add_control( new WP_Customize_Upload_Control (
				$wp_customize,
				'az_slider_image_3',
				array(
					'label'	    => __('Slider Image 3', 'azenta'),
					'section'   => 'az_slider_images',
					'settings'  => 'az_slider_image_3'
				)
			)
		);

	}

?>