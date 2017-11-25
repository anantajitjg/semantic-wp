<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <?php if(is_not_paged_front_page()): ?>
        <style>
            #main-header-wrapper {
                background: url(<?php echo get_featured_homepage_image_url(); ?>) center center no-repeat;
                background-size: cover;
            }
        </style>
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<?php semanticwp_menu('primary', 'sidebar'); // Primary Menu for Handheld Devices ?>
<div class="main-wrapper pusher">
    <div id="main-header-wrapper" class="ui inverted vertical<?php echo (is_not_paged_front_page())?' masthead':''; ?> center aligned clearing segment">
        <div class="ui main-header container">
            <div class="site-info">
                <?php if(function_exists('the_custom_logo')): ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" class="header item"><?php bloginfo('name'); ?></a></h1>
                <?php if(get_bloginfo('description')): ?>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                <?php endif; ?>
            </div>
            <?php semanticwp_menu('primary'); // Primary Menu ?>
        </div>
        <?php if (is_not_paged_front_page()):  ?>
            <div class="ui featured text container">
                <h1 class="ui inverted header featured-title"><?php echo get_theme_mod('featured_title', 'SemanticWP Theme'); ?></h1>
                <h2 class="featured-subtitle"><?php echo get_theme_mod('featured_subtitle', 'A theme based on Semantic UI front-end framework'); ?></h2>
                <a href="<?php echo get_theme_mod('featured_button_url', esc_url('https://semantic-ui.com')); ?>" class="ui huge secondary button featured-button"><?php echo get_theme_mod('featured_button_text', 'Know More'); ?></a>
            </div>
        <?php endif; ?>
    </div>
    <!-- Message to be displayed when JavaScript is disabled -->
    <noscript>
        <div class="ui warning message">
            <div class="header">JavaScript Disabled</div>
            <p>Please enable JavaScript for better viewing experience!</p>
        </div>
    </noscript>