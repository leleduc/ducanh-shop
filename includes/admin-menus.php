<?php
//Create admin menu
add_action('admin_menu', 'ducanh_admin_menu');
if (!function_exists('ducanh_admin_menu')) {
    function ducanh_admin_menu()
    {
        //Add parent menu
        add_menu_page(
            __('Duc Anh Shop', 'ducanh-shop'),  //$page_title
            __('Duc Anh Shop', 'ducanh-shop'),  //$menu_title
            'manage_options',                   //$capability,
            'ducanh-admin',                            //$menu_slug
            'ducanh_admin_page_dashboard',      //$callback
            'dashicons-store',                  //$icon_url
            25                                  //$position
        );

        //Add sub menu
        add_submenu_page(
            'ducanh-admin',                 //$parent_slug
            __('Đơn hàng', 'ducanh-shop'),  //$page_title
            __('Đơn hàng', 'ducanh-shop'),  //$menu_title  
            'manage_options',               //$capability
            'ducanh-orders',                       //$menu_slug
            'ducanh_admin_page_orders',      //$callback
            26                      //$position  

        );

        //Add sub menu
        add_submenu_page(
            'ducanh-admin',                 //$parent_slug
            __('Cấu hình', 'ducanh-shop'),  //$page_title
            __('Cấu hình', 'ducanh-shop'),  //$menu_title  
            'manage_options',               //$capability
            'ducanh-settings',                 //$menu_slug
            'ducanh_admin_page_seting',      //$callback
            27                      //$position  

        );
    }
}
if (!function_exists('ducanh_admin_page_order')) {
    function ducanh_admin_page_orders()
    {
        include_once DUCANH_SHOP_PATH . 'includes/admin-pages/orders.php';
    }
}

if (!function_exists('ducanh_admin_page_dashboard')) {
    function ducanh_admin_page_dashboard()
    {
        include_once DUCANH_SHOP_PATH . 'includes/admin-pages/dashboard.php';
    }
}

if (!function_exists('ducanh_admin_page_seting')) {
    function ducanh_admin_page_seting()
    {
        include_once DUCANH_SHOP_PATH . 'includes/admin-pages/settings.php';
    }
}
