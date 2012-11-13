<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'responsimple'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

$options = array();
	
//	General Settings
	$options[] = array(
		'name' => __('General Settings', 'responsimple'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Header Image', 'responsimple'),
		'desc' => __('Upload a header image for this website.', 'responsimple'),
		'id' => 'header_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Google Analytics', 'responsimple'),
		'desc' => __('Google Analytics tracking code.', 'responsimple'),
		'id' => 'google',
		'std' => 'UA-XXXXXXX-X',
		'type' => 'text');

	$options[] = array(
		'name' => __('Site Keywords', 'responsimple'),
		'desc' => __('Insert keywords for your default meta tags.', 'responsimple'),
		'id' => 'keywords',
		'std' => '',
		'type' => 'textarea');

return $options;

}