<form role="search" method="get" class="header-searchform" action="<?php echo home_url( '/' ); ?>">
    <i class="fa fa-search"></i>
   <label>
<input type="search" class="header-searchfield"
placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
value="<?php echo get_search_query() ?>" name="s"
title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
</label>
</form>
