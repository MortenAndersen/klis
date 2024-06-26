<?php
$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );
  echo '<nav class="child-nav">';
    while ( $child_query->have_posts() ) : $child_query->the_post(); 
      echo '<a href="' . get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title() .  '</a>';
    endwhile;
  echo '</nav>';

wp_reset_postdata();