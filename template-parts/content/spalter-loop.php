<?php
echo '<div class="title-box l-wrap">';
if (get_field('pre_title')){
    echo '<div class="pre-title">' . get_field('pre_title') . '</div>';
}
the_title('<h1>', '</h1>');
echo '</div>';


echo '<main class="l-wrap">';

    echo '<div class="content">';

    if ( is_404() ) {
    echo '<h1>404<br />- siden findes desværre ikke!</h1>';
   } 
    while (have_posts()): the_post();
        echo '<article class="spalter">';
          echo '<div class="spalte">';
            klis_content();
          echo '</div>';
          if ( get_field('spalte_2')) {
            echo '<div class="spalte">';
            the_field('spalte_2');
            echo '</div>';
          }
        echo '</article>';

    endwhile;
    echo '</div>';
echo '</main>';
get_template_part('template-parts/content/gallery', 'loop');
