<?php 

	function az_register_required_plugins(){
		$plugins 	= 	[
			[
				'name'		=>	'Advanced Custom Fields',
				'slug'  	=>  'advanced-custom-fields',
				'required' 	=>	true
			],
			[
				'name'		=>	'Classic Editor',
				'slug'  	=>  'classic-editor',
				'required' 	=>	false
			]
		];



		$config  = [
			'id'			=>	'azenta',
			'menu'			=>	'tgmpa-install-plugins',
			'parent_slug'	=>	'themes.php',
			'capability'	=>	'edit_theme_options',
			'has_notices'	=>	true,
			'dismissable'	=>	true
		];

		tgmpa( $plugins, $config );

	}

?>