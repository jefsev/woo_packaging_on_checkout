<?php
/*
|--------------------------------------------------------------------------
| Initialize plugin
|--------------------------------------------------------------------------
*/
use WPC\Admin\PluginSettings;
use WPC\Admin\Enqueue;
use WPC\Admin\AjaxAdmin;

// Initialize all plugin settings
$WPC_settings = new PluginSettings();
$WPC_settings->initialize();

// Initialize admin enqueue class to add all scripts and stylesheets
$WPC_admin_scripts = new Enqueue();
$WPC_admin_scripts->initialize();

// Initialize admin ajax
$WPC_admin_ajax = new AjaxAdmin();
$WPC_admin_ajax->initialize();