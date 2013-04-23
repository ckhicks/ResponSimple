<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */

//
//  Theme Stuff
//
	//add_editor_style( 'editor-style.css' );
	add_theme_support( 'automatic-feed-links' );
	//add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	add_theme_support( 'post-thumbnails' );

//
//  Options Framework ()
//
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}
	
//
//  Shortcodes
//
	// [WayOfTheFuture™]

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
			'id' => 'sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
				
	}
	add_action( 'widgets_init', 'responsimple_widgets_init' );

//
//  Post/Page Navigation
//
	if ( ! function_exists( 'paging_nav' ) ) :
	function paging_nav() {
		global $wp_query;
		if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
			return;
		?>
		<nav class="navigation paging-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'responsimple' ); ?></h1>
			<div class="nav-links">
				<?php if ( get_next_posts_link() ) : ?>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'responsimple' ) ); ?></div>
				<?php endif; ?>
				<?php if ( get_previous_posts_link() ) : ?>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'responsimple' ) ); ?></div>
				<?php endif; ?>
			</div>
		</nav>
		<?php
	}
	endif;

	if ( ! function_exists( 'post_nav' ) ) :
	function post_nav() {
		global $post;
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );
		if ( ! $next && ! $previous )
			return;
		?>
		<nav class="navigation post-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'responsimple' ); ?></h1>
			<div class="nav-links">
				<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'responsimple' ) ); ?>
				<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'responsimple' ) ); ?>
	
			</div>
		</nav>
		<?php
	}
	endif;

//
//  Post Meta
//
	if ( ! function_exists( 'entry_date' ) ) :
	function entry_date( $echo = true ) {
		$format_prefix = ( has_post_format( 'chat' ) || has_post_format( 'status' ) ) ? _x( '%1$s on %2$s', '1: post format name. 2: date', 'responsimple' ): '%2$s';
	
		$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
			esc_url( get_permalink() ),
			esc_attr( sprintf( __( 'Permalink to %s', 'responsimple' ), the_title_attribute( 'echo=0' ) ) ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
		);
	
		if ( $echo )
			echo $date;
	
		return $date;
	}
	endif;

/**
 * Returns the URL from the post.
 *
 * @uses get_the_link() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since Twenty Thirteen 1.0
 * @return string URL
 */
	function get_link_url() {
		$has_url = get_the_url();
	
		return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	}

?>