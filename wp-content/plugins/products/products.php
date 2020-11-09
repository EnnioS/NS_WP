<?php
/*
* Description: Create Customs Post Types and Taxonomies
* Plugin Name: Products
* Version: 1.0.0
* Author: Ennio Sáernz
* Licence: GPL2
* Text Domain: Products
*/

//security to prevent direct access of php files
if(! defined('ABSPATH')){
	exit;
}

function create_products_cpt() {// custome post type


$labels = array(

		'name'                  => _x('Products', 'Post Type General Name'),
		'singular_name'         => _x('Product', 'Post Type Singular Name'),
		'menu_name'             => __('Products'),
		'name_admin_bar'        => __('Product'),
		'archives'              => __('Product Archives'),
		'attributes'            => __('Product Attributes'),
		'parent_item_colon'     => __('Parent Product:'),
		'all_items'             => __('All Products'),
		'add_new_item'          => __('Add New Product'),
		'add_new'               => __('Add New'),
		'new_item'              => __('New Product'),
		'edit_item'             => __('Edit Product'),
		'update_item'           => __('Update Product'),
		'view_item'             => __('View Product'),
		'view_items'            => __('View Products'),
		'search_items'          => __('Search Product'),
		'not_found'             => __('Not found'),
		'not_found_in_trash'    => __('Not found in Trash'),
		'featured_image'        => __('Featured Image'),
		'set_featured_image'    => __('Set featured image'),
		'remove_featured_image' => __('Remove featured image'),
		'use_featured_image'    => __('Use as featured image'),
		'insert_into_item'      => __('Insert into Product'),
		'uploaded_to_this_item' => __('Uploaded to this Product'),
		'items_list'            => __('Products list'),
		'items_list_navigation' => __('Products list navigation'),
		'filter_items_list'     => __('Filter Products list'),
	);

	$args = array(
		'label'                 => __('Product', 'products'),
		'description'           => __('NS WP Assesment 1.1'),
		'labels'                => $labels,
		'menu_icon'				=> 'dashicons-screenoptions',
		'supports'              => array('title'),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'hierarchical'          => false,
		'exclude_from_search'   => false,
		'show_in_rest'			=> true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', //'page'
		'rewrite'				=> array('slug' => 'products'),
	);
	register_post_type('Products', $args);

}
add_action('init', 'create_products_cpt', 0);


function rewrite_products_flush(){
	create_products_cpt();
	flush_rewrite_rules();
}
register_activation_hook(__FILE__,'rewrite_products_flush');



//custome post type hierarchical


function brands_custom_post_type() { 
	$labels = array(
		'name'                  => _x('Brands', 'Post Type General Name'),
		'singular_name'         => _x('Brand', 'Post Type Singular Name'),
		'menu_name'             => __('Brands'),
		'name_admin_bar'        => __('Brand'),
		'archives'              => __('Brand Archives'),
		'attributes'            => __('Brand Attributes'),
		'parent_item_colon'     => __('Parent Brand:'),
		'all_items'             => __('All Brands'),
		'add_new_item'          => __('Add New Brand'),
		'add_new'               => __('Add New'),
		'new_item'              => __('New Brand'),
		'edit_item'             => __('Edit Brand'),
		'update_item'           => __('Update Brand'),
		'view_item'             => __('View Brand'),
		'view_items'            => __('View Brands'),
		'search_items'          => __('Search Brand'),
		'not_found'             => __('Not found'),
		'not_found_in_trash'    => __('Not found in Trash'),
		'featured_image'        => __('Featured Image'),
		'set_featured_image'    => __('Set featured image'),
		'remove_featured_image' => __('Remove featured image'),
		'use_featured_image'    => __('Use as featured image'),
		'insert_into_item'      => __('Insert into brand'),
		'uploaded_to_this_item' => __('Uploaded to this brand'),
		'items_list'            => __('Brands list'),
		'items_list_navigation' => __('Brands list navigation'),
		'filter_items_list'     => __('Filter items list'),
	);
	$args = array(
		'label'                 => __('Brand', 'brands'),
		'description'           => __('NS WP Assesment 1.2'),
		'labels'                => $labels,
		'menu_icon'				=> 'dashicons-admin-site',
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'hierarchical'          => true,
		'show_in_rest'			=> true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'				=> array('slug' => 'brands'),
		'supports' => array( 'title', 'page-attributes'),
	);
	register_post_type('Brands', $args);

}
add_action('init', 'brands_custom_post_type', 0);





//create a custom taxonomy

function productc_category_tx() { 


	$labels = array(
		'name'                       	=> _x('Category', 'Taxonomy General Name'),
		'singular_name'              	=> _x('Category', 'Taxonomy Singular Name'),
		'search_items'               	=> __('Search Items'),
		'all_items'                  	=> __('All Categories'),
		'parent_item'                	=> null,
		'parent_item_colon'          	=> null,
		'edit_item'                  	=> __('Edit Category'),
		'update_item'                	=> __('Update Category'),
		'add_new_item'               	=> __('Add New Category'),
		'new_item_name'              	=> __('New Category Name'),
		'add_or_remove_items'        	=> __('Add or remove Category'),
		'not_found'                  	=> __('Not Found'),
		'menu_name'                  	=> __('Product Category'),
		'view_item'                  	=> __('View Category'),
		'popular_items'              	=> __('Popular Items'),
		'no_terms'                   	=> __('No Category'),
		'items_list'                 	=> __('Items list'),
		'items_list_navigation'      	=> __('Items list navigation'),
	);
	$args  = array( 		
		'hierarchical'					=> false, 
		'labels'                    	=> $labels,
		 'show_ui'                   	=> true,
		 'show_admin_column'         	=> true,
		 'update_count_callback'		=> '_update_post_term_count',
		 'query_var'					=> true,
		 'rewrite'						=> array('slug' => 'products'),
		 'public'                    	=> true,
		'show_in_nav_menus'         	=> true,
		'show_tagcloud'             	=> true,
	);
	register_taxonomy('Category', array('products'), $args); //register_taxonomy('Category', array('products','brands'), $args);

}

add_action('init', 'productc_category_tx', 0);