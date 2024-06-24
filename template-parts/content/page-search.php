<?php 
echo '<div class="l-wrap">';
echo '<div class="content grid">';

		if ( have_posts() ) { 
			echo '<h1>' . __( 'Søgning på', 'klis-domain' ) . ': <span>' . get_search_query() . '</span></h1>';
		} else { 
			echo '<h1>Din søgning gav desværre ikke noget resultat</h1>';
			echo '<ol class="search-suggest">';
        echo '<li><strong>Du kan prøve at:</strong></li>';
				echo '<li>- Se om du har stavet rigtigt.</li>';
				echo '<li>- Bruge et mere generelt ord i din søgning.</li>';
				echo '<li> ... eller måske har vi bare ikke det idnhold du søger :-)</li>';
			echo '</ol>';
 		} 
		
		if ( have_posts() ) {
	        echo '<ol class="search-list grid">';
	            while ( have_posts() ) : the_post();
	                echo '<li class="search-result-type--' . get_post_type() . '"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a><div class="small-font">' . get_the_excerpt() . '</div></li>';
	            endwhile;
	        echo '</ol>';
	    }


	echo '</div>';
echo '</div>';
