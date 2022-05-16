<?php

function load_theme_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'header', get_template_directory_uri() . '\/styles/' . 'header.css');
    wp_enqueue_style( 'articles', get_template_directory_uri() . '\/styles/' . 'articles.css');
    wp_enqueue_style( 'post', get_template_directory_uri() . '\/styles/' . 'post.css');
    wp_enqueue_script( 'ui', get_template_directory_uri() . '\/js/' . 'ui.js');
}

function add_featured_image_support() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small-thumbnail', 300, 300, true );
    add_image_size( 'single-post-thumbnail', 250, 250, true );
    add_image_size( 'single-post-hero', 1200, 400, true );
}

add_action('wp_enqueue_scripts', 'load_theme_assets');
add_action( 'after_setup_theme', 'add_featured_image_support' );

register_nav_menus( ['primary' => __('Primary Menu')] );