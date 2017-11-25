<?php
/* load custom Walker class for navigation menus */
require_once get_template_directory().'/inc/semantic-walker-nav-menu.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
if (!isset($content_width))
    $content_width = 780;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('semanticwp_setup')):
    function semanticwp_setup() {
        // Automatic Feed Links for post and comment in the head
        add_theme_support('automatic-feed-links');

        // Let wordpress handle title
        add_theme_support('title-tag');

        // Support for Featured Images
        add_theme_support('post-thumbnails');

        // Navigation Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'semanticwp')
        ));

        // Use HTML5 markup for search forms, comment forms, comment lists and caption
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'caption'));

        // Custom logo support
        $logo_defaults = array(
            'width' => 300,
            'height' => 70,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => array('site-title', 'site-description')
        );
        add_theme_support('custom-logo', $logo_defaults);

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        
        // Post formats support
        add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    }
endif;
add_action('after_setup_theme', 'semanticwp_setup');

/**
 * Enqueue styles and scripts
 */
function semanticwp_scripts() {
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700');
    wp_enqueue_style('semanticui', get_template_directory_uri().'/css/semantic.min.css', false, '2.2.12');
    wp_enqueue_style('style', get_stylesheet_uri(), array('semanticui'));
    wp_enqueue_script('semanticjs', get_template_directory_uri().'/js/semantic.min.js', array('jquery'), '2.2.12', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0', true);
    if(is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'semanticwp_scripts');

/**
 * Enqueue scripts for customize preview
 */
function semanticwp_preview_scripts() {
    wp_enqueue_script('semantcwp_customize_preview', get_template_directory_uri().'/js/customize_preview.js', array( 'customize-preview', 'jquery' ));
}
add_action('customize_preview_init', 'semanticwp_preview_scripts');

/* load custom widgets */
require_once get_template_directory().'/inc/widgets.php';

/**
 * Register Sidebars and Widgets
 */
function semanticwp_init_widgets() {
    register_sidebar(array(
        'id' => 'blog',
        'name' => __('Blog Sidebar', 'semanticwp'),
        'description' => __('Sidebar for blog posts and archive pages', 'semanticwp'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'before_title' => '<h3 class="ui dividing header widget-title">',
        'after_title' => '</h3>',
        'after_widget' => '</div>',
    ));
    // register_widget('About_Me');
    // register_widget('Special_Posts');
}
add_action('widgets_init', 'semanticwp_init_widgets');

/* load template specific functions */
require_once get_template_directory().'/inc/template-functions.php';

/* customizer additions */
require_once get_template_directory().'/inc/customizer.php';