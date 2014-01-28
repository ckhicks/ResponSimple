<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<header class="archive-header">
			<?php if (is_month()) { ?>
			<h1 class="archive-title"><?php printf( __( 'Archives %s', 'responsimple' ), single_cat_title( '', false ) ); ?></h1>
			<?php } else { ?>
			<h1 class="archive-title"><?php printf( __( 'Topic: %s', 'responsimple' ), single_cat_title( '', false ) ); ?></h1>
			<?php } ?>
		</header>

		<?php echo '<hr class="non" />'; ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>
	
		<?php paging_nav(); ?>
	
	<?php else : ?>
		<?php if (is_category('tumblr')) { echo '<div class="tumblr">&nbsp;</div>'; } else { get_template_part( 'content', 'none' ); } ?>
	<?php endif; ?>

<?php get_footer(); ?>