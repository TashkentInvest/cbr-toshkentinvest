@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu ">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">

                    <!--index-->
                    <h1><span class="referenceable">Вопросы и&nbsp;ответы</span>
                    </h1>

                    <p class="text-secondary">
                        АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения в соответствии с
                        Постановлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года.
                    </p>


                    <form id="FaqSearchForm_form"
                        action="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}" method="get">
                        <div class="block-part">
                            <div class="search">
                                <div class="search_field">
                                    <input type="text" name="q" placeholder="Поиск по разделу"
                                        alue="{{ request('q') }}">
                                </div>
                                <div class="search_btn">
                                    <button type="submit" class="b-btn _blue">Искать</button>
                                    <input type="hidden" name="from" value="91954">
                                </div>
                            </div>
                            {{-- <div class="filters_wrapper">
                                <div class="filters">
                                    <div class="filter">
                                        <label class="filter_faq-indicator" data-faq-indicator-filter="">
                                            <input class="filter_faq-indicator-input" type="radio" name="Date"
                                                checked="checked" value="All">
                                            <div class="filter_faq-indicator-button">Все</div>
                                        </label>
                                    </div>
                                    <div class="filter">
                                        <label class="filter_faq-indicator" data-faq-indicator-filter="new">
                                            <input class="filter_faq-indicator-input" type="radio" name="Date"
                                                value="New">
                                            <div class="filter_faq-indicator-button"><span
                                                    class="faq-indicator-new"></span>Новое</div>
                                        </label>
                                    </div>
                                    <div class="filter">
                                        <label class="filter_faq-indicator" data-faq-indicator-filter="update">
                                            <input class="filter_faq-indicator-input" type="radio" name="Date"
                                                value="Updated">
                                            <div class="filter_faq-indicator-button"><span
                                                    class="faq-indicator-update"></span>Обновлено</div>
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </form>


                    <div class="rubric-wrap">
                        <h2 class="rubric-title">Рубрикатор</h2>
                        <div class="row-fixed">
                            @if ($projects->count())
                                @foreach ($projects as $project)
                                    {{-- <div class="card-body">
                                    <h5 class="card-title text-primary">
                                        Проект ID: {{ $project->id }}
                                    </h5>
                                    <p class="card-text">
                                        <strong>Категория:</strong> {{ $project->category->name ?? 'Не указано' }}<br>
                                        <strong>Район:</strong> {{ $project->district ?? 'Не указано' }}<br>
                                        <strong>Улица:</strong> {{ $project->street ?? 'Не указано' }}<br>
                                        <strong>Площадь земли:</strong> {{ $project->land ?? 'Не указано' }} га<br>
                                        <strong>Период реализации:</strong> {{ $project->implementation_period ?? 'Не указано' }} мес.<br>
                                        <strong>Статус:</strong>
                                        <span class="badge 
                                            {{ $project->status == '1_step' ? 'bg-info' : '' }}
                                            {{ $project->status == '2_step' ? 'bg-warning' : '' }}
                                            {{ $project->status == 'completed' ? 'bg-success' : '' }}
                                            {{ $project->status == 'archive' ? 'bg-secondary' : '' }}">
                                            {{ $project->status ?? 'Не указано' }}
                                        </span>
                                    </p>
                                </div>
                             --}}

                                    <div class="rubric" data-faq-indicator="">
                                        <div class="rubric_sub">
                                            {{ $project->district ?? 'Не указано' }}
                                            {{ $project->street ?? 'Не указано' }}
                                            {{ $project->land ?? 'Не указано' }} га
                                        </div>

                                        <div class="rubric_sub"></div>
                                        <a class="rubric_title"
                                            href="/faq/w_fin_sector/">{{ $project->implementation_period ?? 'Не указано' }}</a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-warning text-center">
                                        В этой категории пока нет проектов или они не найдены по вашему фильтру.
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>


                    <div class="document-regular">
                        <div class="document-regular_inner">
                            <div class="document-regular_top">
                                <div class="document-regular_left_icon"></div>
                            </div>
                            <div class="body-2 document-regular_main">
                                <div class="document-regular_texts">
                                    <div class="document-regular_name" data-toggle="">
                                        <a class="referenceable" href="/explan/" id="a_83810link"> <span
                                                class="document-regular_name_visible">Разъяснения для участников
                                                финансового рынка</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!--/index-->

                    <div class="page-info">
                        <!--noindex-->



                        <div class="page-info_helpful" data-page-feedback=""
                            data-feedback-url="/Content/PageInfo/RegisterFeedback">
                            <!--noindex-->
                            <div class="helpful" data-helpful="">
                                Страница была полезной?
                                <div class="helpful_btns">
                                    <button class="helpful_btn _yes" data-helpful-btn="yes"><i
                                            class="helpful_icon"></i><span>Да</span></button>
                                    <button class="helpful_btn _no" data-helpful-btn="no"><i
                                            class="helpful_icon"></i><span>Нет</span></button>
                                </div>
                            </div>
                            <!--/noindex-->
                        </div>

                        <div class="page-info_last-update">Последнее обновление страницы: 11.03.2024</div>
                        <!--/noindex-->
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
