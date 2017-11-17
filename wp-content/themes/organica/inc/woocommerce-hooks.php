<?php
/**
 * organica WooCommerce Theme hooks.
 *
 * @package organica
 */

add_action( 'after_setup_theme', 'organica_woocommerce_support' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'wp_enqueue_scripts', 'organica_enqueue_assets' );

add_action( 'woocommerce_before_main_content', 'organica_enqueue_single_product_scripts' );

add_filter( 'woocommerce_sale_flash', 'organica_woocommerce_sale_flash' );

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 9 );

add_action( 'woocommerce_before_single_product_summary', 'organica_before_single_product_summary_wrap_before', 1 );

add_action( 'woocommerce_before_single_product_summary', 'organica_before_single_product_summary_wrap_after', 99 );

add_filter( 'woocommerce_get_price_html_from_to', 'organica_woocommerce_get_price_html_from_to', 10, 3 );

if ( organica_has_woocommerce_share() ) {
	remove_action( 'wp_footer', 'toastie_wc_smsb_social_footer' );
	remove_action( 'woocommerce_single_product_summary', 'toastie_wc_smsb_form_code', 31 );
	add_action( 'woocommerce_share', 'toastie_wc_smsb_form_code' );
	add_action( 'woocommerce_before_single_product_summary' , 'organica_enqueue_single_product_smsb_assets' );
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 11 );

add_action( 'woocommerce_single_product_summary', 'organica_after_single_product_summary_wrap', 999 );

add_action( 'widgets_init', 'organica_override_woocommerce_widgets', 15 );

add_action( 'woocommerce_before_shop_loop_item_title', 'organica_woocommerce_show_flash' );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 11 );

remove_action( 'tm_carousel_woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'tm_carousel_woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 11 );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

add_action( 'tm_carousel_woocommerce_before_shop_loop_item_title', 'organica_product_image_wrap_open', 2 );
add_action( 'tm_carousel_woocommerce_before_shop_loop_item_title', 'organica_product_image_wrap_close', 11 );

add_action( 'woocommerce_before_shop_loop_item', 'organica_product_image_wrap_open', 2 );
add_action( 'woocommerce_before_shop_loop_item_title', 'organica_product_image_wrap_close', 12 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'tm_products_carousel_widget_sale_end_date', 11 );
add_action( 'woocommerce_before_shop_loop_item_title', 'tm_products_sale_end_date', 11 );

add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 3 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );

add_action( 'woocommerce_after_shop_loop_item', 'organica_wishlist_compare_wrap_open', 11 );
add_action( 'woocommerce_after_shop_loop_item', 'organica_wishlist_compare_wrap_close', 20 );

add_filter( 'woocommerce_show_page_title', 'organica_woocommerce_show_page_title' );

add_filter( 'woocommerce_loop_add_to_cart_link', 'organica_woocommerce_loop_add_to_cart_link', 10, 2 );


if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'organica_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'organica_cart_link_fragment' );
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

add_action( 'woocommerce_before_shop_loop', 'organica_woocommerce_result_count', 31 );

add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 32 );

add_action( 'woocommerce_before_shop_loop', 'organica_woocommerce_open_order_wrap', 29 );

add_action( 'woocommerce_before_shop_loop', 'organica_woocommerce_close_order_wrap', 33 );

add_action( 'pre_get_posts', 'organica_remove_products_from_posts_search', 99 );

add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_stuffs', 11 );

add_filter( 'wpcf7_ajax_loader', 'organica_wpcf7_ajax_loader' );

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

remove_action( 'woocommerce_before_shop_loop', 'wccm_register_add_compare_button_hook' );

remove_action( 'woocommerce_single_product_summary', 'wccm_add_single_product_compare_buttton', 35 );

add_action( 'wp_enqueue_scripts', 'organica_localize_theme_script', 11 );

remove_action( 'woocommerce_before_shop_loop', 'wccm_render_catalog_compare_info' );

remove_action( 'widgets_init', 'wccm_widgets_init' );

remove_action( 'wp_enqueue_scripts', 'wccm_enqueue_compare_scripts' );

add_action( 'woocommerce_before_shop_loop_item_title', 'organica_woocommerce_list_tags', 14 );

add_filter( 'tm_products_carousel_widget_remove_hooks', 'organica_tm_products_carousel_widget_remove_hooks' );

add_filter( 'tm_products_carousel_widget_tag_action', 'organica_tm_products_carousel_widget_tag_action' );

