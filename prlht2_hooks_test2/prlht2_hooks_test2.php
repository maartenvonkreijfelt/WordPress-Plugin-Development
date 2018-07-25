<?php

/*
Plugin Name: Pre Hooks Test 2
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
A simple example from rhe course Advanced WordPress: Action and Filter Hooks at lynda.com
Version: 1.0.0
Author: Maarten von Kreijfelt
Author URI: http://www.preludio.nl
License: GPL v2+
License URI: https//www.gnu.org/licences/gpl-2.0.html
Text Domain: prllht2
Domain Path: http:www.preludio.nl
Github Plugin URI:https://github.com/maartenvonkreijfelt/prlspcp-single-post-content-plus
*/

//If this file is called directly then abort
if (!defined('ABSPATH')){
	die;
}


function say_hello(){
	//echo "Hey there!";
}

function show_real_top() {
	//return "This is the real top!!";
}


add_action('saying_hello', 'say_hello');
add_filter('top_text','show_real_top');

