<?php 

echo '<div class="l-wrap">';
echo '<div class="content card">';


// Om skolen
if (is_page( 16 )) {
$data = 147;
}
// Forøædre på KLS
elseif (is_page( 28 )) {
  $data = 149;
  }
   else {
  $data = 0;
}
$args = array(
    'post_type' => 'bobler',
    'post__not_in' => array($data),
    'posts_per_page' => -1
);
$the_query = new WP_Query( $args ); 

 if ( $the_query->have_posts() ) :

 while ( $the_query->have_posts() ) : 
  
  $the_query->the_post();
  $boble_img_url = get_the_post_thumbnail_url(get_the_ID(),'cirkel'); 
  $link = get_field('link');
        if ($link){
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        }
  echo '<a href="' . $link_url . '" target="' . $link_target . '" class="card__link" title="' . $link_title . '" style="background-image: url(' . $boble_img_url . ')">';
  echo '<div class="card__txt">';
  echo '<div class="card__title">' . get_the_title() . '</div>';
  echo ' <div class="card__body">' . get_the_content() . '</div>';
  echo '<div class="card__more">Læs mere her</div>';
echo '</div>';
        
  echo '</a>';
 endwhile;

wp_reset_postdata(); 

 endif; 

 echo '</div>';  
echo '</div>';
