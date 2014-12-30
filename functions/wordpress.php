<?php

//
//  Titles
//
	function responsimple_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		Add the site name.
		$title .= get_bloginfo( 'name' );

//		Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title";

		if ( is_single() )
			$title = get_the_title() . ' by @ckhicks';

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'responsimple' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'responsimple_wp_title', 10, 2 );

//
//  Description/Excerpt
//

	function responsimple_wp_desc() {
		global $paged, $page;
		$site_description = get_bloginfo( 'description', 'display' );
		$single_desc = get_the_excerpt();
		if ( is_home() || is_front_page() )
			echo $site_description;
		if ( is_single() )
			echo $single_desc;
		return $desc;
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
//  Template Name
//
	function get_template_name() {
		if (is_page()) {
			global $post;
			return str_replace('.php', '', get_post_meta($post->ID, '_wp_page_template', true));
		}
		return '';
	}

//
//  Widgets
//
	function responsimple_widgets_init() {

		register_sidebar( array(
			'name' => __( 'Sidebar', 'responsimple' ),
			'id' => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
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
			<div class="screen-reader-text visuallyhidden"><?php _e( 'Posts navigation', 'responsimple' ); ?></div>
			<div class="nav-links">
				<?php if ( get_next_posts_link() ) : ?>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'responsimple' ) ); ?></div>
				<?php endif; ?>
				<?php if ( get_previous_posts_link() ) : ?>
				<div class="nav-next">&middot; <?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'responsimple' ) ); ?></div>
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
			<div class="screen-reader-text visuallyhidden"><?php _e( 'Post navigation', 'responsimple' ); ?></div>
			<div class="nav-links">
				<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'responsimple' ) ); ?>
				<?php next_post_link( '%link', _x( '%title <span class="meta-nav next">&rarr;</span>', 'Next post link', 'responsimple' ) ); ?>
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

//
//  Better Excerpts
//
	function get_link_url() {
		$has_url = get_the_url();

		return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	}