<?php
	function company_logo_customizer_section( $wp_customize ) {
		$wp_customize->add_section( 'az_company_logo_section', [
			'title' => __('Company Logo','azenta'),
			'priority' => 2
		]);
		

		$wp_customize->add_setting( 'az_company_logo_header',[
			'default' => '../../../img/logo.png',
			'transport' => 'refresh'
			//transport = refresh ----> forces to refresh the setting
		]);

		$wp_customize->add_setting( 'az_company_logo_footer',[
			'default' => '',
			'transport' => 'refresh'
		]);



		$wp_customize->add_control( new WP_Customize_Image_Control(
	           $wp_customize,
	           'az_company_logo_header',
	           array(
				'label' 	=>	__( 'Company Logo Header', 'azenta' ),
				'section' 	=>	'az_company_logo_section',
				'settings'	=>	'az_company_logo_header'
	           )
	       )
	   );


		$wp_customize->add_control( new WP_Customize_Image_Control(
	           $wp_customize,
	           'az_company_logo_footer',
	           array(
				'label' 	=>	__( 'Company Logo Footer', 'azenta' ),
				'section' 	=>	'az_company_logo_section',
				'settings'	=>	'az_company_logo_footer'
	           )
	       )
	   );
	}

?>