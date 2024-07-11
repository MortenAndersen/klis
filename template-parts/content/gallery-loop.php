<?php 
$images = get_field('galleri');
if( $images ): ?>
    <div class="l-wrap">
    <div class="gallery-list content">
        <?php foreach( $images as $image ): ?>

                <!-- <a href="<?php echo esc_url($image['url']); ?>" class="gallery-list__link" data-lightbox="klis-galleri">
                     <img src="<?php echo esc_url($image['sizes']['galleri']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a> -->
               <?php $size = 'medium'; ?>
                <a href="<?php echo esc_url($image['url']); ?>" class="gallery-list__link" data-lightbox="klis-galleri" style="background:url('<?php echo esc_url($image['sizes']['medium']);?>'); background-size:cover;">
                     <!-- <img src="<?php echo esc_url($image['sizes']['galleri']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
                </a>
        

        <?php endforeach; ?>
    </div>
    </div>
<?php endif; ?>