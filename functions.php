<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */

//
//  Theme Updater - WayOfTheFuture™
//
	include('functions/github-updater.php');
	function rs_gitup_updater() {
		if ( !function_exists( 'gitup_updater_register' ) )
			return false;
		gitup_updater_register( array(
			'owner'	=> 'ckhicks',
			'repo'	=> 'responsimple',
			'slug'	=> 'functions/github-updater.php'
		) );
	}
	rs_gitup_updater();

//
//  Proper WP jQuery
//  This allows loading jQuery into the header or footer, plus controlling which version is used, if needed.
//
	add_action( 'wp_enqueue_scripts', 'proper_wp_jquery' );
	function proper_wp_jquery(){
		wp_deregister_script('jquery');
		wp_register_script('jquery', (get_template_directory_uri() . '/scripts/jquery-2.1.3.js'), false, '2.1.3', true);
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

define('DISALLOW_FILE_EDIT', true);