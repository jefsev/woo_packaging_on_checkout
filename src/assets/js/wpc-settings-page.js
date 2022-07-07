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
                location.reload(true);
            },
            error: function (e) {
                console.log('This is not good: ' + e);
            },
        });
    });

    let remove_buttons = document.querySelectorAll('#remove_product');

    remove_buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            let cur_product = e.currentTarget.dataset.product;
            const formArgs = {
                action: 'remove_product',
                product: cur_product,
            }

            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                data: formArgs,
                dataType: 'json',
                type: 'post',
                success: function (data) {
                    location.reload(true);
                },
                error: function (e) {
                    console.log('This is not good: ' + e);
                },
            });
        })
    });

})(jQuery);