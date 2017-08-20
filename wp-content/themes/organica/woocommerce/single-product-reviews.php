<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.2
 */
global $product;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews">
	<div id="comments">
		<h3><?php
			if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' && ( $count = $product->get_review_count() ) )
				printf( _n( '%s Review for %s', '%s Reviews for %s', $count, 'organica' ), $count, get_the_title() );
			else
				esc_html_e( 'Reviews', 'organica' );
		?></h3>

		<?php if ( have_comments() ) : ?>

			<ol class="commentlist">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
			</ol>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="woocommerce-pagination">';
				paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
					'type'      => 'list',
				) ) );
				echo '</nav>';
			endif; ?>

		<?php else : ?>

			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'organica' ); ?></p>

		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>

		<div id="review_form_wrapper" class="row">
			<div id="review_form" class="col-lg-6">
				<?php
					$commenter = wp_get_current_commenter();

					$comment_form = array(
						'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
						'title_reply_after'   => '</h3>',
						'title_reply'          => have_comments() ? esc_html__( 'Add a review', 'organica' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'organica' ), get_the_title() ),
						'title_reply_to'       => esc_html__( 'Add a review to %s', 'organica' ),
						'comment_notes_before' => '',
						'comment_notes_after'  => '',
						'fields'               => array(
							'author' => '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Your Name:', 'organica' ) . ' <span class="required">*</span></label> ' .
							            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" /></p>',
							'email'  => '<p class="comment-form-email"><label for="email">' . esc_html__( 'Your Email:', 'organica' ) . ' <span class="required">*</span></label> ' .
							            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></p>',
						),
						'label_submit'  => esc_html__( 'Submit', 'organica' ),
						'logged_in_as'  => '',
						'comment_field' => ''
					);

					if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
						$comment_form['must_log_in'] = '<p class="must-log-in">' .  sprintf( '%2s <a href="%1s">%3s</a> %4s' , esc_url( $account_page_url ) , esc_html__('You must be','organica'), esc_html__('logged in','organica') , esc_html__('to post a review.','organica')) . '</p>';
					}

					if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
						$comment_form['comment_field'] = '<p class="comment-form-rating"><span class="for_rating">' . esc_html__( 'Your Rating', 'organica' )
										. '<span class="required">*</span>' .'</span>
										<select name="rating" id="rating">
											<option value="">' . esc_html__( 'Rate&hellip;', 'organica' ) . '</option>
											<option value="5">' . esc_html__( 'Perfect', 'organica' ) . '</option>
											<option value="4">' . esc_html__( 'Good', 'organica' ) . '</option>
											<option value="3">' . esc_html__( 'Average', 'organica' ) . '</option>
											<option value="2">' . esc_html__( 'Not that bad', 'organica' ) . '</option>
											<option value="1">' . esc_html__( 'Very Poor', 'organica' ) . '</option>
										</select></p>';
					}

					$comment_form['submit_button'] = '<button name="%1$s" type="submit" id="%2$s" class="%3$s button">%4$s</button>';

					$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Your Review', 'organica' ) . ' <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';

					comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );

				?>
			</div>
		</div>

	<?php else : ?>

		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'organica' ); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
</div>


