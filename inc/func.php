<?php

if (!defined('ABSPATH')) exit;


function clear_phone($phone)
{
	return str_replace(['(', ')', '-', '+', ' '], '', $phone);
}

function vardump($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function carbon_lang()
{
	$suffix = '';
	if (!defined('ICL_LANGUAGE_CODE')) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}

function trim_content($content, $count)
{
	$trimmed_content = wp_trim_words($content, $count, '<a href="' . get_permalink() . '"></a>');
	return $trimmed_content;
}

function get_lang()
{
	$suffix = '';

	if (get_locale() == 'en_US') {
		$suffix = '_en';
	}
	if (get_locale() == 'ru_RU') {
		$suffix = '_ru';
	}
	if (get_locale() == 'ro_RO') {
		$suffix = '_ro';
	}

	return strtolower($suffix);
}

function my_revisions_to_keep($revisions)
{
	return 2;
}

add_filter('wp_revisions_to_keep', 'my_revisions_to_keep');

//like

//if(function_exists('wp_ulike')){
//	wp_ulike('get');
//}

add_filter('wp_ulike_format_number','wp_ulike_new_format_number',10,3);
function wp_ulike_new_format_number($value, $num, $plus){
	if ($num >= 1000 && get_option('wp_ulike_format_number') == '1'):
		$value = round($num/1000, 2) . 'K';
	else:
		$value = $num;
	endif;
	return $value;
}

//page views
add_action( 'after_setup_theme', function() {
	add_theme_support( 'pageviews' );
});

//function webp_upload_mimes( $existing_mimes ) {
//	// add webp to the list of mime types
//	$existing_mimes['webp'] = 'image/webp';
//
//	// return the array back to the function with our added mime type
//	return $existing_mimes;
//}
//add_filter( 'mime_types', 'webp_upload_mimes' );
