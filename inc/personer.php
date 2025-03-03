<?php

// Posttype Bobler

function create_posttype_klis_personer() {
	register_post_type(
		'person',
		array(
			'labels' => array(
				'name' => __('Personer', 'klis-domain'),
				'singular_name' => __('Person', 'klis-domain'),
			),
			'public' => true,
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => false,
			'publicly_queryable' => false,
			'query_var' => false,
			'exclude_from_search' => true,
			'menu_icon' => 'dashicons-businessperson',
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'page-attributes',
			),
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'person',
			),
		)
	);
}

add_action('init', 'create_posttype_klis_personer');
