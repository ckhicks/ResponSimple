<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */

get_header(); ?>

	<?php if (is_page('muse')) { ?>

	<?php while (have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<hr class="nope" />
	<?php global $wp_query; query_posts( array( 'category_name' => 'shoot-the-muse' ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content-muse' ); ?>
		<?php paging_nav(); ?>
	<?php endwhile; wp_reset_query(); ?>

	<?php } elseif (is_page('archive')) { ?>

	<?php cg_get_archives_by_year('24', '4'); ?>

	<?php } else { ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content' ); ?>
		<?php paging_nav(); ?>
		<?php comments_template(); ?>
	<?php endwhile; ?>

	<?php } ?>

<?php get_footer(); ?>