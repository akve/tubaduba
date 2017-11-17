<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */



/*

	array (
  'billing' => 
  array (
    'billing_first_name' => 
    array (
      'label' => 'First name',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-first',
      ),
      'autocomplete' => 'given-name',
      'autofocus' => true,
      'priority' => 10,
    ),
    'billing_last_name' => 
    array (
      'label' => 'Last name',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-last',
      ),
      'autocomplete' => 'family-name',
      'priority' => 20,
    ),
    'billing_company' => 
    array (
      'label' => 'Company name',
      'class' => 
      array (
        0 => 'form-row-wide',
      ),
      'autocomplete' => 'organization',
      'priority' => 30,
    ),
    'billing_country' => 
    array (
      'type' => 'country',
      'label' => 'Country',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
        2 => 'update_totals_on_change',
      ),
      'autocomplete' => 'country',
      'priority' => 40,
    ),
    'billing_address_1' => 
    array (
      'label' => 'Street address',
      'placeholder' => 'House number and street name',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'autocomplete' => 'address-line1',
      'priority' => 50,
    ),
    'billing_address_2' => 
    array (
      'placeholder' => 'Apartment, suite, unit etc. (optional)',
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'required' => false,
      'autocomplete' => 'address-line2',
      'priority' => 60,
    ),
    'billing_city' => 
    array (
      'label' => 'Town / City',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'autocomplete' => 'address-level2',
      'priority' => 70,
    ),
    'billing_state' => 
    array (
      'type' => 'state',
      'label' => 'State / County',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'validate' => 
      array (
        0 => 'state',
      ),
      'autocomplete' => 'address-level1',
      'priority' => 80,
      'country_field' => 'billing_country',
    ),
    'billing_postcode' => 
    array (
      'label' => 'Postcode / ZIP',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'validate' => 
      array (
        0 => 'postcode',
      ),
      'autocomplete' => 'postal-code',
      'priority' => 90,
    ),
    'billing_phone' => 
    array (
      'label' => 'Phone',
      'required' => true,
      'type' => 'tel',
      'class' => 
      array (
        0 => 'form-row-first',
      ),
      'validate' => 
      array (
        0 => 'phone',
      ),
      'autocomplete' => 'tel',
      'priority' => 100,
    ),
    'billing_email' => 
    array (
      'label' => 'Email address',
      'required' => true,
      'type' => 'email',
      'class' => 
      array (
        0 => 'form-row-last',
      ),
      'validate' => 
      array (
        0 => 'email',
      ),
      'autocomplete' => 'email username',
      'priority' => 110,
    ),
  ),
  'shipping' => 
  array (
    'shipping_first_name' => 
    array (
      'label' => 'First name',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-first',
      ),
      'autocomplete' => 'given-name',
      'autofocus' => true,
      'priority' => 10,
    ),
    'shipping_last_name' => 
    array (
      'label' => 'Last name',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-last',
      ),
      'autocomplete' => 'family-name',
      'priority' => 20,
    ),
    'shipping_company' => 
    array (
      'label' => 'Company name',
      'class' => 
      array (
        0 => 'form-row-wide',
      ),
      'autocomplete' => 'organization',
      'priority' => 30,
    ),
    'shipping_country' => 
    array (
      'type' => 'country',
      'label' => 'Country',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
        2 => 'update_totals_on_change',
      ),
      'autocomplete' => 'country',
      'priority' => 40,
    ),
    'shipping_address_1' => 
    array (
      'label' => 'Street address',
      'placeholder' => 'House number and street name',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'autocomplete' => 'address-line1',
      'priority' => 50,
    ),
    'shipping_address_2' => 
    array (
      'placeholder' => 'Apartment, suite, unit etc. (optional)',
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'required' => false,
      'autocomplete' => 'address-line2',
      'priority' => 60,
    ),
    'shipping_city' => 
    array (
      'label' => 'Town / City',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'autocomplete' => 'address-level2',
      'priority' => 70,
    ),
    'shipping_state' => 
    array (
      'type' => 'state',
      'label' => 'State / County',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'validate' => 
      array (
        0 => 'state',
      ),
      'autocomplete' => 'address-level1',
      'priority' => 80,
      'country_field' => 'shipping_country',
    ),
    'shipping_postcode' => 
    array (
      'label' => 'Postcode / ZIP',
      'required' => true,
      'class' => 
      array (
        0 => 'form-row-wide',
        1 => 'address-field',
      ),
      'validate' => 
      array (
        0 => 'postcode',
      ),
      'autocomplete' => 'postal-code',
      'priority' => 90,
    ),
  ),
  'account' => 
  array (
    'account_password' => 
    array (
      'type' => 'password',
      'label' => 'Account password',
      'required' => true,
      'placeholder' => 'Password',
    ),
  ),
  'order' => 
  array (
    'order_comments' => 
    array (
      'type' => 'textarea',
      'class' => 
      array (
        0 => 'notes',
      ),
      'label' => 'Примечания',
      'placeholder' => 'Возможно, вы хотите что-то сказать о заказе или доставке?',
    ),
  ),
)
		
		
*/
		
		
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', esc_html__( 'You must be logged in to checkout.', 'organica' ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<h2 id="order_review_heading"><?php esc_html_e( 'Ваш заказ', 'organica' ); ?></h2>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
