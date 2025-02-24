<?php
 $tjek1 = get_field('video');
 $tjek2 = get_field('aside');
 $tjek3 = have_rows('filer');
echo '<main class="l-wrap">';
if ($tjek1 || $tjek2 || $tjek3){
    echo '<div class="content grid aside">';
} else {
    echo '<div class="content">';
}
    if ( is_404() ) {
    echo '<h1>404<br />- siden findes desværre ikke!</h1>';
   } 
    while (have_posts()): the_post();
        echo '<article>';
            if (get_field('pre_title')){
                echo '<div class="pre-title">' . get_field('pre_title') . '</div>';
            }
            the_title('<h1>', '</h1>');
            klis_content();

// Filer
echo '<details>';
echo '<summary>Mobning</summary>';
echo do_shortcode( '[type type=mobning]' );
echo '</details>';

echo '<details>';
echo '<summary>Tilsynserklæring</summary>';
echo do_shortcode( '[type type=tilsyn]' );
echo '</details>';


        echo '</article>';
       
        if ($tjek1 || $tjek2 || $tjek3){
            echo '<aside>';
            get_template_part('template-parts/content/video', 'loop');
            get_template_part('template-parts/aside/filer', 'loop');
            get_template_part('template-parts/aside/aside', 'loop');
            echo '</aside>';
        }
    endwhile;
    echo '</div>';
echo '</main>';
get_template_part('template-parts/content/gallery', 'loop');
