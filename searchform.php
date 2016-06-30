<form role="search" method="get" class="pure-form pure-input-group search-form" action="<?= esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only"><?php _e( 'Search for:', 'enter' ); ?></label>
	<div class="pure-input-group">
		<input type="search" value="<?= get_search_query(); ?>" name="s" class="form-input search-field" placeholder="<?php _e( 'Search', 'sage' ); ?> <?php bloginfo( 'name' ); ?>" required>
		<button type="submit" class="pure-button button-primary search-button"><?php _e( 'Search', 'wizhi' ); ?></button>
	</div>
</form>