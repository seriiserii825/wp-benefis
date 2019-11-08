<?php
	/**
	 * Loop Add to Cart
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see        https://docs.woocommerce.com/document/template-structure/
	 * @package    WooCommerce/Templates
	 * @version     3.3.0
	 */

	if (!defined('ABSPATH')) {
		exit;
	}

	global $product;
	//	vardump($product->add_to_cart_url());

	$benefis_attr_str = $product->get_attribute('type_custom');

	$benefis_attr_arr = explode(', ', $benefis_attr_str);
	$benefis_attr_arr = array_reverse($benefis_attr_arr);
	$benefis_first_attr = $benefis_attr_arr[0];
	$benefis_second_attr = $benefis_attr_arr[1];

	if (!empty($benefis_first_attr && !empty($benefis_second_attr))) {
		$benefis_attr_str = $benefis_first_attr . ' - ' . $benefis_second_attr . ':';
	} elseif (!empty($benefis_first_attr)) {
		$benefis_attr_str = $benefis_first_attr;
	} elseif (empty($benefis_second_attr)) {
		$benefis_attr_str = $benefis_second_attr;
	} else {
		$benefis_attr_str = '';
	}

	echo apply_filters('woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
		sprintf('
			<div class="price-box">
				<span class="new-price">
					<span class="price">' . $benefis_attr_str . '<br>
						' . $product->get_price_html() . '
					</span>
				</span>
			</div>
		</div>
		<div class="product-content2">
			<h2 class="product-name">
				<a href="' . get_permalink() . '">' . get_the_title() . '</a>
			</h2>

			<div class="price-box">
				<span class="new-price">
					<span class="price">' . $benefis_attr_str . '<br>
						' . $product->get_price_html() . '
					</span>
				</span>
			</div>
			<div class="button-container">
				<a title="В корзину" href="%s" class="button cart_button %s">
					<span>' . esc_html__('Read more', 'benefis') . '</span>
				</a>
			</div>
		</div>
		', esc_url($product->add_to_cart_url()), esc_attr(isset($args['class']) ? $args['class'] : 'button'), isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '', esc_html($product->add_to_cart_text())), $product, $args);

