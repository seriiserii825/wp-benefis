<?php

	defined( 'ABSPATH' ) || exit;

	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
