<?php
/**
 * Plugin Name: Foyer
 * Plugin URI: https://github.com/slimndap/foyer
 * Description: Digital signage for WordPress. Create beautiful displays for your venue with channels, slides and schedules.
 * Version: 1.7.6
 * Author: Jeroen Schmit
 * Author URI: https://slimndap.com/
 * Text Domain: foyer
 * Domain Path: /languages/
 * Requires at least: 4.7
 * Requires PHP: 8.1
 *
 * @package Foyer
 * @author Jeroen Schmit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once dirname( __FILE__ ) . '/includes/class-foyer.php';

/**
 * Plugin activation hook.
 */
function activate_foyer() {
	Foyer::activate();
}
register_activation_hook( __FILE__, 'activate_foyer' );

/**
 * Plugin deactivation hook.
 */
function deactivate_foyer() {
	Foyer::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_foyer' );

/**
 * Begins execution of the plugin.
 */
function run_foyer() {
	$plugin = new Foyer();
	$plugin->run();
}
run_foyer();
