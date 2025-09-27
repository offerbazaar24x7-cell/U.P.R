<?php
/**
 * U.P.R. Solar Green Energy functions and definitions
 */

function upr_solar_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'upr-solar'),
        'footer' => __('Footer Menu', 'upr-solar'),
    ));
}
add_action('after_setup_theme', 'upr_solar_setup');

function upr_solar_scripts() {
    wp_enqueue_style('upr-solar-style', get_stylesheet_uri());
    wp_enqueue_style('upr-solar-custom', get_template_directory_uri() . '/css/custom.css');
    
    wp_enqueue_script('upr-solar-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'upr_solar_scripts');