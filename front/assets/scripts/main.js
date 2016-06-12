jQuery(document).ready(function ($) {

    $('.menu').dropit();

    $('#menu-trigger').click(function () {
        $('#sidebar').show();
    });

    // ---------------------------------------------------------
    // 导航下拉菜单
    // ---------------------------------------------------------
    $(".main-navigation").dropdowns();


    // ---------------------------------------------------------
    // 滚动缩小导航菜单
    // ---------------------------------------------------------
    $(document).on("scroll", function () {
        if ($(document).scrollTop() > 20) {
            $(".site-header").addClass("small");
        } else {
            $(".site-header").removeClass("small");
        }
    });


    // ---------------------------------------------------------
    // 图片遮罩，鼠标滑过显示隐藏的元素
    // ---------------------------------------------------------
    $(".ui-hover li").each(function () {
        $(this).hover(function () {
            $(this).find(".hide").fadeIn('slow');
        }, function () {
            $(this).find(".hide").fadeOut('fast');
        });
    });


    // ---------------------------------------------------------
    // 全选和反选
    // ---------------------------------------------------------
    $('#check-all').click(function (event) {
        if (this.checked) {
            $(".ck-item").prop("checked", true);
        } else {
            $(".ck-item").prop("checked", false);
        }
    });


    // ---------------------------------------------------------
    // 获取选中项的值
    // ---------------------------------------------------------
    function getSelectedValue() {

        var data_to_string,
            data_array = [];

        $('input[name="links"]:checked').map(function () {
            data_array.push($(this).val());
        });

        data_to_string = links_array.join('\n');

        return data_to_string;

    }


    // ---------------------------------------------------------
    // 多级accordion菜单
    // ---------------------------------------------------------
    $(".widget_nav_menu .menu").accordion({
        accordion: true,
        speed: 300,
        closedSign: '▸',
        openedSign: '▾'
    });


    // ---------------------------------------------------------
    // 固定侧边栏
    // ---------------------------------------------------------
    // $(".topin").pin();


    // ---------------------------------------------------------
    // Tab 切换
    // ---------------------------------------------------------
    $('.ui-tab').each(function () {
        var el = $(this);
        el.find('.tab-content-pane:first').show();
    });

    $('.tab-title').each(function () {
        var el = $(this);
        el.find('li:first').addClass('active');
    });

    $('.ui-tab .tab-title li a').click(function () {
        var el = $(this),
            parent = el.closest('.ui-tab'),
            activetab = el.attr('href');
        parent.find('li').removeClass('active');

        el.closest('li').addClass('active');
        parent.find('.tab-content-pane').hide();

        parent.find(activetab).show();

        return false;
    });


    // ---------------------------------------------------------
    // accordion
    // ---------------------------------------------------------
    var all = $('.accordion > dd');
    all.hide(); //所有内容

    $('.accordion > dt > a').click(function () { //点击标题

        if ($(this).attr('href') === "#") {
            $(this).click(function () {
                return false;
            });
        }

        var next = $(this).parent().next(); //相邻的内容元素
        if (next.is(":visible")) { //如果相邻的元素是展开的，隐藏
            all.slideUp('fast');
        } else {
            all.slideUp(); //所有内容折叠
            next.slideDown('fast'); //和标题紧邻的内容展开
        }

        return false;
    });


    // ---------------------------------------------------------
    // Toggle
    // ---------------------------------------------------------
    var allt = $('.toggle > dd');
    allt.hide(); //所有内容

    $('.toggle > dt > a').click(function () { //点击标题

        if ($(this).attr('href') === "#") {
            $(this).click(function () {
                return false;
            });
        }

        var next = $(this).parent().next(); //相邻的内容元素
        if (next.is(":visible")) { //如果相邻的元素是展开的，隐藏
            next.slideUp('fast');
        } else {
            next.slideDown('fast'); //和标题紧邻的内容展开
        }

        return false;
    });


    // ---------------------------------------------------------
    // 回到顶部功能
    // ---------------------------------------------------------
    var scrollDiv = $(".scroll-to-top");

    if ($(window).scrollTop() !== "0") {
        scrollDiv.fadeIn(1200);
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() === "0") {
            scrollDiv.fadeOut(350);
        } else {
            scrollDiv.fadeIn(1200);
        }

    });

    scrollDiv.click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
    });


    // ---------------------------------------------------------
    // 添加更多
    // ---------------------------------------------------------
    $('#add-row').on('click', function () {
        var row = $('.repeatable-fieldset:last').clone(true);
        row.addClass('new-row');
        row.insertAfter('.repeatable-fieldset:last');
        return false;
    });

    // 移除添加的元素
    $('.remove-row').on('click', function () {
        $(this).parents('tr.new-row').remove();
        return false;
    });


    // ---------------------------------------------------------
    // 在线客服
    // ---------------------------------------------------------
    $(function () {
        $(function () {
            $(".cs-div").css({
                "top": 200 + $(window).scrollTop(),
                "right": "0"
            });
            // 滚动
            $(window).scroll(function () {
                var offsetTop = 200 + $(window).scrollTop() + "px";
                $(".cs-div").animate({
                        top: offsetTop,
                        "right": "0"
                    },
                    {
                        duration: 500,
                        queue: false
                    });
            });
            // 展开
            $(window).resize(function () {
                var offsetTop = 200 + $(window).scrollTop() + "px";
                $(".cs-div").animate({
                        top: offsetTop,
                        "right": "0"
                    },
                    {
                        duration: 500,
                        queue: false
                    });
            });
            // 展开关闭
            $("#cs-close").click(function () {
                $(".cs-inner").toggle();
                $(".cs-div").toggleClass("cs-bar");
            });
        });
    });

    // ---------------------------------------------------------
    // 结束功能
    // ---------------------------------------------------------

});
