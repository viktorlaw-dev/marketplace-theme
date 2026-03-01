<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Lesson 2: Scripts and styles enqueuing goes here

function marketplace_enqueue_theme_script(){
    // Enqueue Bootstrap JS in the footer
    wp_enqueue_script(
        'bootstrap-bundle', get_template_directory_uri() . '/assets/js/dist/bootstrap.bundle.min.js', array(), '5.0.0', true 
    );

    // Enqueue Main CSS
    wp_enqueue_style(
        'main-styles', get_template_directory_uri() . '/assets/css/dist/main.min.css', array(),'1.0.0'
    );
}

add_action( 'wp_enqueue_scripts', 'marketplace_enqueue_theme_script' );