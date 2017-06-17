<?php

// Register Custom Post Type
function ch_portfolio() {

	$labels = array(
		'name'                  => _x( 'Entries', 'Post Type General Name', 'chrishurst' ),
		'singular_name'         => _x( 'Entry', 'Post Type Singular Name', 'chrishurst' ),
		'menu_name'             => __( 'Portfolio', 'chrishurst' ),
		'name_admin_bar'        => __( 'Entry', 'chrishurst' ),
		'archives'              => __( 'Portfolio Entires', 'chrishurst' ),
		'attributes'            => __( 'Entry Attributes', 'chrishurst' ),
		'parent_item_colon'     => __( 'Parent Entry:', 'chrishurst' ),
		'all_items'             => __( 'All Entries', 'chrishurst' ),
		'add_new_item'          => __( 'Add New Entry', 'chrishurst' ),
		'add_new'               => __( 'Add New Entry', 'chrishurst' ),
		'new_item'              => __( 'New Entry', 'chrishurst' ),
		'edit_item'             => __( 'Edit Entry', 'chrishurst' ),
		'update_item'           => __( 'Update Entry', 'chrishurst' ),
		'view_item'             => __( 'View Entry', 'chrishurst' ),
		'view_items'            => __( 'View Entries', 'chrishurst' ),
		'search_items'          => __( 'Search Entry', 'chrishurst' ),
		'not_found'             => __( 'Not found', 'chrishurst' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'chrishurst' ),
		'featured_image'        => __( 'Featured Image', 'chrishurst' ),
		'set_featured_image'    => __( 'Set featured image', 'chrishurst' ),
		'remove_featured_image' => __( 'Remove featured image', 'chrishurst' ),
		'use_featured_image'    => __( 'Use as featured image', 'chrishurst' ),
		'insert_into_item'      => __( 'Insert into item', 'chrishurst' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'chrishurst' ),
		'items_list'            => __( 'Items list', 'chrishurst' ),
		'items_list_navigation' => __( 'Items list navigation', 'chrishurst' ),
		'filter_items_list'     => __( 'Filter items list', 'chrishurst' ),
	);
	$rewrite = array(
		'slug'                  => 'portfolio',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Entry', 'chrishurst' ),
		'description'           => __( 'Portfolio Entries', 'chrishurst' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'query_portfolio',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'ch_portfolio', 0 );

// Tutorial CPT
function ch_tutorials() {

	$labels = array(
		'name'                  => _x( 'Tutorials', 'Post Type General Name', 'chrishurst' ),
		'singular_name'         => _x( 'Tutorial', 'Post Type Singular Name', 'chrishurst' ),
		'menu_name'             => __( 'Tutorials', 'chrishurst' ),
		'name_admin_bar'        => __( 'Tutorials', 'chrishurst' ),
		'archives'              => __( 'Tutorial Archives', 'chrishurst' ),
		'attributes'            => __( 'Tutorial Attributes', 'chrishurst' ),
		'parent_item_colon'     => __( 'Parent Tutorial:', 'chrishurst' ),
		'all_items'             => __( 'All Tutorials', 'chrishurst' ),
		'add_new_item'          => __( 'Add New Tutorial', 'chrishurst' ),
		'add_new'               => __( 'Add New', 'chrishurst' ),
		'new_item'              => __( 'New Tutorial', 'chrishurst' ),
		'edit_item'             => __( 'Edit Tutorial', 'chrishurst' ),
		'update_item'           => __( 'Update Tutorial', 'chrishurst' ),
		'view_item'             => __( 'View Tutorial', 'chrishurst' ),
		'view_items'            => __( 'View Tutorials', 'chrishurst' ),
		'search_items'          => __( 'Search Tutorial', 'chrishurst' ),
		'not_found'             => __( 'Not found', 'chrishurst' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'chrishurst' ),
		'featured_image'        => __( 'Featured Image', 'chrishurst' ),
		'set_featured_image'    => __( 'Set featured image', 'chrishurst' ),
		'remove_featured_image' => __( 'Remove featured image', 'chrishurst' ),
		'use_featured_image'    => __( 'Use as featured image', 'chrishurst' ),
		'insert_into_item'      => __( 'Insert into Tutorial', 'chrishurst' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Tutorial', 'chrishurst' ),
		'items_list'            => __( 'Tutorials list', 'chrishurst' ),
		'items_list_navigation' => __( 'Tutorials list navigation', 'chrishurst' ),
		'filter_items_list'     => __( 'Filter Tutorials list', 'chrishurst' ),
	);
	$rewrite = array(
		'slug'                  => 'tutorials',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Tutorial', 'chrishurst' ),
		'description'           => __( 'Web and Design Tutorials', 'chrishurst' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'query_tutorial',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'tutorial', $args );

}
add_action( 'init', 'ch_tutorials', 0 );


// Register Custom Taxonomy
function ch_topic_tax() {

	$labels = array(
		'name'                       => _x( 'Topics', 'Taxonomy General Name', 'chrishurst' ),
		'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'chrishurst' ),
		'menu_name'                  => __( 'Topic', 'chrishurst' ),
		'all_items'                  => __( 'All Topics', 'chrishurst' ),
		'parent_item'                => __( 'Parent Topic', 'chrishurst' ),
		'parent_item_colon'          => __( 'Parent Topic:', 'chrishurst' ),
		'new_item_name'              => __( 'New Topic Name', 'chrishurst' ),
		'add_new_item'               => __( 'Add New Topic', 'chrishurst' ),
		'edit_item'                  => __( 'Edit Topic', 'chrishurst' ),
		'update_item'                => __( 'Update Topic', 'chrishurst' ),
		'view_item'                  => __( 'View Topic', 'chrishurst' ),
		'separate_items_with_commas' => __( 'Separate Topics with commas', 'chrishurst' ),
		'add_or_remove_items'        => __( 'Add or remove Topics', 'chrishurst' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'chrishurst' ),
		'popular_items'              => __( 'Popular Topics', 'chrishurst' ),
		'search_items'               => __( 'Search Topics', 'chrishurst' ),
		'not_found'                  => __( 'Not Found', 'chrishurst' ),
		'no_terms'                   => __( 'No Topics', 'chrishurst' ),
		'items_list'                 => __( 'Topics list', 'chrishurst' ),
		'items_list_navigation'      => __( 'Topics list navigation', 'chrishurst' ),
	);
	$rewrite = array(
		'slug'                       => 'topics',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => 'tutorial_topic',
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'topics', 'tutorial', $args );

}
add_action( 'init', 'ch_topic_tax', 0 );







