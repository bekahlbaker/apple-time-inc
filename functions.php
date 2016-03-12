<?php
 

/*
 * Config
 * -------------------------------------------------------------------------- */

// Load functions in '/config'
require_once('config/loader.php');

// Admin bar resets
// add_action('init', 'remove_admin_bar');
// add_action('init', 'remove_admin_bar_links');

// // Post type resets
// // add_action('init', 'globally_disable_posts');
// add_action('init', 'globally_disable_comments');

// // Admin dashboard resets
// add_action('init', 'remove_dashboard_widgets');

// // Admin menu customization
// add_action('init', 'admin_menu_order');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/*
 * Removes products count after categories name 
 */
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );
 
function woo_remove_category_products_count() {
  return;
}


?>