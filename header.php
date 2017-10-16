<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
    <div class="ui inverted vertical<?php echo is_front_page()?' masthead':''; ?> center aligned segment">
        <div class="ui container">
            <div class="site-info">
                <h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="header item"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            </div>
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <div class="right item">
                    <a class="active item">Home</a>
                    <a class="item">Work</a>
                    <a class="item">Company</a>
                    <a class="item">Careers</a>
                </div>
            </div>
        </div>
        <?php if (is_front_page()) :  ?>
            <div class="ui text container">
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