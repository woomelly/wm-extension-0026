<?php
/*
 * Plugin Name: Woomelly Extension 026 
 * Version: 1.0.0
 * Plugin URI: https://github.com/woomelly/wm-extension-0026/
 * Description: Woomelly extension that allows adding a button in the VIP view of the WooCommerce product
 * Author: Team Woomelly
 * Author URI: https://woomelly.com
 * Requires at least: 4.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * woocommerce_single_product_summary_026.
 *
 * @return string
 */
if ( ! function_exists( 'woocommerce_single_product_summary_026' ) ) {
	add_action( 'woocommerce_single_product_summary', 'woocommerce_single_product_summary_026', 35 );
	function woocommerce_single_product_summary_026 () {
		global $product;

		$ml_url = get_post_meta( $product->get_id(), '_wm_url_meli', true );
		if ( $ml_url && $ml_url!="" ) {
			echo '<a href="'.$ml_url.'" style="background-color: #3E52A1; box-shadow: inset 0 1px #8EA2DF; background-image: linear-gradient(#3E52A1, #2D3277); border: 1px solid #2D3277; color: #FFFFFF;" class="button" target="_blank">'.__("Ver en Mercado Libre", "woomelly").'</a>';
		}
	}
}// End woocommerce_single_product_summary_026()
?>