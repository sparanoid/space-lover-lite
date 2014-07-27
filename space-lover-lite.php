<?php
/**
 * @package   Space_Lover_Lite
 * @author    Tunghsiao Liu <t@sparanoid.com>
 * @license   GPL-2.0+
 * @link      http://sparanoid.com/
 * @copyright Sparanoid
 *
 * @wordpress-plugin
 * Plugin Name:       Space Lover Lite
 * Plugin URI:        https://github.com/sparanoid/space-lover-lite
 * Description:       Magically add an extra space between Chinese / Japanese characters and English letters / numbers / common punctuation marks
 * Version:           1.0.4
 * Author:            Tunghsiao Liu
 * Author URI:        http://sparanoid.com/
 * Text Domain:       space-lover-lite
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/sparanoid/space-lover-lite
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-space-lover-lite.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Space_Lover_Lite', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Space_Lover_Lite', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Space_Lover_Lite', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
// if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
//
//   require_once( plugin_dir_path( __FILE__ ) . 'admin/class-space-lover-lite-admin.php' );
//   add_action( 'plugins_loaded', array( 'Space_Lover_Lite_Admin', 'get_instance' ) );
//
// }
