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
		<p><em>Need to search again?</em></p>
		<?php get_search_form(); ?>
	</header>
	<hr />
	<?php } ?>

	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'content' );
			endwhile;
		paging_nav();
		else :
			get_template_part( 'content', 'none' );
		endif;
	?>

<?php get_footer(); ?>