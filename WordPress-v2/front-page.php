<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
get_header(); ?>

	<div class="row home-intro">

		<div class="container">
		
			<div class="col bio">bio</div>

			<div class="col feature">
				<?php $the_query = new WP_Query( array( 'posts_per_page' => '1' ) );
					if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
					$the_query->the_post(); ?>
					<?php the_title(); ?>
					<?php the_excerpt(); ?>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>

		</div>

	</div>

	<div class="row">

		<div class="container">

			<aside class="col sidebar" role="complementary">
				latest writings<br>
				project thumbs (ftm, ?)<br>
				latest doctrines
			</aside>

			<section class="col main" role="main">
				<?php $the_query = new WP_Query( array( 'posts_per_page' => '9', 'offset' => '1' ) );
					if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
					$the_query->the_post(); ?>
					<article>
						<?php the_title(); ?>
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</section>

		</div>

	</div>

<?php get_footer(); ?>