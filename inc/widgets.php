<?php
function clean_widgets_init() {

	// Aside
	register_sidebar(
		array(
			'name' => __('Aside left', 'clean-domain'),
			'id' => 'aside-left',
			'description' => __('Venstre sidebar', 'clean-domain'),
			'before_widget' => '<div id="%1$s" class="widget aside-widget aside-left-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-aside">',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Aside Indlæg', 'clean-domain'),
			'id' => 'aside-single',
			'description' => __('Sidebar på Indlæg', 'clean-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-aside widget-aside-single %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-aside">',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Aside left', 'clean-domain'),
			'id' => 'aside-left',
			'description' => __('Venstre sidebar', 'clean-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-aside aside-left-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-aside">',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Aside right', 'clean-domain'),
			'id' => 'aside-right',
			'description' => __('Højre sidebar', 'clean-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-aside aside-right-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-aside">',
			'after_title' => '</h4>',
		)
	);


	// Footer
	register_sidebar(
		array(
			'name' => __('Footer', 'clean-domain'),
			'id' => 'footer',
			'description' => __('Sidefod', 'clean-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="widget-title-footer">',
			'after_title' => '</p>',
		)
	);



	// 404 widget
	register_sidebar(
		array(
			'name' => __('404', 'clean-domain'),
			'id' => 'no-page',
			'description' => __('404 siden', 'clean-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-404 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="widget-title widget-title-404-widget">',
			'after_title' => '</h5>',
		)
	);

}

add_action('widgets_init', 'clean_widgets_init');
