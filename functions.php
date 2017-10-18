<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
if (!isset($content_width))
    $content_width = 740;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('semanticwp_setup')) :
    function semanticwp_setup() {
        // Let wordpress handle title
        add_theme_support('title-tag');
        // Custom logo support
        $logo_defaults = array(
            'width' => 300,
            'height' => 70,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => array('site-title', 'site-description')
        );
        add_theme_support('custom-logo', $logo_defaults);
    }
endif;
add_action('after_setup_theme', 'semanticwp_setup');

/**
 * Enqueue styles and scripts
 */
function semanticwp_scripts() {
    wp_enqueue_style('semanticui', get_template_directory_uri().'/css/semantic.min.css', false, '2.2.12');
    wp_enqueue_style('style', get_stylesheet_uri(), array('semanticui'));
    wp_enqueue_script('semanticjs', get_template_directory_uri().'/js/semantic.min.js', array('jquery'), '2.2.12', true);
    if(is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'semanticwp_scripts');