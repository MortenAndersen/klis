<?php
add_shortcode('info', 'klis_info');
function klis_info($atts) {
    global $post;
    ob_start();



/* -------------------------------------- */
    $loop = new WP_Query( array(
        'post_type' => 'info',
        'orderby' => 'menu_order',
        'order' => 'ASC', 
    ));
/* -------------------------------------- */

if ( $loop->have_posts() ) {

    echo '<div class="details">';

		while ( $loop->have_posts() ) : $loop->the_post();
            echo '<details>';
                echo '<summary>';
			        the_title();
                echo '</summary>';
                echo '<div class="details-content">';
                    the_content();
                echo '</div>';

            echo '</details>';
		endwhile; wp_reset_query();
    echo '</div>';
}

    $myvariable = ob_get_clean();
    return $myvariable;
}