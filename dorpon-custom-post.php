<?php

/*

Plugin Name: Dorpon Post

Plugin URI: https://github.com/JahangirEdorpon/dorpon-post.git

Description: Plugin to accompany custom post plugin add various post , registers a post type.

Version: 1.0

Author: Jahangir Hossain

Author URI: https://jahangir.pro/

License: GPLv2 or later

Text Domain: custom-posts

*/


if(!defined('ABSPATH'))
{
    echo "What are you trying to do?";
    exit;
}

class DorponCustomPost{
   /**
     * Initialize this class
     */
    public function __construct() {
        add_action( 'init', [$this, 'dcp_service_post_type'] );
        add_action( 'init', [$this, 'dcp_filter_portfolio_post_type'] );
        add_action( 'init', [$this, 'dcp_portfolio_category_taxonomy'] );
        add_action( 'init', [$this, 'dcp_testimonial_post_type'] );
        add_action( 'init', [$this, 'dcp_education_post_type'] );
    }



    /**
     * service post type
     *
     * @version 1.0.0
     */
    public function dcp_service_post_type() {
        register_post_type('service', [
            'label'     => __( 'Service', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Service', 'dorpon-portfolio' ),
                'singular_name' => __( 'Service', 'dorpon-portfolio' ),
                'add_new'       => __( 'Add new service', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add new service', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Service', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-admin-generic',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }

    
    /**
     * education post type
     *
     * @version 1.0.0
     */
    public function dcp_education_post_type() {
        register_post_type('education', [
            'label'     => __( 'Education', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Education', 'dorpon-portfolio' ),
                'singular_name' => __( 'Education', 'dorpon-portfolio' ),
                'add_new'       => __( 'Add new education', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add new education', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Education', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-welcome-learn-more',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }



 /**
     * portfolio post type
     *
     * @version 1.0.0
     */

    // add_action('init', 'filter_portfolio_post_type');

    function dcp_filter_portfolio_post_type() {
        register_post_type( 'portfolio',
            array( 'labels' => array(
                'name' => __( 'Portfolio', 'dorpon-portfolio'),
                'all_items' => __( 'All Portfolio', 'dorpon-portfolio'),
                'singular_name' => __( 'Portfolio', 'dorpon-portfolio'),
                'add_new' => __( 'Add New', 'dorpon-portfolio'),
                'add_new_item' => __( 'Add New Portfolio', 'dorpon-portfolio'),
                'edit' => __( 'Edit', 'dorpon-portfolio'),
                'edit_item' => __( 'Edit Portfolio', 'dorpon-portfolio'),
                'new_item' => __( 'New Portfolio', 'dorpon-portfolio'),
                'view_item' => __( 'View Portfolio', 'dorpon-portfolio'),
                'search_items' => __( 'Search Portfolio', 'dorpon-portfolio'),
                'not_found' =>  __( 'No Portfolio found, yet!', 'dorpon-portfolio'),
                'not_found_in_trash' => __( 'Nothing found in Trash', 'dorpon-portfolio'),
                'parent_item_colon' => ''
                ),
                'description' => __( 'A place for our portfolio to live', 'dorpon-portfolio'),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 5,
                'menu_icon'=> 'dashicons-format-gallery',
                'rewrite'  => array( 'slug' => 'portfolio', 'with_front' => true ),
                'has_archive' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
            )
        );

  }

  function dcp_portfolio_category_taxonomy() {
    // Define the taxonomy
      $labels = array(
        'name' => __( 'Portfolio Category', 'dorpon-portfolio' ),
        'singular_name' => __( 'Portfolio Category', 'dorpon-portfolio' ),
        'search_items' =>  __( 'Search Category', 'dorpon-portfolio' ),
        'all_items' => __( 'All Category', 'dorpon-portfolio' ),
        'parent_item' => __( 'Parent Category', 'dorpon-portfolio' ),
        'parent_item_colon' => __( 'Parent Category:', 'dorpon-portfolio' ),
        'edit_item' => __( 'Edit Category', 'dorpon-portfolio' ),
        'update_item' => __( 'Update Category', 'dorpon-portfolio' ),
        'add_new_item' => __( 'Add New Category', 'dorpon-portfolio' ),
        'new_item_name' => __( 'New Category Name', 'dorpon-portfolio' ),
        'menu_name' => __( 'Category', 'dorpon-portfolio' ),
      );

    // Now register the taxonomy
      register_taxonomy('portfolio_category',array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'portfolio_category' ),
      ));
    }





     /**
     * Testimonial post type
     *
     * @version 1.0.0
     */
    public function dcp_testimonial_post_type() {
        register_post_type('testimonial', [
            'label'     => __( 'Testimonial', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Testimonial', 'dorpon-portfolio' ),
                'singular_name' => __( 'feature', 'dorpon-portfolio' ),
                'all_items' => __( 'All Testimonial', 'dorpon-portfolio'),
                'add_new'       => __( 'Add New', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add New', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Testimonial', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-testimonial',
            'public'    => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
        ]);
    }

}

new DorponCustomPost;


