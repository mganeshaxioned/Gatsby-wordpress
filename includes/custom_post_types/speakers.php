<?php

/*==========================================
Speakers Post Type
==========================================*/

function custom_post_type_speaker() {
	register_post_type( 'speakers',
		array(
			'labels' => array(
				'name' => __( 'Speakers' ),
				'singular_name' => __( 'Speaker' ),
				'add_new' => __('Add New Speaker'),
				'add_new_item' => __('Add New Speaker'),
				'edit_item' => __('Edit Speaker'),
				'new_item' => __('New Speaker'),
				'view_item' => __('View Speaker'),
				'view_items' => __('View Speakers'),
				'search_items' => __('Search Speakers'),
				'all_items' => __('All Speakers'),
			),
			'supports' => array(
			'title', 'editor', 'thumbnail', 'excerpt' 
		),
		'show_in_rest' => true,
		'query_var' => true,
		'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
		'publicly_queryable' => true,  // you should be able to query it
		'show_in_rest'        => true,
		'show_ui' => true,  // you should be able to edit it in wp-admin
		'exclude_from_search' => false,  // you should exclude it from search results
		'show_in_nav_menus' => true,  // you shouldn't be able to add it to menus
		'has_archive' => true,  // it shouldn't have archive page
		'menu_icon' => 'dashicons-groups',
		'rewrite' => true,
		'capability_type'    => 'post',
		'rest_base'     => 'speaker',	
		'show_in_graphql' => true,
		'graphql_single_name' => 'speaker',
		'graphql_plural_name' => 'speakers',
		)
	);

	register_taxonomy(
		'industry',
		'speakers',
		array(
			'hierarchical' => true,
			'label' => 'Industry',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'speaker',
				'with_front' => false
			),
			'show_in_graphql' => true,
			'graphql_single_name' => 'industry',
			'graphql_plural_name' => 'industrys',
		)
	);
}

add_action( 'init', 'custom_post_type_speaker', 1 );

?>