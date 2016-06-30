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

<?php if ( wp_is_mobile() ): ?>

    <div class="snap-drawers">

        <nav id="mobile-navigation" class="main-navigation snap-drawer snap-drawer-left" role="navigation">
            <?php wp_nav_menu( [
                'theme_location'  => 'primary',
                'menu_id'         => 'primary-menu',
                'container'       => 'div',
                'container_class' => 'mobile-menu',
                'menu_class'      => 'sf-menu',
            ] ); ?>
        </nav>

        <aside id="sidebar-mobile" class="mobile-widget-area snap-drawer snap-drawer-right" role="complementary">
            <div class="col">
                <?php dynamic_sidebar( 'sidebar-main' ); ?>
            </div>
        </aside>

    </div>

    <script>

        var snapper = new Snap({
            element: document.getElementById('page-mobile')
        });

        var addEvent = function addEvent(element, eventName, func) {
            if (element.addEventListener) {
                return element.addEventListener(eventName, func, false);
            } else if (element.attachEvent) {
                return element.attachEvent("on" + eventName, func);
            }
        };

        addEvent(document.getElementById('open-left'), 'click', function () {
            snapper.open('left');
        });

        addEvent(document.getElementById('open-right'), 'click', function () {
            snapper.open('right');
        });

        /* 作为 APP 查看时, 阻止 Safari 打开链接 */
        (function (a, b, c) {
            if (c in b && b[c]) {
                var d, e = a.location, f = /^(a|html)$/i;
                a.addEventListener("click", function (a) {
                    d = a.target;
                    while (!f.test(d.nodeName)) {
                        d = d.parentNode;
                    }
                    "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
                }, !1)
            }
        })(document, window.navigator, "standalone");

    </script>

<?php endif; ?>

</body>
</html>
