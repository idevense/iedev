<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
<label>
<span class="offscreen"><?php echo _x( 'Search for:', 'label' ) ?></span>
<input type="search" class="search-field"
placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
value="<?php echo get_search_query() ?>" name="s"
title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</label>
<input type="image" alt="Submit search query"
src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png">
</form>
