<?php

	add_action('widgets_init', 'register_wpglobus_widgets');
	function register_wpglobus_widgets()
	{
		register_sidebar(array(
			'name' => 'wp globus',
			'id' => "wpglobus",
			'description' => '',
			'class' => '',
			'before_widget' => '',
			'after_widget' => "",
			'before_title' => '',
			'after_title' => "",
		));
	}

	function benefis_widgets_init()
	{
		register_sidebar(array(
			'name' => esc_html__('Sidebar', 'benefis'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'benefis'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		));
	}

	add_action('widgets_init', 'benefis_widgets_init');

	function benefis_search_init()
	{
		register_sidebar(array(
			'name' => esc_html__('Sidebar search', 'benefis'),
			'id' => 'sidebar-search',
			'description' => esc_html__('Add widgets here.', 'benefis'),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
	}

	add_action('widgets_init', 'benefis_search_init');
