<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Organica
 */
?>

<div class="footer-container">
	<div <?php echo organica_get_container_classes( array( 'site-info' ) ); ?>>
		<?php
			organica_footer_logo();
			organica_social_list( 'footer' );
            organica_footer_text_center();
            organica_footer_copyright();
            organica_footer_menu();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->