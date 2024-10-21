@extends('layouts.frontend_app')
@section('frontend_content')
    <main class="home-content" id="content">
        <!--index-->
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <div class="home-main">
                        <div class="home-main_content col-md-16">
                            <div class="col-md-15">
                                <script type="text/javascript">
                                    //<![CDATA[
                                    // Новая версия главной старницы (v3.1)

                                    var _NoPictInList = true;
                                    var _PageLoadding = false;
                                    var _PageSize = 20;
                                    var _lastSelectedTab = 100;

                                    var _EventSourceURL = "/FPEventAndPress/";
                                    var _NewsSourceURL = "/FPNews/";
                                    var last_big = false;

                                    var tab_id = 100;
                                    var IsEng = 0;
                                    var News_last_day;
                                    var divday;
                                    var pageCounter = 0;
                                    var DatesControl;
                                    var firstLoad = true;

                                    $(function() {
                                        var lang = $("meta[name='zoom:lang']").attr("content");
                                        moment.locale(lang);

                                        IsEng = 0;
                                        if (lang === "en") {
                                            IsEng = 1;
                                        }

                                        $("a.tab").click(function() {
                                            tab_id = $(this).data("tabs-tab");

                                            LoadTab(true);
                                        });

                                        if (!AutoTabSelect()) {
                                            LoadTab(false);
                                        }
                                    });

                                    function IsNetworkErrMsg(Err) {
                                        return $(
                                            '<div class="alert">' +
                                            (IsEng ?
                                                "Error: " + Err + ", try refresh the page" :
                                                "Ошибка: " +
                                                Err +
                                                ", попробуйте обновить страницу") +
                                            "</div>"
                                        );
                                    }

                                    function AutoTabSelect() {
                                        $(".tab").click(function(e) {
                                            firstLoad = true;
                                            var tabid = $(this).data("tabs-tab");

                                            $.cookie("SelectedTab", tabid, {
                                                expires: 1,
                                            });
                                        });
                                        if ($.cookie("SelectedTab") !== undefined) {
                                            var tabidSelect = $.cookie("SelectedTab");
                                            var tabObj = $(
                                                ".d-md-block * [data-tabs-tab='" + tabidSelect + "']"
                                            );
                                            if (tabObj.length !== 0) {
                                                tab_id = tabidSelect;
                                                //tabObj.trigger('open-tab');
                                                tabObj.click();
                                                //$(".tab").removeClass("_active");
                                                //tabObj.addClass("_active");

                                                return true;
                                            }
                                        }
                                        return false;
                                    }

                                    function LoadTab(reset) {
                                        var lang = $("meta[name='zoom:lang']").attr("content");
                                        moment.locale(lang);

                                        pageCounter = 0;

                                        var loadPageText = "Загрузить еще";
                                        var IsEng = 0;
                                        if (lang === "en") {
                                            loadPageText = "Load more";
                                            IsEng = 1;
                                        }

                                        var idiv = $("#events_tab" + tab_id);
                                        var vrap = idiv.parent();
                                        if (
                                            vrap.children(".more-button").length > 0 &&
                                            reset === false
                                        )
                                            return;
                                        idiv.empty();

                                        if (reset) {
                                            News_last_day = null;
                                        }

                                        if (vrap.children(".more-button").length === 0) {
                                            var nexButton = $(
                                                '<button id="_buttonLoadNextEvt" class="more-button _small _home-news _loading" >' +
                                                loadPageText +
                                                "</button>"
                                            );
                                            // nexButton.hide();
                                            vrap.append(nexButton);

                                            nexButton.click(function() {
                                                if (_PageLoadding) return;
                                                _PageLoadding = true;
                                                pageCounter++;
                                                if (tab_id === 7) {
                                                    NLoadPage(idiv, pageCounter, IsEng);
                                                } else {
                                                    EPLoadPage(idiv, pageCounter, IsEng, tab_id);
                                                }
                                            });
                                        }

                                        if (tab_id === 7) {
                                            NLoadPage(idiv, 0, IsEng);
                                        } else {
                                            EPLoadPage(idiv, 0, IsEng, tab_id);
                                        }
                                        //vrap.prepend(idiv);
                                    }

                                    function EPLoadPage(idiv, page, IsEng, tab_id) {
                                        var more_button = idiv.parent().children(".more-button");
                                        more_button.addClass("_loading");
                                        $.ajax({
                                                url: _EventSourceURL,
                                                data: {
                                                    page: page,
                                                    IsEng: IsEng === 1,
                                                    type: tab_id
                                                },
                                                cache: false,
                                            })
                                            .done(function(data) {
                                                _PageLoadding = false;
                                                more_button.removeClass("_loading");

                                                if (data.length !== _PageSize) {
                                                    more_button.hide();
                                                } else {
                                                    more_button.show();
                                                }

                                                //var firstOrImportant = false;
                                                //var fo = data.filter(function (item) {
                                                //    return (item.ImageId > 0 || item.ImageCId > 0);
                                                //});

                                                //// вставляем важную новость или новость с картинкой

                                                //if (fo.length > 0 && page === 0) {
                                                //    // превая строка
                                                //    firstOrImportant = fo[0];
                                                //    idiv.append(MakeEventRow(fo[0], true));
                                                //    last_big = true;
                                                //}

                                                $.each(data, function(index, k) {
                                                    //if (k === firstOrImportant) {
                                                    //    return null;
                                                    //}

                                                    //var MakeBig = k.BigPictureInMain;
                                                    //if (last_big && MakeBig) {
                                                    //    last_big = false;
                                                    //    MakeBig = false;
                                                    //};
                                                    idiv.append(
                                                        MakeEventRow(
                                                            k,
                                                            (k.ImageId > 0 || k.ImageCId > 0) &&
                                                            index == 0 &&
                                                            firstLoad
                                                        )
                                                    );
                                                    firstLoad = false;
                                                    //last_big = MakeBig;
                                                });

                                                idiv.trigger("new-html");
                                            })
                                            .fail(function(xhr, textStatus, errorThrown) {
                                                idiv.append(IsNetworkErrMsg(xhr.statusText));

                                                _PageLoadding = false;
                                            });
                                    }

                                    function decodeType(name, IsEng) {
                                        var tpName = "";
                                        switch (name) {
                                            case "events":
                                                tpName = IsEng ? "News" : "Новость";
                                                break;
                                            case "performance":
                                                tpName = IsEng ? "Speech" : "Выступление";
                                                break;
                                            case "interview":
                                                tpName = IsEng ? "Interview" : "Интервью";
                                                break;
                                            case "press":
                                                tpName = IsEng ? "Press release" : "Пресс-релиз";
                                                break;
                                            default:
                                                tpName = IsEng ? "News" : "Новость";
                                        }
                                        return tpName;
                                    }

                                    function NLoadPage(idiv, page, IsEng, dateFrom, dateTo) {
                                        var more_button = idiv.parent().children(".more-button");
                                        more_button.addClass("_loading");
                                        $.ajax({
                                                url: _NewsSourceURL,
                                                data: {
                                                    page: page,
                                                    IsEng: IsEng === 1
                                                },
                                                cache: false,
                                            })
                                            .done(function(data) {
                                                _PageLoadding = false;
                                                more_button.removeClass("_loading");

                                                if (data.length !== _PageSize) {
                                                    more_button.hide();
                                                } else {
                                                    more_button.show();
                                                }

                                                //divday = $('<div class="home-previews_day">');

                                                $.each(data, function(index, k) {
                                                    if (News_last_day !== k.DT) {
                                                        News_last_day = k.DT;
                                                        divday = $('<div class="home-previews_day">');

                                                        dt = $(
                                                            '<div class="home-previews_day-date">' +
                                                            moment(k.DT).format("DD MMMM YYYY") +
                                                            "</div>"
                                                        );
                                                        divday.append(dt);
                                                        idiv.append(divday);
                                                    }

                                                    var press_root = $(
                                                        '<div class="home-previews_item"></div>'
                                                    );
                                                    var row = $(
                                                        '<div class="row flex-md-nowrap"></div>'
                                                    );
                                                    row.append(
                                                        $(
                                                            ' <div class="col-md-2"><div class="home-previews_item-time">' +
                                                            k.dateupdate +
                                                            "</div></div>"
                                                        )
                                                    );
                                                    var titleInfo = $(
                                                        '<div class="home-previews_item-title"><a target="_blank" href="' +
                                                        k.doc_htm.trim() +
                                                        '">' +
                                                        k.name_doc.trim() +
                                                        "</a></div>"
                                                    );
                                                    row.append(titleInfo);
                                                    if (k.Important !== 0) {
                                                        row.append(
                                                            $(
                                                                '<div class="home-previews_item-icon offset-md-1 icon-important"></div>'
                                                            )
                                                        );
                                                    }
                                                    press_root.append(row);
                                                    if (k.MenuTitle !== null) {
                                                        press_root.append(
                                                            $(
                                                                '<div class="offset-md-2 row home-previews_item-source_wrap"><div class="home-previews_item-source">' +
                                                                k.MenuTitle.trim() +
                                                                "</div></div>"
                                                            )
                                                        );
                                                    }
                                                    divday.append(press_root);
                                                });

                                                divday.trigger("new-html");
                                            })
                                            .fail(function(xhr, textStatus, errorThrown) {
                                                idiv.append(IsNetworkErrMsg(xhr.statusText));
                                                _PageLoadding = false;
                                            });
                                    }

                                    function MakeEventRow(k, IsImportantRow) {
                                        var bgRoot =
                                            'style="background-image:url(https://www.cbr.ru/legacy/PhotoStore/getimgid/';
                                        var inv_image = k.width == 1090;

                                        var fext = ".jpg";
                                        if (k.mimeType === "image/png") {
                                            fext = ".png";
                                        }

                                        var dtm = moment(k.DT).format("DD MMMM YYYY");
                                        if (
                                            moment(k.DT).format("DD.MM.YYYY") ===
                                            moment().format("DD.MM.YYYY")
                                        ) {
                                            dtm = IsEng === 1 ? "Today" : "Сегодня";
                                        }
                                        var tpName = decodeType(k.TBLType, IsEng);

                                        var _link = "";
                                        if (k.TBLType === "press") {
                                            _link = "/press/pr/?file=" + k.doc_htm;
                                        } else {
                                            _link = "/press/event/?id=" + k.doc_htm;
                                        }
                                        _link = IsEng ? "/eng" + _link : _link;

                                        var press_root = $(
                                            '<div class="news _in-feed col-md-17 ' +
                                            (k.Video === 1 ? "_with-video" : "") +
                                            (IsImportantRow ? " _big _white" : "") +
                                            '"></div>'
                                        );
                                        var bkgimg = "";
                                        if (IsImportantRow) {
                                            bkgimg = bgRoot;
                                            if (inv_image) {
                                                if (k.ImageCId > 0) {
                                                    bkgimg += k.ImageCId + fext + ');"';
                                                } else {
                                                    bkgimg += k.ImageId + '.jpg);"';
                                                }
                                            } else {
                                                if (k.ImageId > 0) {
                                                    bkgimg += k.ImageId + '.jpg);"';
                                                } else {
                                                    bkgimg += k.ImageCId + '.png);"';
                                                }
                                            }
                                        }
                                        var news_inner = $(
                                            '<div class="news_inner"  ' + bkgimg + "></div>"
                                        );

                                        var rtp = $('<div class="news_text"></div>');

                                        rtp.append(
                                            $(
                                                '<div class="news_info"><div class= "news_date"> ' +
                                                dtm +
                                                '</div><div class="news_category">' +
                                                tpName +
                                                "</div></div>"
                                            )
                                        );
                                        rtp.append(
                                            $(
                                                '<a class="news_title" href="' +
                                                _link +
                                                '" target="_blank">' +
                                                k.name_doc +
                                                "</a>"
                                            )
                                        );

                                        news_inner.append(rtp);

                                        if (!_NoPictInList || IsImportantRow) {
                                            var imgnode =
                                                '<a target="_blank" href="' +
                                                _link +
                                                '" class="col-md-5 offset-md-1 news_image"><img src="/legacy/PhotoStore/getimgid/';
                                            if (inv_image) {
                                                if (k.ImageCId > 0) {
                                                    news_inner.append(
                                                        imgnode +
                                                        k.ImageCId +
                                                        fext +
                                                        '" alt="cropped image"></a>'
                                                    );
                                                } else {
                                                    if (k.ImageId > 0) {
                                                        news_inner.append(
                                                            imgnode +
                                                            k.ImageId +
                                                            '.jpg" alt="full image"></a>'
                                                        );
                                                    }
                                                }
                                            } else {
                                                if (k.ImageId > 0) {
                                                    news_inner.append(
                                                        imgnode +
                                                        k.ImageId +
                                                        '.jpg" alt="full image (1)"></a>'
                                                    );
                                                } else {
                                                    // елси есть кроп то еего
                                                    if (k.ImageCId > 0) {
                                                        news_inner.append(
                                                            imgnode +
                                                            k.ImageCId +
                                                            '.png" alt="cropped image (1)"></a>'
                                                        );
                                                    }
                                                }
                                            }
                                        }

                                        press_root.append(news_inner);
                                        return press_root;
                                    }
                                    //]]
                                </script>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    // ValcursFiller block

                                    var _CursSourceURL = "/cursonweek/";

                                    $(function() {
                                        var m_h = $("div.home-main");
                                        let er = $("div.home-main_resources");
                                        er.each(function(index) {
                                            const tobj = $(this).clone();
                                            tobj.removeClass("d-none");
                                            tobj.removeClass("d-md-block");
                                            tobj.addClass("d-md-none");
                                            m_h.append(tobj);
                                        });

                                        var lang = $("meta[name='zoom:lang']").attr("content");
                                        moment.locale(lang);

                                        var IsEng = 0;
                                        if (lang === "en") {
                                            IsEng = 1;
                                        }

                                        LoadCursPanel("", "R01235");
                                        LoadCursPanel("", "R01239");
                                        LoadCursPanel("", "R01375");

                                        function LoadCursPanel(FirstDT, valId) {
                                            $.ajax({
                                                    url: _CursSourceURL,
                                                    data: {
                                                        DT: FirstDT,
                                                        val_id: valId
                                                    },
                                                    cache: false,
                                                })
                                                .done(function(data) {
                                                    var RootTbl = $("#V_" + valId);

                                                    RootTbl.empty();

                                                    var f_d = data[0].data;
                                                    var t_d = data[data.length - 1].data;

                                                    var firstDateExist = data.filter(function(e) {
                                                        return e.curs !== null;
                                                    })[0];

                                                    var header = $(
                                                        '<div class="main-indicator_tooltip-head"/>'
                                                    );
                                                    var prevButton = $(
                                                        '<button class="main-indicator_tooltip-head-btn _left ' +
                                                        (firstDateExist.prevDate == null ?
                                                            "_disabled" :
                                                            "") +
                                                        '"></button>'
                                                    );
                                                    prevButton.click(function() {
                                                        LoadCursPanel(firstDateExist.prevDate, valId);
                                                    });
                                                    header.append(prevButton);

                                                    header.append(
                                                        $(
                                                            '<div class="main-indicator_tooltip-head-text">' +
                                                            moment(f_d).format("DD.MM.YYYY") +
                                                            " - " +
                                                            moment(t_d).format("DD.MM.YYYY") +
                                                            "</div>"
                                                        )
                                                    );

                                                    var nexButton = $(
                                                        '<button class="main-indicator_tooltip-head-btn _right ' +
                                                        (firstDateExist.NextWeekExist == null ?
                                                            "_disabled" :
                                                            "") +
                                                        ' "></button>'
                                                    );
                                                    if (firstDateExist.NextWeekExist != null) {
                                                        nexButton.click(function() {
                                                            LoadCursPanel(
                                                                firstDateExist.NextWeekExist,
                                                                valId
                                                            );
                                                        });
                                                    }

                                                    header.append(nexButton);

                                                    RootTbl.append(header);
                                                    var table = $(
                                                        '<table class="main-indicator_tooltip-table"/>'
                                                    );

                                                    var has_first_day = true;

                                                    $.each(data, function(index, k) {
                                                        var tr = $("<tr/>");
                                                        var diff_color = "";
                                                        var diff_sign = "";
                                                        if (k.diff > 0) {
                                                            diff_color = 'class="_red"';
                                                            diff_sign = "+";
                                                        }
                                                        if (k.diff < 0) {
                                                            diff_color = 'class="_green"';
                                                        }

                                                        if (has_first_day & (k.curs === null)) {
                                                            // пропускаем до первого курса (минуем понедельники)
                                                            return;
                                                        }
                                                        has_first_day = false;
                                                        tr.append(
                                                            $(
                                                                '<td class="_day">' +
                                                                moment(k.data).format("ddd") +
                                                                "</td>"
                                                            )
                                                        );
                                                        tr.append(
                                                            $(
                                                                '<td class="_date">' +
                                                                moment(k.data).format("DD.MM") +
                                                                "</td>"
                                                            )
                                                        );
                                                        tr.append(
                                                            $(
                                                                "<td>" +
                                                                (k.curs === null ?
                                                                    " — " :
                                                                    number_format(k.curs, 4, ",", " ") +
                                                                    "&nbsp;₽") +
                                                                "</td>"
                                                            )
                                                        );
                                                        if (k.diff === null) {
                                                            tr.append($("<td> — </td>"));
                                                        } else {
                                                            tr.append(
                                                                $(
                                                                    "<td " +
                                                                    diff_color +
                                                                    ">" +
                                                                    diff_sign +
                                                                    number_format(k.diff, 4, ",", " ") +
                                                                    "&nbsp;₽</td>"
                                                                )
                                                            );
                                                        }
                                                        table.append(tr);
                                                    });
                                                    RootTbl.append(table);
                                                    RootTbl.append(
                                                        $(
                                                            '<div class="main-indicator_tooltip-footer">' +
                                                            (IsEng ?
                                                                "Bank of Russia official exchange rates" :
                                                                "Официальный курс Банка Узбекистана") +
                                                            "</div>"
                                                        )
                                                    );
                                                })
                                                .fail(function(xhr, textStatus, errorThrown) {
                                                    var RootTbl = $("#V_" + valId);
                                                    RootTbl.empty();
                                                    var Err = xhr.statusText;
                                                    RootTbl.append(
                                                        $(
                                                            '<div class="alert">' +
                                                            (IsEng ?
                                                                "Error: " + Err + ", try refresh the page" :
                                                                "Ошибка: " +
                                                                Err +
                                                                ", попробуйте обновить страницу") +
                                                            "</div>"
                                                        )
                                                    );
                                                });
                                        }

                                        function number_format(
                                            number,
                                            decimals,
                                            dec_point,
                                            separator
                                        ) {
                                            number = (number + "").replace(/[^0-9+\-Ee.]/g, "");
                                            var n = !isFinite(+number) ? 0 : +number,
                                                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                                                sep =
                                                typeof separator === "undefined" ? "," : separator,
                                                dec =
                                                typeof dec_point === "undefined" ? "." : dec_point,
                                                s = "",
                                                toFixedFix = function(n, prec) {
                                                    var k = Math.pow(10, prec);
                                                    return "" + (Math.round(n * k) / k).toFixed(prec);
                                                };
                                            s = (
                                                prec ? toFixedFix(n, prec) : "" + Math.round(n)
                                            ).split(".");
                                            if (s[0].length > 3) {
                                                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                                            }
                                            if ((s[1] || "").length < prec) {
                                                s[1] = s[1] || "";
                                                s[1] += new Array(prec - s[1].length + 1).join("0");
                                            }
                                            return s.join(dec);
                                        }
                                    });
                                    //]]
                                </script>
                                <div class="col-md-15">
                                    <h2 class="home-main_header">
                                        <a href="/news/">Новости</a>
                                    </h2>
                                    <div class="home-main_tabs home-sticky_parent" data-tabs="">
                                        <div class="home-sticky" data-home-sticky="" style="">
                                            <div class="tabs">
                                                <a class="tab _active" href="#" data-tabs-tab="100"
                                                    aria-selected="true">Все</a>
                                                <a class="tab" href="#" data-tabs-tab="0"
                                                    aria-selected="false">Новости</a>
                                                <a class="tab" href="#" data-tabs-tab="4"
                                                    aria-selected="false">Пресс-релизы</a>
                                                <a class="tab" href="#" data-tabs-tab="2"
                                                    aria-selected="false">Интервью</a>
                                                <a class="tab" href="#" data-tabs-tab="1"
                                                    aria-selected="false">Выступления</a>
                                                <span class="tab-separator"></span>
                                                <a class="tab" href="#" data-tabs-tab="7"
                                                    aria-selected="false">Новое на&nbsp;сайте</a>
                                            </div>
                                        </div>
                                        <div class="home-sticky_compensation"></div>

                                        <div data-tabs-content="100" style="">
                                            <div class="news-speeches_wrap">
                                                <div id="events_tab100">
                                                    <div class="news _in-feed col-md-17 _big _white">
                                                        <div class="news_inner"
                                                            style="
                              background-image: url(./Content/images/hakimyat.png);
                            ">
                                                            <div class="news_text">
                                                                <div class="news_info">
                                                                    <div class="news_date">11 октября 2024</div>
                                                                    <div class="news_category">Новость</div>
                                                                </div>
                                                                <a class="news_title" href="/press/event/?id=21080"
                                                                    target="_blank">Специальная госкомпания станет «мостом»
                                                                    между хокимиятом Ташкента и бизнесом</a>
                                                            </div>
                                                            <a target="_blank" href="/press/event/?id=21080"
                                                                class="col-md-5 offset-md-1 news_image"><img
                                                                    src="./Content/images/hakimyat.png"
                                                                    alt="cropped image" /></a>
                                                        </div>
                                                    </div>

                                                    <div class="news _in-feed col-md-17">
                                                        <div class="news_inner">
                                                            <div class="news_text">
                                                                <div class="news_info">
                                                                    <div class="news_date">07 мая 2024</div>
                                                                    <div class="news_category">Пресс-релиз</div>
                                                                </div>
                                                                <a class="news_title"
                                                                    href="/press/pr/?file=638634076116259914COINS.htm"
                                                                    target="_blank">Ювелирное искусство в&nbsp;Узбекистана:
                                                                    новые монеты</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="_buttonLoadNextEvt" class="more-button _small _home-news">
                                                    Загрузить еще
                                                </button>
                                            </div>
                                        </div>
                                        <div class="hide" data-tabs-content="0" style="display: none">
                                            <div class="news-section_content">
                                                <div class="news-speeches_wrap">
                                                    <div id="events_tab0"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hide" data-tabs-content="4" style="display: none">
                                            <div class="news-speeches_wrap">
                                                <div id="events_tab4"></div>
                                            </div>
                                        </div>
                                        <div class="hide" data-tabs-content="1" style="display: none">
                                            <div class="news-speeches_wrap">
                                                <div id="events_tab1"></div>
                                            </div>
                                        </div>
                                        <div class="hide" data-tabs-content="2" style="display: none">
                                            <div class="news-speeches_wrap">
                                                <div id="events_tab2"></div>
                                            </div>
                                        </div>
                                        <div class="hide" data-tabs-content="7" style="display: none">
                                            <div class="news-section_content">
                                                <div class="home-previews" id="events_tab7"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-main_aside" style="min-height: 1974.31px">
                            <div class="home-main_sticky" data-home-main-aside-sticky=""
                                xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msxsl="urn:schemas-microsoft-com:xslt">
                                <div class="main-indicator">
                                    <div class="main-indicator_content">
                                        <div class="main-indicator_text">
                                            <span class="main-indicator_info" data-tooltip=""
                                                data-tooltip-content="<p>Цель по инфляции устанавливается для показателя инфляции, отражающего темп прироста потребительских цен к соответствующему месяцу предыдущего года</p>"
                                                data-tooltip-class="main-indicator_info-tooltip"
                                                data-tooltip-at="right bottom" data-tooltip-position="right+22 top+7"
                                                data-tooltip-type="black" aria-expanded="false">Цель по инфляции</span>
                                        </div>
                                    </div>
                                    <div class="main-indicator_value">4,0%</div>
                                </div>
                                <div class="main-indicator">
                                    <div class="main-indicator_content">
                                        <div class="main-indicator_sub">
                                            <span class="main-indicator_info" data-tooltip=""
                                                data-tooltip-content='<p>Показатель инфляции отражает темп прироста потребительских цен к соответствующему месяцу предыдущего года</p><p>(источник:  <a href="https://rosstat.gov.ru/statistics/price">Федеральная служба государственной статистики</a>)</p>'
                                                data-tooltip-class="main-indicator_info-tooltip"
                                                data-tooltip-at="right bottom" data-tooltip-position="right+22 top+7"
                                                data-tooltip-type="black" aria-expanded="false">Инфляция</span>
                                        </div>
                                        <div class="main-indicator_text">
                                            <a href="/hd_base/infl/">сентябрь 2024</a>
                                        </div>
                                    </div>
                                    <div class="main-indicator_value">8,6%</div>
                                </div>
                                <div class="main-indicator">
                                    <div class="main-indicator_content">
                                        <div class="main-indicator_sub">
                                            <a href="/hd_base/KeyRate/">Ключевая ставка</a>
                                        </div>
                                        <div class="main-indicator_text">
                                            <a href="/press/keypr/"> с 16.09.2024</a>
                                        </div>
                                    </div>
                                    <div class="main-indicator_value">19,00%</div>
                                </div>
                                <div class="main-indicator">
                                    <div class="main-indicator_content">
                                        <div class="main-indicator_sub">
                                            <a href="/hd_base/ruonia/dynamics/">Ставка RUONIA</a>
                                        </div>
                                        <div class="main-indicator_text">11.10.2024</div>
                                    </div>
                                    <div class="main-indicator_value">18,62%</div>
                                </div>
                                <div class="main-indicator_rates">
                                    <div class="main-indicator_rates-table">
                                        <div class="main-indicator_rates-head">
                                            <div class="col-md-2 col-xs-7">
                                                <a href="/currency_base/">Курсы валют</a>
                                            </div>
                                            <div class="col-md-2 col-xs-7 _right">
                                                <a
                                                    href="/currency_base/daily/?UniDbQuery.Posted=True&amp;UniDbQuery.To=11.10.2024">11.10.2024</a>
                                            </div>
                                            <div class="col-md-2 col-xs-7 _right">
                                                <a
                                                    href="/currency_base/daily/?UniDbQuery.Posted=True&amp;UniDbQuery.To=12.10.2024">12.10.2024</a>
                                            </div>
                                        </div>
                                        <div class="main-indicator_rate">
                                            <div class="col-md-2 col-xs-9 _yuan">
                                                CNY,&nbsp;<span>1¥ </span>
                                            </div>
                                            <div class="col-md-2 col-xs-9 _right mono-num">
                                                13,6922 ₽
                                            </div>
                                            <div class="col-md-2 col-xs-9 _right mono-num">
                                                13,4752 ₽
                                            </div>
                                            <div class="main-indicator_tooltip" id="V_R01375">
                                                <div class="main-indicator_tooltip-head">
                                                    <button class="main-indicator_tooltip-head-btn _left"></button>
                                                    <div class="main-indicator_tooltip-head-text">
                                                        08.10.2024 - 12.10.2024
                                                    </div>
                                                    <button
                                                        class="main-indicator_tooltip-head-btn _right _disabled"></button>
                                                </div>
                                                <table class="main-indicator_tooltip-table">
                                                    <tr>
                                                        <td class="_day">вт</td>
                                                        <td class="_date">08.10</td>
                                                        <td>13,5537&nbsp;₽</td>
                                                        <td class="_red">+0,1410&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">ср</td>
                                                        <td class="_date">09.10</td>
                                                        <td>13,5810&nbsp;₽</td>
                                                        <td class="_red">+0,0273&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">чт</td>
                                                        <td class="_date">10.10</td>
                                                        <td>13,6869&nbsp;₽</td>
                                                        <td class="_red">+0,1059&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">пт</td>
                                                        <td class="_date">11.10</td>
                                                        <td>13,6922&nbsp;₽</td>
                                                        <td class="_red">+0,0053&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">сб</td>
                                                        <td class="_date">12.10</td>
                                                        <td>13,4752&nbsp;₽</td>
                                                        <td class="_green">-0,2170&nbsp;₽</td>
                                                    </tr>
                                                </table>
                                                <div class="main-indicator_tooltip-footer">
                                                    Официальный курс Банка Узбекистана
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-indicator_rate">
                                            <div class="col-md-2 col-xs-9 _dollar">
                                                USD,&nbsp;<span>1$</span>
                                            </div>
                                            <div class="col-md-2 col-xs-9 _right mono-num">
                                                97,2394 ₽
                                            </div>
                                            <div class="col-md-2 col-xs-9 _right mono-num">
                                                96,0686 ₽
                                            </div>
                                            <div class="main-indicator_tooltip" id="V_R01235">
                                                <div class="main-indicator_tooltip-head">
                                                    <button class="main-indicator_tooltip-head-btn _left"></button>
                                                    <div class="main-indicator_tooltip-head-text">
                                                        08.10.2024 - 12.10.2024
                                                    </div>
                                                    <button
                                                        class="main-indicator_tooltip-head-btn _right _disabled"></button>
                                                </div>
                                                <table class="main-indicator_tooltip-table">
                                                    <tr>
                                                        <td class="_day">вт</td>
                                                        <td class="_date">08.10</td>
                                                        <td>96,0649&nbsp;₽</td>
                                                        <td class="_red">+1,1949&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">ср</td>
                                                        <td class="_date">09.10</td>
                                                        <td>96,1079&nbsp;₽</td>
                                                        <td class="_red">+0,0430&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">чт</td>
                                                        <td class="_date">10.10</td>
                                                        <td>96,9483&nbsp;₽</td>
                                                        <td class="_red">+0,8404&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">пт</td>
                                                        <td class="_date">11.10</td>
                                                        <td>97,2394&nbsp;₽</td>
                                                        <td class="_red">+0,2911&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">сб</td>
                                                        <td class="_date">12.10</td>
                                                        <td>96,0686&nbsp;₽</td>
                                                        <td class="_green">-1,1708&nbsp;₽</td>
                                                    </tr>
                                                </table>
                                                <div class="main-indicator_tooltip-footer">
                                                    Официальный курс Банка Узбекистана
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-indicator_rate">
                                            <div class="col-md-2 col-xs-9 _euro">
                                                EUR,&nbsp;<span>1€</span>
                                            </div>
                                            <div class="col-md-2 col-xs-9 _right mono-num">
                                                106,5074 ₽
                                            </div>
                                            <div class="col-md-2 col-xs-9 _right mono-num">
                                                105,1095 ₽
                                            </div>
                                            <div class="main-indicator_tooltip" id="V_R01239">
                                                <div class="main-indicator_tooltip-head">
                                                    <button class="main-indicator_tooltip-head-btn _left"></button>
                                                    <div class="main-indicator_tooltip-head-text">
                                                        08.10.2024 - 12.10.2024
                                                    </div>
                                                    <button
                                                        class="main-indicator_tooltip-head-btn _right _disabled"></button>
                                                </div>
                                                <table class="main-indicator_tooltip-table">
                                                    <tr>
                                                        <td class="_day">вт</td>
                                                        <td class="_date">08.10</td>
                                                        <td>105,3069&nbsp;₽</td>
                                                        <td class="_red">+0,5645&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">ср</td>
                                                        <td class="_date">09.10</td>
                                                        <td>105,6891&nbsp;₽</td>
                                                        <td class="_red">+0,3822&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">чт</td>
                                                        <td class="_date">10.10</td>
                                                        <td>106,4175&nbsp;₽</td>
                                                        <td class="_red">+0,7284&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">пт</td>
                                                        <td class="_date">11.10</td>
                                                        <td>106,5074&nbsp;₽</td>
                                                        <td class="_red">+0,0899&nbsp;₽</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="_day">сб</td>
                                                        <td class="_date">12.10</td>
                                                        <td>105,1095&nbsp;₽</td>
                                                        <td class="_green">-1,3979&nbsp;₽</td>
                                                    </tr>
                                                </table>
                                                <div class="main-indicator_tooltip-footer">
                                                    Официальный курс Банка Узбекистана
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="main-indicator_rates-link" href="/key-indicators/">Все показатели</a>
                                </div>
                                <div class="home-main_resources d-none d-md-block">
                                    <div class="external-resources">
                                        <div class="subscribe-block">
                                            <div class="subscribe-block_title">Подписка</div>
                                            <div class="subscribe-block_subtitle">
                                                Новости и обновления сайта
                                            </div>
                                            <a class="btn _medium _outline" href="/news/subscribe">Подписаться</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-main_resources d-none d-md-block">
                                    <div class="popular">
                                        <div class="popular_links">
                                            <div class="popular_link">
                                                <a href="/about_br/press/">Контакты для СМИ</a>
                                            </div>
                                            <div class="popular_link">
                                                <a href="/about_br/publ/">Издания Банка Узбекистана</a>
                                            </div>
                                            <div class="popular_link">
                                                <a href="/calendar/">График публикаций</a>
                                            </div>
                                            <div class="popular_link">
                                                <a href="/development/RSS/">RSS-каналы</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-main_resources d-md-none">
                            <div class="external-resources">
                                <div class="subscribe-block">
                                    <div class="subscribe-block_title">Подписка</div>
                                    <div class="subscribe-block_subtitle">
                                        Новости и обновления сайта
                                    </div>
                                    <a class="btn _medium _outline" href="/news/subscribe">Подписаться</a>
                                </div>
                            </div>
                        </div>
                        <div class="home-main_resources d-md-none">
                            <div class="popular">
                                <div class="popular_links">
                                    <div class="popular_link">
                                        <a href="/about_br/press/">Контакты для СМИ</a>
                                    </div>
                                    <div class="popular_link">
                                        <a href="/about_br/publ/">Издания Банка Узбекистана</a>
                                    </div>
                                    <div class="popular_link">
                                        <a href="/calendar/">График публикаций</a>
                                    </div>
                                    <div class="popular_link">
                                        <a href="/development/RSS/">RSS-каналы</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="materials">
                        <div class="block-title _with-dash materials_top">
                            <h2 class="h3 materials_title">
                                <span class="referenceable" id="a_87403">Актуальные документы</span>
                            </h2>
                            <div class="materials_nav">
                                <div class="materials_nav_btn _prev swiper-button-disabled" tabindex="0" role="button"
                                    aria-label="Previous slide" aria-disabled="true"></div>
                                <div class="materials_nav_btn _next" tabindex="0" role="button"
                                    aria-label="Next slide" aria-disabled="false"></div>
                            </div>
                        </div>
                        <div class="materials_items">
                            <div
                                class="swiper-container materials_gall swiper-container-initialized swiper-container-horizontal swiper-container-android">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Content/Document/File/160494/dbra_20240417.pdf"
                                            data-zoom-title="Перспективные направления развития банковского регулирования и надзора: текущий статус и новые задачи"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Перспективные направления развития банковского
                                                регулирования и надзора: текущий статус и новые задачи
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Collection/Collection/File/49041/ar_2023.pdf"
                                            data-zoom-title="Годовой отчет Банка Узбекистана" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Годовой отчет Банка Узбекистана
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative">2023&nbsp;г.</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Content/Document/File/155957/onrfr_2024-26.pdf"
                                            data-zoom-title="Основные направления развития финансового рынка УзбекистанскойФедерации на 2024 год и период 2025 и 2026 годов"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Основные направления развития финансового рынка
                                                УзбекистанскойФедерации на 2024 год и период 2025 и
                                                2026 годов
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material" href="/about_br/publ/ondkp/"
                                            data-zoom-title="Основные направления единой государственной денежно-кредитной политики"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Основные направления единой государственной
                                                денежно-кредитной политики
                                            </div>
                                            <div class="material_source">
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material" href="/about_br/publ/results_work/2023-g/"
                                            data-zoom-title="Итоги работы Банка Узбекистана: коротко о&nbsp;главном"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Итоги работы Банка Узбекистана: коротко о&nbsp;главном
                                            </div>
                                            <div class="material_source">
                                                <span data-line-cutter="2" style="position: relative">2023&nbsp;г.</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material" href="/PSystem/b_doc/strategy_nps/"
                                            data-zoom-title="Стратегия развития национальной платежной системы на 2021 – 2023 годы"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Стратегия развития национальной платежной системы на
                                                2021 – 2023 годы
                                            </div>
                                            <div class="material_source">
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Content/Document/File/119613/onrndo_2021-2025.pdf"
                                            data-zoom-title="Основные направления развития наличного денежного обращения на 2021–2025 годы"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Основные направления развития наличного денежного
                                                обращения на 2021–2025 годы
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Content/Document/File/120709/SupTech_RegTech_2021-2023.pdf"
                                            data-zoom-title="Основные направления развития технологий SupTech и RegTech на период 2021 – 2023 годов"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Основные направления развития технологий SupTech и
                                                RegTech на период 2021 – 2023 годов
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material"
                                            href="/dkp/mp_dec/decision_key_rate/summary_key_rate_25092024/"
                                            data-zoom-title="Резюме обсуждения ключевой ставки" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Резюме обсуждения ключевой ставки
                                            </div>
                                            <div class="material_source">
                                                <span data-line-cutter="2" style="position: relative">Материалы
                                                    по&nbsp;итогам заседаний Сов...</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Content/Document/File/162516/comment_07082024.pdf"
                                            data-zoom-title="Комментарий к среднесрочному прогнозу Банка Узбекистана"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Комментарий к среднесрочному прогнозу Банка
                                                Узбекистана
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative">07.08.2024</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material" href="/analytics/finstab/ofs/4_2023_1_q_2024/"
                                            data-zoom-title="Обзор финансовой стабильности" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Обзор финансовой стабильности
                                            </div>
                                            <div class="material_source">
                                                <span data-line-cutter="2"
                                                    style="position: relative">IV&nbsp;квартал&nbsp;2023&nbsp;г.&nbsp;—
                                                    I&nbsp;квартал&nbsp;2024&nbsp;г.</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="/Content/Document/File/143838/dbra_20221227.pdf"
                                            data-zoom-title="Перспективные направления развития банковского регулирования и надзора"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Перспективные направления развития банковского
                                                регулирования и надзора
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="home-banners d-none d-md-block">
                        <div class="home-banners_row _5-el">
                            <a class="home-banner" href="/fintech/market_place/" title="Проект «Маркетплейс»">
                                <div class="home-banner_image">
                                    <img src="https://www.cbr.ru/StaticHtml/File/81950/mp.svg"
                                        alt="Проект «Маркетплейс»" />
                                </div>
                                <div class="home-banner_text">Маркетплейс</div>
                            </a><a class="home-banner" href="/PSystem/sfp/" title="Система быстрых платежей">
                                <div class="home-banner_image">
                                    <img src="https://www.cbr.ru/StaticHtml/File/81950/sbp.svg"
                                        alt="Система быстрых платежей" />
                                </div>
                                <div class="home-banner_text">
                                    Система быстрых платежей
                                </div>
                            </a><a class="home-banner" href="/dkp/mp/" title="Мониторинг предприятий">
                                <div class="home-banner_image">
                                    <img src="https://www.cbr.ru/StaticHtml/File/81950/monitor.svg"
                                        alt="Мониторинг предприятий" />
                                </div>
                                <div class="home-banner_text">Мониторинг предприятий</div>
                            </a><a class="home-banner" href="/projects_xbrl/" title="Открытый стандарт отчетности">
                                <div class="home-banner_image">
                                    <img src="https://www.cbr.ru/StaticHtml/File/81950/XBRL.svg"
                                        alt="Открытый стандарт отчетности" />
                                </div>
                                <div class="home-banner_text">
                                    Открытый стандарт отчетности
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="home-banners-wrap d-block d-md-none">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-android"
                            data-home-banners-gall="">
                            <div class="swiper-wrapper" style="transition-duration: 0ms">
                                <div class="swiper-slide">
                                    <a class="home-banner" href="/fintech/market_place/" title="Маркетплейс">
                                        <div class="home-banner_image">
                                            <img src="https://www.cbr.ru/StaticHtml/File/81950/mp.svg"
                                                alt="Маркетплейс" />
                                        </div>
                                        <div class="home-banner_text">Маркетплейс</div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="home-banner" href="/PSystem/sfp/" title="Система быстрых платежей">
                                        <div class="home-banner_image">
                                            <img src="https://www.cbr.ru/StaticHtml/File/81950/sbp.svg"
                                                alt="Система быстрых платежей" />
                                        </div>
                                        <div class="home-banner_text">
                                            Система быстрых платежей
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a class="home-banner" href="/dkp/mp/" title="Мониторинг предприятий">
                                        <div class="home-banner_image">
                                            <img src="https://www.cbr.ru/StaticHtml/File/81950/monitor.svg"
                                                alt="Открытый стандарт отчетности" />
                                        </div>
                                        <div class="home-banner_text">
                                            Мониторинг предприятий
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="home-banner" href="/projects_xbrl/" title="Открытый стандарт отчетности">
                                        <div class="home-banner_image">
                                            <img src="https://www.cbr.ru/StaticHtml/File/81950/XBRL.svg"
                                                alt="Открытый стандарт отчетности" />
                                        </div>
                                        <div class="home-banner_text">
                                            Открытый стандарт отчетности
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/index-->
    </main>
@endsection
