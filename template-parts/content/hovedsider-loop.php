<?php
echo '<main class="l-wrap">';
echo '<div class="content grid">';
    if ( is_404() ) {
    echo '<h1>404<br />- siden findes desværre ikke!</h1>';
   } 
    while (have_posts()): the_post();
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      echo '<article>';
      if ( $featured_img_url) {
        echo '<header class="content-header" style="background-image: linear-gradient(to right, transparent, black), url(' . $featured_img_url . ')">';
      } else {
        echo '<header class="content-header">';
      }
          echo '<div class="header-content">';
            echo '<div class="header-content-title">';
              the_title('<h1>', '</h1>');
              if (get_field('overskrift')){
                echo '<h2>' . get_field('overskrift') . '</h2>';
              }
              
            echo '</div>';
            get_template_part('template-parts/nav/child', 'nav');
          echo '</div>';
        echo '</header>';
        
          the_content();
      echo '</article>';
    endwhile;
    echo '</div>';
echo '</main>';


get_template_part('template-parts/content/bobler', 'loop');
