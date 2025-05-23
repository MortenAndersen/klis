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
echo '<div class="down-con">';
echo '<h3>Vedtægter</h3>';
echo do_shortcode( '[type type=vedtaegter]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Evalueringer</h3>';
echo do_shortcode( '[type type=evaluering]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Ferieplan</h3>';
echo do_shortcode( '[type type=ferie]' );
echo '</div>';

// echo '<div class="down-con">';
// echo '<h3>Mobning</h3>';
// echo do_shortcode( '[type type=mobning]' );
// echo '</div>';

echo '<div class="down-con">';
echo '<h3>Privatlivspolitik - GDPR</h3>';
echo do_shortcode( '[type type=GDPR]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Takster</h3>';
echo do_shortcode( '[type type=takster]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Tilsynserklæring</h3>';
echo do_shortcode( '[type type=tilsyn]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Politik</h3>';
echo do_shortcode( '[type type=politik]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Udviklingsplan</h3>';
echo do_shortcode( '[type type=udvikling]' );
echo '</div>';

echo '<div class="down-con">';
echo '<h3>Undervisning</h3>';
echo do_shortcode( '[type type=undervisning]' );
echo '</div>';

echo '<div class="down-con" style="border:none;">';
echo '<h3>Undervisningsmiljøvurdering</h3>';
echo do_shortcode( '[type type=umv]' );
echo '</div>';

echo '<div class="down-con" style="border:none;">';
echo '<h3>Information</h3>';
echo do_shortcode( '[type type=info]' );
echo '</div>';


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
