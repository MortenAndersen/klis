<?php
echo '<main>';
    while (have_posts()): the_post();
    $classes = get_post_class('', $post->ID);
    echo '<article class="' . esc_attr(implode(' ', $classes)) . '">';
        the_title('<h2>', '</h2>');
        the_excerpt();
        echo '</article>';
    endwhile;
echo '</main>';