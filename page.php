<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.7
 */

get_header(); ?>

	<section role="content" class="clearfix">

		<article class="row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>

				<?php //the_post(); ?>

				<?php the_content(); ?>

				<?php //comments_template( '', true ); ?>

			<?php endwhile; endif; ?>

		</article>
	
	</section>

<?php get_footer(); ?>