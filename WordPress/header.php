<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.8
 */
?><!doctype html>

<!-- replace UA parser with Rogie's JS file? -->

<!--[if lt IE 9]><html class="no-js ie" data-template-set="ResponSimple" dir="ltr" xmlns:og="opengraphprotocol.org/schema/" <?php language_attributes(); ?>><![endif]-->
<!--[if gte IE 9]><!--><html data-template-set="ResponSimple" dir="ltr" xmlns:og="http://opengraphprotocol.org/schema/" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">

<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'responsimple' ), max( $paged, $page ) );
	?></title>
	
<meta name="title" content="<?php bloginfo('name'); ?>">
<meta name="keywords" content="<?php echo of_get_option('keywords'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="<?php bloginfo('name'); ?>">
<meta name="Copyright" content="Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320"/>
<meta http-equiv="cleartype" content="on">

<script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

<?php $google = of_get_option('google'); if ('' == $google) {} else { ?>
<script>
	var _gaq=[['_setAccount','<?php echo of_get_option('google'); ?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php } ?>
</head>
<body <?php body_class(); ?>>

	<header class="container row" role="header">
		<h1 id="site-title" class="two-four col"><a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr(get_bloginfo('name','display')); ?>" rel="home"><?php echo esc_attr(get_bloginfo('name','display')); echo ' || '; echo esc_attr(get_bloginfo('description','display')); ?></a></h1>
		<nav class="fwo-four col" role="navigation">
			<?php wp_nav_menu( array() ); ?>
		</nav>
	</header>