add_filter( 'tm_products_carousel_widget_tag_priority', 'organica_tm_products_carousel_widget_tag_priority' );

add_filter( 'tm_products_carousel_widget_cat_action', 'organica_tm_products_carousel_widget_cat_action' );

add_filter( 'tm_products_carousel_widget_cat_priority', 'organica_tm_products_carousel_widget_cat_priority' );

add_action( 'woocommerce_before_single_product', 'organica_enqueue_single_product_scripts' );

add_filter( 'cherry_page_title', 'organica_cherry_page_title', 10, 2 );

add_filter( 'cherry_breadcrumbs_custom_trail', 'organica_get_woo_breadcrumbs', 10, 2 );

add_filter( 'tm_woocommerce_include_bootstrap_grid', 'organica_tm_woocommerce_include_bootstrap_grid' );

add_filter( 'get_styles', 'organica_tm_woocommerce_include_bootstrap_grid' );

add_filter( 'woocommerce_enqueue_styles', 'organica_woocommerce_enqueue_styles' );

remove_action('wp_print_scripts', 'toastie_wc_smsb_my_enqueue');

add_filter( 'tm_wc_compare_wishlist_loader', 'organica_wc_compare_wishlist_loader' );

remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating' );

add_filter( 'tm_products_carousel_widget_wrapper_open', 'organica_products_carousel_widget_wrapper_open' );
add_filter( 'tm_products_carousel_widget_wrapper_close', 'organica_products_carousel_widget_wrapper_close' );

/**
 * Enable Woocommerce theme support
 */
function organica_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

function organica_has_woocommerce_share() {
	return in_array(
		'woocommerce-social-media-share-buttons/index.php',
		apply_filters( 'active_plugins', get_option( 'active_plugins' ) )
	);
}

/**
 * Check is WPML Plugin exists and enabled
 *
 * @return bool
 */
