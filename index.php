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

<div class="container py-5">
    
    <!-- Hero Section -->
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">
                Welcome to <?php bloginfo( 'name' ); ?>
            </h1>
            <p class="col-md-8 fs-5 mx-auto">
                <?php bloginfo( 'description' ); ?>
            </p>
            <a href="<?php echo esc_url( home_url('/shop') ); ?>" class="btn btn-primary btn-lg">
                Explore Marketplace
            </a>
        </div>
    </div>

    <!-- Posts Loop -->
    <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 card-title">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="card-text">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e( 'No content found.', 'marketplace' ); ?></p>
    <?php endif; ?>

</div>

<?php
get_footer();