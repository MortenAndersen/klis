<?php 
$images = get_field('galleri');
if( $images ): ?>
    <div class="l-wrap">
    <div class="gallery-list content">
        <?php foreach( $images as $image ): ?>

                <a href="<?php echo esc_url($image['url']); ?>" class="gallery-list__link" data-lightbox="klis-galleri">
                     <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

        <?php endforeach; ?>
    </div>
    </div>
<?php endif; ?>