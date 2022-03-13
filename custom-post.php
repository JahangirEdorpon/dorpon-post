<?php

/*

Plugin Name: Custom Post

Plugin URI: https://jahangir.pro/

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

class CustomPost{
   /**
     * Initialize this class
     */
    public function __construct() {
        // add_action( 'init', [$this, 'slider_post_type'] );
        add_action( 'init', [$this, 'service_post_type'] );
        // add_action( 'init', [$this, 'feature_post_type'] );
        add_action( 'init', [$this, 'filter_portfolio_post_type'] );
        add_action( 'init', [$this, 'team_post_type'] );
        add_action( 'init', [$this, 'portfolio_category_taxonomy'] );
        add_action( 'init', [$this, 'testimonial_post_type'] );
        add_action( 'init', [$this, 'education_post_type'] );
        add_action( 'init', [$this, 'skill_post_type'] );
        add_action( 'init', [$this, 'skill_category_taxonomy'] );
        add_action( 'init', [$this, 'experience_post_type'] );
    }

    /**
     * slider post type
     *
     * @version 1.0.0
     */
    public function slider_post_type() {
        register_post_type('slider', [
            'label'     => __( 'Slider', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Slider', 'dorpon-portfolio' ),
                'singular_name' => __( 'Slide', 'dorpon-portfolio' ),
                'add_new'       => __( 'Add new slide', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add new slide', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Slide', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-images-alt',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


    /**
     * service post type
     *
     * @version 1.0.0
     */
    public function service_post_type() {
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
    public function education_post_type() {
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
     * Feature post type
     *
     * @version 1.0.0
     */
    public function feature_post_type() {
        register_post_type('feature', [
            'label'     => __( 'Feature', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Feature', 'dorpon-portfolio' ),
                'singular_name' => __( 'feature', 'dorpon-portfolio' ),
                'all_items' => __( 'All Feature', 'dorpon-portfolio'),
                'add_new'       => __( 'Add New', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add New', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Feature', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-text',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }

     /**
     * Team post type
     *
     * @version 1.0.0
     */
    public function team_post_type() {
        register_post_type('team', [
            'label'     => __( 'Team', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Team', 'dorpon-portfolio' ),
                'singular_name' => __( 'feature', 'dorpon-portfolio' ),
                'all_items' => __( 'All Team', 'dorpon-portfolio'),
                'add_new'       => __( 'Add New', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add New', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Team', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-groups',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


    
     /**
     * Experience post type
     *
     * @version 1.0.0
     */
    public function experience_post_type() {
        register_post_type('experience', [
            'label'     => __( 'Experience', 'dorpon-portfolio' ),
            'labels'    => [
                'name'  => __( 'Experience', 'dorpon-portfolio' ),
                'singular_name' => __( 'feature', 'dorpon-portfolio' ),
                'all_items' => __( 'All Experience', 'dorpon-portfolio'),
                'add_new'       => __( 'Add New', 'dorpon-portfolio' ),
                'add_new_item'  => __( 'Add New', 'dorpon-portfolio' ),
                'edit_item'     => __( 'Edit Experience', 'dorpon-portfolio' )
            ],
            'menu_icon' => 'dashicons-image-filter',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


 /**
     * feature post type
     *
     * @version 1.0.0
     */

    // add_action('init', 'filter_portfolio_post_type');

    function filter_portfolio_post_type() {
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

  function portfolio_category_taxonomy() {
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
     * feature post type
     *
     * @version 1.0.0
     */

    // add_action('init', 'skill_post_type');

    function skill_post_type() {
        register_post_type( 'skill',
            array( 'labels' => array(
                'name' => __( 'Skill', 'dorpon-portfolio'),
                'all_items' => __( 'All Skill', 'dorpon-portfolio'),
                'singular_name' => __( 'Skill', 'dorpon-portfolio'),
                'add_new' => __( 'Add New', 'dorpon-portfolio'),
                'add_new_item' => __( 'Add New Skill', 'dorpon-portfolio'),
                'edit' => __( 'Edit', 'dorpon-portfolio'),
                'edit_item' => __( 'Edit Skill', 'dorpon-portfolio'),
                'new_item' => __( 'New Skill', 'dorpon-portfolio'),
                'view_item' => __( 'View Skill', 'dorpon-portfolio'),
                'search_items' => __( 'Search Skill', 'dorpon-portfolio'),
                'not_found' =>  __( 'No Skill found, yet!', 'dorpon-portfolio'),
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
                'menu_icon'=> 'dashicons-hammer',
                'rewrite'  => array( 'slug' => 'portfolio', 'with_front' => true ),
                'has_archive' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
            )
        );

  }

    function skill_category_taxonomy() {
        // Define the taxonomy
          $labels = array(
            'name' => __( 'Skill Category', 'dorpon-portfolio' ),
            'singular_name' => __( 'Skill Category', 'dorpon-portfolio' ),
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
          register_taxonomy('skill_category',array('skill'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'skill_category' ),
          ));
        }



     /**
     * Testimonial post type
     *
     * @version 1.0.0
     */
    public function testimonial_post_type() {
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

new CustomPost;


