<header class="home-header" id="header">
    <div class="top-line" data-top-line="">
        <div class="offsetMenu">
            <div class="col-md-23 offset-md-1">
                <div class="top-line_inner header_inner">
                    <div class="row">
                        <div class="col-xl-5 col-md-9">
                            <div class="header_left">
                                <div class="header_menu" data-menu-show=""></div>
                                <a class="header_logo" href="/"></a>
                            </div>
                        </div>
                        <div class="col-xl-17 col-md-13 offset-md-1 header_block">
                            <div class="header_search">
                                <a class="header_search_btn" href="#" data-search-form-show>
                                    <div class="header_search_icon"></div>
                                    <span class="d-none d-xl-block">Поиск по сайту</span>
                                </a>
                            </div>
                            <div class="d-none d-md-block">
                                <div class="header_right">
                                    <div class="header_link">
                                        <a href="/reception/">Интернет-приемная</a>
                                    </div>
                                    <div class="header_lang">
                                        <div class="header_lang_item _active">
                                            <span><!--noindex-->RU<!--/noindex--></span>
                                        </div>
                                        <div class="header_lang_item">
                                            <a href="#!"><!--noindex-->EN<!--/noindex--></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Request::is('/'))
        <div class="home-header_shadow"></div>
    @endif
    <div class="offsetMenu">
        <div class="col-md-23 offset-md-1">
            <div class="{{ Request::is('/') ? 'home-header_content' : 'header_content' }}">
                <div class="{{ Request::is('/') ? 'home-header_top' : 'header_top' }} header_inner">
                    <div class="row">
                        <div class="col-xl-5 col-md-7">
                            <div class="header_left">
                                <div class="header_menu" data-menu-show=""></div>
                                <a class="header_logo" href="/"></a>
                            </div>
                        </div>
                        <div class="col-xl-18 col-md-16 header_block">
                            <div class="header_search">
                                <a class="header_search_btn _hide" href="#" data-search-form-show
                                    data-home-search>
                                    <div class="header_search_icon"></div>
                                    <span class="d-none d-md-block">Поиск по сайту</span>
                                </a>
                            </div>
                            <div class="header_right d-none d-md-flex">
                                <div class="networks header_networks">
                                    {{-- <a class="networks_item _vk" href="https://vk.com/#!" title="ВКонтакте"></a> --}}
                                    <a class="networks_item _yt" href="https://www.youtube.com/user/#!"
                                        title="Youtube"></a>
                                    <a class="networks_item _tg" href="https://t.me/#!" title="Telegram"></a>
                                    {{-- <a class="networks_item _ydzen" href="https://dzen.ru/#!" title="Яндекс Дзен"></a> --}}
                                    {{-- <a class="networks_item _ok" href="https://ok.ru/group/#!"
                                        title="Одноклассники"></a> --}}
                                </div>
                                <div class="header_lang">
                                    <div class="header_lang_item _active">
                                        <span><!--noindex-->RU<!--/noindex--></span>
                                    </div>
                                    <div class="header_lang_item">
                                        <a
                                            href="/Localization/SwitchLanguage?url=%2F&amp;from=ru-RU&amp;to=en-CB"><!--noindex-->EN<!--/noindex--></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if (Request::is('/'))
                    @include('inc.__banner_home')
                @endif
            </div>
        </div>
    </div>
</header>


