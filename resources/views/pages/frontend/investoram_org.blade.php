@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs_item"><a class="breadcrumbs_home" href="/"></a></div>
                        <div class="breadcrumbs_item">
                            <a href="/news/"><!--noindex-->Новости<!--/noindex--></a>
                        </div>
                    </div>
                    <!-- Header -->
                    <h1><span class="referenceable"> Инвесторам</span></h1>
                    <p class="text-secondary">
                        АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения в соответствии с
                        Постановлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года.
                    </p>

                    <!-- Search Form -->
                    <form action="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}"
                        method="get">
                        <div class="block-part">
                            <div class="search">
                                <div class="search_field">
                                    <input type="text" name="q" placeholder="Поиск по (району, махалле, площади)"
                                        value="{{ request('q') }}">
                                </div>
                                <div class="search_btn">
                                    <button type="submit" class="b-btn _blue">Искать</button>

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
                                            <div
                                                class="filter_faq-indicator-button {{ request('status') ? '' : 'active' }}">
                                                Все</div>
                                        </label>
                                    </div>
                                    <div class="filter mx-2">
                                        <label class="filter_faq-indicator">
                                            <input type="radio" name="status"
                                                onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => '1_step']) }}'"
                                                {{ request('status') == '1_step' ? 'checked' : '' }}>
                                            <div
                                                class="filter_faq-indicator-button {{ request('status') == '1_step' ? 'active' : '' }}">
                                                1 Этап</div>
                                        </label>
                                    </div>
                                    <div class="filter mx-2">
                                        <label class="filter_faq-indicator">
                                            <input type="radio" name="status"
                                                onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => '2_step']) }}'"
                                                {{ request('status') == '2_step' ? 'checked' : '' }}>
                                            <div
                                                class="filter_faq-indicator-button {{ request('status') == '2_step' ? 'active' : '' }}">
                                                2 Этап</div>
                                        </label>
                                    </div>
                                    <div class="filter mx-2">
                                        <label class="filter_faq-indicator">
                                            <input type="radio" name="status"
                                                onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => 'completed']) }}'"
                                                {{ request('status') == 'completed' ? 'checked' : '' }}>
                                            <div
                                                class="filter_faq-indicator-button {{ request('status') == 'completed' ? 'active' : '' }}">
                                                Завершено</div>
                                        </label>
                                    </div>
                                    <div class="filter mx-2">
                                        <label class="filter_faq-indicator">
                                            <input type="radio" name="status"
                                                onchange="window.location.href='{{ route('frontend.investoram', ['subcategory' => $category->slug ?? null, 'status' => 'archive']) }}'"
                                                {{ request('status') == 'archive' ? 'checked' : '' }}>
                                            <div
                                                class="filter_faq-indicator-button {{ request('status') == 'archive' ? 'active' : '' }}">
                                                Архив</div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>


                </div>
                </form>

                <!-- Project List -->
                <style>
                    .rubric {
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        padding: 15px;
                        margin-bottom: 15px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        /* Box shadow added */
                        transition: box-shadow 0.3s ease-in-out;
                        background-color: #fff;
                        /* Optional for better contrast */
                    }

                    .rubric:hover {
                        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
                        /* Enhanced shadow on hover */
                    }

                    .rubric_title {
                        font-size: 16px;
                        font-weight: bold;
                        color: #007bff;
                        /* Optional: link color */
                        text-decoration: none;
                    }

                    .rubric_title:hover {
                        text-decoration: underline;
                    }

                    .download-button {
                        display: inline-block;
                        padding: 8px 12px;
                        margin: 5px 5px 0 0;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        background-color: #f9f9f9;
                        color: #333;
                        text-decoration: none;
                        font-size: 14px;
                        text-align: center;
                        transition: background-color 0.3s, color 0.3s;
                    }

                    .download-button:hover {
                        background-color: #007bff;
                        color: #fff;
                    }

                    .download-icon {
                        margin-right: 8px;
                    }
                </style>

                <!-- Add Font Awesome for icons -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

                <div class="rubric-wrap px-3 my-3">
                    <h2 class="rubric-title">Строительные инвестиционные проекты</h2>
                    <div class="row-fixed">
                        @if ($projects->count())
                            @foreach ($projects as $project)
                                <div class="rubric" data-faq-indicator="">
                                      {{-- <a class="rubric_title">
                                        Первый этап: {{ $project->start_date ?? 'Не указано' }} -
                                        {{ $project->end_date ?? 'Не указано' }}<br>
                                        Второй этап: {{ $project->second_stage_start_date ?? 'Не указано' }} -
                                        {{ $project->second_stage_end_date ?? 'Не указано' }}
                                    </a> --}}
                                    <div class="rubric_sub ">
                                        <strong>Район:</strong> {{ $project->district ?? 'Не указано' }}<br>
                                        <strong>Махалля:</strong> {{ $project->mahalla ?? 'Не указано' }}<br>
                                        <strong>Площадь:</strong> {{ $project->land ?? 'Не указано' }} га
                                    </div>
                                    <a class="rubric_title">
                                        Первый этап: {{ $project->start_date ?? 'Не указано' }} -
                                        {{ $project->end_date ?? 'Не указано' }}<br>
                                        Второй этап: {{ $project->second_stage_start_date ?? 'Не указано' }} -
                                        {{ $project->second_stage_end_date ?? 'Не указано' }}
                                    </a>
                                    <div class="mt-2">
                                        <a href="{{ $project->announcement_file_url }}" class="download-button" download>
                                            <i class="fas fa-file-download download-icon"></i> "Объявление 1 этапа"
                                        </a>
                                        <a href="{{ $project->protocol_file_url }}" class="download-button" download>
                                            <i class="fas fa-file-download download-icon"></i> "Протокол 1 этапа"
                                        </a>
                                    </div>
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
