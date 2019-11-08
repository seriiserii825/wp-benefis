<?php

	defined( 'ABSPATH' ) || exit;

	function woocommerce_template_loop_product_thumbnail()
	{
		echo '<div class="product-img"><a href="' . get_the_permalink() . '">';
		echo woocommerce_get_product_thumbnail('full');
		echo '</a></div>';
	}

	function woocommerce_template_loop_product_title()
	{
		echo '<div class="product-content">
			<h2 class="product-name">
                <a href="' . get_permalink() . '">' . get_the_title() . '</a>
            </h2>';

	}

