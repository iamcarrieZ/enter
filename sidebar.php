<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enter
 */

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}
?>

<aside id="secondary" class="pure-u-1 pure-u-md-1-4 widget-area" role="complementary">
	<div class="col">
		<?php dynamic_sidebar( 'sidebar-main' ); ?>
	</div>
</aside><!-- #secondary -->