<form class="search-form" action="/search/" method="get" data-search-form="">
    <div class="offsetMenu">
        <div class="col-md-23 offset-md-1">
            <div class="search-form_inner">
                <div class="search-form_title">Что вы хотите найти?</div>
                <div class="search-form_content">
                    <div class="search-form_block">
                        <div class="search-form_icon"></div>
                        <div class="search-form_field">
                            <input name="text" type="text" placeholder="Начните писать"
                                data-search-form-input="" />
                        </div>
                    </div>
                    <div class="search-form_btn">
                        <button class="b-btn _blue" data-search-form-btn="">
                            Искать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="menu_wrap" data-menu=""
    data-config='{"catalogPath":[15532],"url":"/Catalog/SiteMap/GetWholeSiteHtml?blockId=59191"}'>
    <div class="offsetMenu">
        <div class="header_menu _close menu_close d-none d-md-block" data-menu-close=""></div>
        <div class="header_inner top-line_inner d-block d-md-none">
            <div class="row">
                <div class="col-xl-5 col-md-9">
                    <div class="header_left">
                        <div role="button" tabindex="0" aria-label="Закрыть меню" class="header_menu _close"
                            data-menu-close=""></div>
                        <a class="header_logo" href="/"></a>
                        <style>
                            .header_logo {
                                background: url({{ asset('assets/frontend/Content/images/card-logo.png') }}) no-repeat center center / contain !important;
                                width: 120px !important;
                                height: 90px;
                            }

                            .header_inner {
                                padding-top: 16px !important;
                                padding-bottom: 9px !important;
                            }
                        </style>
                    </div>
                </div>
                <div class="col-xl-17 col-md-13 offset-md-1 header_block">
                    <div class="header_search"></div>
                </div>
            </div>
        </div>
        <div class="menu row" data-tabs="data-tabs">
            <div class="menu_quick col-md-7">
                <div role="tablist" class="menu_quick_tabs">
                    <a role="tab" id="menu_tab_Activity" aria-controls="menu_content_Activity"
                        aria-selected="true" class="menu_tab _active" href="#"
                        data-tabs-tab="Activity">Деятельность</a>

                    <a role="tab" id="menu_tab_Documents" aria-controls="menu_content_Documents"
                        aria-selected="false" class="menu_tab" href="#" data-tabs-tab="Documents">Документы и
                        данные</a>
                    <a role="tab" id="menu_tab_AboutTashkentInvest"
                        aria-controls="menu_content_AboutTashkentInvest" aria-selected="false" class="menu_tab"
                        href="#" data-tabs-tab="AboutTashkentInvest">Информация о Ташкент Инвест</a>
                 
                </div>
                <div class="menu_quick_links">

                    <div class="phones">
                        <a class="menu_phone_val" href="tel:+998 71 210 02 61">+998 71 210 02
                            61</a><span>круглосуточно</span>
                    </div>
                    <div class="inner_links">
                        <a href="{{ route('frontend.supervisory_board') }}"
                            title="Наблюдательный совет">Наблюдательный совет</a>

                        <a href="{{ route('frontend.rukavodstva') }}" title="Руководство">Руководство</a>
                        <a href="{{ route('frontend.zakupki.index') }}" title="Закупки">Закупки</a>


                        <a href="/news/" title="Новости">Новости</a>
                        <a href="{{ route('frontend.contact') }}" title="Контактная информация">Контактная
                            информация</a>

                        <a href="{{route('frontend.about')}}" title="О Нас">О Нас</a>
                    </div>
                    <div class="networks-circle">
                        <a class="networks-circle_item _vk" href="https://vk.com/#!"></a>
                        <a class="networks-circle_item _yt" href="https://www.youtube.com/user/#!"></a>
                        <a class="networks-circle_item _tg" href="https://t.me/#!" title="Telegram"></a>
                        <a class="networks-circle_item _ydzen" href="https://dzen.ru/#!" title="Яндекс Дзен"></a>
                        <a class="networks-circle_item _ok" href="https://ok.ru/group/#!" title="Одноклассники"></a>
                    </div>
                </div>
            </div>
            <div class="d-md-none link-above">
                <div class="header_right" data-cms-wholesite-header-right="">
                    <div class="header_link">
                        <a href="/reception/">Интернет-приемная</a>
                    </div>
                    <div class="header_lang">
                        <div class="header_lang_item _active">
                            <span><!--noindex-->RU<!--/noindex--></span>
                        </div>
                        <div class="header_lang_item">
                            <a
                                href="/Localization/SwitchLanguage?url=%2F&amp;from=ru-RU&amp;to=en-CB"><!--noindex-->EN<!--/noindex--></a>
                        </div>
                    </div>
                </div>
                <div class="header_right">
                    <div class="header_link">
                        <a href="/fmp_check/">Проверить участника финансового рынка</a>
                    </div>
                </div>
            </div>

            <div role="tabpanel" id="menu_content_Activity" aria-labelledby="menu_tab_Activity"
                class="menu_content_container col-md" data-tabs-content="Activity" style="">
                <div class="menu_content offset-md-1">
                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="15917">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/dkp/" class="col-md-15">Денежно-кредитная политика</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16458">
                                            <a href="/dkp/objective_and_principles/" class="">Цели
                                                и&nbsp;принципы денежно-кредитной политики</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16208">
                                            <a href="/dkp/about_inflation/" class="">Что&nbsp;такое инфляция</a>
                                        </li>

                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">

                                        <li class="item_deep" data-catalog-id="22176">
                                            <a href="/dkp/mp/" class="">Мониторинг предприятий</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16216">
                                            <a href="/dkp/statistics/" class="">Статистика</a>
                                        </li>

                                        <li class="item_deep" data-catalog-id="15944">
                                            <a href="/dkp/faq/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15939">
                                            <a href="/dkp/news/" class="">Новости</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15939">
                                            <a href="{{ route('frontend.supervisory_board') }}"
                                                title="Наблюдательный совет">Наблюдательный совет</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15886">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/finstab/" class="col-md-15">Финансовая стабильность</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16152">
                                            <a href="/finstab/review/" class="">Обзор финансовой
                                                стабильности</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15901">
                                            <a href="/finstab/instruments/" class="">Инструменты</a>
                                        </li>

                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16463">
                                            <a href="/finstab/international_activity/" class="">Международная
                                                деятельность</a>
                                        </li>

                                        <li class="item_deep" data-catalog-id="21272">
                                            <a href="/finstab/explain/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21997">
                                            <a href="/finstab/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div role="tabpanel" id="menu_content_Documents" aria-labelledby="menu_tab_Documents"
                class="menu_content_container hidden col-md" data-tabs-content="Documents" style="display: none">
                <div class="menu_content offset-md-1">
                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="19457">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/key-indicators/" class="col-md-15">Ключевые показатели</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="21269">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/params/" class="col-md-15">Параметры операций Банка Узбекистана</a>
                        </li>
                    </ul>

                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="16628">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/statistics/" class="col-md-15">Статистика</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16629">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/analytics/" class="col-md-15">Аналитика</a>
                        </li>
                    </ul>

                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="16634">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/archive/" class="col-md-15">Архив</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" id="menu_content_AboutTashkentInvest" aria-labelledby="menu_tab_AboutTashkentInvest"
                class="menu_content_container hidden col-md" data-tabs-content="AboutTashkentInvest"
                style="display: none">
                <div class="menu_content offset-md-1">
                    <ul class="list without_dash">
                        <ul class="list without_dash">
                            <li class="item row" data-menu-item="" data-catalog-id="15717">
                                <div class="col-md-1 container_toggle"></div>
                                <a href="/about_br/" class="col-md-15">О&nbsp;Банке Узбекистана</a>
                                <div class="col-md-16">
                                    <div class="row-fixed">
                                        <ul class="list_deep col-md-7 offset-md-1">
                                            <li class="item_deep" data-catalog-id="16666">
                                                <a href="/about_br/bankstatus/" class="">Правовой статус
                                                    и&nbsp;функции</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="22527">
                                                <a href="/about_br/history/" class="">История</a>
                                            </li>

                                        </ul>
                                        <ul class="list_deep col-md-7 offset-md-1">
                                            <li class="item_deep" data-catalog-id="22111">
                                                <a href="/about_br/expert_advice/" class="">Экспертные
                                                    советы</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17669">
                                                <a href="/about_br/press/" class="">Пресс-служба</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item row" data-menu-item="" data-catalog-id="17667">
                                <div class="col-md-1 container_toggle"></div>
                                <a href="/about_br/ip/" class="col-md-15">Международное сотрудничество</a>
                            </li>
                            <li class="item row" data-menu-item="" data-catalog-id="17672">
                                <div class="col-md-1 container_toggle"></div>
                                <a href="/about_br/publ/" class="col-md-15">Издания Банка Узбекистана</a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
         
        </div>
    </div>
</div>
