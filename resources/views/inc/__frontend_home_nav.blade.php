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
                                            <a
                                                href="#!"><!--noindex-->EN<!--/noindex--></a>
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
    <div class="home-header_shadow"></div>
    <div class="offsetMenu">
        <div class="col-md-23 offset-md-1">
            <div class="home-header_content">
                <div class="home-header_top header_inner">
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
                                    <a class="networks_item _vk" href="https://vk.com/#!"
                                        title="ВКонтакте"></a>
                                    <a class="networks_item _yt" href="https://www.youtube.com/user/#!"
                                        title="Youtube"></a>
                                    <a class="networks_item _tg" href="https://t.me/#!"
                                        title="Telegram"></a>
                                    <a class="networks_item _ydzen" href="https://dzen.ru/#!" title="Яндекс Дзен"></a>
                                    <a class="networks_item _ok" href="https://ok.ru/group/#!"
                                        title="Одноклассники"></a>
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

                @include('inc.__banner_home')
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
                            .home-header .header_logo {
                                background: url({{asset('assets/frontend/Content/images/card-logo.png')}}) no-repeat center center / contain !important;
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
                    <a role="tab" id="menu_tab_FinancialMarkets" aria-controls="menu_content_FinancialMarkets"
                        aria-selected="false" class="menu_tab" href="#"
                        data-tabs-tab="FinancialMarkets">Финансовые рынки</a>
                    <a role="tab" id="menu_tab_Documents" aria-controls="menu_content_Documents"
                        aria-selected="false" class="menu_tab" href="#" data-tabs-tab="Documents">Документы и
                        данные</a>
                    <a role="tab" id="menu_tab_AboutBank" aria-controls="menu_content_AboutBank"
                        aria-selected="false" class="menu_tab" href="#" data-tabs-tab="AboutBank">О Банке
                        Узбекистана</a>
                    <a role="tab" id="menu_tab_Services" aria-controls="menu_content_Services"
                        aria-selected="false" class="menu_tab" href="#" data-tabs-tab="Services">Сервисы</a>
                </div>
                <div class="menu_quick_links">
                    <div class="inner_links">
                        <a href="/support_measures/" title="Меры зашиты финансового рынка" style="color: red">Меры
                            защиты финансового рынка</a>
                    </div>
                    <div class="phones">
                       <a class="menu_phone_val" href="tel:+998 71 210 02 61">+998 71 210 02 61</a><a
                            class="menu_phone_val" href="tel:+998 71 210 02 61">+998 71 210 02 61</a><span>круглосуточно</span>
                    </div>
                    <div class="inner_links">
                        <a href="/news/" title="Новости">Новости</a>
                        <a href="/rbr/" title="Решения Банка Узбекистана">Решения Банка Узбекистана</a>
                        <a href="/contacts/" title="Контактная информация">Контактная информация</a>
                        <a href="/sitemap" title="Карта сайта">Карта сайта</a>
                        <a href="/about/" title="О сайте">О сайте</a>
                    </div>
                    <div class="networks-circle">
                        <a class="networks-circle_item _vk" href="https://vk.com/#!"></a>
                        <a class="networks-circle_item _yt" href="https://www.youtube.com/user/BankofRussia"></a>
                        <a class="networks-circle_item _tg" href="https://t.me/centralbank_russia"
                            title="Telegram"></a>
                        <a class="networks-circle_item _ydzen" href="https://dzen.ru/#!" title="Яндекс Дзен"></a>
                        <a class="networks-circle_item _ok" href="https://ok.ru/group/68858679787580"
                            title="Одноклассники"></a>
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
                                        <li class="item_deep" data-catalog-id="22520">
                                            <a href="/dkp/w_infl/" class="">Как&nbsp;Банк Узбекистана влияет
                                                на&nbsp;инфляцию</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24202">
                                            <a href="/dkp/system_p/" class="">Прогнозирование и&nbsp;модельный
                                                аппарат
                                            </a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19275">
                                            <a href="/dkp/how_dec/" class="">Как&nbsp;принимаются решения
                                                по&nbsp;ключевой
                                                ставке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22116">
                                            <a href="/dkp/information_policy/"
                                                class="">Как&nbsp;мы&nbsp;рассказываем о&nbsp;своих
                                                решениях</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26967">
                                            <a href="/dkp/review__dkp/" class="">Обзор денежно-кредитной
                                                политики Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16446">
                                            <a href="/dkp/mp_dec/" class="">Решения по&nbsp;денежно-кредитной
                                                политике</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="18690">
                                            <a href="/dkp/cal_mp/" class="">Календарь решений по&nbsp;ключевой
                                                ставке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22522">
                                            <a href="/dkp/voc/" class="">Глоссарий</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22176">
                                            <a href="/dkp/mp/" class="">Мониторинг предприятий</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16216">
                                            <a href="/dkp/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="18691">
                                            <a href="/dkp/analytic/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21502">
                                            <a href="/dkp/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15944">
                                            <a href="/dkp/faq/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15939">
                                            <a href="/dkp/news/" class="">Новости</a>
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
                                        <li class="item_deep" data-catalog-id="25324">
                                            <a href="/finstab/antikrizisnaya-politika/" class="">Антикризисная
                                                политика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15902">
                                            <a href="/finstab/resheniya/" class="">Решения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15904">
                                            <a href="/finstab/stress_testing/" class="">Макропруденциальное
                                                стресс-тестирование</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15897">
                                            <a href="/finstab/monitoring_siio_ccp/" class="">Наблюдение
                                                за&nbsp;системно значимыми
                                                инфраструктурными организациями и&nbsp;центральными
                                                контрагентами</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16463">
                                            <a href="/finstab/international_activity/" class="">Международная
                                                деятельность</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21527">
                                            <a href="/finstab/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15890">
                                            <a href="/finstab/analytics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16158">
                                            <a href="/finstab/acts/" class="">Правовые акты</a>
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
                        <li class="item row" data-menu-item="" data-catalog-id="15661">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/PSystem/" class="col-md-15">Национальная платежная система</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15668">
                                            <a href="/PSystem/payment_system/" class="">Платежная система Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15663">
                                            <a href="/PSystem/b_doc/" class="">Основные документы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15669">
                                            <a href="/PSystem/iso_20022/" class="">Стандарт ISO&nbsp;20022</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15670">
                                            <a href="/PSystem/fin_msg_transfer_system/" class="">Система
                                                передачи финансовых сообщений</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15672">
                                            <a href="/PSystem/field_offices/" class="">Платежные карты полевых
                                                учреждений Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16442">
                                            <a href="/PSystem/sfp/" class="">Система быстрых платежей</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21573">
                                            <a href="/PSystem/monitoring_p/" class="">Надзор и&nbsp;наблюдение
                                                в&nbsp;национальной
                                                платежной системе</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24066">
                                            <a href="/PSystem/access_ops/" class="">Допуск операторов платежных
                                                систем
                                                и&nbsp;операторов иностранных платежных систем
                                            </a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15673">
                                            <a href="/PSystem/admin/" class="">Администрирование отдельных видов
                                                доходов</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="21577">
                                            <a href="/PSystem/mezhdunarodnoe-sotrudnichestvo/"
                                                class="">Международное сотрудничество</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15667">
                                            <a href="/PSystem/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15665">
                                            <a href="/PSystem/analytics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21567">
                                            <a href="/PSystem/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15664">
                                            <a href="/PSystem/registers/" class="">Реестры и&nbsp;перечни</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15675">
                                            <a href="/PSystem/faq/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24076">
                                            <a href="/explan/Psystem/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15662">
                                            <a href="/PSystem/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15551">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/cash_circulation/" class="col-md-15">Наличное денежное обращение</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="22043">
                                            <a href="/cash_circulation/banknotes/5rub/" class="">Банкноты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25521">
                                            <a href="/cash_circulation/mb/" class="">Модернизация банкнот</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15553">
                                            <a href="/cash_circulation/memorable_banknotes/" class="">Памятные
                                                банкноты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22037">
                                            <a href="/cash_circulation/coins/1k/" class="">Монеты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16084">
                                            <a href="/cash_circulation/memorable_coins/" class="">Памятные
                                                и&nbsp;инвестиционные монеты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15567">
                                            <a href="/cash_circulation/working_cash/" class="">Организация
                                                работы с&nbsp;денежной наличностью</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15569">
                                            <a href="/cash_circulation/video/" class="">Видеоматериалы</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15571">
                                            <a href="/cash_circulation/special_paint/" class="">Специальные
                                                краски, предназначенные
                                                для&nbsp;предотвращения хищения банкнот Банка
                                                Узбекистана при&nbsp;их&nbsp;транспортировке
                                                и&nbsp;хранении</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24155">
                                            <a href="/cash_circulation/mobilnoe-prilozhenie/" class="">Мобильное
                                                приложение «Банкноты Банка
                                                Узбекистана»</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15563">
                                            <a href="/cash_circulation/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22536">
                                            <a href="/cash_circulation/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15564">
                                            <a href="/cash_circulation/normative_acts/" class="">Правовые
                                                акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="27055">
                                            <a href="/faq/ndo/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15562">
                                            <a href="/cash_circulation/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="19231">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/develop/" class="col-md-15">Развитие финансового рынка</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="19237">
                                            <a href="/develop/development_affor/" class="">Финансовая
                                                доступность</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25621">
                                            <a href="/develop/ur/" class="">Устойчивое развитие</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25602">
                                            <a href="/develop/msp/" class="">Поддержка малого и&nbsp;среднего
                                                предпринимательства</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19251">
                                            <a href="/develop/development_fin_instruments/" class="">Развитие
                                                финансовых инструментов</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19256">
                                            <a href="/develop/development_finmarket_segments/" class="">Развитие
                                                сегментов финансового рынка</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="28185">
                                            <a href="/develop/data_management_fm/" class="">Управление данными
                                                на&nbsp;финансовом рынке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19413">
                                            <a href="/develop/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19407">
                                            <a href="/develop/analytics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19410">
                                            <a href="/develop/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19324">
                                            <a href="/develop/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15647">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/fintech/" class="col-md-15">Развитие финансовых технологий</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="25615">
                                            <a href="/fintech/dr/" class="">Цифровой рубль</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15650">
                                            <a href="/fintech/digital_biometric_id/" class="">Удаленная
                                                идентификация</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19425">
                                            <a href="/PSystem/sfp/" class="">Система быстрых платежей</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15649">
                                            <a href="/fintech/market_place/" class="">Маркетплейс</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15648">
                                            <a href="/fintech/regulatory_sandbox/" class="">Регулятивная
                                                песочница</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19427">
                                            <a href="/fintech/reg_sup/" class="">RegTech и&nbsp;SupTech</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="24287">
                                            <a href="/fintech/fin_hub/" class="">Финтех Хаб</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15656">
                                            <a href="/fintech/analitika/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22539">
                                            <a href="/fintech/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15657">
                                            <a href="/fintech/faq_fintech/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15655">
                                            <a href="/fintech/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15734">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/protection_rights/" class="col-md-15">Защита прав потребителей финансовых
                                услуг</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15737">
                                            <a href="/protection_rights/behavioral_surveillance/"
                                                class="">Поведенческий надзор: практики
                                                и&nbsp;рекомендации</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25645">
                                            <a href="/protection_rights/np/" class="">Виды недобросовестного
                                                поведения участников
                                                финансового рынка</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19321">
                                            <a href="/protection_rights/finprosvet/" class="">Финансовая
                                                грамотность</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16207">
                                            <a href="/protection_rights/szpfu/" class="">Международное
                                                сотрудничество</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24201">
                                            <a href="/about_br/expert_advice/protection_rights_consumers/"
                                                class="">Экспертные советы</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15735">
                                            <a href="/protection_rights/statistic/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15736">
                                            <a href="/protection_rights/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19405">
                                            <a href="/protection_rights/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15738">
                                            <a href="/protection_rights/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15873">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/information_security/" class="col-md-15">Информационная безопасность</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26817">
                                            <a href="/information_security/pmp/" class="">Противодействие
                                                мошенническим практикам</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15874">
                                            <a href="/information_security/fincert/" class="">ФинЦЕРТ</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22002">
                                            <a href="/information_security/Gubzi_docs/" class="">Стандарты Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24198">
                                            <a href="/information_security/statistics/" class="">Статистика</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15877">
                                            <a href="/information_security/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15878">
                                            <a href="/information_security/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22534">
                                            <a href="/faq/information_security/" class="">Вопросы
                                                и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15876">
                                            <a href="/information_security/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15987">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/inside/" class="col-md-15">Противодействие недобросовестным практикам</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16040">
                                            <a href="/inside/inside_practices/" class="">Недобросовестные
                                                практики поведения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16041">
                                            <a href="/inside/inside_detect/" class="">Выявленные случаи
                                                неправомерного использования
                                                инсайдерской информации и&nbsp;манипулирования
                                                рынком</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26960">
                                            <a href="/inside/k_illegals/" class="">Виды нелегальной деятельности
                                                на&nbsp;финансовом
                                                рынке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25306">
                                            <a href="/inside/warning-list/" class="">Список компаний
                                                с&nbsp;выявленными признаками
                                                нелегальной деятельности на&nbsp;финансовом рынке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16042">
                                            <a href="/inside/inside_order/" class="">Порядок проведения Банком
                                                Узбекистана проверок</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16043">
                                            <a href="/inside/inside_cancelled/" class="">Аннулированные
                                                аттестаты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22569">
                                            <a href="/about_br/expert_advice/material_market_deviations/"
                                                class="">Экспертный совет по&nbsp;существенным рыночным
                                                отклонениям</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26849">
                                            <a href="/inside/agreement_br/" class="">Соглашение с&nbsp;Банком
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19459">
                                            <a href="/inside/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16002">
                                            <a href="/inside/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22563">
                                            <a href="/faq/pnp/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16004">
                                            <a href="/inside/explain/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22540">
                                            <a href="/rbr/rbr_fr/?UniDbQuery.Posted=True&amp;UniDbQuery.From=29.01.2016&amp;UniDbQuery.Market=4&amp;UniDbQuery.SegmentSelect=22"
                                                class="">Решения Банка Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16007">
                                            <a href="/inside/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16019">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/counteraction_m_ter/" class="col-md-15">Противодействие отмыванию денег
                                и&nbsp;валютный контроль</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16021">
                                            <a href="/counteraction_m_ter/international/" class="">Международный
                                                опыт по&nbsp;ПОД/ФТ/ФРОМУ, реализация
                                                мер&nbsp;СБ&nbsp;ООН</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16024">
                                            <a href="/counteraction_m_ter/inform_interaction/"
                                                class="">Информационное взаимодействие в&nbsp;части
                                                ПОД/ФТ&nbsp;и&nbsp;валютного контроля</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26844">
                                            <a href="/counteraction_m_ter/platform_zsk/" class="">Платформа
                                                «Знай своего клиента»</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="28184">
                                            <a href="/counteraction_m_ter/platform_zsk/proverka-po-inn/"
                                                class="">Проверка уровня риска на&nbsp;платформе «Знай
                                                своего клиента»</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16025">
                                            <a href="/counteraction_m_ter/reviews/" class="">Аналитика</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="19370">
                                            <a href="/counteraction_m_ter/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19649">
                                            <a href="/counteraction_m_ter/registry/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26811">
                                            <a href="/faq/client/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22570">
                                            <a href="/explan/pcod/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19369">
                                            <a href="/counteraction_m_ter/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="24137">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/admissionfinmarket/" class="col-md-15">Допуск на&nbsp;финансовый рынок</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="25334">
                                            <a href="/admissionfinmarket/navigator/" class="">Навигатор
                                                по&nbsp;процедурам допуска</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24153">
                                            <a href="/admissionfinmarket/centr/" class="">Прием документов
                                                и&nbsp;консультации</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24146">
                                            <a href="/admissionfinmarket/register/" class="">Реестры
                                                и&nbsp;перечни</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24148">
                                            <a href="/admissionfinmarket/statistics/" class="">Статистика</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="25638">
                                            <a href="/admissionfinmarket/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24151">
                                            <a href="/admissionfinmarket/exlpain/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24185">
                                            <a href="/admissionfinmarket/rbr/" class="">Решения Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24152">
                                            <a href="/admissionfinmarket/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="22542">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/business_reputation/" class="col-md-15">Деловая репутация</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="22548">
                                            <a href="/business_reputation/requirements/" class="">Требования
                                                к&nbsp;собственникам, органам управления
                                                и&nbsp;персоналу организаций-участников финансового
                                                рынка</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22547">
                                            <a href="/business_reputation/base/" class="">Базы данных</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22544">
                                            <a href="/business_reputation/restoring_business_rep/"
                                                class="">Восстановление деловой репутации</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="25636">
                                            <a href="/business_reputation/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22545">
                                            <a href="/business_reputation/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22550">
                                            <a href="/business_reputation/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="19220">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/ec_research/" class="col-md-15">Исследования</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="25511">
                                            <a href="/ec_research/ser/" class="">Доклады об&nbsp;экономических
                                                исследованиях</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25512">
                                            <a href="/ec_research/mb/" class="">Макроэкономические бюллетени</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25510">
                                            <a href="/ec_research/analitics/" class="">Аналитические записки</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26948">
                                            <a href="/ec_research/vserossiyskoe-obsledovanie-domokhozyaystv-po-potrebitel-skim-finansam/"
                                                class="">Всероссийское обследование домохозяйств
                                                по&nbsp;потребительским финансам</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="27048">
                                            <a href="/ec_research/macroeconomic-vintages/" class="">Пересмотры
                                                макроэкономических показателей</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25520">
                                            <a href="/ec_research/activity/" class="">Мероприятия</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25513">
                                            <a href="/ec_research/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15909">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/oper_br/" class="col-md-15">Операции Банка Узбекистана</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="19503">
                                            <a href="/oper_br/o_dkp/" class="">Операции денежно-кредитной
                                                политики</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19517">
                                            <a href="/oper_br/oap/" class="">Графики операций и&nbsp;периодов
                                                усреднения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19512">
                                            <a href="/oper_br/o_a/" class="">Операции в&nbsp;других целях</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25515">
                                            <a href="/oper_br/OpCalendar/" class="">Календарь операций Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19514">
                                            <a href="/oper_br/t_odm/" class="">Условия операций
                                                на&nbsp;внутреннем рынке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19515">
                                            <a href="/oper_br/fe_g/" class="">Управление валютными активами
                                                и&nbsp;золотом</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15915">
                                            <a href="/oper_br/voc/" class="">Глоссарий</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22579">
                                            <a href="/statistics/idkp_br/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19520">
                                            <a href="/oper_br/analytics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19522">
                                            <a href="/oper_br/lawacts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22391">
                                            <a href="/explan/oper_br" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15910">
                                            <a href="/oper_br/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" id="menu_content_FinancialMarkets" aria-labelledby="menu_tab_FinancialMarkets"
                class="menu_content_container col-md" data-tabs-content="FinancialMarkets" style="display: none">
                <div class="menu_content offset-md-1">
                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="16160">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/banking_sector/" class="col-md-15">Банковский сектор</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16161">
                                            <a href="/banking_sector/credit/" class="">Информация
                                                о&nbsp;кредитных организациях</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16162">
                                            <a href="/banking_sector/otchetnost-kreditnykh-organizaciy/"
                                                class="">Отчетность кредитных организаций</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16167">
                                            <a href="/banking_sector/likvidbase/" class="">Ликвидация
                                                кредитных организаций</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16164">
                                            <a href="/banking_sector/PrBankrot/" class="">Финансовое
                                                оздоровление</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22060">
                                            <a href="/banking_sector/equity_const_financing/"
                                                class="">Финансирование долевого строительства</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16172">
                                            <a href="/banking_sector/international_coop/"
                                                class="">Международное сотрудничество</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="27101">
                                            <a href="/banking_sector/standart_ko/" class="">Стандарты
                                                деятельности кредитных организаций</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16168">
                                            <a href="/banking_sector/statistics/" class="">Статистика</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="16169">
                                            <a href="/banking_sector/analytics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16173">
                                            <a href="/banking_sector/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16163">
                                            <a href="/banking_sector/registers/" class="">Реестры
                                                и&nbsp;перечни кредитных организаций</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16175">
                                            <a href="/banking_sector/faq/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16177">
                                            <a href="/banking_sector/explan/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16176">
                                            <a href="/banking_sector/insideinfo/" class="">Инсайдерская
                                                информация Банка Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16171">
                                            <a href="/banking_sector/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15600">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/RSCI/" class="col-md-15">Пенсионные фонды и&nbsp;коллективные инвестиции</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15609">
                                            <a href="/RSCI/activity_npf/" class="">Пенсионные фонды</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19455">
                                            <a href="/RSCI/standarts/" class="">Стандарты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24080">
                                            <a href="/RSCI/costing_guidelines/" class="">Рекомендации
                                                по&nbsp;расчету стоимости чистых
                                                активов</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19445">
                                            <a href="/RSCI/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19444">
                                            <a href="/RSCI/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19446">
                                            <a href="/RSCI/acts/" class="">Правовые акты</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15620">
                                            <a href="/RSCI/registers/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15623">
                                            <a href="/RSCI/faq/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15619">
                                            <a href="/RSCI/expl_market_part/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19363">
                                            <a href="/RSCI/rbr/" class="">Решения Банка Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15602">
                                            <a href="/RSCI/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15584">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/insurance/" class="col-md-15">Страхование</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15598">
                                            <a href="/insurance/sro/" class="">Саморегулируемые организации
                                                на&nbsp;страховом
                                                рынке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15593">
                                            <a href="/insurance/solvency_II/" class="">Внедрение
                                                риск-ориентированного подхода</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16029">
                                            <a href="/insurance/insurance_expectancies/" class="">Уведомления
                                                о&nbsp;намерении передать страховой
                                                портфель</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26745">
                                            <a href="/insurance/ranking_insurance/" class="">Ренкинг
                                                страховщиков по&nbsp;уровню жалоб
                                                на&nbsp;ОСАГО</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="27051">
                                            <a href="/insurance/standard_ratio_funds/" class="">Нормативное
                                                соотношение собственных средств
                                                (капитала) и&nbsp;принятых обязательств страховых
                                                организаций</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15592">
                                            <a href="/insurance/reporting_stat/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15588">
                                            <a href="/insurance/analytics/" class="">Аналитика</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15595">
                                            <a href="/insurance/common_inf/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15586">
                                            <a href="/insurance/registers/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15589">
                                            <a href="/insurance/faq_insurance/" class="">Вопросы
                                                и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15594">
                                            <a href="/insurance/explained/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15590">
                                            <a href="/insurance/nfoprikaz/" class="">Решения Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15585">
                                            <a href="/insurance/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15699">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/securities_market/" class="col-md-15">Рынок ценных бумаг</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15707">
                                            <a href="/securities_market/standarts/" class="">Стандарты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22115">
                                            <a href="/securities_market/validation/" class="">Аттестация
                                                специалистов финансового рынка</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19439">
                                            <a href="/securities_market/statistic/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15708">
                                            <a href="/securities_market/analytics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15700">
                                            <a href="/securities_market/normative_acts/" class="">Правовые
                                                акты</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15702">
                                            <a href="/securities_market/registries/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15710">
                                            <a href="/securities_market/faq/" class="">Вопросы
                                                и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15705">
                                            <a href="/securities_market/explan/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15703">
                                            <a href="/securities_market/rbr/" class="">Решения Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15709">
                                            <a href="/securities_market/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="19468">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/issuers_corporate/" class="col-md-15">Эмитенты и&nbsp;корпоративное
                                управление</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15881">
                                            <a href="/issuers_corporate/admission_financial_instruments/"
                                                class="">Допуск финансовых инструментов</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15882">
                                            <a href="/issuers_corporate/regulation_supervision_corp_relations_disclosure/"
                                                class="">Регулирование и&nbsp;надзор в&nbsp;сфере
                                                корпоративных отношений и&nbsp;раскрытия
                                                информации</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15883">
                                            <a href="/issuers_corporate/development_corp_relations/"
                                                class="">Развитие корпоративных отношений</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22123">
                                            <a href="/about_br/expert_advice/information_transparency_corp_governance/"
                                                class="">Экспертные советы и&nbsp;рабочие группы (ЭСКУ,
                                                ЭСИП)</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26879">
                                            <a href="/issuers_corporate/el_reg_issue/" class="">Электронная
                                                регистрация эмиссионных документов</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19469">
                                            <a href="/issuers_corporate/analitics/" class="">Аналитика</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="19474">
                                            <a href="/issuers_corporate/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19470">
                                            <a href="/issuers_corporate/registry/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19475">
                                            <a href="/issuers_corporate/explan/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22127">
                                            <a href="/issuers_corporate/rbr/" class="">Решения Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21998">
                                            <a href="/issuers_corporate/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15742">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/microfinance/" class="col-md-15">Микрофинансирование</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15746">
                                            <a href="/microfinance/sro/" class="">Саморегулируемые организации
                                                и&nbsp;стандарты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22532">
                                            <a href="/about_br/expert_advice/microfinance_credit_coop/"
                                                class="">Экспертный совет по&nbsp;микрофинансированию
                                                и&nbsp;кредитной кооперации</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19344">
                                            <a href="/microfinance/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15745">
                                            <a href="/microfinance/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15748">
                                            <a href="/microfinance/regulations/" class="">Правовые акты</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="15744">
                                            <a href="/microfinance/registry/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26847">
                                            <a href="/faq/microfin/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15754">
                                            <a href="/microfinance/explan/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15752">
                                            <a href="/microfinance/rbr/" class="">Решения Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21999">
                                            <a href="/microfinance/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15756">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/finm_infrastructure/" class="col-md-15">Инфраструктура финансового рынка</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26990">
                                            <a href="/finm_infrastructure/nsf_ci/" class="">Национальная
                                                система финансовых и&nbsp;товарных
                                                индикаторов</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16135">
                                            <a href="/finm_infrastructure/actuary/" class="">Актуарии</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16137">
                                            <a href="/finm_infrastructure/ra/" class="">Кредитные рейтинговые
                                                агентства</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24074">
                                            <a href="/finm_infrastructure/oper/" class="">Операторы
                                                инвестиционных платформ</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26891">
                                            <a href="/finm_infrastructure/digital_oper/" class="">Цифровые
                                                финансовые активы
                                                и&nbsp;их&nbsp;операторы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24118">
                                            <a href="/finm_infrastructure/financial_platform_operators/"
                                                class="">Операторы финансовых платформ</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19529">
                                            <a href="/finm_infrastructure/standarts/" class="">Стандарты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16448">
                                            <a href="/finm_infrastructure/regulation/" class="">Регулирование
                                                деятельности системно значимых
                                                инфраструктурных организаций</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16157">
                                            <a href="/finm_infrastructure/const_a/" class="">Сглаживающая
                                                константа альфа</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26755">
                                            <a href="/finm_infrastructure/audit_fm/" class="">Аудиторы
                                                общественно значимых организаций
                                                на&nbsp;финансовом рынке</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22567">
                                            <a href="/finm_infrastructure/statistics/" class="">Статистика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15766">
                                            <a href="/finm_infrastructure/analitics/" class="">Аналитика</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15757">
                                            <a href="/finm_infrastructure/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15759">
                                            <a href="/finm_infrastructure/registry/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="27021">
                                            <a href="/finm_infrastructure/faq/" class="">Вопросы
                                                и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24061">
                                            <a href="/finm_infrastructure/explain/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15761">
                                            <a href="/finm_infrastructure/rbr/" class="">Решения Банка
                                                Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15767">
                                            <a href="/finm_infrastructure/news/" class="">Новости</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="15638">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/ckki/" class="col-md-15">Кредитные истории</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26947">
                                            <a href="/ckki/poryadok-formirovaniya-kreditnoy-istorii/"
                                                class="">Порядок формирования кредитной истории</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15639">
                                            <a href="/ckki/zaprosy_v_ckki/" class="">Направление запроса
                                                в&nbsp;Центральный каталог
                                                кредитных историй</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15641">
                                            <a href="/ckki/peredacha_kredit_istoriy/" class="">Сообщение
                                                о&nbsp;предстоящей передаче кредитных
                                                историй на&nbsp;хранение в&nbsp;ЦККИ</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="25635">
                                            <a href="/ckki/transfer_inform/" class="">Передача сведений
                                                о&nbsp;среднемесячных платежах</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26698">
                                            <a href="/ckki/psk/" class="">Значение среднерыночной стоимости
                                                предоставления
                                                кредитного отчета</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15640">
                                            <a href="/ckki/gosreestr_ckki/" class="">Контакты бюро кредитных
                                                историй</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="27097">
                                            <a href="/ckki/self-prohibition_credit/" class="">Самозапрет
                                                на&nbsp;заключение договоров
                                                потребительских кредитов (займов)</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15645">
                                            <a href="/ckki/federal_norm_akty/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19466">
                                            <a href="/ckki/registry/" class="">Реестры</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="15644">
                                            <a href="/ckki/faq_ckki/" class="">Вопросы и&nbsp;ответы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21267">
                                            <a href="/ckki/explain/" class="">Разъяснения</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22000">
                                            <a href="/ckki/news/" class="">Новости</a>
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
                        <li class="item row" data-menu-item="" data-catalog-id="26926">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/strat_doc/" class="col-md-15">Документы среднесрочного планирования Банка
                                Узбекистана</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="19222">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/project_na/" class="col-md-15">Проекты нормативных актов Банка Узбекистана</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="19221">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/analytics/na_vr/" class="col-md-15">Официальное опубликование нормативных
                                актов Банка
                                Узбекистана</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16631">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/na/" class="col-md-15">Правовые акты</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16632">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/registries/" class="col-md-15">Реестры</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16493">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/hd_base/" class="col-md-15">Базы данных</a>
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
            <div role="tabpanel" id="menu_content_AboutBank" aria-labelledby="menu_tab_AboutBank"
                class="menu_content_container hidden col-md" data-tabs-content="AboutBank" style="display: none">
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
                                            <li class="item_deep" data-catalog-id="17666">
                                                <a href="/about_br/nfs/" class="">Национальный финансовый
                                                    совет</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="22193">
                                                <a href="/about_br/dir/" class="">Совет директоров Банка
                                                    Узбекистана</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="16668">
                                                <a href="/about_br/bankstructute/" class="">Организационная
                                                    структура</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="18706">
                                                <a href="/about_br/tubr/" class="">Территориальные
                                                    учреждения</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17668">
                                                <a href="/about_br/irp/" class="">Отношения
                                                    с&nbsp;инвесторами</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17670">
                                                <a href="/about_br/anticor/" class="">Противодействие
                                                    коррупции</a>
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
                                            <li class="item_deep" data-catalog-id="17671">
                                                <a href="/about_br/activity/" class="">Мероприятия</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17673">
                                                <a href="/about_br/bankstructute/ubr/" class="">Университет
                                                    Банка Узбекистана</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17674">
                                                <a href="/about_br/career/" class="">Карьера в&nbsp;Банке
                                                    Узбекистана</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17675">
                                                <a href="/about_br/audit/" class="">Внутренний аудит</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17676">
                                                <a href="/about_br/purchase/" class="">Закупки Банка
                                                    Узбекистана</a>
                                            </li>
                                            <li class="item_deep" data-catalog-id="17677">
                                                <a href="/about_br/brandbook/" class="">Фирменный стиль</a>
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
            <div role="tabpanel" id="menu_content_Services" aria-labelledby="menu_tab_Services"
                class="menu_content_container hidden col-md" data-tabs-content="Services" style="display: none">
                <div class="menu_content offset-md-1">
                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="16636">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/reception/" class="col-md-15">Интернет-приемная</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="13318">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/faq/" class="col-md-15">Вопросы и&nbsp;ответы</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16638">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/fmp_check/" class="col-md-15">Проверить участника финансового рынка</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="28183">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/counteraction_m_ter/platform_zsk/proverka-po-inn/" class="col-md-15">Проверка
                                уровня риска на&nbsp;платформе «Знай своего
                                клиента»</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="25396">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/inside/BlackList/" class="col-md-15">Список компаний с&nbsp;выявленными
                                признаками нелегальной
                                деятельности на&nbsp;финансовом рынке</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="27112">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="#!" class="col-md-15">Информация о&nbsp;кредитных
                                рейтингах</a>
                        </li>
                    </ul>

                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="19477">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/lk_uio/" class="col-md-15">Личный кабинет участника информационного обмена</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="27117">
                                            <a href="/lk_uio/fcsm/" class="">Программы и&nbsp;материалы
                                                подготовки электронных
                                                документов участников информационного обмена</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19482">
                                            <a href="/lk_uio/requisites_certificates/" class="">Реквизиты
                                                сертификатов актуальных ключей ЭП</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19483">
                                            <a href="/lk_uio/guide/" class="">Инструкции и&nbsp;иная
                                                информация о&nbsp;технологии
                                                подготовки и&nbsp;направления электронных документов
                                                в&nbsp;Банк Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19487">
                                            <a href="/lk_uio/account_err/" class="">Информация о&nbsp;сбоях
                                                при&nbsp;представлении
                                                электронных документов в&nbsp;Банк Узбекистана</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26765">
                                            <a href="/lk_uio/md/" class="">Машиночитаемая доверенность</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="22531">
                                            <a href="/lk_uio/video_instructions/" class="">Видеоинструкции
                                                по&nbsp;работе с&nbsp;личным
                                                кабинетом</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="19489">
                                            <a href="/projects_xbrl/" class="">Открытый стандарт отчетности
                                                XBRL
                                            </a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24051">
                                            <a href="/lk_uio/acts/" class="">Правовые акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="22292">
                                            <a href="/lk_uio/explain/" class="">Разъяснения</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="26744">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/finorg/SiteRequirements/" class="col-md-15">Требования и&nbsp;рекомендации
                                к&nbsp;сайтам финансовых
                                организаций</a>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="13420">
                            <div class="col-md-1 container_toggle"></div>
                            <a href="/explan/" class="col-md-15">Разъяснения</a>
                        </li>
                    </ul>

                    <ul class="list without_dash">
                        <li class="item row" data-menu-item="" data-catalog-id="26721">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/certification_center_br/" class="col-md-15">Удостоверяющий центр Банка
                                Узбекистана</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26722">
                                            <a href="/certification_center_br/register_of_qualified_certificates/"
                                                class="">Реестр квалифицированных сертификатов</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26727">
                                            <a href="/certification_center_br/resursy_udostoveryayuschego_centra/"
                                                class="">Ресурсы удостоверяющего центра Банка Узбекистана</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="26726">
                                            <a href="/certification_center_br/regulations/" class="">Правовые
                                                акты</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="27047">
                                            <a href="/certification_center_br/faq/" class="">Вопросы
                                                и&nbsp;ответы</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item row" data-menu-item="" data-catalog-id="16646">
                            <div class="col-md-1 container_toggle">
                                <div class="toggle_content_deep" data-menu-item-btn=""></div>
                            </div>
                            <a href="/development/" class="col-md-15">Технические ресурсы</a>
                            <div class="col-md-16">
                                <div class="row-fixed content_deep">
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="20662">
                                            <a href="/development/mcirabis/" class="">Информация Центра
                                                эксплуатации платежной системы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="26825">
                                            <a href="/development/software_products_br/" class="">Информация
                                                о&nbsp;программных продуктах Банка
                                                Узбекистана, передаваемых клиентам Банка
                                                Узбекистана, а&nbsp;также применяемых Банком
                                                Узбекистана преимущественно для&nbsp;внутреннего
                                                использования</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21292">
                                            <a href="/development/SXML/" class="">Получение данных, используя
                                                XML</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21293">
                                            <a href="/development/DWS/" class="">Веб-сервис для&nbsp;получения
                                                ежедневных данных</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21295">
                                            <a href="/development/WSCO/" class="">Веб-сервис получения
                                                информации по&nbsp;кредитным
                                                организациям</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21296">
                                            <a href="/development/SEC/" class="">Веб-сервис получения
                                                информации по&nbsp;рынку
                                                ценных бумаг</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="24104">
                                            <a href="/development/memorable_coins/" class="">Веб-сервис
                                                для&nbsp;получения данных
                                                по&nbsp;памятным и&nbsp;инвестиционным монетам</a>
                                        </li>
                                    </ul>
                                    <ul class="list_deep col-md-7 offset-md-1">
                                        <li class="item_deep" data-catalog-id="21297">
                                            <a href="/development/RSS/" class="">RSS&nbsp;каналы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21312">
                                            <a href="/development/Formats/" class="">Унифицированные форматы
                                                электронных банковских
                                                сообщений</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21313">
                                            <a href="/development/kliko/" class="">Форматы отчетности
                                                кредитных организаций,
                                                банковских холдингов и&nbsp;субъектов национальной
                                                платежной системы</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="21320">
                                            <a href="/development/feddc/" class="">Форматы электронных
                                                сообщений для&nbsp;обмена
                                                данными с&nbsp;федеральными органами исполнительной
                                                власти
                                            </a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="16178">
                                            <a href="/development/tech_r/" class="">Состав и&nbsp;форматы
                                                информации, запрашиваемой
                                                в&nbsp;ходе проведения проверок поднадзорных лиц</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="27036">
                                            <a href="/development/finorg/" class="">Веб-сервис получения
                                                данных об&nbsp;участниках
                                                финансового рынка</a>
                                        </li>
                                        <li class="item_deep" data-catalog-id="28164">
                                            <a href="/development/azv/" class="">Сервис запросов информации
                                                о&nbsp;платежах
                                                кредитных организаций</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
