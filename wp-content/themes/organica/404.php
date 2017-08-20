<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Organica
 */
?>

<section class="error-404 not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( '404', 'organica' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <h1><?php esc_html_e( 'The page not found.', 'organica' ); ?></h1>
        <p><a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Visit home page', 'organica' ); ?></a></p>
        <hr>
        <h4><?php esc_html_e( 'Unfortunately the page you were looking for could not be found. Maybe search can help.', 'organica' ); ?></h4>

        <?php get_search_form(); ?>

    </div><!-- .page-content -->
</section><!-- .error-404 -->