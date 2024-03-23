<?php

/**
 * Ceeso Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package ceeso
 */

 /**
 * Initialisation de la configuration du thème
 * après avoir vérifier si la fonction existe
 *
 * @return void
 */
if (!function_exists('ceeso_init')) {
    function ceeso_init()
    {
      add_theme_support('title-tag');
      add_theme_support('post-thumbnails');
    }
  }
    
add_action('after_setup_theme', 'ceeso_init');