<?php
/*
Plugin Name: WordPress Importer Revised for Altis.
Plugin URI: https://github.com/tarosky-altis/wordpress-importer-revised
Description: Forked version of WordPress importer.
Author: Tarosky, worpressdotorg
Author URI: https://wordpress.org/
Version: 1.0.0
Text Domain: wordpress-importer
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( class_exists( 'WXR_Parser_Regex' ) ) {
	// WordPress importer is maybe initialized.
	error_log( 'Do not activate WordPress Importer.' );
	return;
}

// This file is included purely for those using Git and checking out directly into wp-content/plugins/wordpress-importer/
include dirname( __FILE__ ) . '/src/wordpress-importer.php';
