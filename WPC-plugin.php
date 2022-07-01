<?php 

/* ***************************** CLASS AUTOLOADING *************************** */

$WPC_autoload_file = WPSEO_PATH . 'vendor/autoload.php';

if ( is_readable( $WPC_autoload_file ) ) {
	require $WPC_autoload_file;
}