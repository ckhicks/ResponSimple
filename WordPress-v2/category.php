<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */

get_header(); ?>

		<header class="archive-header">
			<h1 class="archive-title"><?php printf( __( 'Archive of all %s', 'responsimple' ), single_cat_title( '', false ) ); ?></h1>
		</header>

		<?php echo '<hr class="non" />'; ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>
	
		<?php paging_nav(); ?>
	
	<?php else : ?>
		<?php if (is_category('tumblr')) { echo '<div class="tumblr">&nbsp;</div>'; } else { get_template_part( 'content', 'none' ); } ?>
	<?php endif; ?>

<?php get_footer(); ?>