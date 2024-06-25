<?php 
echo '<div class="l-wrap card">';
      
if( have_rows('bobler') ):

    while( have_rows('bobler') ) : the_row();

        $sub_titel = get_sub_field('titel');
        $sub_tekst = get_sub_field('tekst');
        $sub_billede = get_sub_field('billede');
        $sub_link = get_sub_field('link');
        if ($sub_link){
          $link_url = $sub_link['url'];
          $link_title = $sub_link['title'];
          $link_target = $sub_link['target'] ? $sub_link['target'] : '_self';
        }

    echo '<div class="card__item">';
      echo '<a href="' . esc_url($link_url) . '" class="card__link" style="background-image: url(' . $sub_billede . ')" target="' . esc_attr($link_target) . '">';
        echo '<div class="card__txt">';
          echo '<div class="card__title">' . $sub_titel . '</div>';
          echo ' <div class="card__body">' . $sub_tekst . '</div>';
          echo '<div class="card__more">Læs mere her</div>';
        echo '</div>';
      echo '</a>';
    echo '</div>';

    endwhile;
endif;

    
echo '</div>';