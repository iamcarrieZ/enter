<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
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

					get_template_part( 'wizhi/content', 'page' );

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