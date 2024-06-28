<?php

add_action('init', function () {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	add_action('wp_footer', 'wp_print_scripts', 25);
	add_action('wp_footer', 'wp_print_head_scripts', 25);
});

	// Theme jQuery fil

	function klis_scripts() {
		wp_register_script('theme-script', get_template_directory_uri() . '/js/theme-min.js', array('jquery'));
		wp_enqueue_script('theme-script');
	}
	add_action('wp_enqueue_scripts', 'klis_scripts');

// ---------------------------------------------------

if (!function_exists('web_setup')):
	function web_setup() {

		// Fjern elementer i WP
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'feed_links');
		remove_action('wp_head', 'wp_shortlink_wp_head');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'rest_output_link_wp_head');
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_styles', 'print_emoji_styles');

		// HTML5
		add_theme_support('html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Title Tag
		add_theme_support('title-tag');

		// Logo
		add_theme_support('custom-logo');

		// Images
		add_theme_support('post-thumbnails');
		add_image_size('cirkel', 500, 500, true);

		// Menu
		register_nav_menus(array(
			'main-menu' => __('Om skolen', 'klis-domain'),
			'main-menu2' => __('Forældre på KLS', 'klis-domain'),
			'main-menu3' => __('Traditioner', 'klis-domain'),
			'main-menu4' => __('Elev på KLS', 'klis-domain'),
			'main-menu5' => __('Praktisk info', 'klis-domain'),
		));
		// Excerpt in pages
		add_post_type_support('page', 'excerpt');

		// Style and Scripts
		add_theme_support('html5', array('script', 'style'));

	}

	add_action('after_setup_theme', 'web_setup');
endif;

// ---------------------------------------------------

// Sprogfiler
function klis_localize_theme() {
	load_theme_textdomain('klis-domain', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'klis_localize_theme');

// Theme functions
//require get_parent_theme_file_path('/inc/header-info.php');

// Theme Widget
require get_parent_theme_file_path('/inc/widgets.php');

// Bobler
require get_parent_theme_file_path('/inc/bobler.php');

// ACF
require get_parent_theme_file_path('/inc/bobler-acf.php');
require get_parent_theme_file_path('/inc/page-acf.php');