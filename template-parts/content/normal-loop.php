<?php
 $tjek1 = get_field('video');
 $tjek2 = get_field('aside');
echo '<main class="l-wrap">';
if ($tjek1 || $tjek2){
    echo '<div class="content grid aside">';
} else {
    echo '<div class="content">';
}
    if ( is_404() ) {
    echo '<h1>404<br />- siden findes desværre ikke!</h1>';
   } 
    while (have_posts()): the_post();
        echo '<article>';
            the_title('<h1>', '</h1>');
            the_content();
        echo '</article>';
       
        if ($tjek1 || $tjek2){
            echo '<aside>';
            get_template_part('template-parts/content/video', 'loop');
            get_template_part('template-parts/aside/aside', 'loop');
            echo '</aside>';
        }
    endwhile;
    echo '</div>';
echo '</main>';
get_template_part('template-parts/content/gallery', 'loop');
