@extends('layouts.frontend_app')

@section('frontend_content')
    <main class="home-content" id="content">
        <!--index-->
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <div class="home-main">
                        <div class="home-main_content col-md-16">
                            <div class="col-md-15">
                                @php
                                    use Illuminate\Support\Str;

                                    $latestNews = $news->first();

                                    $otherNews = $news->first()->skip(1)->take(5)->get();
                                @endphp

                                <div class="col-md-15">
                                    <h2 class="home-main_header">
                                        <a href="/news/">Новости</a>
                                    </h2>
                                    <div class="home-main_tabs home-sticky_parent" data-tabs="">
                                        <div class="home-sticky" data-home-sticky="">
                                            <div class="tabs">
                                                <a class="tab _active" href="#" data-tabs-tab="100"
                                                    aria-selected="true">Новости</a>
                                            </div>
                                        </div>
                                        <div class="home-sticky_compensation"></div>

                                        <div data-tabs-content="100">
                                            <div class="news-speeches_wrap">
                                                <div id="events_tab100">

                                                    @if ($latestNews)
                                                        <div class="news _in-feed col-md-17 _big _white">
                                                            <div class="news_inner"
                                                                style="background-image: url({{ Str::startsWith($latestNews->image, ['http://', 'https://']) ? $latestNews->image : asset($latestNews->image) }});">
                                                                <div class="news_text">
                                                                    <div class="news_info">
                                                                        <div class="news_date">
                                                                            {{ $latestNews->published_at->format('d F Y') }}
                                                                        </div>
                                                                        <div class="news_category">
                                                                            {{ $latestNews->category ?? 'Новость' }}</div>
                                                                    </div>
                                                                    <a class="news_title"
                                                                        href="{{ route('frontend.news.show', $latestNews->id) }}"
                                                                       >
                                                                        {{ $latestNews->title }}
                                                                    </a>
                                                                </div>
                                                                <a
                                                                    href="{{ route('frontend.news.show', $latestNews->id) }}"
                                                                    class="col-md-5 offset-md-1 news_image">
                                                                    <img src="{{ Str::startsWith($latestNews->image, ['http://', 'https://']) ? $latestNews->image : asset($latestNews->image) }}"
                                                                        alt="{{ $latestNews->title }}" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @foreach ($otherNews as $item)
                                                        <div class="news _in-feed col-md-17">
                                                            <div class="news_inner">
                                                                <div class="news_text">
                                                                    <div class="news_info">
                                                                        <div class="news_date">
                                                                            {{ $item->published_at->format('d F Y') }}</div>
                                                                        <div class="news_category">
                                                                            {{ $item->category ?? 'Новость' }}</div>
                                                                    </div>
                                                                    <a class="news_title"
                                                                        href="{{ route('frontend.news.show', $item->id) }}"
                                                                       >
                                                                        {{ $item->title }}
                                                                    </a>
                                                                </div>

                                                                @if ($item->image)
                                                                    <a
                                                                        href="{{ route('frontend.news.show', $item->id) }}"
                                                                        class="col-md-5 offset-md-1 news_image">
                                                                        <img src="{{ Str::startsWith($item->image, ['http://', 'https://']) ? $item->image : asset($item->image) }}"
                                                                            alt="{{ $item->title }}" />
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <a href="{{ route('frontend.news.index') }}"
                                                    class="more-button _small _home-news">
                                                    Все новости
                                                </a>
                                            </div>
                                        </div>

                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                        @include('inc.__right_aside')
                    </div>

                    <div class="materials">
                        <div class="block-title _with-dash materials_top">
                            <h2 class="h3 materials_title">
                                <span class="referenceable" id="a_87403">Актуальные документы</span>
                            </h2>
                            <div class="materials_nav">
                                <div class="materials_nav_btn _prev swiper-button-disabled" tabindex="0" role="button"
                                    aria-label="Previous slide" aria-disabled="true"></div>
                                <div class="materials_nav_btn _next" tabindex="0" role="button" aria-label="Next slide"
                                    aria-disabled="false"></div>
                            </div>
                        </div>
                        <div class="materials_items">
                            <div
                                class="swiper-container materials_gall swiper-container-initialized swiper-container-horizontal swiper-container-android">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1xUtsj_L9gsK6YGTSZsqgv1YEvqP3bU2q/view"
                                            data-zoom-title="Устав компании" data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Устав компании
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1Its9ckdTkiEf5M7TT5ZpU_MZSbbmcqDg/view"
                                            data-zoom-title="Организационная структура" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Организационная структура
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                {{-- <span data-line-cutter="2" style="position: relative">2023&nbsp;г.</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1idn27zGgPK7T-HiBlD5l1MxRmAp4gv75/view"
                                            data-zoom-title="Решение о первичном выпуске акций" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Решение о первичном выпуске акций
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1EYvD3ukqo22A8bgoMmPv-BDiVLEzzxqa/view"
                                            data-zoom-title="Бухгалтерский баланс — 1 квартал 2024" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Бухгалтерский баланс — 1 квартал 2024
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1pS0MACr1to93NL53nnVACxwLSejl7jQA/view"
                                            data-zoom-title="Отчет о финансовых результатах – 1 квартал 2024"
                                            target="_blank" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Отчет о финансовых результатах – 1 квартал 2024
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                {{-- <span data-line-cutter="2" style="position: relative">2023&nbsp;г.</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1_lCgKih4Yru3sHmKHIWreB43Uqg_fQXI/view"
                                            data-zoom-title="Список аффилированных лиц" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Список аффилированных лиц
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                <span data-line-cutter="2" style="position: relative"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1UuT6P6HBe_nVKuFdBH2ZlHiI5lhFS26P/view"
                                            data-zoom-title="Кодекс корпоративного управления" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Кодекс корпоративного управления
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1L5wG3AEPZMyvsd723vnCRcDfG-UM3cTa/view"
                                            data-zoom-title="Правила корпоративного управления" data-zoom-tags=""
                                            target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Правила корпоративного управления
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1ruf4z4qfecZDd81yioCkfSkQ2lCATMag/view"
                                            data-zoom-title="Результаты оценки системы корпоративного управления"
                                            target="_blank" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Результаты оценки системы корпоративного управления
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>

                                                {{-- <span data-line-cutter="2" style="position: relative">Материалы
                                                    по&nbsp;итогам заседаний Сов...</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1TFvghHgmYuoRSSxDdYWaLoX5Q9CMVh8J/view"
                                            data-zoom-title="Сообщение о принятии Правил корпоративного управления в своей деятельности"
                                            data-zoom-tags="" target="_blank">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Сообщение о принятии Правил корпоративного управления в своей деятельности
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>
                                                {{-- <span data-line-cutter="2" style="position: relative">07.08.2024</span> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide" style="width: 231.25px; margin-right: 50px">
                                        <a class="material material-file pdf-format"
                                            href="https://drive.google.com/file/d/1CJXescFyTKxU5wMSK9c0AtMkkIbm5eoI/view"
                                            data-zoom-title="Сообщение о принятии рекомендаций Кодекса корпоративного управления в своей деятельности"
                                            target="_blank" data-zoom-tags="">
                                            <div class="material_title" data-line-cutter="8" style="position: relative">
                                                Сообщение о принятии рекомендаций Кодекса корпоративного управления в своей
                                                деятельности
                                            </div>
                                            <div class="material_source">
                                                <div class="material_format icon-pdf"></div>

                                                {{-- <span data-line-cutter="2"
                                                    style="position: relative">IV&nbsp;квартал&nbsp;2023&nbsp;г.&nbsp;—
                                                    I&nbsp;квартал&nbsp;2024&nbsp;г.</span> --}}
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>

                    {{-- partners logos --}}
                    {{-- @include('inc.__partners_logos') --}}
                </div>
            </div>
        </div>
        <!--/index-->
    </main>
@endsection
