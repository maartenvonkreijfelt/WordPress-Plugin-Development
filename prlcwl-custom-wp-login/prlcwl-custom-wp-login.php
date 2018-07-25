<?php
/*
Plugin Name: Pre Custom WP Login
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Change the login error messages and remove the shake effect
A simple example from rhe course Advanced WordPress: Action and Filter Hooks at lynda.com
Version: 1.0.0
Author: Maarten von Kreijfelt
Author URI: http://www.preludio.nl
License: GPL v2+
License URI: https//www.gnu.org/licences/gpl-2.0.html
Text Domain: prlcwl
Domain Path: http:www.preludio.nl
*/



//If this file is called directly then abort
if (!defined('ABSPATH')){
	die;
}

add_action( 'login_enqueue_scripts', 'cwpl_login_stylesheet' );
/**
 * Load custom stylesheet on login page.
 */
function cwpl_login_stylesheet() {
	wp_enqueue_style( 'cwpl-custom-stylsheet', plugin_dir_url(__FILE__) . 'css/prlcwl-login-styles.css' );
}

add_filter( 'login_errors', 'cwpl_error_message');
/**
 * Returns a custom login error message.
 */
function cwpl_error_message() {
	return 'Well, that was not it!';
}

add_action( 'login_head', 'cwpl_remove_shake');
/**
 * Remove login page shake.
 */
function cwpl_remove_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}



