// Admin ajax
(($) => {
    "use strict";

    $('#add_product').on('click', (e) => {
        e.preventDefault();

        const selected_product = $('#wpc-product-form select option:selected').val();
        const formArgs = {
            action: 'add_product',
            product: selected_product,
        }

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: formArgs,
            dataType: 'json',
            type: 'post',
            success: function (data) {
                console.log(data)
            },
            error: function (e) {
                console.log('This is not good: ' + e);
            },
        });
    });

})(jQuery);