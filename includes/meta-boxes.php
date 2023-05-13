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
        include_once DUCANH_SHOP_PATH . 'includes/templates/product-add-meta-boxes.php';
    }
}

// Save meta data when saved or updated product
add_action('save_post', 'ducanh_save_product_meta_data');
if (!function_exists('ducanh_save_product_meta_data')) {
    function ducanh_save_product_meta_data($post_id)
    {

        if ($_REQUEST['post_type'] == 'product') {
            if (isset($_REQUEST['product-price'])) {
                $product_price = $_REQUEST['product-price'];
                //Save to database
                update_post_meta($post_id, 'product_price', $product_price);
            }

            if (isset($_REQUEST['product-price-sales'])) {
                $product_price_sales = $_REQUEST['product-price-sales'];
                update_post_meta($post_id, 'product_price_sales', $product_price_sales);
            }

            if (isset($_REQUEST['product-stock'])) {
                $product_stock = $_REQUEST['product-stock'];
                update_post_meta($post_id, 'product_stock', $product_stock);
            }
        }
    }
}


//Register Taxonomy metaboxs

//Register metaboxs form for Taxonomy  (Fires after the Add Term form fields.)
add_action('product_cat_add_form_fields', 'ducanh_product_cat_add_form_fields');
if (!function_exists('ducanh_product_cat_add_form_fields')) {
    function ducanh_product_cat_add_form_fields()
    {
        include_once DUCANH_SHOP_PATH . 'includes/templates/product-cat-add-form-fields.php';
    }
}

//Edit metaboxs form for Taxonomy   (Fires after the Edit Term form fields are displayed.)
add_action('product_cat_edit_form_fields', 'ducanh_product_cat_edit_form_fields', 10, 2);
if (!function_exists('ducanh_product_cat_edit_form_fields')) {
    function ducanh_product_cat_edit_form_fields($tag, $taxonomy)
    {
        include_once DUCANH_SHOP_PATH . 'includes/templates/product-cat-edit-form-fields.php';
    }
}

//Create or save taxonomy meta after input.
add_action('create_product_cat', 'ducanh_product_cat_meta_box_save');
add_action('edit_product_cat', 'ducanh_product_cat_meta_box_save');
if (!function_exists('ducanh_product_cat_meta_box_save')) {
    function ducanh_product_cat_meta_box_save($term_id)
    {
        $image = $_POST['image'];
        update_term_meta($term_id, 'image', $image);
    }
}
