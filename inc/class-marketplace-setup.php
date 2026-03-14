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
     */
    public function __construct() {
        // Register hooks to be called on various WordPress actions
        add_action( 'after_setup_theme', array( $this, 'init' ) );
        add_action( 'after_setup_theme', array( $this, 'register_image_sizes' ) );
        add_action( 'init', array( $this, 'register_menus' ) );
        add_action( 'wp_head', array( $this, 'load_google_fonts' ) );
    }

    /**
     * Theme supports
     */
    public function init() {
        // Enable title tag support
        add_theme_support( 'title-tag' );
        
        // Enable post thumbnails support
        add_theme_support( 'post-thumbnails' );
        
        // Enable WooCommerce support
        add_theme_support( 'woocommerce' );
        
        // Enable various WooCommerce gallery features
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        
        // Enable HTML5 support for specific elements
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );
        
        // Enable wide alignment support
        add_theme_support( 'align-wide' );
        
        // Load theme text domain for localization
        load_theme_textdomain( 'marketplace', get_template_directory() . '/languages' );
    }

    /**
     * Load Google Fonts
     */
    public function load_google_fonts() {
        // Output preconnect tags for Google Fonts
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
        
        // Output link tag for Inter font
        echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">';
    }

    /**
     * Custom image sizes
     */
    public function register_image_sizes() {
        // Register a product card image size
        add_image_size( 'marketplace-product-card', 400, 400, true );
        
        // Register a vendor banner image size
        add_image_size( 'marketplace-vendor-banner', 1200, 400, true );
        
        // Register a vendor logo image size
        add_image_size( 'marketplace-vendor-logo', 200, 200, true );
    }

    /**
     * Navigation menus
     */
    public function register_menus() {
        // Register primary navigation menu
        register_nav_menus( array(
            'primary' => __( 'Primary Navigation', 'marketplace' ),
        ) );
        
        // Register footer navigation menu
        register_nav_menus( array(
            'footer'  => __( 'Footer Navigation', 'marketplace' ),
        ) );
        
        // Register vendor dashboard menu
        register_nav_menus( array(
            'vendor'  => __( 'Vendor Dashboard Menu', 'marketplace' ),
        ) );
    }

} // End of Marketplace_Setup class
