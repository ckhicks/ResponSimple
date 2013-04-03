<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */

get_header(); ?>

	<div class="container row">
		<div class="two-three col" role="main">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
				<?php paging_nav(); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
		
		<aside class="one-three col">
			<?php get_sidebar(); ?>
		</aside>
	</div>

<?php get_footer(); ?>