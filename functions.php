<?php
/**
 * Marketplace Theme — Functions Bootstrap
 *
 * This file is a loader only.
 * NO logic lives here. All logic lives in /inc/ files.
 *
 * @package Marketplace
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Load core files
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/enqueue.php';

// Load classes
require_once get_template_directory() . '/inc/class-marketplace-setup.php';
require_once get_template_directory() . '/inc/class-vendor-cpt.php';
require_once get_template_directory() . '/inc/class-ajax-handlers.php';
require_once get_template_directory() . '/inc/class-woo-customizer.php';

// Initialize classes
new Marketplace_Setup();
new Vendor_CPT();
new Ajax_Handlers();
new Woo_Customizer();