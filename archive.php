<?php
/**
 * The template for displaying archive pages.
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
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header>

					<?php

					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</main>
		</div>

		<?php get_sidebar(); ?>

	</div>
</div>