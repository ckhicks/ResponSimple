<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */

//
//  Proper WP jQuery - WayOfTheFuture™
//  This allows loading jQuery into the header or footer, plus controlling which version is used, if needed.
//
	add_action( 'wp_enqueue_scripts', 'proper_wp_jquery' );
	function proper_wp_jquery(){
		wp_deregister_script('jquery');
		wp_register_script('jquery', (get_template_directory_uri() . '/scripts/jquery-1.11.1.js'), false, '1.11.1', true);
		wp_enqueue_script('jquery');
	}

//
//  Menus
//
	register_nav_menu( 'header', 'Header Menu' );

//
//  Post/Page Tools
//
	// include('functions/post-page.php');