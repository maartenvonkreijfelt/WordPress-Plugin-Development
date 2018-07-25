<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 12/12/2017
 * Time: 17:19
 */

/*
Plugin Name:  Pre Code Snippets
Description:  Example plugin for plugin related code snippets
Plugin URI:   https://www.preludio.nl/plugins/pre-code-snippets
Author:       Maarten von Kreijfelt
Version:      1.0
Text Domain:  pre-code-snippets
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/


// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}
function print_code_snippets(){

	echo "<table>";
	echo "<thead>";
	echo "<th>";
	echo "<td>";
	echo "URL paths" ;
	echo "</td>";
	echo "<td>";
	echo "";
	echo "</td>";
	echo "</th>";
	echo "</thead>";
	echo "<tbody>";
	echo "<tr>";
	echo "<td>";
	echo "plugin_dir_path()";
	echo "</td>";
	echo "<td>";
	echo plugin_dir_path( __FILE__ );
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>";
	echo "plugin_dir_path( __FILE__ )";
	echo "</td>";
	echo "<td>";
	echo plugin_dir_path( __FILE__ );
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>";
	echo "plugins_url()" ;
	echo "</td>";
	echo "<td>";
	echo plugins_url();
	echo "</td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td>";
	echo "admin_url()" ;
	echo "</td>";
	echo "<td>";
	echo admin_url() ;
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>";
	echo "site_url()" ;
	echo "</td>";
	echo "<td>";
	echo site_url() ;
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>";
	echo "home_url()" ;
	echo "</td>";
	echo "<td>";
	echo home_url() ;
	echo "</td>";
	echo "</tr>";

	echo "</tbody>";





	echo "<thead>";
	echo "<th>";
	echo "<td>";
	echo "Checking priviledges" ;
	echo "</td>";
	echo "<td>";
	echo "";
	echo "</td>";
	echo "</th>";
	echo "</thead>";

	echo "<tbody>";
	echo "<tr>";
	echo "<td>";
	echo "if ( is_admin() ) {    // we're in wp-admin    require_once( dirname(__FILE__).'/includes/admin.php' );}" ;
	echo "</td>";
	echo "<td>";
	echo "";
	echo "</td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td>";
	echo "if ( is_author('Maarten von Kreijfelt' ) { echo 'hello Maarten von Kreijfelt' }" ;
	echo "</td>";
	echo "<td>";
	if ( is_author('Maarten von Kreijfelt')) {
		echo "hello Maarten von Kreijfelt";
	}
	echo "</td>";
	echo "</tr>";

	echo "</tbody>";






}


add_shortcode('get_code_snippets','print_code_snippets');