<?php
/**
 * @package  alitech_plugin
 */
namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

		$default = array();

		if ( ! get_option( 'alitech_plugin' ) ) {
			update_option( 'alitech_plugin', $default );
		}

		if ( ! get_option( 'alitech_plugin_cpt' ) ) {
			update_option( 'alitech_plugin_cpt', $default );
		}

		if ( ! get_option( 'alitech_plugin_tax' ) ) {
			update_option( 'alitech_plugin_tax', $default );
		}
	}
}