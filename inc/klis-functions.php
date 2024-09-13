<?php
function klis_content() {
	if (get_field('teaser')){
		echo '<div class="more">';
				echo '<div class="more__head">';
						echo '<p>' . get_field('teaser') . '</p>';
				echo '</div>';
				echo '<div class="more__body">';
						the_content();
				echo '</div>';
				echo '<div class="more__action"></div>';
		echo '</div>';
  } else {
      the_content();
  }
}

// ---------------------------------------------------

// Backend 
add_filter('admin_body_class', 'add_role_to_admin_body');
function add_role_to_admin_body($classes) {
	global $current_user;
	$user = clone $current_user; //clone global var - we don't want to change it
	$user_role = array_shift($user->roles);
	$classes = 'role-'. $user_role;
	return $classes;
}

// Frontend

add_filter('body_class','add_role_to_body');
function add_role_to_body($classes) {
	if ( is_user_logged_in() ) {
		$current_user = new WP_User(get_current_user_id());
		$user_role = array_shift($current_user->roles);
		$classes[] = 'role-'. $user_role;
	}
	return $classes;
}

// Admin CSS

function enqueue_admin_custom_css() {
	wp_enqueue_style( 'admin-custom', get_stylesheet_directory_uri() . '/admin/admin.css' );
	}
	
	add_action( 'admin_enqueue_scripts', 'enqueue_admin_custom_css' );
	
// ---------------------------------------------------