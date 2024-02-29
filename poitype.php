<?php

/**
 * Plugin Name: Wordpress Pois
 * Description: Poi and Answer interface for developers
 * Version: 1.0
 * Author: Kristian Ahonen
 * Author URI: https://github.com/kahone
 * Text Domain: poitype
 * GitHub Plugin URI: https://github.com/kahone/poitype
 * GitHub Branch:     main
 */

add_action('init', 'poi_register_type');

function poi_register_type()
{
    $labels = [
        'name'                  => __('Poitypes', 'poitype'),
        'singular_name'         => __('Poitype', 'poitype'),
        'add_new'               => __('Add New', 'poitype'),
        'add_new_item'          => __('Add New Poi', 'poitype'),
        'edit_item'             => __('Edit Poi', 'poitype'),
        'new_item'              => __('New Poi', 'poitype'),
        'view_item'             => __('View Poi', 'poitype'),
        'search_items'          => __('Search Poi', 'poitype'),
        'not_found'             => __('No Pois Found', 'poitype'),
        'not_found_in_trash'    => __('No Pois Found in Trash', 'poitype'),
        'parent_item_colon'     => __('Parent Poi:', 'poitype'),
        'menu_name'             => __('Pois', 'poitype'),
    ];

    $args = [
        'labels'                => $labels,
        'hierarchical'          => true,
        'description'           => __('Poi', 'poitype'),
        'supports'              => ['title', 'editor', 'comments'],
        'public'                => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'publicly_queryable'    => true,
        'exclude_from_search'   => false,
        'has_archive'           => true,
        'query_var'             => true,
        'can_export'            => true,
        'rewrite'               => true,
        'capability_type'       => 'post'
    ];

    register_post_type('poitype', $args);
}