function organica_has_wpml() {
	if ( ! isset( $organica_has_wpml ) || null == $organica_has_wpml ) {
		$organica_has_wpml = in_array( 'sitepress-multilingual-cms/sitepress.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
	}

	return $organica_has_wpml;
}

/**
 * Check is WooCommerce Plugin exists and enabled
 *
 * @return bool
 */
function organica_has_woocommerce() {

	if ( ! isset( $organica_has_woocommerce ) || null == $organica_has_woocommerce ) {
		$organica_has_woocommerce = in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
	}

	return $organica_has_woocommerce;

}

function organica_enqueue_assets() {

	// Jssor Slider
	wp_register_script( 'jquery-jssor', ORGANICA_THEME_URI . '/assets/js/jssor.slider.mini.js', array( 'jquery' ), '1.0.0', true );

	// Easyzoom
	wp_register_script( 'jquery-easyzoom', ORGANICA_THEME_URI . '/assets/js/easyzoom.js', array( 'jquery' ), '2.3.1', true );

	// Navbar
	wp_enqueue_script( 'navbar-script', ORGANICA_THEME_URI . '/assets/js/jquery.rd-navbar.js', array(), '1.0.0', true );

	// Jquery Chosen
	wp_enqueue_script( 'jquery-chosen', ORGANICA_THEME_URI . '/assets/js/chosen.jquery.min.js', array(), '1.5.1', true );
}

/**
 * Enqueue Jssor Slider.
 *
 * @since 1.0.0
 */
function organica_enqueue_single_product_scripts() {
	// Jssor Slider
	wp_enqueue_script( 'jquery-jssor' );

	// Easyzoom
	wp_enqueue_script( 'jquery-easyzoom' );

}

/**
 * Replace sale flash text
 *
 * @return string
 */
function organica_woocommerce_sale_flash() {
	return '<span class="onsale">' . esc_html__( 'Sale', 'organica' ) . '</span>';
}

/**
 * Change WooCommerce loop category title layout
 *
 * @param object $category
 *
 * @return string
 */
function woocommerce_template_loop_category_title( $category ) {
	?>
	<h3>
		<?php
		echo $category->name;
		if ( $category->count > 0 ) {
			echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count"><span class="count__number">' . $category->count . '</span> товаров </mark>', $category );
		}
		?>
	</h3>
	<?php
}

/**
 * Override Woocommerce Standard Widgets
 */
function organica_override_woocommerce_widgets() {
	if ( class_exists( 'WC_Widget_Recent_Reviews' ) ) {
		unregister_widget( 'WC_Widget_Recent_Reviews' );
		include_once( 'widgets/tm-wc-recent-reviews-products/class-tm-reviews-product-widget.php' );
		register_widget( 'Organica_WC_Widget_Recent_Reviews' );
	}
	if ( class_exists( 'WP_Widget_Recent_Posts' ) ) {
		unregister_widget( 'WP_Widget_Recent_Posts' );
		include_once( 'widgets/tm-wc-recent-post/class-tm-widget-recent-posts.php' );
		register_widget( 'Organica_WP_Widget_Recent_Posts' );
	}
}

/**
 * Change WooCommerce Price Output when Product is on Sale
 *
 * @param  string $price Price
 * @param  int|string $from Regular price
 * @param  int|string $to Sale price
 *
 * @return string
 */
function organica_woocommerce_get_price_html_from_to( $price, $from, $to ) {

	$price = '<ins>' . ( ( is_numeric( $to ) ) ? wc_price( $to ) : $to ) . '</ins> <del>' . ( ( is_numeric( $from ) ) ? wc_price( $from ) : $from ) . '</del>';

	return $price;
}

/**
 * Add WooCommerce 'New' and 'Featured' Flashes
 *
 * @return string
 */
function organica_woocommerce_show_flash() {

	global $product;

	if ( ! $product->is_on_sale() ) {

		if ( ( date( 'U' ) - strtotime( get_the_date() ) ) < 604800 ) {
			echo '<span class="new">' . esc_html__( 'New', 'organica' ) . '</span>';
		} else if ( $product->is_featured() ) {
			echo '<span class="featured">' . esc_html__( 'Featured', 'organica' ) . '</span>';
		}
	}
}

/**
 * Open wrap product loop elements
 *
 * @return string
 */
function organica_product_image_wrap_open() {
	echo '<div class="block_product_thumbnail">';
}

/**
 * Close wrap product loop elements
 *
 * @return string
 */
function organica_product_image_wrap_close() {
	echo '</div>';
}

/**
 * Open wrap wishlist and compare buttons
 *
 * @return string
 */
function organica_wishlist_compare_wrap_open() {
	echo '<div class="block_wishlist_compare">';
}

/**
 * Close wrap wishlist and compare buttons
 *
 * @return string
 */
function organica_wishlist_compare_wrap_close() {
	echo '</div>';
}

/**
 * Disable WooCommerce Page Title
 *
 * @return string
 */
function organica_woocommerce_show_page_title() {
	return false;
}

/**
 * Modify WooCommerce Add to cart Button in Loop
 *
 * @param  array $product Button object
 * @param  string $link
 *
 * @return string
 */
function organica_woocommerce_loop_add_to_cart_link( $link, $product ) {
/*
		return sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="add_to_cart_button %s">%s</a>', esc_url( $product->add_to_cart_url() ), esc_attr( $product->get_id() ), esc_attr( $product->get_sku() ), implode( ' ', array_filter( array(
			'button',
			'product_type_' . $product->get_type( ),
			$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
			$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
		) ) ), ( $product->is_purchasable() && $product->is_in_stock() && $product->is_type( 'simple' ) ) ? '<span class="product_actions_tip add_to_cart_button__text add">' . esc_html__( 'Add to cart', 'organica' ) . '</span>' . '<span class="product_actions_tip add_to_cart_button__text added">' . esc_html__( 'Added to cart!', 'organica' ) . '</span>' : '<span class="product_actions_tip add_to_cart_button__text select">' . $product->add_to_cart_text() . '</span>' );
		*/
return "";
		/*return sprintf( '<a href="%s" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="add_to_cart_button %s">%s</a>', esc_url( $product->get_permalink() ), esc_attr( $product->get_id() ), esc_attr( $product->get_sku() ), implode( ' ', array_filter( array(
			'button',
			'product_type_' . $product->get_type( ),
			$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
			$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
		) ) ), ( $product->is_purchasable() && $product->is_in_stock() && $product->is_type( 'simple' ) ) ? '<span class="product_actions_tip add_to_cart_button__text add">' . esc_html__( 'Add to cart', 'organica' ) . '</span>' . '<span class="product_actions_tip add_to_cart_button__text added">' . esc_html__( 'Added to cart!', 'organica' ) . '</span>' : '<span class="product_actions_tip add_to_cart_button__text select">' . $product->add_to_cart_text() . '</span>' );*/

}

function organica_cart_link_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	organica_cart_link();

	$fragments['div.cart-contents'] = ob_get_clean();

	return $fragments;
}

