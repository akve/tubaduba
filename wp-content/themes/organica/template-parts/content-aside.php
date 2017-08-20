<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package organica
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card hentry' ); ?>>
	<div class="post-list__item-content">

		<header class="entry-header">
			<?php
			if ( is_single() ) {
				the_title( '<h2 class="entry-title">', '</h2>' );
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

		<figure class="post-thumbnail">
			<?php
			organica_post_thumbnail( false );
			organica_sticky_label();
			?>
		</figure><!-- .post-thumbnail -->

		<div class="entry-content">
			<?php organica_blog_content(); ?>
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
