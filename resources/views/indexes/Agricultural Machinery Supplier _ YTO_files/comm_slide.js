// JavaScript Document
jQuery(function ($) {
    $.get("menu-items.txt", function (data) {
        var links = $(data);
        var dqlink = window.location.href;
        dqdocu = dqlink.replace("http://", "").replace("https://", "").replace(window.location.host, "").replace("/", "");
        dqdocu = dqdocu.replace("web/99/yituo/", "");
        if (dqdocu != "") {
            var non_product = false;
            var index = 0;
            var dqls = links.find("a[href='" + dqdocu + "']");
            dqls.addClass("active");
            dqls.addClass("lidq");
            var qulenfth = $("#etw_producttitle li").length;
            if (qulenfth == 3) {
                index = dqls.parent().index();
                if (index < 0) {
                    non_product = true;
                }
            } else if (qulenfth > 3) {
                for (var i = qulenfth - 2; i > 1; i--) {
                    var parent_href = $("#etw_producttitle li").eq(i).find("a").attr("href");
                    parent_href = parent_href.replace("/", "");
                    var parent_dqls = links.find("a[href='" + parent_href + "']");
                    parent_dqls.addClass("active");
                    parent_dqls.addClass("lidq");
                    var parent_ul = parent_dqls;
                    for (var j = 0; j < 100; j++) {
                        parent_ul = parent_ul.parent();
                        if (parent_ul.find("a").length) {
                            index = parent_ul.index();
                            break;
                        }
                    }
                }
            } else {
                non_product = true;
            }
            if (non_product) {
                links.find(".navleft li").eq(0).find("a").addClass("lidq");
            }
            links.find(".navright ul").removeClass("shownavpro");
            links.find(".navright ul").eq(index).addClass("shownavpro");
        } else {
            links.find(".navleft li").eq(0).find("a").addClass("lidq");
            links.find(".navright ul").eq(0).addClass("shownavpro");
        }
        links.appendTo($("#menu-items"));
    })

    menulist();
    jQuery(window).resize(function () {
        menulist();
    });
    function menulist() {
        var w = jQuery(window).width();
        var header_w = $("#header .header_in").width() + 2;
        var header_h = $("#header").height() - 65;
        for (var i = 0; i < $(".top-nav .row").length; i++) {
            if (w > 767) {
                var paddingleft = (w - header_w) / 2;
                var left = $(".top-nav .row").eq(i).parent().offset().left - paddingleft;
                $(".top-nav .row").eq(i).css("top", header_h + "px");
                $(".top-nav .row").eq(i).css("width", header_w + "px");
                $(".top-nav .row .navproinfo").eq(i).css("width", header_w + "px");
                $(".top-nav .row").eq(i).css("left", -left);
            }
            else {
                $(".top-nav .row").eq(i).removeAttr("style");
                $(".top-nav .row .navproinfo").eq(i).removeAttr("style");
            }
        }
    }

    $("body").on("mousemove", ".top-nav .navleft li", function () {
        var index = $(this).index();
        $(this).parent().find("li a").removeClass("lidq");
        $(this).find("a").addClass("lidq");
        $(".navright ul").removeClass("shownavpro");
        $(".navright ul").eq(index).addClass("shownavpro");
    });
});
