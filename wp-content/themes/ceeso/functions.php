<?php

/**
 * Ceeso Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package ceeso
 */


if (!function_exists('ceeso_init')) {
    /**
     * Initialisation de la configuration du thème
     * après avoir vérifier si la fonction existe
     *
     * @return void
     */
    function ceeso_init()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'ceeso_init');



if (!function_exists('create_post_type')) {
    /**
     * Généère un custom Post Type
     * 
     * @param string $singular
     * @param string $plural
     * @param string $menu_icon
     * @param string $description
     * 
     * @return void
     */
    function create_post_type(
        string $singular,
        string $plural,
        string $menu_icon,
        string $description = ''
    ) {
        register_post_type($singular, [
            'public'            => true,
            'show_in_rest'      => false,
            'description'       => $description,
            'menu_icon'         => $menu_icon,
            'hierarchical'      => false,
            'has_archive'       => true,
            'supports'          => ['title', 'editor', 'author', 'thumbnail'],
            'menu_position'         => 5,
            'rewrite'           => [
                'slug' => strtolower($plural),
            ],
            'labels' => [
                'name'                      =>  __($plural, 'ceeso'),
                'singular_name'             => __($singular, 'ceeso'),
                'all_items'             => __('All ' . $plural, 'ceeso'),
                'archives'              => __($plural . ' Archives', 'ceeso'),
                'attributes'            => __($singular . ' Attributes', 'ceeso'),
                'insert_into_item'      => __('Insert into ' . $singular, 'ceeso'),
                'uploaded_to_this_item' => __('Uploaded to this ' . $singular, 'ceeso'),
                'featured_image'        => __($singular . ' Featured image', 'ceeso'),
                'set_featured_image'    => __('Set ' . $singular . ' featured image', 'ceeso'),
                'remove_featured_image' => __('Remove ' . $singular . ' featured image', 'ceeso'),
                'use_featured_image'    => __('Use as ' . $singular . ' featured image', 'ceeso'),
                'filter_items_list'     => __('Filter ' . $plural . ' list', 'ceeso'),
                'items_list_navigation' => __($plural . ' list navigation', 'ceeso'),
                'items_list'            => __($plural . ' list', 'ceeso'),
                'new_item'              => __('Add New ' . $singular, 'ceeso'),
                'add_new'               => __('Add New ' . $singular, 'ceeso'),
                'add_new_item'          => __('New ' . $singular, 'ceeso'),
                'edit_item'             => __('Edit ' . $singular, 'ceeso'),
                'view_item'             => __('View ' . $singular, 'ceeso'),
                'view_items'            => __('View ' . $plural, 'ceeso'),
                'search_items'          => __('Search ' . $plural, 'ceeso'),
                'not_found'             => __('No ' . $plural . ' found', 'ceeso'),
                'not_found_in_trash'    => __('No ' . $plural . ' found in trash', 'ceeso'),
                'menu_name'             => __($plural, 'ceeso'),
            ],
        ]);
    }
}


if (!function_exists('custom_cpts')) {
    /**
     * Création des CPT Event et Question
     * 
     * @return void
     */
    function custom_cpts()
    {
        create_post_type('Event', 'Events', 'dashicons-calendar');
        create_post_type('Question', 'Questions', 'dashicons-editor-help');
    }
}


add_action('init', 'custom_cpts');



/**
 * Déclaration de la Méta box date pour le CPT Event
 * 
 * @return void
 */
function event_date_meta_box()
{
	add_meta_box(
		'event_date',
		'Dates',
		'event_date_meta_box_html',
		'event'
	);
}
add_action('add_meta_boxes', 'event_date_meta_box');
