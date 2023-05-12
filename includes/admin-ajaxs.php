<?php
//when login
add_action('wp_ajax_ducanh_order_change_status', 'ducanh_order_change_status');
//when not login
add_action('wp_ajax_nopriv_ducanh_order_change_status', 'ducanh_order_change_status');

/**
 * Handles my AJAX request.
 */
if (!function_exists('ducanh_order_change_status')) {
    function ducanh_order_change_status()
    {
        // Handle the ajax request here
        // dd($_REQUEST);

        $order_id = $_REQUEST['order_id'];
        $status = $_REQUEST['status'];
        $objOrder = new ducanhOrder();
        $objOrder->change_status($order_id, $status);
        $res = [
            'success' => true
        ];
        echo json_encode($res);
        wp_die();
        // die(); // All ajax handlers die when finished
    }
}
