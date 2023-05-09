<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//do some clean-up when it is uninstalled from a site.

//drop database

//remove plugin options