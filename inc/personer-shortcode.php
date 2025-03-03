<?php

add_shortcode('personer', 'webspeed_personer');
function webspeed_personer($atts) {
	global $post;
	ob_start();

	// define attributes and their defaults
	extract(shortcode_atts(array(
		'grid' => '3',
		'gap' => '2',
		'type' => '',
		'class' => 'no-class',
		'number' => '999',
		'offset' => '0',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	), $atts));

	if (!empty($type)) {

		$loop = new WP_Query(array(
			'post_type' => 'person',
			'orderby' => $orderby,
			'order' => $order,
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'person-type',
					'field' => 'slug',
					'terms' => $type,
				),
			),
		)
		);

	} else {
		$loop = new WP_Query(array(
			'post_type' => 'person',
			'orderby' => $orderby,
			'order' => $order,
			'posts_per_page' => $number,
			'offset' => $offset,
		)
		);

	}


	if ($loop->have_posts()) {

		echo '<div class="personer ' . $class . '">';
		while ($loop->have_posts()): $loop->the_post();
			echo '<div id="post-id-' . get_the_ID() . '" class="person-item">';
		
			echo '<div class="person-body">';

    the_title('<h3>', '</h3>');
    echo '<ul>';
    if (get_field('funktion')) {
		  echo '<li class="funktion">' . get_field('funktion') . '</li>';
	  }
    if (get_field('adresse')) {
		  echo '<li class="adresse">' . get_field('adresse') . '</li>';
	  }
    if (get_field('telefon')) {
		  echo '<li class="telefon"><a href="tel:' . get_field('telefon') . '">' . get_field('telefon') . '</a></li>';
	  }
    if (get_field('email')) {
		  echo '<li class="email"><a href="mailto:' . get_field('email') . '">' . get_field('email') . '</a></li>';
	  }

    echo '</ul>';
    the_content();
			echo '</div>';
			echo '</div>';
		endwhile;
		wp_reset_query();
		echo '</div>';

	}

	$myvariable = ob_get_clean();
	return $myvariable;
}
