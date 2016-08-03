<?php
/**
 * Single related posts
 *
 * @package Total WordPress Theme
 * @subpackage Partials
 * @version 3.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// Create an array of current category ID's
$cats     = wp_get_post_terms( get_the_ID(), 'category' );
$cats_ids = array();
foreach( $cats as $related_cat ) {
	$cats_ids[] = $related_cat->term_id;
}

// Query args
$args = array(
	'posts_per_page' => 3,
	'orderby'        => 'rand',
	'category__in'   => $cats_ids,
	'post__not_in'   => array( get_the_ID() ),
	'no_found_rows'  => true,
	'tax_query'      => array (
		'relation'  => 'AND',
		array (
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-quote', 'post-format-link' ),
			'operator' => 'NOT IN',
		),
	),
);

// Related query arguments
$related_query = new wp_query( $args );

// If the custom query returns post display related posts section
if ( $related_query->have_posts() ) : ?>

	<div class="container">

		<h2>相关文章</h2>

		<div class="wpex-row clr">
			<?php $count = 0; ?>
			<?php foreach( $related_query->posts as $post ) : setup_postdata( $post ); ?>
				<?php $count++; ?>
				<?php get_template_part( 'wizhi/content', 'media' ); ?>
			<?php endforeach; ?>
		</div><!-- .wpex-row -->

	</div><!-- .related-posts -->

<?php endif; ?>

<?php wp_reset_postdata(); ?>