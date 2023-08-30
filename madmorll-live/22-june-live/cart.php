<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */
?>

<style>
	.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea{
		font-size: 16px !important;
	}
	.select2-container--default .select2-search--dropdown .select2-search__field{
		padding: 10px !important;
	}
	html body form.woocommerce-shipping-calculator input{
		padding: 12px 10px !important;
	}
	html body .select2-container, body .ui-widget.ui-datepicker {
    z-index: 1 !important;
}
	@media screen and (min-width:768px) and (max-width:1279px){
		.woocommerce-cart .select2-container--default .select2-search--dropdown .select2-search__field{
			padding: 10px !important;
		}
		section.shipping-calculator-form button.button.wp-element-button {
    margin-left: 7px;
}
		form.woocommerce-shipping-calculator {
    text-align: left;
}
		p.woocommerce-shipping-destination {
    text-align: left;
}
		input#calc_shipping_city, input#calc_shipping_postcode {
    font-size: 16px;
}
.woocommerce .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cart_totals{
	float: none !important;
}
	}

	h1.custom-page-title {
    display: none;
}
h1.cart-title-part {
    text-align: center;
    color: #8cc122 !important;
    background-color: #3b1b80 !important;
    font: normal normal 300 33px/0px Poppins;
}
.woocommerce a.remove {
	color: #999999 !important;
}
.woocommerce a.remove:hover {
    background: none !important;
    color: #999999 !important;
}
th.product-name, th.product-price, th.product-quantity, th.product-subtotal {
    text-indent: initial;
    width: 85%;
    font-weight: bold;
    /* float: right; */
    font-family: 'Poppins', sans-serif;
    color: #0000009c;
}
td.product-name a {
    color: #2C2C2C;
    opacity: 60%;
    margin: auto;
    width: 50%;

}
span.woocommerce-Price-amount.amount bdi {
    color: #2C2C2C;
    opacity: 60%;
    margin: auto;
    width: 50%;
}
.woocommerce .quantity .qty {
    height: 31px;
}
button.minus {
    display: none;
}
button.plus {
    display: none;
}
.woocommerce table.shop_table th {
	text-align:left;
}
.woocommerce table.shop_table td {
	text-align:left;
}
.woocommerce .quantity .qty {
    border: 1px solid #a3a3a3;
    opacity: 60%;
}
input#coupon_code {
    border: 1px solid #8cc122;
    padding: 0.618em 1em !important;
    border-radius: 7px;
}
button.button.wp-element-button {
    background-color: #8cc122;
    color: white;
}
@media screen and (min-width:1366px) {
	.woocommerce table.shop_table th {
		padding: 9px 35px;
	}
	.woocommerce table.shop_table td {
    padding: 9px 25px;
}
}
.cart_totals h2 {
    font-family: 'Poppins', sans-serif;
    letter-spacing: 0.4px;
    font-weight: 400;
}
tr.cart-subtotal th, tr.woocommerce-shipping-totals.shipping th, tr.order-total th {
    font-family: 'Poppins', sans-serif;
    font: normal normal normal 16px Poppins;
    font-weight: 400 !important;
}
#shipping_method label, p.woocommerce-shipping-destination, a.shipping-calculator-button {
    font: normal normal normal 15px Poppins;
    color: #2C2C2C;
    opacity: 60%;
    margin: auto;
}
a.checkout-button.button.alt.wc-forward.wp-element-button {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
	background-color: #8cc122;
}
@media screen and (max-width:767px) {
	table.shop_table.shop_table_responsive.cart.woocommerce-cart-form__contents {
    width: 95%;
    margin: auto;
}
.woocommerce table.shop_table_responsive tr td::before, .woocommerce-page table.shop_table_responsive tr td::before {
    content: attr(data-title) ": ";
    font-weight: 500;
    float: left;
    font-family: 'Poppins', sans-serif;
}
td.product-name a {
    color: #2C2C2C;
    opacity: 60%;
    font-family: 'Poppins', sans-serif;
    margin: auto;
    width: 50%;
}
span.woocommerce-Price-amount.amount bdi {
    color: #2C2C2C;
    opacity: 60%;
    margin: auto;
    width: 50%;
    font-family: 'Poppins', sans-serif;
}
.cart_totals {
    width: 95% !important;
    margin: auto;
}
button.button.wp-element-button {
    font-size: 15px;
}
}
@media screen and (min-width:768px) and (max-width:1279px) {
	td.product-name a {
		font-family: 'Poppins', sans-serif;
	}
	span.woocommerce-Price-amount.amount bdi {
		font-family: 'Poppins', sans-serif;

	}
	.cart_totals {
    width: 90% !important;
    margin: auto;
}
table.shop_table.shop_table_responsive.cart.woocommerce-cart-form__contents {
    width: 90%;
    margin: auto;
	float: unset !important;
}
}
@media screen and (min-width:1280px) {
	#add_payment_method table.cart .product-thumbnail, .woocommerce-cart table.cart .product-thumbnail, .woocommerce-checkout table.cart .product-thumbnail {
		max-width:50px !important;
	}
	.cart-collaterals {
    margin: auto;
    width: 90% !important;
}
td.product-name a, span.woocommerce-Price-amount.amount bdi {
	font: normal normal normal 16px Poppins;
}
.woocommerce-cart table.cart img {
    width: 100% !important;
}
}
@media screen and (min-width:1280px) {
	table.shop_table.shop_table_responsive.cart.woocommerce-cart-form__contents {
    width: 90%;
    margin: auto;
}
}
li.wc-ppcp-cart-payment-method.or {
    display: none !important;
}
	</style>
<?php

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<div class="cart-title">
	<h1 class="cart-title-part">Cart</h1>
</div>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></th>
				<th class="product-thumbnail"><span class="screen-reader-text"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span></th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
				
						<td class="product-removet">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove cart_load" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$min_quantity = 1;
							$max_quantity = 1;
						} else {
							$min_quantity = 0;
							$max_quantity = $_product->get_max_purchase_quantity();
						}

						$product_quantity = woocommerce_quantity_input(
							array(
								'input_name'   => "cart[{$cart_item_key}][qty]",
								'input_value'  => $cart_item['quantity'],
								'max_value'    => $max_quantity,
								'min_value'    => $min_quantity,
								'product_name' => $_product->get_name(),
							),
							$_product,
							false
						);

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button  class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
