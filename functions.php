<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('semanticwp_setup')) :
    function semanticwp_setup() {
        add_theme_support('title-tag');
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
}
add_action('wp_enqueue_scripts', 'semanticwp_scripts');