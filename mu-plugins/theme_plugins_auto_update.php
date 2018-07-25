<?php
/**
 * Plugin Name: Theme and Plugin Auto Update
 * Description: Automaticly updates  plugins and themes:
 * Author: Maarten von Kreijfelt
 */

//Automatic updates for plugins:
add_filter( 'auto_update_plugin', '__return_true' );

//Automatic updates for:
add_filter( 'auto_update_theme', '__return_true' );

?>