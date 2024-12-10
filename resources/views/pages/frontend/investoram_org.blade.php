@extends('layouts.frontend_app')
@section('frontend_content')
<main id="content">
    <div class="offsetMenu">
        <div class="container-fluid">
            <div class="col-md-12 offset-md-1">
                <h1><span class="referenceable">{{ $category->name ?? 'Все категории' }}</span></h1>
                <p>АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения в соответствии с
                    Постановлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года.</p>

                <!-- Поиск -->
                <form id="FaqSearchForm_form" action="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}" method="get">
                    <div class="block-part">
                        <div class="search">
                            <div class="search_field">
                                <input type="text" name="q" placeholder="Поиск по разделу" value="{{ request('q') }}">
                            </div>
                            <div class="search_btn">
                                <button type="submit" class="b-btn _blue">Искать</button>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Вкладки -->
                <div class="tabs_wrap mb-4">
                    <div class="tabs">
                        <a class="tab {{ request('status') ? '' : '_active' }}" href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}">Все</a>
                        <a class="tab {{ request('status') == '1_step' ? '_active' : '' }}" href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => '1_step']) }}">1 Этап</a>
                        <a class="tab {{ request('status') == '2_step' ? '_active' : '' }}" href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => '2_step']) }}">2 Этап</a>
                        <a class="tab {{ request('status') == 'completed' ? '_active' : '' }}" href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => 'completed']) }}">Завершено</a>
                        <a class="tab {{ request('status') == 'archive' ? '_active' : '' }}" href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => 'archive']) }}">Архив</a>
                    </div>
                </div>

                <!-- Список проектов -->
                <div class="rubric-wrap">
                    <div class="row">
                        @if ($projects->count())
                            @foreach ($projects as $project)
                                <div class="col-md-4 mb-4">
                                    <div class="rubric card shadow-sm h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Проект ID: {{ $project->id }}</h5>
                                            <p class="card-text">
                                                <strong>Категория:</strong> {{ $project->category->name ?? 'Не указано' }}<br>
                                                <strong>Район:</strong> {{ $project->district->name_uz ?? 'Не указано' }}<br>
                                                <strong>Улица:</strong> {{ $project->street->name ?? 'Не указано' }}<br>
                                                <strong>Площадь земли:</strong> {{ $project->land ?? 'Не указано' }} га<br>
                                                <strong>Период реализации:</strong> {{ $project->implementation_period ?? 'Не указано' }} мес.<br>
                                                <strong>Статус:</strong> {{ $project->status ?? 'Не указано' }}
                                            </p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Создано: {{ $project->created_at ? $project->created_at->format('d.m.Y') : 'Не указано' }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted">В этой категории пока нет проектов или они не найдены по вашему фильтру.</p>
                        @endif
                    </div>
                </div>

                <!-- Информация о последнем обновлении -->
                <div class="page-info">
                    <div class="page-info_last-update">Последнее обновление страницы: {{ now()->format('d.m.Y') }}</div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
