<?php

/**
 * WPC load all admin css and js
 */

namespace WPC\Admin;

class Enqueue
{
    /**
     * Initialize the class.
     *
     * @return void|bool
     */
    public function initialize()
    {
        // Load admin style sheet and JavaScript.

        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
    }

    /**
     * Register and enqueue admin-specific style sheet.
     */
    public function enqueue_admin_styles()
    {
        $admin_page = get_current_screen();

        if (!is_null($admin_page) && 'toplevel_page_wpc-settings' === $admin_page->id) {
            wp_enqueue_style('wpc_settings_css', plugin_dir_url(WPC_Plugin) . 'src/assets/css/wpc-settings-page.css', false, null);
        }
    }

    /**
     * Register and enqueue admin-specific JavaScript.
     */
    public function enqueue_admin_scripts()
    {
        $admin_page = get_current_screen();

        if (!is_null($admin_page) && 'toplevel_page_wpc-settings' === $admin_page->id) {
            wp_enqueue_script('wpc_settings_js', plugin_dir_url(WPC_Plugin) . 'src/assets/js/wpc-settings-page.js', array('jquery'), null, true);
        }
    }
}
