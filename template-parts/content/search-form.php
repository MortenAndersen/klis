<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

							<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
							<input type="search" class="search-klis"
								placeholder="<?php echo esc_attr_x( 'Søg på KLIS', 'placeholder' ) ?>"
								value="<?php echo get_search_query() ?>" name="s"
								title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

					</form>