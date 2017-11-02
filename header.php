<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php semanticwp_menu('primary', 'sidebar'); // Primary Menu for Handheld Devices ?>
<div class="main-wrapper pusher">
    <div class="ui inverted vertical<?php echo (is_front_page() && (!is_paged()))?' masthead':''; ?> center aligned clearing segment">
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
        <?php if (is_front_page() && (!is_paged())):  ?>
            <div class="ui featured text container">
                <h1 class="ui inverted header">
                    Imagine-a-Company
                </h1>
                <h2>Do whatever you want when you want to.</h2>
                <div class="ui huge primary button">Get Started
                    <i class="right arrow icon"></i>
                </div>
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