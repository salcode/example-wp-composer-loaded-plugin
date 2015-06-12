<?php
/*
 * Plugin Name: Example WP Composer Loaded Plugin
 * Description: Example plugin demonstrating making a plugin available for installation via composer
 * Version: 1.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
add_filter( 'the_title', 'fe_example_wp_composer_loaded_plugin_title_mod', 15 );
/**
 * Modify the post title
 *
 * @since 0.1.0
 *
 * @param string $title the post title
 *
 * @return string the post title with modifications
 */
function fe_example_wp_composer_loaded_plugin_title_mod( $title ) {
	$title = "!!{$title}!!";
	return $title;
}
