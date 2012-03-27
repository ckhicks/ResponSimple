<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 1.6
 */
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html id="www-domain-com" data-template-set="ResponSimple" <?php language_attributes(); ?>>
<!--<![endif]-->
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
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="google-site-verification" content="">
<meta name="author" content="<?php bloginfo('name'); ?>">
<meta name="Copyright" content="Copyright <?php date_default_timezone_set('UTC'); echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.">
<meta name="DC.title" content="<?php bloginfo('name'); ?>">
<meta name="DC.subject" content="<?php bloginfo('description'); ?>">
<meta name="DC.creator" content="<?php bloginfo('name'); ?>">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320"/>
<meta http-equiv="cleartype" content="on">

<!-- <link rel="shortcut icon" href="_/img/favicon.ico">
This is the traditional favicon.
	 - size: 16x16 or 32x32
	 - transparency is OK
	 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
	 
<!-- <link rel="apple-touch-icon" href="_/img/apple-touch-icon.png">
The is the icon for iOS's Web Clip.
	 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
	 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
	 - Transparency is not recommended (iOS will put a black BG behind the icon)

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
<link rel="shortcut icon" href="img/l/apple-touch-icon.png"> -->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- Used for Demo -->
<style>
[class*="span"] {
  background-color: #eee;
  text-align: center;
  min-height: 36px;
  margin-bottom: 15px;
}
</style>

<!--<script src="<?php bloginfo( 'stylesheet_url' ); ?>/view.min.js?auto"></script>-->

<!--<script src="<?php //bloginfo( 'template_url' ); ?>/js/modernizr-2.0.6.min.js"></script>-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header role="header" class="header">
		<div class="row">
			<hgroup class="span12">
				<h1 id="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr(get_bloginfo('name','display')); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</hgroup>
		</div>
		<div class="row">
			<nav role="navigation" class="nav menu span12">
				<?php wp_nav_menu( array() ); ?>
			</nav>
		</div>
	</header>

<div class="content">