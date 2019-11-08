<?php
	/**
	 * benefis functions and definitions
	 *
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package benefis
	 */

	if (!defined('ABSPATH'))
		exit;


	require_once __DIR__ . '/inc/carbon-fields/cb.php';
	require_once __DIR__ . '/inc/func.php';
	require_once __DIR__ . '/inc/func-woocommerce.php';
	require_once __DIR__ . '/inc/func-remove-woocommerce.php';
	require_once __DIR__ . '/inc/bs-setup.php';
	require_once __DIR__ . '/inc/bs-widget.php';
	require_once __DIR__ . '/inc/bs-styles.php';

	function benefis_content_width()
	{
		// This variable is intended to be overruled from themes.
		// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		$GLOBALS['content_width'] = apply_filters('benefis_content_width', 640);
	}

	add_action('after_setup_theme', 'benefis_content_width', 0);


	/**
	 * Implement the Custom Header feature.
	 */
	require get_template_directory() . '/inc/custom-header.php';

	/**
	 * Custom template tags for this theme.
	 */
	require get_template_directory() . '/inc/template-tags.php';

	/**
	 * Functions which enhance the theme by hooking into WordPress.
	 */
	require get_template_directory() . '/inc/template-functions.php';

	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/inc/customizer.php';

	/**
	 * Load Jetpack compatibility file.
	 */
	if (defined('JETPACK__VERSION')) {
		require get_template_directory() . '/inc/jetpack.php';
	}


	add_action('after_setup_theme', 'woocommerce_support');
	function woocommerce_support()
	{
		add_theme_support('woocommerce');
	}

//	/**
//	 * Load WooCommerce compatibility file.
//	 */
//	if (class_exists('WooCommerce')) {
//		require get_template_directory() . '/inc/woocommerce.php';
//	}


	/*
	 * Display input on single product page
	 * @return html
	 */
	// function kia_custom_option(){
	//     $value = isset( $_POST['_custom_option'] ) ? sanitize_text_field( $_POST['_custom_option'] ) : '';
	//     printf( '<input name="_custom_option" class="custom_rz" value="" placeholder="Ваш размер *" />', __( 'Ваш размер *', 'kia-plugin-textdomain' ), esc_attr( $value ) );
	// }
	// add_action( 'woocommerce_before_single_variation', 'kia_custom_option', 9 );


	/*
	 * Add custom data to the cart item
	 * @param array $cart_item
	 * @param int $product_id
	 * @return array
	 */
	function kia_add_cart_item_data($cart_item, $product_id)
	{

		if (isset($_POST['_custom_option'])) {
			$cart_item['custom_option'] = sanitize_text_field($_POST['_custom_option']);
		}

		return $cart_item;

	}

	add_filter('woocommerce_add_cart_item_data', 'kia_add_cart_item_data', 10, 2);

	/*
	 * Load cart data from session
	 * @param array $cart_item
	 * @param array $other_data
	 * @return array
	 */
	function kia_get_cart_item_from_session($cart_item, $values)
	{

		if (isset($values['custom_option'])) {
			$cart_item['custom_option'] = $values['custom_option'];
		}

		return $cart_item;

	}

	add_filter('woocommerce_get_cart_item_from_session', 'kia_get_cart_item_from_session', 20, 2);

	/*
	 * Add meta to order item
	 * @param int $item_id
	 * @param array $values
	 * @return void
	 */
	function kia_add_order_item_meta($item_id, $values)
	{

		if (!empty($values['custom_option'])) {
			wc_add_order_item_meta($item_id, 'Custom size', $values['custom_option']);
		}
	}

	add_action('woocommerce_add_order_item_meta', 'kia_add_order_item_meta', 10, 2);

	/*
	 * Get item data to display in cart
	 * @param array $other_data
	 * @param array $cart_item
	 * @return array
	 */
	// function kia_get_item_data( $other_data, $cart_item ) {

	//     if ( !empty( $cart_item['custom_option'] )){

	//         $other_data[] = array(
	//             'name' => __( 'Ваш размер', 'kia-plugin-textdomain' ),
	//             'value' => sanitize_text_field( $cart_item['custom_option'] )
	//         );

	//     }

	//     return $other_data;

	// }
	// add_filter( 'woocommerce_get_item_data', 'kia_get_item_data', 10, 2 );

	/*
	 * Show custom field in order overview
	 * @param array $cart_item
	 * @param array $order_item
	 * @return array
	 */
	function kia_order_item_product($cart_item, $order_item)
	{

		if (isset($order_item['custom_option'])) {
			$cart_item_meta['custom_option'] = $order_item['custom_option'];
		}

		return $cart_item;

	}

	add_filter('woocommerce_order_item_product', 'kia_order_item_product', 10, 2);

	/*
	 * Add the field to order emails
	 * @param array $keys
	 * @return array
	 */
	function kia_email_order_meta_fields($fields)
	{
		$fields['custom_field'] = __('Ваш размер', 'kia-plugin-textdomain');
		return $fields;
	}

	add_filter('woocommerce_email_order_meta_fields', 'kia_email_order_meta_fields');

	/*
	 * Order Again
	 * @param array $cart_item
	 * @param array $order_item
	 * @param obj $order
	 * @return array
	 */
	function kia_order_again_cart_item_data($cart_item, $order_item, $order)
	{

		if (isset($order_item['custom_option'])) {
			$cart_item_meta['custom_option'] = $order_item['custom_option'];
		}

		return $cart_item;

	}

	add_filter('woocommerce_order_again_cart_item_data', 'kia_order_again_cart_item_data', 10, 3);


	// Региструрем меню
	register_nav_menus(array('catmenu' => 'Категории',   //Название месторасположения меню в шаблоне
		'topmenu' => 'Основное меню'));

	// Прописываем доп. классы для работы выпадающего меню

	function atg_menu_classes($classes, $item, $args)
	{
		if ($args->theme_location == 'catmenu') {
			$classes[] = 'dropdown mega';
		}
		return $classes;
	}

	add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

	class Child_Wrap extends Walker_Nav_Menu
	{
		function start_lvl(&$output, $depth = 0, $args = array())
		{
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class=\"cat-left-drop-menu\"><div class=\"cat-left-drop-menu-left\"><ul>\n";
		}

		function end_lvl(&$output, $depth = 0, $args = array())
		{
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul></div></div>\n";
		}
	}

