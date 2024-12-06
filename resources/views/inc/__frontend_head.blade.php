<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="zoom:lang" content="ru" />
<meta name="zoom:last-modified" content="Wed, 09 Oct 2024 08:00:02 GMT" />

<meta property="og:image" content="{{ asset('assets/frontend/Content/images/card-logo.png') }}">
<meta property="og:url" content="{{ asset('assets/frontend/Content/images/card-logo.png') }}">

<title>Инвестиции в Ташкенте | Проекты компании TOSHKENT INVEST</title>
<meta property="og:title" content="Инвестиционные проекты в Ташкенте | TOSHKENT INVEST">
<meta property="og:description"
    content="TOSHKENT INVEST — ведущая инвестиционная компания Узбекистана. Откройте инвестиционные возможности в Ташкенте!">
<meta property="og:type" content="website">
<meta property="og:locale" content="ru_RU">

<meta name="keywords" content="инвестиции, Ташкент, Узбекистан, проекты, TOSHKENT INVEST">

<meta name="robots" content="index, follow">


<link rel="stylesheet" href="{{ asset('assets/frontend/Content/images/card-logo.png') }}">

<meta property="og:image" content="{{ asset('assets/frontend/common/images/hakimyat.png') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/common/libs/jquery-ui/jquery-ui.min.css') }}"
    media="all" />

<!--[if gt IE 9]><!-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/common/style/main.min.css') }}" media="all" />
<!--<![endif]-->

<script type="text/javascript" src="{{ asset('assets/frontend/common/libs/jquery-3.6.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/libs/jquery-ui/jquery-ui.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/libs/jquery.inputmask.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/scripts/vendor.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/libs/jquery.floatThead.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/libs/popper.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/libs/tippy.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/common/scripts/main.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.ui.autocomplete-ru.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.cookie.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/frontend/js/site.js') }}"></script>

<script src="{{ asset('assets/frontend/moment-with-locales.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        var $menu = $("[data-menu]"),
            $menuItemBtn = $menu.find("[data-menu-item-btn]"),
            $menuShow = $("[data-menu-show]"),
            $menuClose = $("[data-menu-close]");
        var config = $menu.data("config");

        $menu
            .find("[data-cms-wholesite-header-right]")
            .html($("#header .header_right").html());

        $menuShow.on("click.cms_loadwholesite", function(event) {
            loadWholeSite(true);
        });
        $menuShow.on("mouseenter.cms_loadwholesite", function(event) {
            loadWholeSite(false);
        });

        var xhr = null,
            g_openMenu = false;

        function loadWholeSite(openmenu) {
            g_openMenu = g_openMenu || openmenu;
            $menuShow.off("click.cms_loadwholesite mouseenter.cms_loadwholesite");
            if (xhr === null) {
                $(".menu_wrap .networks-circle").html(
                    $(".networks-circle.footer_networks").html()
                );
                $(".menu_wrap .header_search").html(
                    $(".header .offsetMenu .header_search").html()
                );

                xhr = $.ajax(config.url, {
                    dataType: "html",
                    method: "get",
                    success: function(html) {
                        $("[data-cms-wholesite-placeholder]").replaceWith(html);

                        $menu.find(".menu_tab[data-tabs-tab]").each(function() {
                            var tab = $(this).data("tabs-tab");
                            $(this).toggle(
                                $menu.find('[data-tabs-content="' + tab + '"]')
                                .length != 0
                            );
                        });

                        app.init($menu);

                        for (var i in config.catalogPath) {
                            $menu
                                .find('li[data-catalog-id="' + config.catalogPath[i] + '"]')
                                .addClass("_active");
                            $menu
                                .find('li[data-catalog-id="' + config.catalogPath[i] + '"]')
                                .closest("[data-tabs-content]")
                                .trigger("open-anchor");
                        }

                        xhr = true;
                    },
                    error: function() {
                        xhr = null;
                    },
                });
            }
        }
    });
</script>

<script>
    if (window.localStorage) {
        if (localStorage.getItem("vision-impaired"))
            document.getElementsByTagName("html")[0].className +=
            " vision-impaired";
    }
</script>
<script>
    document.documentElement.style.setProperty("--scrollbar-width", "17px");
    setTimeout(function() {
        var div = document.createElement("div");

        div.style.overflowY = "scroll";
        div.style.width = "50px";
        div.style.height = "50px";

        div.style.visibility = "hidden";

        document.body.appendChild(div);
        var scrollWidth = Math.max(div.offsetWidth - div.clientWidth, 0.15);
        document.body.removeChild(div);

        document.documentElement.style.setProperty(
            "--scrollbar-width",
            scrollWidth + "px"
        );
    }, 0);
</script>
