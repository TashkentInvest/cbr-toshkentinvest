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
                                <div class="col-md-15">
                                    <h2 class="home-main_header">
                                        <a href="/news/">Новости</a>
                                    </h2>
                                    <div class="home-main_tabs home-sticky_parent" data-tabs="">
                                        <div class="home-sticky" data-home-sticky="" style="">
                                            <div class="tabs">
                                                <a class="tab _active" href="#" data-tabs-tab="100"
                                                    aria-selected="true">Новости</a>
                                                {{-- <a class="tab" href="#" data-tabs-tab="0"
                                                    aria-selected="false">Все</a>
                                                <a class="tab" href="#" data-tabs-tab="4"
                                                    aria-selected="false">Пресс-релизы</a>
                                                <a class="tab" href="#" data-tabs-tab="2"
                                                    aria-selected="false">Интервью</a>
                                                <a class="tab" href="#" data-tabs-tab="1"
                                                    aria-selected="false">Выступления</a> --}}
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
                                                                background-image: url({{ asset('assets/frontend/Content/images/hakimyat.png') }});
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
                                                <a href="{{ route('frontend.news') }}"
                                                    class="more-button _small _home-news">
                                                    Все новости
                                                </a>
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
                                    {{-- <a class="main-indicator_rates-link" href="/key-indicators/">Все показатели</a> --}}
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
                                            href="https://drive.google.com/file/d/1xUtsj_L9gsK6YGTSZsqgv1YEvqP3bU2q/view"
                                            data-zoom-title="Устав компании" data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Устав компании
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1Its9ckdTkiEf5M7TT5ZpU_MZSbbmcqDg/view"
                                            data-zoom-title="Организационная структура" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Организационная структура
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                {{-- <span data-line-cutter="2" style="position: relative">2023&nbsp;г.</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1idn27zGgPK7T-HiBlD5l1MxRmAp4gv75/view"
                                            data-zoom-title="Решение о первичном выпуске акций" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Решение о первичном выпуске акций
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1EYvD3ukqo22A8bgoMmPv-BDiVLEzzxqa/view"
                                            data-zoom-title="Бухгалтерский баланс — 1 квартал 2024" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Бухгалтерский баланс — 1 квартал 2024
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1pS0MACr1to93NL53nnVACxwLSejl7jQA/view"
                                            data-zoom-title="Отчет о финансовых результатах – 1 квартал 2024"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Отчет о финансовых результатах – 1 квартал 2024
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                {{-- <span data-line-cutter="2" style="position: relative">2023&nbsp;г.</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1_lCgKih4Yru3sHmKHIWreB43Uqg_fQXI/view"
                                            data-zoom-title="Список аффилированных лиц" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Список аффилированных лиц
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1UuT6P6HBe_nVKuFdBH2ZlHiI5lhFS26P/view"
                                            data-zoom-title="Кодекс корпоративного управления" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Кодекс корпоративного управления
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1L5wG3AEPZMyvsd723vnCRcDfG-UM3cTa/view"
                                            data-zoom-title="Правила корпоративного управления" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Правила корпоративного управления
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1ruf4z4qfecZDd81yioCkfSkQ2lCATMag/view"
                                            data-zoom-title="Результаты оценки системы корпоративного управления"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Результаты оценки системы корпоративного управления
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>

                                                {{-- <span data-line-cutter="2" style="position: relative">Материалы
                                                    по&nbsp;итогам заседаний Сов...</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1TFvghHgmYuoRSSxDdYWaLoX5Q9CMVh8J/view"
                                            data-zoom-title="Сообщение о принятии Правил корпоративного управления в своей деятельности"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Сообщение о принятии Правил корпоративного управления в своей деятельности
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                {{-- <span data-line-cutter="2" style="position: relative">07.08.2024</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1CJXescFyTKxU5wMSK9c0AtMkkIbm5eoI/view"
                                            data-zoom-title="Сообщение о принятии рекомендаций Кодекса корпоративного управления в своей деятельности"
                                            data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Сообщение о принятии рекомендаций Кодекса корпоративного управления в своей
                                                деятельности
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>

                                                {{-- <span data-line-cutter="2"
                                                    style="position: relative">IV&nbsp;квартал&nbsp;2023&nbsp;г.&nbsp;—
                                                    I&nbsp;квартал&nbsp;2024&nbsp;г.</span> --}}
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>

                    {{-- partners logos --}}
                    @include('inc.__partners_logos')
                </div>
            </div>
        </div>
        <!--/index-->
    </main>
@endsection
