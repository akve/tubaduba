<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Organica
 */
?>

<?php
organica_footer_logo();
organica_social_list( 'footer' );
?>

<div class="footer-area-wrap invert">
	<div class="container">
		<?php do_action( 'organica_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo organica_get_container_classes( array( 'site-info' ) ); ?>>
		<?php
		organica_footer_copyright();
		organica_footer_menu();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->