<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */

get_header(); ?>

	<div class="container row">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); //, get_post_format() ?>
			<?php endwhile; ?>
			<?php paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>