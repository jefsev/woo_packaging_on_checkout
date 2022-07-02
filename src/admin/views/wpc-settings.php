<?php
/*
 * View for WPC settings page
 */

use WPC\Admin\PluginSettings;

// First we neet to know if Woocommerce is activated
$WC_locate = PluginSettings::is_woocommerce_activated();

?>
<div class="WPC-setting-page">
    <header class='WPC-header'>
        <span>WPC Settings</span>
    </header>

    <div class="WPC-settings-content">
        <?php if ($WC_locate === false) { ?>
            <span class='wpc-subtitle'>WPC needs Woocommerce, please install Woocommerce and return to start.</span>
        <?php } 
        elseif ($WC_locate === true) { ?>
            <span class='wpc-subtitle'>TRUE</span>
        <?php } ?>
    </div>
</div>