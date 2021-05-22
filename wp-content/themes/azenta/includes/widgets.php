<?php 

	function az_widgets(){
		register_sidebar([
			'name' => __( 'Azenta Sidebar', 'azenta' ),
			'id'=> 'az_sidebar',
			'description' => __( 'Sidebar for the Azenta Theme', 'azenta' )			
		]);
	}

?>