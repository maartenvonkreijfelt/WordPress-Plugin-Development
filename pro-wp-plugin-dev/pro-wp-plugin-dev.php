<?php
/*
Plugin Name:  Professional Wordpress Plugin Development
Description:  Example plugin for the book, "Professional Wordpress Plugin Development", at wrox.com (Safaribooksonline).
Plugin URI:   https://www.preludio.nl/plugins/pro-wp-plugin-dev
Author:       Maarten von Kreijfelt
Version:      1.0
Text Domain:  pro-wp-plugin-dev
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

//wp_footer hook
function boj_example_footer_message() {

	echo '<div class="color:black; font-size:40px;display:block;">This site is built using <a href="http://wordpress.org"    title="WordPress publishing platform">WordPress</a>.</div>';

}
add_action( 'wp_footer', 'boj_example_footer_message', 1 );


