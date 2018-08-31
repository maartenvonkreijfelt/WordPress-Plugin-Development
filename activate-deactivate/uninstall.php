<?php
/*

uninstall.php

- fires when plugin is uninstalled via the Plugins screen

*/

// exit if uninstall constant is not defined
  if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {

	  exit;

  }
// delete the plugin options

  delete_option( 'myplugin_posts_per_page' );
  delete_option( 'myplugin_show_welcome_page' );
