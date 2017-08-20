<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package organica
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>
	<div class="post-list__item-content">
		<header class="entry-header">
			<?php organica_sticky_label(); ?>

			<?php
			if ( is_single() ) {
				the_title( '<h2 class="entry-title">', '</h2>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>

			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">
					<?php
					organica_meta_date( 'loop', [
						'before' => esc_html__( 'Published on ', 'organica' ),
					] );

					organica_meta_author( 'loop', [
						'before' => esc_html__( 'by', 'organica' ) . ' ',
					] );

					organica_meta_comments( 'loop', [
						'zero'   => '0' . esc_html__( ' Comments', 'organica' ),
						'one'    => '1' . esc_html__( ' Comments', 'organica' ),
						'plural' => '%' . esc_html__( ' Comments', 'organica' ),
					] );
					?>

				</div><!-- .entry-meta -->
			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="post-featured-content">
			<?php do_action( 'cherry_post_format_audio' ); ?>
		</div><!-- .post-featured-content -->

		<div class="entry-content">
			<?php
			$embed_args    = [
				'fields' => [ 'soundcloud' ],
				'height' => 310,
				'width'  => 310,
			];
			$embed_content = apply_filters( 'cherry_get_embed_post_formats', false, $embed_args );

			if ( false === $embed_content ) {
				organica_blog_content();
			} else {
				printf( '<div class="embed-wrapper">%s</div>', $embed_content );
			}
			?>
		</div><!-- .entry-content -->
		<div class="entry-meta-bottom">
			<?php
			organica_meta_categories( 'loop', [
				'before' => esc_html__( 'Categories: ', 'organica' ),
			] );

			organica_meta_tags( 'loop', [
					'before' => esc_html__( 'Tags: ', 'organica' ),
				]
			);
			?>
		</div>
	</div>
	<footer class="entry-footer">
		<?php organica_share_buttons( 'loop' ); ?>
		<?php organica_read_more(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
