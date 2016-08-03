<form role="search" method="get" class="form-inline pure-input-group search-form" action="<?= esc_url( home_url( '/' ) ); ?>">
    <label class="sr-only"><?php _e( 'Search for:', 'enter' ); ?></label>
    <div class="form-group">
        <input type="search" value="<?= get_search_query(); ?>" name="s" class="form-control search-field" placeholder="<?php _e( 'Search', 'sage' ); ?> <?php bloginfo( 'name' ); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary search-button"><?php _e( 'Search', 'wizhi' ); ?></button>
</form>