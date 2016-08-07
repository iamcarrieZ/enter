<?php
/**
 * The page header displays at the top of all single pages and posts
 * See framework/page-header.php for all page header related functions.
 *
 * @package Total WordPress theme
 * @subpackage Partials
 * @version 3.4.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get post links
if ( $has_terms || wpex_is_post_in_series() ) {
	$prev_link = get_previous_post_link( '%link', $prev_post_link_title, $same_cat, $excluded_terms, $taxonomy );
	$next_link = get_next_post_link( '%link', $next_post_link_title, $same_cat, $excluded_terms, $taxonomy );
} else {
	$prev_link = get_previous_post_link( '%link', $prev_post_link_title, false );
	$next_link = get_next_post_link( '%link', $next_post_link_title, false );
} ?>

<?php if ( $prev_link || $next_link ) : ?>

	<nav> class="post-pagination-wrap clr">

		<ul class="pager">

			<?php if ( $prev_link ) : ?>

				<li class="previous"><span aria-hidden="true">&larr;</span> <?php echo $prev_link; ?></li>

			<?php endif; ?>

			<?php if ( $next_link ) : ?>

				<li class="next"><?php echo $next_link; ?> <span aria-hidden="true">&rarr;</span></li>

			<?php endif; ?>
			
		</ul><!-- .post-post-pagination -->

	</nav><!-- .post-pagination-wrap -->

<?php endif; ?>