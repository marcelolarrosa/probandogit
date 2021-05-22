<?php
	function header_contact_info_customizer_section( $wp_customize ) {
		$wp_customize->add_section( 'az_header_contact_info', [
			'title' => __('Header Contact Info','azenta'),
			'priority' => 1
		]);

		$wp_customize->add_setting( 'az_phone_handle',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_address_handle',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_email_handle',[
			'default' => '',
			'transport' => 'refresh'
		]);


		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_phone_handle',
			array(
				'label' 	=>	__( 'Phone', 'azenta' ),
				'section' 	=>	'az_header_contact_info',
				'settings'	=>	'az_phone_handle',
				'type'		=>	'text'
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_address_handle',
			array(
				'label' 	=>	__( 'Address', 'azenta' ),
				'section' 	=>	'az_header_contact_info',
				'settings'	=>	'az_address_handle',
				'type'		=>	'text'
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'az_email_handle',
			array(
				'label' 	=>	__( 'Email', 'azenta' ),
				'section' 	=>	'az_header_contact_info',
				'settings'	=>	'az_email_handle',
				'type'		=>	'text'
				)
			) 
		);
	}

?>