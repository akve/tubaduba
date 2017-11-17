<?php get_header( organica_template_base() ); ?>

	<?php organica_site_breadcrumbs(); ?>

	<div class="container">

		<?php do_action( 'organica_render_widget_area', 'before-content-area' ); ?>

		<div class="row">

			<?php get_sidebar(); // Loads the sidebar.php template.  ?>

			<div id="primary" class="col-xs-11 col-md-8 col-xl-9">

				<?php do_action( 'organica_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main">

					<?php include organica_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'organica_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->


		</div><!-- .row -->

		<?php do_action( 'organica_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->

<?php get_footer( organica_template_base() ); ?>
