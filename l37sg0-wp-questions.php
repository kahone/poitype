<?php

/**
 * Plugin Name: l37sg0 Wordpress Questions
 * Description: Question and Answer interface for developers
 * Version: 1.0
 * Author: Petar Ivanov
 * Author URI: https://l37sg0.com
 * Text Domain: l37sg0-questions
 */

add_action('init', 'l37sg0_register_questions');

function l37sg0_register_questions()
{
    $labels = [
        'name'                  => __('Questions', 'l37sg0_questions'),
        'singular_name'         => __('Question', 'l37sg0_questions'),
        'add_new'               => __('Add New', 'l37sg0_questions'),
        'add_new_item'          => __('Add New Question', 'l37sg0_questions'),
        'edit_item'             => __('Edit Questions', 'l37sg0_questions'),
        'new_item'              => __('New Question', 'l37sg0_questions'),
        'view_item'             => __('View Question', 'l37sg0_questions'),
        'search_items'          => __('Search Question', 'l37sg0_questions'),
        'not_found'             => __('No Questions Found', 'l37sg0_questions'),
        'not_found_in_trash'    => __('No Questions Found in Trash', 'l37sg0_questions'),
        'parent_item_colon'     => __('Parent Question:', 'l37sg0_questions'),
        'menu_name'             => __('Questions', 'l37sg0_questions'),
    ];

    $args = [
        'labels'                => $labels,
        'hierarchical'          => true,
        'description'           => __('Questions and Answers', 'l37sg0_questions'),
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

    register_post_type('l37sg0_questions', $args);
}