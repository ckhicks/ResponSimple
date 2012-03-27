<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.6
 */
?>

</div>

<footer class="footer">
	<div class="row">
		<div class="copyright clearfix">
			<?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
		<nav role="navigation" class="nav">
			<!--<ul class="screen-lg"><li><a href="#top" name="#menu">Back to Top</a></li></ul>-->
			<span class="screen-sm"><?php wp_nav_menu( array('menu' => 'Header' ) ); ?>
		</nav>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.7.1.min.js"><\/script>')</script>
<script>
	var _gaq=[['_setAccount','UA-XXXXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?php wp_footer(); ?>

</body>
</html>