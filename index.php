<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.7
 */

get_header(); ?>

	<section role="content" id="" class="row clearfix">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="eight columns">
			<header>
				<h2><a href="" title="">title</a></h2>
			</header>
			<div>
				<p>article</p>
			</div>
			<footer>
				date, etc.
			</footer>
		</article>

		<?php endwhile;  endif; ?>

	</section>

<?php get_footer(); ?>