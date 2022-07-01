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

use WPC\Admin\PluginSettings;

if ( ! defined( 'WPC_Plugin' ) ) {
	define( 'WPC_Plugin', __FILE__ );
}

/* ***************************** CLASS AUTOLOADING *************************** */

$WPC_autoload_file = plugin_dir_path( WPC_Plugin ) . 'vendor/autoload.php';

if ( is_readable( $WPC_autoload_file ) ) {
	require $WPC_autoload_file;
}

$WPC_settings = new PluginSettings();
$WPC_settings->initialize();