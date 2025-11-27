<?php
/**
 * Theme Functions
 */

// Theme Setup
function devquiz_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'devquiz'),
    ));
}
add_action('after_setup_theme', 'devquiz_theme_setup');

// Enqueue styles and scripts
function devquiz_enqueue_styles() {
    wp_enqueue_style('devquiz-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('devquiz-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'devquiz_enqueue_styles');

// ACF Options Page
if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// Custom excerpt length
function devquiz_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'devquiz_excerpt_length');

// Remove empty p tags
function devquiz_remove_empty_p($content) {
    $content = force_balance_tags($content);
    $content = preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
    $content = preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content);
    return $content;
}
add_filter('the_content', 'devquiz_remove_empty_p', 20, 1);