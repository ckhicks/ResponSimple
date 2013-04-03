<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'responsimple' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; ?>

		<div class="post-meta">
			<?php entry_date(); ?>
			<?php edit_post_link( __( 'Edit', 'responsimple' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</header>

	<?php if ( is_search() ) : // Search ?>
	<div class="post-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="post-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'responsimple' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'responsimple' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
	<?php endif; ?>

	<footer class="post-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'responsimple' ) . '</span>', __( 'One comment so far', 'responsimple' ), __( 'View all % comments', 'responsimple' ) ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer>
</article>