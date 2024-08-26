<?php
function klis_content() {
	if (get_field('teaser')){
		echo '<div class="more">';
				echo '<div class="more__head">';
						echo '<p>' . get_field('teaser') . '</p>';
				echo '</div>';
				echo '<div class="more__body">';
						the_content();
				echo '</div>';
				echo '<div class="more__action"></div>';
		echo '</div>';
  } else {
      the_content();
  }
}