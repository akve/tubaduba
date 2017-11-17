<?php
/*
Plugin Name: WC Direct Place Order Without Payment
Version: 1.0.1
Plugin URI: https://github.com/GaganTiwari/WC-Direct-Place-Order-Without-Payment
Description: Plugin will customize checkout page and offers to place order direct without payment.
Author: Gagan Tiwari
Author URI: http://www.gagantiwari.info/
License: GPL v3

WC Direct Place Order Without Payment
Copyright (C) 2013, https://github.com/GaganTiwari/WC-Direct-Place-Order-Without-Payment

*/

//wc default hook to disable payment functionality on checkout.

add_filter('woocommerce_cart_needs_payment', '__return_false');


/*function callback($buffer) {      
    $buffer = str_replace('АПАРИГРАХА','ааа<br>',$buffer);
    return $buffer; 
}

function buffer_start() { ob_start("callback"); } 
function buffer_end() { ob_end_flush(); }

add_action('after_setup_theme', 'buffer_start');
add_action('shutdown', 'buffer_end');
*/
//end here