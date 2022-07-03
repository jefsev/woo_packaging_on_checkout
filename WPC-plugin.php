<?php 
/**
 * @package   WPC_checkout
 * @author    Jeffrey Sevinga 
 * @license   MIT
 *
 * Plugin Name:     WPC Packaging
 * Plugin URI:      @TODO
 * Description:     Sell products on the woocommece checkout page. Usefull for packaging, payed wish cards etc.
 * Version:         0.1.0
 * Author:          Jeffrey Sevinga 
 * Author URI:      https://github.com/jefsev
 * Text Domain:     wpc-packaging
 * License:         MIT
 * Requires PHP:    7.4
 */

if ( ! defined( 'WPC_Plugin' ) ) {
    define( 'WPC_Plugin', __FILE__ );
}

$WPC_autoload_file = plugin_dir_path( WPC_Plugin ) . 'vendor/autoload.php';
$WPC_bootsrap_plugin = plugin_dir_path( WPC_Plugin ) . 'bootstrap/bootstrap.php';

if ( is_readable( $WPC_autoload_file ) ) {
    // If autoload, requere autoload file
    require_once $WPC_autoload_file;

    // When autoload file is loaded initialize plugin
    require_once $WPC_bootsrap_plugin;
}

