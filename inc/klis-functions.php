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

// Hjemmesider Admin besked
function hjemmesider_admin_side() {
    add_menu_page(
        'Support - Hjemmesider.dk',    // Sidetitel
        'Hjemmesider.DK',       // Menu-titel
        'manage_options',     // Hvem kan se den
        'hjemmesider',    // Slug
        'hjemmesider_dk', // Callback-funktion
        'dashicons-editor-help', // Ikon
        1                     // Placering i menuen
    );
}
add_action('admin_menu', 'hjemmesider_admin_side');

function hjemmesider_dk() {
    ?>
    <div class="wrap">
        <h1>Support - Hjemmesider.DK</h1>
				<h2 style="margin:0;">Har du brug for hjælp?</h2>
        <p>Du er altid meget velkommen til at skrive eller ringe til Morten Andersen fra <a href="https://www.hjemmesider.dk" target="_blank">Hjemmesider.DK</a>.</p>
				<p>Måske har du spørgsmål angående:</p>
				<ul style="border-block: 1px solid; padding: 1rem;max-width: 525px;">
					<li>- Den nuværende hjemmeside?</li>
					<li>- Opdateringer?</li>
					<li>- SEO?</li>
					<li>- Ny funktionalitet?</li>
					<li>- Nyt design?</li>
				</ul>
				<p>... eller noget helt andet?<br>Tøv ikke med at tage kontakt til mig :-)</p>
				<p><strong>Hjemmesider.DK</strong><br>Morten Andersen<br><a href="mailto:morten@hjemmesider.dk">morten@hjemmesider.dk</a><br>Tlf. 51948012</p>
    </div>
    <?php
}