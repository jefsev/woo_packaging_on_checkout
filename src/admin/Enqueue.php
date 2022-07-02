<?php

/**
 * WPC load all admin css and js
 */

namespace WPC\Admin;
/**
 * This class contain the Enqueue stuff for the backend
 */
class Enqueue {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
		// Load admin style sheet and JavaScript.
        
		\add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
		//\add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
	}

	/**
	 * Register and enqueue admin-specific style sheet.
	 */
	public function enqueue_admin_styles() {
        \wp_enqueue_style( 'wpc_settings_css', plugin_dir_url( WPC_Plugin ) . 'src/assets/css/wpc-settings-page.css', false, null);
	}

	/**
	 * Register and enqueue admin-specific JavaScript.
	 */
	public function enqueue_admin_scripts() {

	}

}
