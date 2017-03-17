<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
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
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="input-group quantity">
	<span class="input-group-btn">
		<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quantity" disabled="disabled">
			<span class="fa fa-minus"></span>
		</button>
	</span>
	<input type="text" name="<?php echo esc_attr( $input_name ); ?>" class="form-control input-number input-text qty text" value="<?php echo esc_attr( $input_value ); ?>" min="<?php echo esc_attr( $min_value ); ?>" max="<?php echo esc_attr( $max_value ); ?>" title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" />
	<span class="input-group-btn">
		<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quantity">
			<span class="fa fa-plus"></span>
		</button>
	</span>
</div>
