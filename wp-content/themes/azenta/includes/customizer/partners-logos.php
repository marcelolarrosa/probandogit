<?php
	function partners_logos_customizer_section( $wp_customize ) {
		$wp_customize->add_section( 'az_partners_logos', [
			'title' => __('Partner Logos','azenta'),
			'priority' => 1
		]);

		$wp_customize->add_setting( 'az_partner_logo_1',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_partner_logo_2',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_partner_logo_3',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_partner_logo_4',[
			'default' => '',
			'transport' => 'refresh'
		]);

		$wp_customize->add_setting( 'az_partner_logo_5',[
			'default' => '',
			'transport' => 'refresh'
		]);


		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'az_partner_logo_1',
			array(
				'label' 	=>	__( 'Partner Logo 1', 'azenta' ),
				'section' 	=>	'az_partners_logos',
				'settings'	=>	'az_partner_logo_1'
				
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'az_partner_logo_2',
			array(
				'label' 	=>	__( 'Partner Logo 2', 'azenta' ),
				'section' 	=>	'az_partners_logos',
				'settings'	=>	'az_partner_logo_2'
				
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'az_partner_logo_3',
			array(
				'label' 	=>	__( 'Partner Logo 3', 'azenta' ),
				'section' 	=>	'az_partners_logos',
				'settings'	=>	'az_partner_logo_3'
				
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'az_partner_logo_4',
			array(
				'label' 	=>	__( 'Partner Logo 4', 'azenta' ),
				'section' 	=>	'az_partners_logos',
				'settings'	=>	'az_partner_logo_4'
				
				)
			) 
		);

		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'az_partner_logo_5',
			array(
				'label' 	=>	__( 'Partner Logo 5', 'azenta' ),
				'section' 	=>	'az_partners_logos',
				'settings'	=>	'az_partner_logo_5'
				
				)
			) 
		);
	}

?>