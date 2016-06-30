<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package enter
 */

get_header(); ?>

	<div class="wrap">
		<div class="pure-g row">

			<div id="primary" class="pure-u-1 pure-u-md-3-4 content-area">
				<main id="main" class="col site-main" role="main">

					<section class="error-404 not-found">

						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'enter' ); ?></h1>
						</header>

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'enter' ); ?></p>

							<?php
							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );

							// 只有网站有多个分类时显示分类目录
							if ( enter_categorized_blog() ) :
								?>

								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'enter' ); ?></h2>
									<ul>
										<?php
										wp_list_categories( [
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										] );
										?>
									</ul>
								</div>

								<?php
							endif;

							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'enter' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->

					</section>

				</main>
			</div><!-- #primary -->

		</div>
	</div>

<?php get_footer(); ?>