function organica_woocommerce_result_count() {
	echo '</div><div class="col-lg-8">';
}

function organica_woocommerce_open_order_wrap() {
	echo '<div class="row"><div class="col-lg-4">';
}

function organica_woocommerce_close_order_wrap() {
	echo '</div></div>';
}

function organica_remove_products_from_posts_search( $query ) {
	global $wp_post_types;
	if ( ! $query->is_admin && $query->is_search && post_type_exists( 'product' ) ) {
		$wp_post_types['product']->exclude_from_search = true;
	}
}

/**
 * Print sale and date format
 *
 * @return string
 */
function tm_products_sale_end_date() {
	global $post, $product;
	$sale_end_date = get_post_meta( $product->get_id(), '_sale_price_dates_to', true );
	if ( '' != $sale_end_date ) {
		$data_format   = sprintf( '<span>%%D <i>%1$s</i></span> <span>%%H <i>%2$s</i></span><span>%%M <i>%3$s</i></span>', esc_html__( 'days', 'organica' ), esc_html__( 'Hrs', 'organica' ), esc_html__( 'Min', 'organica' ) );
		$sale_end_date = '<span class="tm-products-sale-end-date" data-countdown="' . date( 'Y/m/d', $sale_end_date ) . '" data-format="' . $data_format . '"></span>';
	}
	echo $sale_end_date;
}


function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
	global $post, $product;

	if ( has_post_thumbnail() ) {

		$iPod    = stripos( $_SERVER['HTTP_USER_AGENT'], "iPod" );
		$iPhone  = stripos( $_SERVER['HTTP_USER_AGENT'], "iPhone" );
		$iPad    = stripos( $_SERVER['HTTP_USER_AGENT'], "iPad" );
		$version = stripos( $_SERVER['HTTP_USER_AGENT'], "8.0 Mobile" );

		if ( ( $iPod || $iPhone || $iPad ) && $version ) {
			$image = wp_get_attachment_image_src( $product->get_image_id(), $size );
			$image = '<img src="' . $image[0] . '" alt="' . $product->get_title() . '">';

			return $image;
		} else {
			return get_the_post_thumbnail( $post->ID, $size );
		}
	} elseif ( wc_placeholder_img_src() ) {
		return wc_placeholder_img( $size );
	}
}

/**
 * Add product tags in product list
 *
 * @return string
 */
function organica_woocommerce_list_tags() {
	global $product;

	$sep    = '</li> <li>';
	$before = '<ul class="product-tags"><li>';
	$after  = '</li></ul>';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0', '>=' ) ) {
		echo wc_get_product_tag_list( get_the_id(), $sep, $before, $after );
	} else {
		global $product;
		if ( ! empty( $product ) ) {
			echo $product->get_tags( $sep, $before, $after );
		}
	}

}

function organica_localize_theme_script() {
	$translation_array = array(
		'ajaxurl'      => admin_url( 'admin-ajax.php', is_ssl() ? 'https' : 'http' ),
	);

}

function organica_tm_products_carousel_widget_remove_hooks() {
	$hooks = array(
		array(
			'type'     => 'action',
			'action'   => 'woocommerce_before_shop_loop_item_title',
			'function' => 'organica_woocommerce_list_tags',
			'priority' => 16,
		),
	);

	return $hooks;
}

function organica_tm_products_carousel_widget_tag_action() {
	return 'woocommerce_before_shop_loop_item_title';
}

function organica_tm_products_carousel_widget_tag_priority() {
	return 14;
}

function organica_tm_products_carousel_widget_cat_action() {
	return 'woocommerce_before_shop_loop_item_title';
}

function organica_tm_products_carousel_widget_cat_priority() {
	return 14;
}

function organica_before_single_product_summary_wrap_before() {
	echo '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="single-image-container">';
}

function organica_before_single_product_summary_wrap_after() {
	echo '</div></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
}

function organica_after_single_product_summary_wrap() {
	echo '</div>';
}

function organica_cherry_page_title( $title, $args ) {
	if( function_exists('is_product') ) {
		if( is_product() ) {
			return sprintf( $args['page_title_format'], esc_html__( 'Shop', 'organica' ) );
		}
	}
	if ( is_single() ) {
		return sprintf( $args['page_title_format'], esc_html__( 'Blog', 'organica' ) );
	}
	return $title;
}

