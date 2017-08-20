<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'organica' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'organica' ); ?></span></span>

	<?php endif; ?>
	<?php
	$sep    = '<span>,</span>';
	$before = '<span class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'organica' ) . ' ';
	$after  = '</span>';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0', '>=' ) ) {
		echo wc_get_product_category_list( get_the_id(), $sep, $before, $after );
	} else {
		global $product;
		if ( ! empty( $product ) ) {
			echo $product->get_categories( $before, $sep, $after );
		}
	} ?>

	<?php
	$sep    = '<span>,</span> ';
	$before = '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'organica' ) . ' ';
	$after  = '</span>';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0', '>=' ) ) {
		echo wc_get_product_tag_list( get_the_id(), $sep, $before, $after );
	} else {
		global $product;
		if ( ! empty( $product ) ) {
			echo $product->get_tags( $before, $sep, $after );
		}
	} ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>

