<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="<?= ( wp_is_mobile() ) ? 'page-mobile' : 'page'; ?>" class="site <?= ( wp_is_mobile() ) ? 'snap-content' : ''; ?>">

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<div class="pure-g row">

				<?php if ( wp_is_mobile() ): ?>

					<div class="mobile-nav clearfix">
						<button id="open-left" class="toggle-button pull-left">☰</button>
						<button id="open-right" class="toggle-button pull-right">☰</button>
						<h1 class="site-title pure-u"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>

				<?php else: ?>

					<div class="pure-u-1 pure-u-md-1-4">
						<div class="col">
							<div class="site-branding pure-center-md">
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							</div><!-- .site-branding -->
						</div>
					</div>

					<div class="pure-u-1 pure-u-md-3-4">
						<div class="col">
							<nav id="site-navigation" class="clearfix main-navigation" role="navigation">
								<?php wp_nav_menu( [
									'theme_location'  => 'primary',
									'menu_id'         => 'primary-menu',
									'container'       => 'div',
									'container_class' => 'pull-right',
									'menu_class'      => 'sf-menu',
								] ); ?>
							</nav><!-- #site-navigation -->
						</div>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
