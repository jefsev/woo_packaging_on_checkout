<?php

/**
 * Class to Handle AJAX on WPC-settings page
 * Using WP core option API to save data to the database
 * @link https://developer.wordpress.org/plugins/settings/options-api/
 */

namespace WPC\Admin;

class AjaxAdmin
{
    /**
     * Initialize the class.
     *
     * @return void|bool
     */
    public function initialize()
    {
        add_action('wp_ajax_add_product', array($this, 'add_product'));
        add_action('wp_ajax_remove_product', array($this, 'remove_product'));
    }

    /**
     * The add method to run on AJAX
     */
    public function add_product()
    {
        $form_data = $_POST['product'];
        $selected_products = get_option('wpc_selected_products');

        if (!in_array($form_data, $selected_products)) {
            array_push($selected_products, $form_data);
        }

        update_option('wpc_selected_products', $selected_products);

        wp_send_json($selected_products);
    }

    /**
     * The remove method to run on AJAX
     */
    public function remove_product()
    {
        $form_data = $_POST['product'];
        $selected_products = get_option('wpc_selected_products');

        if (in_array($form_data, $selected_products)) {
            unset($selected_products[array_search($form_data, $selected_products)]);
        }

        update_option('wpc_selected_products', $selected_products);

        wp_send_json($selected_products);
    }
}
