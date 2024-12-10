@extends('layouts.frontend_app')
@section('frontend_content')
<main id="content">
    <div class="offsetMenu">
        <div class="container-fluid">
            <div class="col-md-23 offset-md-1">

                <!-- Header -->
                <h1><span class="referenceable"> Инвесторам</span></h1>
                <p class="text-secondary">
                    АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения в соответствии с Постановлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года.
                </p>

                <!-- Search Form -->
                <form id="FaqSearchForm_form" action="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}" method="get">
                    <div class="block-part">
                        <div class="search">
                            <div class="search_field">
                                <input type="text" name="q" placeholder="Поиск по разделу" value="{{ request('q') }}">
                            </div>
                            <div class="search_btn">
                                <button type="submit" class="b-btn _blue">Искать</button>
                                <input type="hidden" name="from" value="91954">
                            </div>
                        </div>

                        <!-- Filters -->
                        <div class="filters_wrapper mb-4">
                            <div class="filters d-flex justify-content-center flex-wrap">
                                <div class="filter mx-2">
                                    <label class="filter_faq-indicator">
                                        <input type="radio" name="status" 
                                               onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => null]) }}'"
                                               {{ request('status') ? '' : 'checked' }}>
                                        <div class="filter_faq-indicator-button {{ request('status') ? '' : 'active' }}">Все</div>
                                    </label>
                                </div>
                                <div class="filter mx-2">
                                    <label class="filter_faq-indicator">
                                        <input type="radio" name="status" 
                                               onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => '1_step']) }}'"
                                               {{ request('status') == '1_step' ? 'checked' : '' }}>
                                        <div class="filter_faq-indicator-button {{ request('status') == '1_step' ? 'active' : '' }}">1 Этап</div>
                                    </label>
                                </div>
                                <div class="filter mx-2">
                                    <label class="filter_faq-indicator">
                                        <input type="radio" name="status" 
                                               onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => '2_step']) }}'"
                                               {{ request('status') == '2_step' ? 'checked' : '' }}>
                                        <div class="filter_faq-indicator-button {{ request('status') == '2_step' ? 'active' : '' }}">2 Этап</div>
                                    </label>
                                </div>
                                <div class="filter mx-2">
                                    <label class="filter_faq-indicator">
                                        <input type="radio" name="status" 
                                               onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => 'completed']) }}'"
                                               {{ request('status') == 'completed' ? 'checked' : '' }}>
                                        <div class="filter_faq-indicator-button {{ request('status') == 'completed' ? 'active' : '' }}">Завершено</div>
                                    </label>
                                </div>
                                <div class="filter mx-2">
                                    <label class="filter_faq-indicator">
                                        <input type="radio" name="status" 
                                               onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => 'archive']) }}'"
                                               {{ request('status') == 'archive' ? 'checked' : '' }}>
                                        <div class="filter_faq-indicator-button {{ request('status') == 'archive' ? 'active' : '' }}">Архив</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        
                        
                    </div>
                </form>

                <!-- Project List -->
                <div class="rubric-wrap p-3">
                    <h2 class="rubric-title">Строительные инвестиционные проекты</h2>
                    <div class="row-fixed">
                        @if ($projects->count())
                            @foreach ($projects as $project)
                                <div class="rubric" data-faq-indicator="">
                                    <div class="rubric_sub">
                                        <strong>Район:</strong> {{ $project->district ?? 'Не указано' }}<br>
                                        <strong>Махалля:</strong> {{ $project->mahalla ?? 'Не указано' }}<br>
                                        <strong>Площадь:</strong> {{ $project->land ?? 'Не указано' }} га
                                    </div>
                                    <a class="rubric_title">
                                        Первый этап: {{ $project->start_date ?? 'Не указано' }} - {{ $project->end_date ?? 'Не указано' }}<br>
                                        Второй этап: {{ $project->second_stage_start_date ?? 'Не указано' }} - {{ $project->second_stage_end_date ?? 'Не указано' }}
                                    </a>
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

                <!-- Footer -->
                <div class="page-info">
                    <div class="page-info_helpful">
                        <div class="helpful">
                            Страница была полезной?
                            <div class="helpful_btns">
                                <button class="helpful_btn _yes"><i class="helpful_icon"></i><span>Да</span></button>
                                <button class="helpful_btn _no"><i class="helpful_icon"></i><span>Нет</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="page-info_last-update">Последнее обновление страницы: {{ now()->format('d.m.Y') }}</div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
