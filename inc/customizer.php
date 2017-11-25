<?php

function semanticwp_customize_register($wp_customizer) {
    /**
     * Featured Content
     */
    $wp_customizer->add_section('featured_content', array(
        'title' => __('Featured Content', 'semanticwp'),
        'priority' => 30,
        'active_callback' => 'is_not_paged_front_page'
    ));
    $wp_customizer->add_setting('featured_homepage_image', array(
        'default' => get_template_directory_uri() . '/img/featured_image.png',
        'sanitize_callback' => 'absint'
    ));
    $wp_customizer->add_control(new WP_Customize_Cropped_Image_Control($wp_customizer, 'featured_homepage_image', array(
        'label' => __('Featured Image', 'semanticwp'),
        'section' => 'featured_content',
        'flex_width'  => true,
        'flex_height' => false,
        'width'       => 1920,
        'height'      => 450,
        'priority' => 1
    )));
    $wp_customizer->add_setting('featured_title', array(
        'default' => __('SemanticWP Theme', 'semanticwp')
    ));
    $wp_customizer->add_control('featured_title', array(
        'label' => __('Title', 'semanticwp'),
        'section' => 'featured_content',
        'priority' => 2
    ));
    $wp_customizer->add_setting('featured_subtitle', array(
        'default' => __('A WordPress theme based on Semantic UI', 'semanticwp')
    ));
    $wp_customizer->add_control('featured_subtitle', array(
        'label' => __('Subtitle', 'semanticwp'),
        'section' => 'featured_content',
        'priority' => 3
    ));
    $wp_customizer->add_setting('featured_button_text', array(
        'default' => __('Know More', 'semanticwp')
    ));
    $wp_customizer->add_control('featured_button_text', array(
        'label' => __('Button Text', 'semanticwp'),
        'section' => 'featured_content',
        'priority' => 4
    ));
    $wp_customizer->add_setting('featured_button_url', array(
        'default' => esc_url('https://semantic-ui.com')
    ));
    $wp_customizer->add_control('featured_button_url', array(
        'label' => __('Button URL', 'semanticwp'),
        'type' => 'url',
        'section' => 'featured_content',
        'priority' => 5
    ));
}
add_action('customize_register', 'semanticwp_customize_register');