<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product );

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" method="post" enctype='multipart/form-data'>
		<div class=''>
			<div class="sizechooser">
				<select name="custom_options[size]" id="custom__size">
					<option value="">-- размер --</option>
					<option>42</option>
					<option>44</option>
					<option>46</option>
					<option>48</option>
					<option>50</option>
					<option>52</option>
					<option>54</option>
				</select>
			</div>
			<div class="colorchooser">
<?php 
if ( ! function_exists( 'tuba_getColors' ) ) {
	function tuba_getColors($product){
		//$colors = $product;
		$terms = wc_get_product_terms( $product->get_id(), 'pa_color', array('fields' => 'all') );
		//var_dump($terms);
		//return;
		$res = "";
		foreach ( $terms as $term ) {
			$images = explode("|", $term->{'description'});
			//var_dump($images);
			$res .= "<div class='color' id='color__".$term->{'slug'}."' onclick='chooseColor(\"".$term->{'slug'}."\",\"".$term->{'name'}."\")'><div class='image'><img src='".$images[0]."'></div><div class='title'>".$term->{'name'}."</div></div>";
		}

		return $res;
	}
}
//var_dump($product->get_id());
echo(tuba_getColors($product))
?>

			</div>
		</div>
		<div style="clear:both">

				<?php
			/**
			 * @since 2.1.0.
			 */
			do_action( 'woocommerce_before_add_to_cart_button' );

			/**
			 * @since 3.0.0.
			 */
			do_action( 'woocommerce_before_add_to_cart_quantity' );

			/*woocommerce_quantity_input( array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
			) );*/

			

			/**
			 * @since 3.0.0.
			 */
			do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		</div>
		<input type="hidden" name="custom_options[color]" id="co_color" value="">

		<script>
		(function ($) {
			window._jq = $;
})();
			function onBeforeAddToCart(){
				if (!window._jq('#custom__size').val()) {
					alert('Выберите, пожалуйста, свой размер');
					return false;
				}
				if (window._jq(".colorchooser .color").length >0) {
					if (!window._jq("#co_color").val()) {
						alert('Выберите, пожалуйста, цвет');
						return false;
					}
				}
			}

			function chooseColor(slug,name){
				window._jq(".colorchooser .color").removeClass("color-active");
				window._jq("#color__" + slug).addClass("color-active");
				window._jq("#co_color").val(name);
			}
		</script>


		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt" onclick="return onBeforeAddToCart()">В корзину</button>

		<?php
			/**
			 * @since 2.1.0.
			 */
			do_action( 'woocommerce_after_add_to_cart_button' );
		?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
