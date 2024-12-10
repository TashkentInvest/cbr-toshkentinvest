@extends('layouts.frontend_app')
@section('frontend_content')
<main id="content" class="my-5">
    <div class="offsetMenu">
        <div class="container-fluid">
            <div class="col-md-11 offset-md-1">
                <h1 class="mb-4">
                    <span class="referenceable">{{ $category->name ?? 'Все категории'}}</span>
                </h1>
                <p class="text-secondary">
                    АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения 
                    в соответствии с Постановлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года.
                </p>

                <!-- Поиск -->
                <form id="FaqSearchForm_form" action="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}" method="get" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Поиск по (Уник. номер, Район, Махалля)" value="{{ request('q') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search mr-1"></i> Искать
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Вкладки по статусу -->
                <div class="tabs_wrap mb-4">
                    <div class="nav nav-tabs">
                        <a class="nav-item nav-link {{ request('status') ? '' : 'active' }}" 
                           href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '']) }}">
                           Все
                        </a>
                        <a class="nav-item nav-link {{ request('status') == '1_step' ? 'active' : '' }}" 
                           href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => '1_step']) }}">
                           1 Этап
                        </a>
                        <a class="nav-item nav-link {{ request('status') == '2_step' ? 'active' : '' }}" 
                           href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => '2_step']) }}">
                           2 Этап
                        </a>
                        <a class="nav-item nav-link {{ request('status') == 'completed' ? 'active' : '' }}" 
                           href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => 'completed']) }}">
                           Завершено
                        </a>
                        <a class="nav-item nav-link {{ request('status') == 'archive' ? 'active' : '' }}" 
                           href="{{ route('frontend.investoram', ['subcategory' => $category->slug ?? '', 'status' => 'archive']) }}">
                           Архив
                        </a>
                    </div>
                </div>

                <!-- Список проектов -->
                <div class="rubric-wrap">
                    <div class="row">
                        @if ($projects->count())
                            @foreach ($projects as $project)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow-sm h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary mb-3">
                                                <i class="fas fa-project-diagram mr-1"></i> Проект ID: {{ $project->id }}
                                            </h5>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Уникальный номер:</strong> {{ $project->unique_number ?? 'Не указано' }}
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Район:</strong> {{ $project->district ?? 'Не указано' }}
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Махалля:</strong> {{ $project->mahalla ?? 'Не указано' }}
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Площадь территории:</strong> {{ $project->territory ?? 'Не указано' }} га
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Период реализации:</strong> {{ $project->implementation_period ?? 'Не указано' }} мес.
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Дата начала:</strong> {{ $project->start_date ? $project->start_date : 'Не указано' }}
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>Дата окончания:</strong> {{ $project->end_date ? $project->end_date : 'Не указано' }}
                                            </p>
                                            <p class="card-text text-muted mb-1">
                                                <strong>2 этап - дата начала:</strong> {{ $project->second_stage_start_date ? $project->second_stage_start_date : 'Не указано' }}
                                            </p>
                                            <p class="card-text text-muted mb-3">
                                                <strong>2 этап - дата окончания:</strong> {{ $project->second_stage_end_date ? $project->second_stage_end_date : 'Не указано' }}
                                            </p>
                                            
                                            <p class="card-text text-muted">
                                                <strong>Статус:</strong>
                                                @switch($project->status)
                                                    @case('1_step')
                                                        <span class="badge badge-info">1 Этап</span>
                                                        @break
                                                    @case('2_step')
                                                        <span class="badge badge-warning">2 Этап</span>
                                                        @break
                                                    @case('completed')
                                                        <span class="badge badge-success">Завершено</span>
                                                        @break
                                                    @case('archive')
                                                        <span class="badge badge-secondary">Архив</span>
                                                        @break
                                                    @default
                                                        Не указано
                                                @endswitch
                                            </p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <small>
                                                <i class="far fa-clock mr-1"></i> Создано: 
                                                {{ $project->created_at ? $project->created_at : 'Не указано' }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-info" role="alert">
                                    В этой категории пока нет проектов или они не найдены по вашему фильтру.
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Информация о последнем обновлении -->
                <hr class="my-4">
                <div class="page-info text-muted">
                    <small>Последнее обновление страницы: {{ now() }}</small>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
