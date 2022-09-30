<?php
/**
 * @package  alitechPlugin
 */
/*
Plugin Name: Alitech Plugin
Plugin URI: http://alitech.com/plugin
Description: This is my first amazing plugin.
Version: 1.0.0
Author:  "Alitech"
Author URI: http://alitech.com
License: GPLv2 or later
Text Domain: alitech-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

A.

Copyright 2005-2015 Automattic, Inc.
*/

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_alitech_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_alitech_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alitech_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_alitech_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::registerServices();
}