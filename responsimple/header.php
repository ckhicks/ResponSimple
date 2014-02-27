<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
?><!doctype html>
<!--[if lt IE 10]><html class="no-js ie" data-template-set="ResponSimple" dir="ltr" xmlns:og="opengraphprotocol.org/schema/" <?php language_attributes(); ?>><![endif]-->
<!--[if gte IE 10]><!--><html class="no-js" data-template-set="ResponSimple" dir="ltr" xmlns:og="http://opengraphprotocol.org/schema/" <?php language_attributes(); ?>><!--<![endif]-->
<head profile="http://gmpg.org/xfn/11"> 

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-width=1.0" />
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta name="description" content="" />
	<meta name="author" content="<?php echo bloginfo( 'title' ) ?>" />
	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> <?php echo bloginfo( 'title' ) ?>. All Rights Reserved." />
	<meta name="robots" content="index, follow" />

	<!--[if IE ]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<!--[if lt IE 8]>
		<script src="<?php bloginfo( 'template_url' ); ?>/js/html5shiv.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php
		if ( is_singular() && get_option('thread_comments') )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>

	<header class="row site-header" role="header">
		
		<h1 class="col site-title"><?php the_title(); ?></h1>
			
		<nav roll="navigation" class="col main-nav">
			<?php wp_nav_menu( array( 'container' => '', 'menu_id' => 'menu' ) ); ?>
		</nav>

	</header>