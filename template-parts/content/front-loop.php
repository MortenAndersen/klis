<?php
echo '<main class="l-wrap">';
echo '<div class="content grid front-grid">';
    while (have_posts()): the_post();
        echo '<article>';
            echo '<header class="front-header">';
            the_title('<h1>', '</h1>');
            echo '<h2>En skole for livet</h2>';
            echo '</header>';
            klis_content();
        echo '</article>';
        echo '<aside>';
            get_template_part('template-parts/content/video', 'loop');
        echo '</aside>';
    endwhile;
    echo '</div>';
echo '</main>';
get_template_part('template-parts/content/bobler', 'loop');
