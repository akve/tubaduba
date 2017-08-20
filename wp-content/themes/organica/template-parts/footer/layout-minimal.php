<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Organica
 */
?>

<div class="footer-container">
	<div <?php echo organica_get_container_classes( array( 'site-info' ) ); ?>>
		<div class="site-info__flex">
			<?php
			organica_footer_logo();
			organica_social_list( 'footer' );
			?>
			<div class="site-info__mid-box">
				<?php
				organica_footer_copyright();
				organica_footer_menu();
				?>
			</div>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->