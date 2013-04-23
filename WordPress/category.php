<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */

get_header(); ?>

	<div class="container row">
		<div class="two-three col" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'responsimple' ), single_cat_title( '', false ) ); ?></h1>
			
					<?php if ( category_description() ) : // Show an optional category description ?>
					<div class="archive-meta"><?php echo category_description(); ?></div>
					<?php endif; ?>
				</header>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content' ); ?>
				<?php endwhile; ?>
			
				<?php paging_nav(); ?>
			
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div>
		
		<aside class="one-three col">
			<?php get_sidebar(); ?>
		</aside>
	</div>

<?php get_footer(); ?>