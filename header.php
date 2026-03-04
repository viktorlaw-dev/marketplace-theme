<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
        <!-- Site Name / Logo -->
        <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
            <?php bloginfo('name'); ?>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav',
                    'fallback_cb'    => false,
                    'depth'          => 2,
                    'walker'         => new Marketplace_Nav_Walker(),
                ) );
            ?>
        </div>

    </div>
</nav>