<?php

function companyintro_theme_support() {
    // Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'companyintro_theme_support');

function companyintro_menus() {
    
    $location = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($location);
}

add_action('init', 'companyintro_menus');

add_action('after_setup_theme', 'companyintro_theme_support');

function companyintro_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('companyintro-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('companyintro-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('companyintro-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'companyintro_register_styles');

function companyintro_register_scripts() {
    $version = wp_get_theme()->get('Version');
    // wp_enqueue_script('companyintro-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('companyintro-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('companyintro-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    // wp_enqueue_script('companyintro-main', get_template_directory_uri() . "/asset/js/main.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'companyintro_register_scripts');

?>