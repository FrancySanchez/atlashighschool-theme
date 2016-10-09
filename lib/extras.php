<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


// Register Custom Post Type
function custom_post_type_schools() {

  $labels = array(
    'name'                  => _x( 'Schools', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'School', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Schools', 'text_domain' ),
    'name_admin_bar'        => __( 'School', 'text_domain' ),
    'archives'              => __( 'Schools Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent School:', 'text_domain' ),
    'all_items'             => __( 'All Schools', 'text_domain' ),
    'add_new_item'          => __( 'Add New school', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New school', 'text_domain' ),
    'edit_item'             => __( 'Edit school', 'text_domain' ),
    'update_item'           => __( 'Update school', 'text_domain' ),
    'view_item'             => __( 'View school', 'text_domain' ),
    'search_items'          => __( 'Search school', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into school', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this school', 'text_domain' ),
    'items_list'            => __( 'Schools list', 'text_domain' ),
    'items_list_navigation' => __( 'Schools list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter schools list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'School', 'text_domain' ),
    'description'           => __( 'School profiles', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'custom-fields', 'page-attributes', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'schools', $args );

}
add_action( 'init',  __NAMESPACE__ . '\\custom_post_type_schools', 0 );

$timber = new \Timber\Timber();


