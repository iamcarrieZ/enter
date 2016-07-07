<?php
/**
 * The template for displaying all single posts.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package enter
 */

get_header(); ?>

<div class="wrap">
	<div class="pure-g row">

		<div id="primary" class="pure-u-1 pure-u-md-3-4 content-area">
			<main id="main" class="col site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'wizhi/content', get_post_format() );

					the_post_navigation();

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;
				?>

			</main>
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>