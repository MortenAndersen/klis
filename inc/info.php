<?php

// Posttype Lovkrav

function create_posttype_klis_info() {
	register_post_type(
		'info',
		array(
			'labels' => array(
				'name' => __('Info', 'klis-domain'),
				'singular_name' => __('Info', 'klis-domain'),
			),
			'public' => true,
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => false,
			'publicly_queryable' => false,
			'query_var' => false,
			'exclude_from_search' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'page-attributes',
			),
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'info',
			),
		)
	);
}

add_action('init', 'create_posttype_klis_info');
