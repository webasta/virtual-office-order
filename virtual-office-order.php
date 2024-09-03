<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://astabumi.com/
 * @since             1.0.1
 * @package           virtual_office_order
 *
 * @wordpress-plugin
 * Plugin Name:       Virtual Office Order
 * Plugin URI:        https://github.com/webasta/virtual-office-order
 * Description:       Plugin for order system virtual office
 * Version:           1.0.1
 * Author:            Sahrul Ramadhan
 * Author URI:        https://christophercasper.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       virtual-office-order
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
define( 'PLUGIN_NAME_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-virtual-office-order-activator.php
 */
function activate_virtual_office_order() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-virtual-office-order-activator.php';
	virtual_office_order_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-virtual-office-order-deactivator.php
 */
function deactivate_virtual_office_order() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-virtual-office-order-deactivator.php';
	virtual_office_order_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_virtual_office_order' );
register_deactivation_hook( __FILE__, 'deactivate_virtual_office_order' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-virtual-office-order.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_virtual_office_order() {

	$plugin = new virtual_office_order();
	$plugin->run();

}
run_virtual_office_order();
