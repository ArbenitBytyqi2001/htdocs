<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu',
            'menu_class' => 'menu',
        ));
        ?>
        <div class="contact-info">
            <span class="material-symbols-outlined">
                call
            </span>
            <span class="phone-number">+44 987065908</span>
            <div class="icons">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon.png" alt="Facebook Icon"
                    width="15px">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/twitter-icon.png" alt="Twitter Icon"
                    width="35px">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram-icon.png" alt="Instagram Icon"
                    width="35px">
            </div>
        </div>
    </header>