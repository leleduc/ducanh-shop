<?php
//Display column of product post type
add_filter('manage_product_posts_columns', 'ducanh_admin_columns_product_filter_columns');
if (!function_exists('ducanh_admin_columns_product_filter_columns')) {
    function ducanh_admin_columns_product_filter_columns($columns)
    {
        $columns['product_price'] = __('Giá bán', 'ducanh-shop');
        $columns['product_price_sales'] = __('Giá khuyến mãi', 'ducanh-shop');
        $columns['product_stock'] = __('Số lượng', 'ducanh-shop');

        return $columns;
    }
}

//Display columns content
add_action('manage_product_posts_custom_column', 'ducanh_admin_columns_product_render_columns', 10, 2);
if (!function_exists('ducanh_admin_columns_product_render_columns')) {
    function ducanh_admin_columns_product_render_columns($columns, $post_id)
    {
        switch ($columns) {
            case 'product_price':
                // $product_price = get_post_meta($post_id, 'product_price', true);
                // echo number_format($product_price);
                echo get_post_meta($post_id, 'product_price', true);
                break;
            case 'product_price_sales':
                echo get_post_meta($post_id, 'product_price_sales', true);
                break;
            case 'product_stock':
                echo get_post_meta($post_id, 'product_stock', true);
                break;
        }
    }
}


//Display column of product_cat taxonomy
add_filter('manage_edit-product_cat_columns', 'ducanh_admin_columns_product_cat_filter_columns');
if (!function_exists('ducanh_admin_columns_product_cat_filter_columns')) {
    function ducanh_admin_columns_product_cat_filter_columns($columns)
    {
        $columns['image'] = __('Ảnh', 'ducanh-shop');

        return $columns;
    }
}

//Display columns of product_cat content
add_action('manage_product_cat_custom_column', 'ducanh_admin_columns_product_cat_render_columns', 10, 3);
if (!function_exists('ducanh_admin_columns_product_cat_render_columns')) {
    function ducanh_admin_columns_product_cat_render_columns($out, $columns, $term_id)
    {
        if ($columns == 'image') {
            $image = get_term_meta($term_id, 'image', true);
            echo $image;
        }
    }
}
