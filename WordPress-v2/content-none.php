<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php _e( 'Not the droids you were looking for?', 'responsimple' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_search() ) : ?>

	<p><?php _e( 'Sorry, but nothing matched that search. Once more unto the breach!', 'responsimple' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'Sorry about that - try a search and <a href="mailto:contact@ckhicks.com">let me know</a> if you need anything.', 'responsimple' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div>