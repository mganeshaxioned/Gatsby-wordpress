<?php

/*=============================================
ACF OPTIONS PAGE
=============================================*/

function register_acf_options_pages() {

	// check function exists
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	// register global options page
	acf_add_options_page(array(
		'post_id' 		=> 'options',
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-site-alt3',
		'redirect'		=> false,
		'show_in_graphql'  => true,
		'position'				=> 30
	));

}

add_action( 'acf/init', 'register_acf_options_pages' );


?>