@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu ">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">

                    <!--index-->
                    <h1><span class="referenceable">Результаты поиска</span>
                    </h1>




                    <div class="form-indent">
                        <form action="/search/" data-auto-submit="data-auto-submit" method="get">
                            <div class="search">
                                <div class="search_field">
                                    <input id="Text" name="Text" placeholder="Поиск по сайту" type="text"
                                        value="reww" />
                                </div>
                                <div class="search_btn">
                                    <button name="" type="submit" class="b-btn _blue">Искать</button>
                                </div>
                            </div>
                            <div class="filters_wrapper">
                                <div class="filters">
                                    <div class="filter" data-filter="select">
                                        <button class="filter_title filter_title--arrow" type="button" data-filter-title=""
                                            data-tooltip>Искать везде</button>
                                        <div class="filter_content" data-filter-content="">
                                            <div class="filter_content_top">
                                                <div class="filter_content_close" data-filter-close=""></div>
                                            </div>
                                            <div class="filter-select">
                                                <div class="filter-select_option">
                                                    <input type="radio" id="Category_Any" name="Category" value="Any"
                                                        checked>
                                                    <label for="Category_Any">Искать везде</label>
                                                </div>

                                                <div class="filter-select_option">
                                                    <input type="radio" id="Category_NEWSxNEWS" name="Category"
                                                        value="NEWSxNEWS">
                                                    <label for="Category_NEWSxNEWS">В новостях</label>
                                                </div>

                                                <div class="filter-select_option">
                                                    <input type="radio" id="Category_PRESS" name="Category"
                                                        value="PRESS">
                                                    <label for="Category_PRESS">В пресс-релизах</label>
                                                </div>

                                                <div class="filter-select_option">
                                                    <input type="radio" id="Category_NEWSxINTERVIEW" name="Category"
                                                        value="NEWSxINTERVIEW">
                                                    <label for="Category_NEWSxINTERVIEW">В интервью</label>
                                                </div>

                                                <div class="filter-select_option">
                                                    <input type="radio" id="Category_NEWSxSPEECH" name="Category"
                                                        value="NEWSxSPEECH">
                                                    <label for="Category_NEWSxSPEECH">В выступлениях</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-select-with-date" data-select-with-date>
                                        <div class="filter" data-filter="select">

                                            <button class="filter_title filter_title--arrow" type="button"
                                                data-filter-title="" data-tooltip>За все время</button>
                                            <div class="filter_content" data-filter-content="">
                                                <div class="filter_content_top">
                                                    <div class="filter_content_close" data-filter-close=""></div>
                                                </div>
                                                <div class="filter-select">
                                                    <div class="filter-select_option">
                                                        <input type="radio" id="Time_Any" name="Time" value="Any"
                                                            checked>
                                                        <label for="Time_Any">За все время</label>
                                                    </div>

                                                    <div class="filter-select_option">
                                                        <input type="radio" id="Time_LastMonth" name="Time"
                                                            value="LastMonth">
                                                        <label for="Time_LastMonth">За последний месяц</label>
                                                    </div>

                                                    <div class="filter-select_option">
                                                        <input type="radio" id="Time_LastYear" name="Time"
                                                            value="LastYear">
                                                        <label for="Time_LastYear">За последний год</label>
                                                    </div>

                                                    <div class="filter-select_option">
                                                        <input type="radio" id="Time_Custom" name="Time" value="Custom"
                                                            data-select-date=&quot;&quot;>
                                                        <label for="Time_Custom">Выбрать период</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter">
                                            <div class="datepicker-filter"
                                                data-monthpicker-period-filter="data-monthpicker-period-filter">
                                                <input class="datepicker-filter_input-from" type="hidden"
                                                    name="DateFrom" value="" />
                                                <input class="datepicker-filter_input-to" type="hidden" name="DateTo"
                                                    value="" />
                                                <button class="datepicker-filter_button" type="button"><span>Месяц Год -
                                                        Месяц Год</span></button>
                                                <div class="datepicker-filter_modal">
                                                    <div class="datepicker-filter_head">
                                                        <div class="datepicker-filter_close"></div>
                                                    </div>
                                                    <div class="datepicker-filter_tabs">
                                                        <div class="datepicker-filter_tab-from"></div>&nbsp;-&nbsp;
                                                        <div class="datepicker-filter_tab-to"></div>
                                                    </div>
                                                    <div class="datepicker-filter_body">
                                                        <div class="datepicker-filter_datepicker-from monthpicker-custom">
                                                        </div>
                                                        <div class="datepicker-filter_datepicker-to monthpicker-custom">
                                                        </div>
                                                    </div>
                                                    <div class="datepicker-filter_footer _right">
                                                        <button class="datepicker-filter_clear-btn"
                                                            type="button">Сбросить</button>
                                                        <button class="datepicker-filter_apply-btn"
                                                            type="button">Применить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>




                    <div class="results">
                        <div class="results_top">
                            <div class="results_counter">
                                3 материалa найдено
                            </div>
                        </div>
                    </div>
                    <div class="cross-results">
                        <div class="cross-result">
                            <div class="date-number _with-icon">
                                <span class="number col-md-1">1</span>
                                <div class="col-md-1 offset-md-1 format">
                                    <div class="icon-pdf "></div>
                                </div>
                                <span class="date col-md-2">
                                    05.07.2021
                                </span>
                            </div>
                            <div class="title-source offset-md-4">
                                <div class="title"><a href="/content/document/file/124020/1747.pdf"
                                        target=_blank>Резолюция Совета Безопасности ООН 1747 (2007) от 24.03.2007</a></div>
                                <div class="subtitle">закупках ракетного оборудования.
                                    Организации иранского Корпуса стражей исламской революции
                                    1. Промышленная группа «<mark>Кудс</mark> Аэронотикс Индастриз» (производит беспилотные
                                    летательные аппараты, парашюты, парапланеры, парамоторы и т.д.</div>
                                <div class="source"><a href="/counteraction_m_ter/international/oon/">Резолюции
                                        Организации Объединенных Наций (ООН)</a></div>
                            </div>
                        </div>
                        <div class="cross-result">
                            <div class="date-number _with-icon">
                                <span class="number col-md-1">2</span>
                                <div class="col-md-1 offset-md-1 format">
                                    <div class="icon-pdf "></div>
                                </div>
                                <span class="date col-md-2">
                                    05.07.2021
                                </span>
                            </div>
                            <div class="title-source offset-md-4">
                                <div class="title"><a href="/content/document/file/123982/2231_2015.pdf"
                                        target=_blank>Резолюция Совета Безопасности ООН 2231 (2015) от 20.07.2015</a></div>
                                <div class="subtitle">компания, или «Ирансаффрон» Иранская организация авиационной
                                    промышленности КСИР, военно-воздушные силы КСИР, силы «<mark>Кудс</mark>» КСИР,
                                    командование ракетными войсками «Аль-Гадир» военно-воздушных сил «Исфахан оптикс» Корпус
                                    стражей исламской</div>
                                <div class="source"><a href="/counteraction_m_ter/international/oon/">Резолюции
                                        Организации Объединенных Наций (ООН)</a></div>
                            </div>
                        </div>
                        <div class="cross-result">
                            <div class="date-number _with-icon">
                                <span class="number col-md-1">3</span>
                                <div class="col-md-1 offset-md-1 format">
                                    <div class="icon-pdf "></div>
                                </div>
                                <span class="date col-md-2">
                                    27.04.2016
                                </span>
                            </div>
                            <div class="title-source offset-md-4">
                                <div class="title"><a href="/queries/xsltblock/file/86290/-1/1759" target=_blank>Вестник
                                        Банка России № 41 (1759) от 27.04.2016</a></div>
                                <div class="subtitle">Qasem Soleimani) – командующий силами специального назначения
                                    “<mark>Кудс</mark>”. 21. Али Акбар Табатабаи (Ali Akbar Tabatabaei) – член сил
                                    специального назначения “<mark>Кудс</mark>”. 22. Бригадный генерал Мохаммад Реза Захеди
                                </div>
                                <div class="source"><a href="/about_br/publ/vestnik/year/2016/">Вестник Банка России</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
