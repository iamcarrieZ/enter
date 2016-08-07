<?php
/**
 * The template for displaying archive pages.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enter
 */

get_header(); ?>

	<header class="page-header">
		<div class="wrap">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</div>
	</header>

	<div class="wrap">
		<div class="pure-g row">

			<div id="primary" class="pure-u-1 pure-u-md-3-4 content-area">
				<main id="main" class="col site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

						<?php

						while ( have_posts() ) : the_post();
							get_template_part( 'wizhi/content', 'list' );
						endwhile;

						if ( function_exists( 'wizhi_pagination' ) ):
							wizhi_pagination();
						endif;

					else :

						get_template_part( 'wizhi/content', 'none' );

					endif; ?>

				</main>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>

<?php get_footer(); ?>