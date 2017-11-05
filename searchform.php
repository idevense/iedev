<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
<label>
<input type="search" class="search-field"
placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
value="<?php echo get_search_query() ?>" name="s"
title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</label>
    <span class="add-on"><input type="submit" class="fa fa-search" value="&#xf002;"</span> />
</form>
