<?php 
/**
 * @license MIT
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'WPC' ) ) {
	define( 'WPC', __FILE__ );
}

// Load the plugin.
require_once dirname( WPC ) . '/WPC-plugin.php';