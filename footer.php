<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enter
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="wrap site-info pure-center-md">
		Copyright ©<?= date('Y'); ?> <a href="<?= home_url(); ?>"><?php bloginfo('name'); ?></a>
	</div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>


<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.12.5.js'><\/script>".replace("HOST", location.hostname));
	//]]></script>


</body>
</html>
