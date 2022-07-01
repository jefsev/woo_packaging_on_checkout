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
	 *
	 * @since {{plugin_version}}
	 * @return void
	 */
	public function add_plugin_admin_menu() {
        $menu_slug = 'wpc-settings';
		/* Add a settings page for this plugin to the main menu */
		\add_menu_page( 'WPC Settings', 'WPC Settings', 'manage_options', $menu_slug, false  );
	}
}