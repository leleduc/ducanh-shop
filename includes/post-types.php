<?php
// Registering Custom Post Types for Plugin
if (!function_exists('ducanh_shop_custom_post_type')) {
    function ducanh_shop_custom_post_type()
    {
        register_post_type(
            'product',
            array(
                'labels'      => array(
                    'name'          => __('Products', 'ducanh-shop'),
                    'singular_name' => __('Product', 'ducanh-shop'),
                ),
                'public'      => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-products',
                'rewrite'     => array('slug' => 'product'), // my custom slug
                'susupports'  => array('title', 'editor', 'excerpt', 'thumbnail',),
            )
        );
    }
}

add_action('init', 'ducanh_shop_custom_post_type');
