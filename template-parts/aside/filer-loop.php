<?php

// Check rows exists.
if( have_rows('filer') ):
 echo '<div class="filer">';
    // Loop through rows.
    while( have_rows('filer') ) : the_row();

        // Load sub field value.
        $file = get_sub_field('file');
        $image = get_sub_field('billede');
        // Do something, but make sure you escape the value if outputting directly...
        
        if( $file ){

            // Extract variables.
            $url = $file['url'];
            $title = $file['title'];
            $caption = $file['caption'];
            $description = $file['description'];
            $icon = $file['icon'];
            $extension = pathinfo($url, PATHINFO_EXTENSION);
        }
        if( $image ){

            // Image variables.
            $imgUrl = $image['url'];
            $imgTitle = $image['title'];
            $imgAlt = $image['alt'];
            $ingCaption = $image['caption'];
        
            // Thumbnail size attributes.
            $size = 'file';
            $imgThumb = $image['sizes'][ $size ];
            $imgWidth = $image['sizes'][ $size . '-width' ];
            $imgHeight = $image['sizes'][ $size . '-height' ];
        }
        echo '<a href="' . $url . '" title="' . $title . '" class="file" target="_blank">';
            echo '<img src="' . $imgThumb . '" width="' . $imgWidth . '" height="' . $imgHeight . '" alt="' . $imgAlt . '" title="' . $imgTitle . '">';
                echo '<div class="file-body">';
                    echo '<div class="file-body__title">' . $title . '</div>';
                    echo '<div class="file-body__decs">' . $caption . ' ' . $description . '</div>';
                echo '</div>';
      
                 echo '<div class="extension">.' . $extension . '</div>';
        echo '</a>';

    // End loop.
    endwhile;
    echo '</div>';
// No value.
else :
    // Do something...
endif;