@extends('layouts.frontend_app')
@section('frontend_content')
<main id="content">
    <div class="offsetMenu">
        <div class="container-fluid">
            <div class="col-md-23 offset-md-1">
                <div class="news-page_row">
                    <div class="news-page_content col-md-16">
                        <div class="col-md-15">
                            <div id="mainPoint">
                                <div class="tabs_wrap" data-tabs="">
                                    <div class="tabs">
                                        <a class="tab _active" href="#" data-tabs-tab="100" aria-selected="true">Новости</a>
                                    </div>

                                    <div data-tabs-content="100" id="events_tab100" role="tabpanel" aria-labelledby="tab_100">
                                        <div class="form-indent">
                                            <form>
                                                <div class="search">
                                                    <div class="search_field">
                                                        <input placeholder="Поиск по разделу" type="text" value="">
                                                    </div>
                                                    <div class="search_btn">
                                                        <button type="button" class="b-btn _blue">Искать</button>
                                                    </div>
                                                </div>
                                                <div class="filters_wrapper _block">
                                                    <div class="filters">
                                                        <div id="DatesFilterRange_100">
                                                            <div class="filter-select-with-date" data-select-with-date="">
                                                                <div class="filter" data-filter="select">
                                                                    <div class="datepicker-filter_placeholder">Выберите период</div>
                                                                    <button class="filter_title" type="button" data-filter-title="" title="За все время">
                                                                        За&nbsp;все&nbsp;время
                                                                    </button>
                                                                    <div class="filter_content" data-filter-content="" style="display: none;">
                                                                        <div class="filter_content_top">
                                                                            <div class="filter_content_close" data-filter-close=""></div>
                                                                        </div>
                                                                        <div class="filter-select">
                                                                            <div class="filter-select_option">
                                                                                <input type="radio" checked="" value="1" id="ui-id-22" name="nm_ui-id-22">
                                                                                <label for="ui-id-22">За&nbsp;все&nbsp;время</label>
                                                                            </div>
                                                                            <div class="filter-select_option">
                                                                                <label for="ui-id-23">Выбрать период</label>
                                                                                <input type="radio" value="4" data-select-date="" id="ui-id-23" name="nm_ui-id-22">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter">
                                                                    <div class="datepicker-filter" data-datepicker-period-filter="" data-min-date="" data-max-date="" data-default-value-from="" data-default-value-to="">
                                                                        <input class="datepicker-filter_input-from" type="hidden" id="ui-id-24" name="datepicker-from-ui-id-24">
                                                                        <input class="datepicker-filter_input-to" type="hidden" id="ui-id-25" name="datepicker-to-ui-id-25">
                                                                        <button class="datepicker-filter_button" type="button">
                                                                            <span>ДД.ММ.ГГГГ</span>
                                                                            <span> - </span>
                                                                            <span>ДД.ММ.ГГГГ</span>
                                                                        </button>
                                                                        <div class="datepicker-filter_modal">
                                                                            <div class="datepicker-filter_head">
                                                                                <div class="datepicker-filter_close"></div>
                                                                            </div>
                                                                            <div class="datepicker-filter_tabs">
                                                                                <div class="datepicker-filter_tab-from"><span>ДД.ММ.ГГГГ</span></div>
                                                                                &nbsp;-&nbsp;
                                                                                <div class="datepicker-filter_tab-to"><span>ДД.ММ.ГГГГ</span></div>
                                                                            </div>
                                                                            <div class="datepicker-filter_footer _right">
                                                                                <button class="datepicker-filter_clear-btn" type="button" id="ui-id-26">Сбросить</button>
                                                                                <button class="datepicker-filter_apply-btn" type="button" id="ui-id-27" disabled="disabled">Применить</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="ThemasFilterRange_100"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
   
                                            <div class="news-speeches_wrap items_data">
                                                <div class="news _in-feed col-md-17 _big _white">
                                                    <div class="news_inner" style="background-image:url({{ asset('assets/frontend/Content/images/hakimyat.png') }});">
                                                        <div class="news_text">
                                                            <div class="news_info">
                                                                <div class="news_date">22 октября 2024</div>
                                                                <div class="news_category">Интервью</div>
                                                            </div>
                                                            <a class="news_title" href="/press/event/?id=21108">Интервью Филиппа Габунии агентству «Интерфакс»</a>
                                                        </div>
                                                        <a target="_blank" href="/press/event/?id=21108" class="col-md-5 offset-md-1 news_image">
                                                            <img src="/legacy/PhotoStore/getimgid/84253.png" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                @foreach ($news as $item)
                                                    <div class="news _in-feed col-md-17">
                                                        <div class="news_inner">
                                                            <div class="news_text">
                                                                <div class="news_info">
                                                                    <div class="news_date">{{ $item->published_at}}</div>
                                                                    <div class="news_category">{{ $item->category ?? 'Новость' }}</div>
                                                                </div>
                                                                <a class="news_title" href="{{ route('frontend.news.show', $item->id) }}">
                                                                    {{ $item->title }}
                                                                </a>
                                                            </div>
                                                            <a target="_blank" href="{{ route('frontend.news.show', $item->id) }}" class="col-md-5 offset-md-1 news_image">
                                                                <img src="{{ $item->getImagePath() }}" alt="{{ $item->title }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        <button id="_buttonLoadNextEvt" class="more-button _small">Загрузить еще</button>
                                    </div>

                                    <div data-tabs-content="0" id="events_tab0" role="tabpanel" aria-labelledby="tab_0" style="display: none;">
                                        <div class="news-speeches_wrap items_data"></div>
                                    </div>

                                    <div data-tabs-content="4" id="events_tab4" role="tabpanel" aria-labelledby="tab_4" style="display: none;">
                                        <div class="form-indent"></div>
                                        <div class="news-speeches_wrap items_data"></div>
                                    </div>

                                    <div data-tabs-content="2" id="events_tab2" role="tabpanel" aria-labelledby="tab_2" style="display: none;">
                                        <div class="form-indent"></div>
                                        <div class="news-speeches_wrap items_data"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @include('inc.__right_aside')

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
