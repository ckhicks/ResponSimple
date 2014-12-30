<?php
/**
 * @package WordPress
 * @subpackage ResponSimple
 * @since ResponSimple 2.0.1
 */
?><!doctype html>
<!--[if lt IE 11]><html class="no-js ie" <?php language_attributes(); ?>><![endif]-->
<!--[if gte IE 11]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">

	<meta charset="<?php echo get_bloginfo( 'charset' ); ?>" />
	<!--[if IE ]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-width=1" />
	<meta name="description" content="" />
	<meta name="author" content="<?php echo get_bloginfo( 'title' ) ?>" />
	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> <?php echo get_bloginfo( 'title' ) ?>. All Rights Reserved." />
	<meta name="robots" content="index, follow" />

	<!--[if lt IE 8]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="pingback" href="<?php echo get_bloginfo('pingback_url'); ?>" />
	<?php
		if ( is_singular() && get_option('thread_comments') )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>

	<header class="site-header" role="banner">

		<h1 class="site-title"><?php the_title(); ?></h1>

		<nav class="main-nav" role="navigation">
			<?php wp_nav_menu( array( 'container' => '', 'menu_id' => 'menu' ) ); ?>
		</nav>

	</header>