/**
 * Get custom WooCommerce breadcrumbs trail
 *
 * @since  4.0.0
 * @param  bool  $is_custom_breadcrumbs  default custom breadcrums trigger
 */
function organica_get_woo_breadcrumbs( $is_custom_breadcrumbs, $args ) {

	if ( ! organica_is_woo_page() ) {
		return $is_custom_breadcrumbs;
	}

	if ( ! class_exists( 'Cherry_Woo_Breadcrumbs' ) ) {
		require_once( 'classes/class-cherry-woo-breadcrumbs.php' );
	}

	$core = apply_filters( 'organica_get_theme_core', false );

	if ( ! $core ) {
		return $is_custom_breadcrumbs;
	}

	$woo_breadcrums = new Cherry_Woo_Breadcrumbs( $core, $args );
	return array( 'items' => $woo_breadcrums->items, 'page_title' => $woo_breadcrums->page_title );
}

/**
 * Check if we viewing Woo-related page
 *
 * @since  4.0.0
 */
function organica_is_woo_page() {

	if ( ! function_exists( 'is_woocommerce' ) ) {
		return false;
	}

	return is_woocommerce();
}

function organica_wpcf7_ajax_loader() {
	return ORGANICA_THEME_URI . '/assets/images/preloader.svg';
}

function organica_tm_woocommerce_include_bootstrap_grid() {
	return false;
}

function organica_woocommerce_enqueue_styles( $scripts ) {
	unset( $scripts['woocommerce-smallscreen'] );
	return $scripts;
}

function enqueue_styles_and_stuffs() {
	wp_dequeue_style( 'yith-wcwl-font-awesome' );
}

function organica_enqueue_single_product_smsb_assets() {
	$smsb_data = get_plugin_data( WP_PLUGIN_DIR . '/woocommerce-social-media-share-buttons/index.php' );
	if ( '1.3.0' !== $smsb_data['Version'] ) {
		if ( function_exists( 'toastie_wc_smsb_my_enqueue' ) ) {
			toastie_wc_smsb_my_enqueue();
		}
	} else {
		wp_enqueue_script( 'smsb_script', ORGANICA_THEME_URI . '/assets/js/smsb_script.min.js', array( 'jquery' ), '1.0.0', true );
	}
}

function organica_wc_compare_wishlist_loader() {
	return '<svg width="60px" height="60px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="uil-ring"><circle cx="50" cy="50" r="40" stroke-dasharray="65" stroke="#8dc63f" fill="none" stroke-width="15"> <animateTransform attributeName="transform" type="rotate" values="0 50 50;180 50 50;360 50 50;" keyTimes="0;0.5;1" dur=".8s" repeatCount="indefinite" begin="0s"></animateTransform></circle></svg><circle cx="50" cy="50" r="40" stroke-dasharray="163.36281798666926 87.9645943005142" stroke="#fff" fill="none" stroke-width="20"><animateTransform attributeName="transform" type="rotate" values="0 50 50;180 50 50;360 50 50;" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite" begin="0s"></animateTransform></circle></svg>';
}

function organica_products_carousel_widget_wrapper_open() {
	return '<div class="swiper-wrapper tm-products-carousel-widget-wrapper products">';
}

function organica_products_carousel_widget_wrapper_close() {
	return '</div>';
}

/**
 * Check is Currency Switcher Plugin exists and enabled
 *
 * @return bool
 */
function organica_has_currency_switcher() {
	return in_array( 'woocommerce-currency-switcher/index.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
}

/**
 * Display Currency Switcher
 * @since  1.0.0
 * @uses  organica_is_woocommerce_activated() check if WooCommerce is activated
 * @return void
 */
if ( ! function_exists( 'organica_currency_switcher' ) ) {
	function organica_currency_switcher() {
		if ( organica_is_woocommerce_activated() && organica_has_currency_switcher() ) {
			echo do_shortcode( '[woocs show_flags=0 width="60px" txt_type="code"]' );
		}
	}
}

/**
 * Show top currency switcher.
 *
 * @since  1.0.0
 *
 * @return void
 */
function organica_top_currency_switcher( $format = '%s' ) {
	$is_enabled = get_theme_mod( 'top_currency_switcher', organica_theme()->customizer->get_default( 'top_currency_switcher' ) );

	if ( ! $is_enabled ) {
		return;
	}

	printf( $format, organica_currency_switcher() );
}
