<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.7
 */
?>

</div>

<footer class="footer" class="clearfix">
	<div class="row">
		<div class="copyright clearfix">
			<?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
	</div>
</footer>

<!-- I don't use this becuase I call jQuery just before wp_head. Feel free to adapt as needed.
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php //bloginfo( 'template_url' ); ?>/js/jquery-1.7.2.min.js"><\/script>')</script>
-->
<script>
	var _gaq=[['_setAccount','UA-XXXXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?php wp_footer(); ?>

</body>
</html>