<?php
/**
 * Norvault Security Theme Functions - MINIMAL VERSION
 */

// Theme Setup
function norvault_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'norvault_theme_setup');

// Enqueue Scripts and Styles
function norvault_enqueue_scripts() {
    // Theme stylesheet
    wp_enqueue_style('norvault-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'norvault_enqueue_scripts');
