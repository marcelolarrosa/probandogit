<?php

// Properties Custom Post Type
function properties_posttype() {
    register_post_type( 'properties',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Properties' ),
                'singular_name' => __( 'Property' ),
                'menu_name'             => _x( 'Properties', 'Admin Menu text', 'property' ),
                'name_admin_bar'        => _x( 'Property', 'Add New on Toolbar', 'property' ),
                'add_new'               => __( 'Add New', 'property' ),
                'add_new_item'          => __( 'Add New property', 'property' ),
                'new_item'              => __( 'New property', 'property' ),
                'edit_item'             => __( 'Edit property', 'property' ),
                'view_item'             => __( 'View property', 'property' ),
                'all_items'             => __( 'All properties', 'property' ),
                'search_items'          => __( 'Search properties', 'property' ),
                'parent_item_colon'     => __( 'Parent properties:', 'property' ),
                'not_found'             => __( 'No properties found.', 'property' ),
                'not_found_in_trash'    => __( 'No properties found in Trash.', 'property' ),
                'featured_image'        => _x( 'Property Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'property' ),
                'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'property' ),
                'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'property' ),
                'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'property' ),
                'archives'              => _x( 'property archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'property' ),
                'insert_into_item'      => _x( 'Insert into property', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'property' ),
                'uploaded_to_this_item' => _x( 'Uploaded to this property', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'property' ),
                'filter_items_list'     => _x( 'Filter properties list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'property' ),
                'items_list_navigation' => _x( 'Properties list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'property' ),
                'items_list'            => _x( 'Properties list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'property' ),
    
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'properties'),
            'show_in_rest' => true,
            'menu_icon'           => 'dashicons-admin-home',
 
        )
    );
}
// Agents Custom Post Type
function agents_posttype() {
    register_post_type( 'agents',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Agents' ),
                'singular_name' => __( 'Agent' ),
                'menu_name'             => _x( 'Agents', 'Admin Menu text', 'agent' ),
                'name_admin_bar'        => _x( 'Agent', 'Add New on Toolbar', 'agent' ),
                'add_new'               => __( 'Add New', 'agent' ),
                'add_new_item'          => __( 'Add New agent', 'agent' ),
                'new_item'              => __( 'New agent', 'agent' ),
                'edit_item'             => __( 'Edit agent', 'agent' ),
                'view_item'             => __( 'View agent', 'agent' ),
                'all_items'             => __( 'All agents', 'agent' ),
                'search_items'          => __( 'Search agents', 'agent' ),
                'parent_item_colon'     => __( 'Parent agents:', 'agent' ),
                'not_found'             => __( 'No agents found.', 'agent' ),
                'not_found_in_trash'    => __( 'No agents found in Trash.', 'agent' ),
                'featured_image'        => _x( 'Agent Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'agent' ),
                'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'agent' ),
                'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'agent' ),
                'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'agent' ),
                'archives'              => _x( 'agent archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'agent' ),
                'insert_into_item'      => _x( 'Insert into agent', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'agent' ),
                'uploaded_to_this_item' => _x( 'Uploaded to this agent', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'agent' ),
                'filter_items_list'     => _x( 'Filter agents list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'agent' ),
                'items_list_navigation' => _x( 'agents list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'agent' ),
                'items_list'            => _x( 'agents list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'agent' ),
    
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'agents'),
            'show_in_rest' => true,
            'menu_icon'           => 'dashicons-admin-users',
 
        )
    );
}


?>