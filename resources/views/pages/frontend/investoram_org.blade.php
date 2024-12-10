@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <h1><span class="referenceable">{{ $category->name }}</span></h1>
                    <p>АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения в соответствии с
                        Поставлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года</p>


                    <!-- Search Form -->
                    <form id="FaqSearchForm_form" action="#" method="get">
                        <div class="block-part">
                            <div class="search">
                                <div class="search_field">
                                    <input type="text" name="q" placeholder="Поиск по разделу"
                                        value="{{ request('q') }}">
                                </div>
                                <div class="search_btn">
                                    <button class="b-btn _blue">Искать</button>
                                </div>
                            </div>
                        </div>
                    </form>


                    <div class="tabs_wrap mb-4">
                        <div class="tabs">
                            <a class="tab {{ request('status') ? '' : '_active' }}"
                                href="{{ route('frontend.investoram', ['subcategory' => $category->slug]) }}">Все</a>
                            <a class="tab {{ request('status') == 'step_1' ? '_active' : '' }}"
                                href="{{ route('frontend.investoram', ['subcategory' => $category->slug, 'status' => 'step_1']) }}">1
                                Этап</a>
                            <a class="tab {{ request('status') == 'step_2' ? '_active' : '' }}"
                                href="{{ route('frontend.investoram', ['subcategory' => $category->slug, 'status' => 'step_2']) }}">2
                                Этап</a>
                            <a class="tab {{ request('status') == 'completed' ? '_active' : '' }}"
                                href="{{ route('frontend.investoram', ['subcategory' => $category->slug, 'status' => 'completed']) }}">Завершено</a>
                            <a class="tab {{ request('status') == 'archived' ? '_active' : '' }}"
                                href="{{ route('frontend.investoram', ['subcategory' => $category->slug, 'status' => 'archived']) }}">Архив</a>
                        </div>
                    </div>






                    <div class="rubric-wrap">
                        <div class="row">
                            @if ($projects->count())
                                @foreach ($projects as $project)
                                    <div class="col-md-4 mb-4">
                                        <div class="rubric card shadow-sm h-100">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Проект ID: {{ $project->id }}</h5>
                                                <p class="card-text">
                                                    <strong>Категория ID:</strong> {{ $project->category_id ?? '' }}<br>
                                                    <strong>Район ID:</strong> {{ $project->district->name_uz ?? '' }}<br>
                                                    <strong>Улица ID:</strong> {{ $project->street->name ?? '' }}<br>
                                                    <strong>Площадь земли:</strong> {{ $project->land }} га<br>
                                                    <strong>Период реализации:</strong> {{ $project->implementation_period }} мес.<br>
                                                    <strong>Статус:</strong> {{ $project->status }}
                                                </p>
                                            </div>
                                            <div class="card-footer text-muted">
                                                Создано: {{ $project->created_at->format('d.m.Y') }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-muted">В этой подкатегории пока нет проектов или не найдено по вашему фильтру.</p>
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
                                        <a class="referenceable" href="/explan/" id="a_83810link">
                                            <span class="document-regular_name_visible">Разъяснения для участников
                                                финансового рынка</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-info">
                        <div class="page-info_helpful" data-page-feedback=""
                            data-feedback-url="/Content/PageInfo/RegisterFeedback">
                            <div class="helpful" data-helpful="">
                                Страница была полезной?
                                <div class="helpful_btns">
                                    <button class="helpful_btn _yes"><i class="helpful_icon"></i><span>Да</span></button>
                                    <button class="helpful_btn _no"><i class="helpful_icon"></i><span>Нет</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="page-info_last-update">Последнее обновление страницы: 11.03.2024</div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
