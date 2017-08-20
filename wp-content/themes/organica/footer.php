<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Organica
 */

?>

	</div><!-- #content -->

	<?php do_action( 'organica_render_widget_area', 'after-content-full-width-area' ); ?>

	<footer id="colophon" <?php organica_footer_class() ?>>
		<?php get_template_part( 'template-parts/footer/layout', get_theme_mod( 'footer_layout_type' ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
