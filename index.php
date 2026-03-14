<?php
/**
 * The main template file
 *
 * @package Marketplace
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section class="hero">
    <div class="hero__content">
        <h1 class="hero__title">
            <?php bloginfo( 'name' ); ?>
        </h1>
        <p class="hero__subtitle">
            <?php bloginfo( 'description' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn btn-primary btn-lg mt-3">
            <?php esc_html_e( 'Explore Marketplace', 'marketplace' ); ?>
        </a>
    </div>
</section>

<div class="container py-5">
    <div class="row">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 mb-4">
                    <?php get_template_part( 'templates/shop/product-card' ); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-12">
                <p><?php esc_html_e( 'No products found.', 'marketplace' ); ?></p>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>