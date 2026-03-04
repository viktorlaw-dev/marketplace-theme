<?php
/**
 * Marketplace_Setup Class
 *
 * Handles core theme setup only.
 * Theme supports, image sizes, navigation menus.
 *
 * @package Marketplace
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Marketplace_Setup {

    /**
     * Constructor — registers hooks only.
     * Never put logic directly in the constructor.
     */
    public function __construct() {
        add_action( 'after_setup_theme', array( $this, 'init' ) );
        add_action( 'after_setup_theme', array( $this, 'register_image_sizes' ) );
        add_action( 'init', array( $this, 'register_menus' ) );
    }

    /**
     * Theme supports
     */
    public function init() {

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );

        add_theme_support( 'align-wide' );

        load_theme_textdomain( 'marketplace', get_template_directory() . '/languages' );
    }

    /**
     * Custom image sizes
     */
    public function register_image_sizes() {
        add_image_size( 'marketplace-product-card', 400, 400, true );
        add_image_size( 'marketplace-vendor-banner', 1200, 400, true );
        add_image_size( 'marketplace-vendor-logo', 200, 200, true );
    }

    /**
     * Navigation menus
     */
    public function register_menus() {
        register_nav_menus( array(
            'primary' => __( 'Primary Navigation', 'marketplace' ),
            'footer'  => __( 'Footer Navigation', 'marketplace' ),
            'vendor'  => __( 'Vendor Dashboard Menu', 'marketplace' ),
        ) );
    }

    // Load Google Font
        add_action( 'wp_head', function() {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
        echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">';
    });

}