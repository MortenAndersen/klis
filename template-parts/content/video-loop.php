<?php

// // Load value.
// $iframe = get_field('video');
// if ($iframe){
// // Use preg_match to find iframe src.
// preg_match('/src="(.+?)"/', $iframe, $matches);
// $src = $matches[1];

// // Add extra parameters to src and replace HTML.
// $params = array(
//     'controls'  => 0,
//     'hd'        => 1,
//     'autohide'  => 1
// );
// $new_src = add_query_arg($params, $src);
// $iframe = str_replace($src, $new_src, $iframe);

// // Add extra attributes to iframe HTML.
// $attributes = 'frameborder="0"';
// $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// // Display customized HTML.
// echo '<div class="video">';
// echo $iframe;
// echo '</div>';
// }


// if( get_field('youtube_id') ){
//     echo '<div class="video">';
//     $video_id = get_field('youtube_id');
//     echo '<iframe width="640" height="360" src="https://www.youtube.com/embed/' . $video_id . '?rel=0&modestbranding=1&showinfo=0" frameborder="0" allowfullscreen> </iframe>';
//     echo '</div>';
// }


$youtube_url = get_field('youtube_url');

if ($youtube_url) {
    function extract_youtube_id($url) {
        $pattern = '%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
        preg_match($pattern, $url, $matches);
        return $matches[1] ?? false;
    }

    $video_id = extract_youtube_id($youtube_url);

    if ($video_id) {
        ?>
        <div class="video">
            <iframe 
                width="640" 
                height="360" 
                src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>?rel=0&modestbranding=1" 
                frameborder="0" 
                allowfullscreen 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
            </iframe>
        </div>
        <?php
    } else {
        echo '<p>Ugyldig YouTube URL.</p>';
    }
}



$vimeo_url = get_field('vimeo_url');
if ($vimeo_url) {
    // Ekstraher ID fra URL'en
    preg_match('/vimeo\.com\/(\d+)/', $vimeo_url, $matches);
    $video_id = $matches[1] ?? null;

    if ($video_id) {
        ?>
        <div class=" video vimeo-wrapper">
            <iframe src="https://player.vimeo.com/video/<?php echo esc_attr($video_id); ?>" 
                    width="640" height="360" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php
    }
}


