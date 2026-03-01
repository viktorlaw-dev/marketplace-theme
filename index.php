<?php
/**
 * The main template file.
 * WordPress falls back to this if no other template matches.
 *
 * @package Marketplace
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <main>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_title( '<h2>', '</h2>' );
                the_content();
            endwhile;
        else :
            echo '<p>' . esc_html__( 'No content found.', 'marketplace' ) . '</p>';
        endif;
        ?>
    </main>

    <?php wp_footer(); ?>

</body>
</html>