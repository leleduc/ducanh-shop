<?php
// Registering Taxonomys

if (!function_exists('ducanh_register_taxonomy_product')) {
    function ducanh_register_taxonomy_product()
    {
        $labels = array(
            'name'              => _x('Danh Mục', 'taxonomy general name'),
            'singular_name'     => _x('Danh Mục', 'taxonomy singular name'),
            'search_items'      => __('Tìm kiếm Danh Mục'),
            'all_items'         => __('Tất cả Danh Mục'),
            'parent_item'       => __('Danh Mục cha'),
            'parent_item_colon' => __('Danh Mục cha:'),
            'edit_item'         => __('Chỉnh sửa Danh Mục'),
            'update_item'       => __('Cập nhật Danh Mục'),
            'add_new_item'      => __('Thêm mới Danh Mục'),
            'new_item_name'     => __('Tên Danh Mục Mới'),
            'menu_name'         => __('Danh Mục'),
        );
        $args   = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => ['slug' => 'danh-muc'],
        );
        register_taxonomy('product_cat', ['product'], $args);
    }
}

add_action('init', 'ducanh_register_taxonomy_product');
