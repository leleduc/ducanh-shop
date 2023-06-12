<?php
// Registering Taxonomys

if (!function_exists('ducanh_register_taxonomy_product')) {
    function ducanh_register_taxonomy_product()
    {
        $labels = array(
            'name'              => _x('Categories', 'taxonomy general name'),
            'singular_name'     => _x('Category', 'taxonomy singular name'),
            'search_items'      => __('Search Categories'),
            'all_items'         => __('All Categories'),
            'parent_item'       => __('Parent Category'),
            'parent_item_colon' => __('Parent Category:'),
            'edit_item'         => __('Edit Category'),
            'update_item'       => __('Update Category'),
            'add_new_item'      => __('Addnew Category'),
            'new_item_name'     => __('New Category Name'),
            'menu_name'         => __('Categories'),
        );
        $args   = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => ['slug' => 'category'],
        );
        register_taxonomy('product_cat', ['product'], $args);
    }
}

add_action('init', 'ducanh_register_taxonomy_product');
