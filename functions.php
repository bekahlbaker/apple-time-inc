<?php
 

/*
 * Config
 * -------------------------------------------------------------------------- */


if (function_exists('acf_add_options_page')) {
	acf_add_options_page ();
	acf_add_options_sub_page ('Footer');

		acf_add_options_page(array(
		'page_title'	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug'		=> 'theme-options',
		'capability'	=> 'edit-posts',
		'parent_slug'	=> '',
		'position'		=> false,
		'icon_url'		=> flase,
		'redirect'		=>false,

		));

	acf_add_options_sub_page(array(
		'page_title'	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug'		=> 'theme-options-footer',
		'capability'	=> 'edit-posts',
		'parent_slug'	=> 'theme-options',
		'position'		=> false,
		'icon_url'		=> flase,

		));


}

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