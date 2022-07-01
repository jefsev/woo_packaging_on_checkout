<?php 
/**
 * @license  MIT
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'WOOPACKAGE_CHECKOUT_FILE' ) ) {
	define( 'WOOPACKAGE_CHECKOUT_FILE', __FILE__ );
}

// Load the Yoast SEO plugin.
require_once dirname( WOOPACKAGE_CHECKOUT_FILE ) . '/WPC-plugin.php';