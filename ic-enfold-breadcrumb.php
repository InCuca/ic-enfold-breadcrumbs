<?php
/**
 * Plugin Name:     Enfold Breadcrumbs
 * Plugin URI:      https://incuca.net
 * Description:     Enfold breadcrumbs component
 * Author:          INCUCA
 * Author URI:      https://incuca.net
 * Text Domain:     ic-enfold-breadcrumb
 * Version:         0.1.0
 *
 * @package         Ic_Enfold
 */

// Add shortcodes to Enfold
add_filter('avia_load_shortcodes', 'ic_breadcrumb_shortcodes', 12, 1);

function ic_breadcrumb_shortcodes($paths)
{
	$plugin_dir = plugin_dir_path(__FILE__);
	array_push($paths, $plugin_dir.'/shortcodes/');
	return $paths;
}