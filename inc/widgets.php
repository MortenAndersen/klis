<?php
function clean_widgets_init() {
/**
 * Her angives skolens Widgets:
 * Footer
 */
	// Aside Left

	// Footer
	register_sidebar(
		array(
			'name' => __('Footer', 'klis-domain'),
			'id' => 'footer',
			'description' => __('Sidefod', 'klis-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="widget-title-footer">',
			'after_title' => '</p>',
		)
	);

}

add_action('widgets_init', 'clean_widgets_init');
