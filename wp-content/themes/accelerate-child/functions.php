<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

function create_custom_post_types() {
  register_post_type( 'case_studies', 
    array (
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singluar_name' => __( 'Case Study' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'case_studies'),
      )
    );
}
add_action( 'init', 'create_custom_post_types' );

// Runs before the posts are fetched
add_filter( 'pre_get_posts' , 'my_change_order' );
// Function accepting current query
function my_change_order( $query ) {
  // Check if the query is for an archive
  if($query->is_archive)
    // Query was for archive, then set order
    $query->set( 'order' , 'asc' );
  // Return the query (else there's no more query, oops!)
  return $query;
}

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_about',
    'title' => 'about',
    'fields' => array (
      array (
        'key' => 'field_54773ece37222',
        'label' => 'Our Services',
        'name' => 'our_services',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54773efd37223',
        'label' => 'Description',
        'name' => 'description',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54773f0b37224',
        'label' => 'Image',
        'name' => 'image',
        'type' => 'image',
        'save_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array (
        'key' => 'field_5477dca597c89',
        'label' => 'Our Services 1',
        'name' => 'our_services_1',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5477dcbb97c8a',
        'label' => 'Description 1',
        'name' => 'description_1',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5477dcca97c8b',
        'label' => 'Image 1',
        'name' => 'image_1',
        'type' => 'image',
        'save_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array (
        'key' => 'field_5477e245e18a4',
        'label' => 'Our Services 2',
        'name' => 'our_services_2',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5477e273e18a5',
        'label' => 'Description 2',
        'name' => 'description_2',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5477e27fe18a6',
        'label' => 'Image 2',
        'name' => 'image_2',
        'type' => 'image',
        'save_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array (
        'key' => 'field_5477e2a52e22a',
        'label' => 'Our Services 3',
        'name' => 'our_services_3',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5477e2b32e22b',
        'label' => 'Description 3',
        'name' => 'description_3',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5477e2c32e22c',
        'label' => 'Image 3',
        'name' => 'image_3',
        'type' => 'image',
        'save_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-about.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}


