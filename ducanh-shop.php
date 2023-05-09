<?php
/*
* Plugin Name: Duc Anh Shop
* Plugin URI: #
* Description: Duc Anh Shop Plugin.
* Version: 1.10.3
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Duc Anh
* Author URI: https://www.linkedin.com/in/ducanh/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: #
* Text Domain: ducanh-shop
* Domain Path: /languages
*/

//Declare constance for plugin
define('DUCANH_SHOP_PATH', plugin_dir_path(__FILE__));
define('DUCANH_SHOP_URI', plugin_dir_url(__FILE__));

// echo '<br>' . DUCANH_SHOP_PATH;
// echo '<br>' . DUCANH_SHOP_URI;

//Action when pluging activation
register_activation_hook(__FILE__, 'ducanh_shop_activation');
function ducanh_shop_activation()
{
    //Test
    // echo __FILE__;
    // die();

    //Create database


    //Create sample database data
}

//Action when pluging deactivation
register_deactivation_hook(__FILE__, 'ducanh_shop_deactivation');
function ducanh_shop_deactivation()
{

    // Unregister the post type, so the rules are no longer in memory.

    // Clear the permalinks to remove our post type's rules from the database.


}

include_once DUCANH_SHOP_PATH . 'includes/includes.php';
