<?php
//Register post_types 
include_once DUCANH_SHOP_PATH . 'includes/post-types.php';

//Register taxonomy
include_once DUCANH_SHOP_PATH . 'includes/taxonomies.php';

//Register meta boxes
include_once DUCANH_SHOP_PATH . 'includes/meta-boxes.php';

//Add columns displayed for post type and taxonomy
include_once DUCANH_SHOP_PATH . 'includes/admin-columns.php';

//Create admin menu
include_once DUCANH_SHOP_PATH . 'includes/admin-menus.php';

//Include oder class
include_once DUCANH_SHOP_PATH . 'includes/classes/ducanhOrder.php';
