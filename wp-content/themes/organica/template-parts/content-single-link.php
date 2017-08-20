<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package organica
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				organica_meta_date( 'single', [
					'before' => esc_html__( 'Published on ', 'organica' ),
				] );

				organica_meta_author( 'single', [
					'before' => esc_html__( 'by', 'organica' ) . ' ',
				] );

				organica_meta_comments( 'single', [
					'zero'   => '0' . esc_html__( ' Comments', 'organica' ),
					'one'    => '1' . esc_html__( ' Comments', 'organica' ),
					'plural' => '%' . esc_html__( ' Comments', 'organica' ),
				] );
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<figure class="post-thumbnail">
		<?php organica_post_thumbnail( false ); ?>
		<div class="post-thumbnail__format-link">
			<?php do_action( 'cherry_post_format_link', array( 'render' => true, 'class' => 'invert' ) ); ?>
		</div>
	</figure><!-- .post-thumbnail -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( [
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'organica' ),
			'after'  => '</div>',
		] );
		?>
	</div><!-- .entry-content -->

	<div class="entry-meta-bottom">
		<?php
		organica_meta_categories( 'single', [
			'before' => esc_html__( 'Categories: ', 'organica' ),
		] );

		organica_meta_tags( 'single', [
				'before' => esc_html__( 'Tags: ', 'organica' ),
			]
		);
		?>
	</div>

	<footer class="entry-footer">
		<?php organica_share_buttons( 'single' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

