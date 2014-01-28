<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
?>

	<footer id="site-footer" class="row" role="footer">
		<div class="container">
			<p class="four col fpage"><a href="http://ckhicks.com/category/articles/" title="">View All Articles &rarr;</a></p>
			<p class="four col">Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.</p>
		</div>
	</footer>

	<?php if (!is_user_logged_in()) echo '<script src="http://code.jquery.com/jquery.min.js"></script>'; ?>
	<?php wp_footer(); ?>

	<script>
		var _gaq=[['_setAccount','UA-10380896-1'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

</body>
</html>