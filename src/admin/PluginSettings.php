<?php

namespace WPC\Admin;

class PluginSettings 
{
    private $menu_slug;

    /**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
        // Add the options page and menu item.

		\add_action( 'admin_menu', array( $this, 'add_plugin_admin_menu' ) );
    }

    /**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 */
	public function add_plugin_admin_menu() {
        $menu_slug = 'wpc-settings';
		/* Add a settings page for this plugin to the main menu */
		\add_menu_page( 'WPC Settings', 'WPC Settings', 'manage_options', $menu_slug, array( $this, 'render_plugin_settings_page' )  );
	}

    /**
	 * Render the settings page for this plugin.
	 */
	public function render_plugin_settings_page() {
		include_once plugin_dir_path( WPC_Plugin ) . 'src/admin/views/wpc-settings.php';
	}

    /**
	 * Check if woocommerce is installed
	 */
    public static function is_woocommerce_activated() {
        if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
    }
}