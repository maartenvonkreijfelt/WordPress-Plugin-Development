<?php
/*
Plugin Name:  Pre contactform
Description:  Exercise plugin on the example of the myplugin based on , "WordPress: Plugin Development", available at Lynda.com.
Plugin URI:   https://www.preludio.nl/plugins/pre-contactform
Author:       Maarten von Kreijfelt
Version:      1.0
Text Domain:  pre-contactform
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// include plugin dependencies: admin only
if ( is_admin() ) {

	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';


}

