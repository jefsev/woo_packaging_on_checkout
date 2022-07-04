<?php
/*
 * View for WPC settings page
 */

use WPC\Admin\PluginSettings;

// First we neet to know if Woocommerce is activated
$WC_locate = PluginSettings::is_woocommerce_activated();
$admin_page = get_current_screen();
$selected_products = get_option( 'wpc_selected_products' );
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
            <span class='wpc-subtitle'>Select products to add to the checkout</span>
            <form method="post" id="wpc-product-form">
                <select name="prod_id" id="prod_id">
                <?php
                $arguments = array( 
                    'post_type'   => 'product',
                    'numberposts' => -1
                );
                $prods = get_posts($arguments);

                foreach( $prods as $prod ) {
                    $title = get_the_title($prod->ID);
                    ?>
                    <option value="<? echo $prod->ID; ?>"><?= $title ?></option>
                <?php }; ?>
                </select>
                <button class="button-primary btn--ajax" id="add_product">add product</button>
            </form>
        <?php } ?>

        <div class="product-list" id="products">
            <?php foreach ($selected_products as $selected_product) { ?>
                <div class='product-selected' data-product='<?= $selected_product ?>'>
                    <div class="row">
                        <div class="thumb">
                            <?= get_the_post_thumbnail($selected_product); ?>
                        </div>
                        <h3> <?= get_the_title($selected_product); ?></h3>
                        </div>
                   <div class="row actions">
                        <button class='button-secondary'>Remove product</button>
                   </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>