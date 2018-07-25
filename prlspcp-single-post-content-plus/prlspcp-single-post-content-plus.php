<?php
/*
Plugin Name: Prl Single Post Content Plus
Plugin URI: http://www.preludio.nl
Description: Add a  widget/sidebar to a single post.
Version: 1.0.0
Author: Maarten von Kreijfelt
Author URI: http://www.preludio.nl
License: GPL v2+
License URI: https//www.gnu.org/licences/gpl-2.0.html
Text Domain: prlspcp
Domain Path: http:www.preludio.nl
Github Plugin URI:https://github.com/maartenvonkreijfelt/prlspcp-single-post-content-plus
*/

//If this file is called directly then abort
if (!defined('ABSPATH')) {
	die;
}

	add_action( 'login_enqueue_scripts', 'prlspcp_login_stylesheet' );
	/**
	 * Load custom stylesheet .
	 */
	function prlspcp_login_stylesheet() {
		wp_enqueue_style( 'prlspcp-custom-stylsheet', plugin_dir_url(__FILE__) . 'css/prlspcp-styles.css' );
	}