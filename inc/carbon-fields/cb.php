<?php
	
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
	function crb_attach_theme_options()
	{
		$basic_options_container = Container::make('theme_options', __('Carbon Fields'))
			->add_tab(__('Contacts'), array(
				Field::make('text', 'crb_mail', __('Email')),

				Field::make('text', 'crb_phone_1', __('Phone 1'))
					->set_width(30),
				Field::make('text', 'crb_phone_2', __('Phone 2'))
					->set_width(30),
				Field::make('text', 'crb_phone_3', __('Phone 3'))
					->set_width(30),
				
				Field::make('text', 'crb_address_ru', __('Address ru'))
					->set_width(30),
				Field::make('text', 'crb_address_ro', __('Address ro'))
					->set_width(30),
				Field::make('text', 'crb_address_en', __('Address en'))
					->set_width(30),
				
				Field::make('text', 'crb_facebook', __('Facebook')),
				Field::make('text', 'crb_twitter', __('Twitter')),
				Field::make('text', 'crb_linkedin', __('Linked in')),
			));
		
		// Add second options page under 'Basic Options'
		Container::make('theme_options', 'Blocks')
			->set_page_parent($basic_options_container)// reference to a top level container
			->add_tab(__('Slider'), array(
				Field::make('text', 'crb_slider_title_ro', __('Block slider title ro')),
			));
		
		// Add second options page under 'Basic Options'
		Container::make('theme_options', 'Strings')
			->set_page_parent($basic_options_container)// reference to a top level container
			->add_fields(array(
				Field::make('text', 'crb_valulte_en', __('Valute en'))
					->set_width(30),
				Field::make('text', 'crb_valulte_ro', __('Valute ro'))
					->set_width(30),
				Field::make('text', 'crb_valulte_ru', __('Valute ru'))
					->set_width(30),

				Field::make('text', 'crb_basket_ru', __('Basket ru'))
					->set_width(30),
				Field::make('text', 'crb_basket_ro', __('Basket ro'))
					->set_width(30),
				Field::make('text', 'crb_basket_en', __('Basket en'))
					->set_width(30),

				Field::make('text', 'crb_summ_ru', __('Summ ru'))
					->set_width(30),
				Field::make('text', 'crb_summ_ro', __('Summ ro'))
					->set_width(30),
				Field::make('text', 'crb_summ_en', __('Summ en'))
					->set_width(30),

				Field::make('text', 'crb_to_cart_ro', __('crb_to_cart_ro'))
					->set_width(30),
				Field::make('text', 'crb_to_cart_ru', __('crb_to_cart_ru'))
					->set_width(30),
				Field::make('text', 'crb_to_cart_en', __('crb_to_cart_en'))
					->set_width(30),
			));

	}
	
	add_action('after_setup_theme', 'crb_load');
	function crb_load()
	{
		require_once __DIR__ . '/../../vendor/autoload.php';
		\Carbon_Fields\Carbon_Fields::boot();
	}
