<?php

	function benefis_scripts()
	{
		wp_enqueue_style('benefis-style', get_stylesheet_uri());
		wp_enqueue_style('benefis-magnific-style', get_stylesheet_directory_uri() . '/css/magnific-popup.css');
		wp_enqueue_style('benefis-custom-style', get_stylesheet_directory_uri() . '/css/my.css');
		wp_enqueue_style('benefis-woo-style', get_stylesheet_directory_uri() . '/woocommerce.css');

		wp_enqueue_script('benefis-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
		wp_enqueue_script('jquery');

		wp_enqueue_script('benefis-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-jquery.nivo.slider-js', get_template_directory_uri() . '/custom-slider/js/jquery.nivo.slider.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-home-js', get_template_directory_uri() . '/custom-slider/home.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-jquery.mixitup.min-js', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-jquery-price-slider-js', get_template_directory_uri() . '/js/jquery-price-slider.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-owl.carousel.min-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-fancybox-js', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), '', true);
//		wp_enqueue_script('benefis-waypoint-js', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-jquery.counterup.min-js', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-jquery.scrollUp-js', get_template_directory_uri() . '/js/jquery.scrollUp.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-jquery.elevateZoom-3.0.8.min-js', get_template_directory_uri() . '/js/jquery.elevateZoom-3.0.8.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-meanmenu-js', get_template_directory_uri() . '/js/jquery.meanmenu.js', array('jquery'), '', false);
		wp_enqueue_script('benefis-wow-js', get_template_directory_uri() . '/js/wow.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-chosen.jquery.min-js', get_template_directory_uri() . '/js/chosen.jquery.min.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-plugins-js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '', true);
		wp_enqueue_script('benefis-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);

		wp_enqueue_script('benefis-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}

	add_action('wp_enqueue_scripts', 'benefis_scripts');
