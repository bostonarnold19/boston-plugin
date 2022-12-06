<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.facebook.com/profile.php?id=100001288960602
 * @since             1.0.0
 * @package           Boston_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Boston Plugin
 * Plugin URI:        https://github.com/bostonarnold19/boston-plugin
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Arnold Boston
 * Author URI:        https://www.facebook.com/profile.php?id=100001288960602
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       boston-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BOSTON_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-boston-plugin-activator.php
 */
function activate_boston_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boston-plugin-activator.php';
	Boston_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-boston-plugin-deactivator.php
 */
function deactivate_boston_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boston-plugin-deactivator.php';
	Boston_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_boston_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_boston_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-boston-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_boston_plugin() {

	$plugin = new Boston_Plugin();
	$plugin->run();

}
run_boston_plugin();
