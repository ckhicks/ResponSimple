<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */

if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="sidebar-container" role="complementary">
			<?php dynamic_sidebar( 'sidebar' ); ?>
	</div>
<?php endif; ?>