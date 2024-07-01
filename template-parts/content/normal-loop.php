<?php
echo '<main class="l-wrap">';
echo '<div class="content grid aside">';
    if ( is_404() ) {
    echo '<h1>404<br />- siden findes desværre ikke!</h1>';
   } 
    while (have_posts()): the_post();
        echo '<article>';
            the_title('<h1>', '</h1>');
            the_content();
        echo '</article>';
        echo '<aside>';
        get_template_part('template-parts/content/video', 'loop');
        get_template_part('template-parts/aside/aside', 'loop');
        echo '</aside>';
    endwhile;
    echo '</div>';
echo '</main>';
get_template_part('template-parts/content/gallery', 'loop');
