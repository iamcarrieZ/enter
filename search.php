<?php
/**
 * The template for displaying search results pages.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'enter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>

					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'wizhi/content', 'search' );
					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'wizhi/content', 'none' );

				endif; ?>

			</main>
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>