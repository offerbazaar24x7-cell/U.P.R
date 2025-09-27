<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header>
        <div class="container">
            <div class="header-container">
                <div class="logo">
                    <h1>U.P.R. <span>Solar</span></h1>
                </div>
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>
                </nav>
                <a href="#contact" class="cta-button">Free Quote</a>
            </div>
        </div>
    </header>
    <main>