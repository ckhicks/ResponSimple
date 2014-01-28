<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
get_header(); ?>

	<?php if (is_search()) { ?>
	<header class="archive-header">
		<h1 class="archive-title"><?php printf( __( 'Search Results for "%s"', 'responsimple' ), get_search_query( '', false ) ); ?></h1>
		<p><a href="http://ckhicks.com/search/"><em>Need to search again?</em></a></p>
	</header>
	<hr />
	<?php } ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_excerpt(); //get_template_part( 'content' ); ?>
		<?php endwhile; ?>
		<?php paging_nav(); ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>

<?php get_footer(); ?>