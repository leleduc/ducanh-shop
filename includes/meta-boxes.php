<?php
//Register product metaboxs
add_action('add_meta_boxes', 'ducanh_add_product_meta_box');

if (!function_exists('ducanh_add_product_meta_box')) {
    function ducanh_add_product_meta_box()
    {
        add_meta_box(
            'ducanh_product_info',                 // Unique ID
            __('Thông tin sản phẩm', 'ducanh-shop'),      // Box title
            'ducanh_product_meta_box_html',  // Content callback, must be of type callable
            'product'                           // Post type
        );
    }
}

if (!function_exists('ducanh_product_meta_box_html')) {
    function ducanh_product_meta_box_html()
    {
        include_once DUCANH_SHOP_PATH . 'includes/templates/meta-boxes-product.php';
    }
}

// Save meta data when saved or updated product
add_action('save_post', 'ducanh_save_product_meta_data');
if (!function_exists('ducanh_save_product_meta_data')) {
    function ducanh_save_product_meta_data($post_id)
    {
        // echo '<pre>';
        // print_r($_REQUEST);
        // wp_die();
        if ($_REQUEST['post_type'] == 'product') {
            $product_price = $_REQUEST['product-price'];
            $product_price_sales = $_REQUEST['product-price-sales'];
            $product_stock = $_REQUEST['product-stock'];

            //Save to database
            update_post_meta($post_id, 'product_price', $product_price);
            update_post_meta($post_id, 'product_price_sales', $product_price_sales);
            update_post_meta($post_id, 'product_stock', $product_stock);
        }
    }
}
