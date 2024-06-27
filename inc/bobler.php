<?php

// Posttype Bobler

function create_posttype_klis_bobler() {
	register_post_type(
		'bobler',
		array(
			'labels' => array(
				'name' => __('Bobler', 'klis-domain'),
				'singular_name' => __('Boble', 'klis-domain'),
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
				'slug' => 'bobel',
			),
		)
	);
}

add_action('init', 'create_posttype_klis_bobler');
