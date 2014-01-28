<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
	<?php if ( is_single() || is_page() ) : ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
	<?php else : ?>
		<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="tiny">&infin;</a> <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'responsimple' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<?php endif; ?>
	<?php if ( !is_page() ) : ?>
		<div class="small post-meta"><?php entry_date(); ?> &middot; <span class="tags"><?php the_tags(''); ?> &middot; by CK Hicks</span></div>
	<?php endif; ?>
	</header>

	<?php if ( is_search() || is_archive() || is_category() ) : ?>
	<div class="post-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="post-content">
		<?php global $more; $more = 1; the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'responsimple' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
	<?php endif; ?>

	<?php if (!is_single()) { ?>
	<footer class="post-meta">
		<?php if (comments_open()) { ?>
		<div class="comments-link">
			<?php comments_popup_link('Reply'); ?>
		</div>
		<div>&middot; <a href="http://twitter.com/?status='<?php the_title(); ?>'%20(<?php the_permalink(); ?>)%20by%20@ckhicks" title="<?php the_permalink(); ?>">Tweet</a> &middot; <a href="http://www.instapaper.com/hello2?u=<?php the_permalink(); ?>&s=&a=" title="Add <?php the_title(); ?> to Instapaper">Read Later</a></div>
		<?php } ?>
	</footer>
	<?php } ?>
</article>

<?php if (!is_single() && !is_page()) echo '<hr />'; ?>