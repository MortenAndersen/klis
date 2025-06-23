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
        echo '<article>';
        if (is_active_sidebar('kontakt')) {
          echo '<div class="kontakt">';
              dynamic_sidebar('kontakt');
          echo '</div>';
        }
            klis_content();
        echo '</article>';

    endwhile;
    echo '</div>';
echo '</main>';
get_template_part('template-parts/content/gallery', 'loop');
