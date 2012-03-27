<?php
/**
 * ResponSimple functions and definitions
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'responsimple_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.6
 */

//
//  Theme Stuff
//
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	add_theme_support( 'post-thumbnails' );
	function new_excerpt_length($length) { return 10; }
	add_filter('excerpt_length', 'new_excerpt_length');
	function new_excerpt_more($more) { return '...'; }
	add_filter('excerpt_more', 'new_excerpt_more');
	
//
//  Shortcodes
//


//
//  Menus
//
	register_nav_menu( 'header', 'Header Menu' );
	
//
//  Widgets
//
	function responsimple_widgets_init() {

		register_sidebar( array(
			'name' => __( 'Sidebar', 'responsimple' ),
			'id' => 'sidebar-home1',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
				
	}
	add_action( 'widgets_init', 'responsimple_widgets_init' );

//
//  Posted On
//
	function posted_on() {
		printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			get_the_author()
		);
	}

?>