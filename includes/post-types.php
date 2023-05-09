<?php
// Registering Custom Post Types for Plugin
if (!function_exists('ducanh_shop_custom_post_type')) {
    function ducanh_shop_custom_post_type()
    {
        register_post_type(
            'product',
            array(
                'labels'      => array(
                    'name'          => __('Các sản phẩm', 'ducanh-shop'),
                    'singular_name' => __('Sản phẩm', 'ducanh-shop'),
                ),
                'public'      => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-products',
                'rewrite'     => array('slug' => 'products'), // my custom slug
                'susupports'  => array('title', 'editor', 'excerpt', 'thumbnail',),
            )
        );
    }
}

add_action('init', 'ducanh_shop_custom_post_type');


