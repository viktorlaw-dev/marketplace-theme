<?php
/**
 * Template Part — Product Card
 *
 * @package Marketplace
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="product-card">

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="product-card__image">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>">
                <?php the_post_thumbnail( 'marketplace-product-card' ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="product-card__body">

        <h5 class="product-card__title">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>">
                <?php echo esc_html( get_the_title() ); ?>
            </a>
        </h5>

        <p class="product-card__excerpt">
            <?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?>
        </p>

        <?php
        $price = get_post_meta( get_the_ID(), '_price', true );
        if ( $price ) : ?>
            <p class="product-card__price">
                <?php echo '&#8358;' . esc_html( number_format( (float) $price, 2 ) ); ?>
            </p>
        <?php endif; ?>

        <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-primary mt-2">
            <?php esc_html_e( 'View Product', 'marketplace' ); ?>
        </a>

    </div>

</div>