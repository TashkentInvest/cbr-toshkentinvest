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
                                            <a class="tab _active" href="#" data-tabs-tab="100"
                                                aria-selected="true">Новости</a>
                                        </div>

                                        <div data-tabs-content="100" id="events_tab100" role="tabpanel"
                                            aria-labelledby="tab_100">
                                            <div class="form-indent">
                                                <form id="filterForm">
                                                    <div class="search">
                                                        <div class="search_field">
                                                            <input placeholder="Поиск по разделу" type="text"
                                                                name="search" value="{{ request('search') ?? '' }}">
                                                        </div>
                                                        <div class="search_btn">
                                                            <button type="submit" class="b-btn _blue">Искать</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="news-speeches_wrap items_data" id="newsContainer">
                                                @php
                                                    $latestNews = $news->first();
                                                @endphp

                                                @if ($latestNews)
                                                    <div class="news _in-feed col-md-17 _big _white">
                                                        <div class="news_inner"
                                                            style="background-image:url({{ Str::startsWith($latestNews->image, ['http://', 'https://']) ? $latestNews->image : asset($latestNews->image) }});">
                                                            <div class="news_text">
                                                                <div class="news_info">
                                                                    <div class="news_date">
                                                                        {{ $latestNews->published_at->format('d F Y') }}
                                                                    </div>
                                                                    <div class="news_category">
                                                                        {{ $latestNews->category ?? 'Новость' }}
                                                                    </div>
                                                                </div>
                                                                <a class="news_title"
                                                                    href="{{ route('frontend.news.show', $latestNews->id) }}">
                                                                    {{ $latestNews->title }}
                                                                </a>
                                                            </div>
                                                            <a target="_blank"
                                                                href="{{ route('frontend.news.show', $latestNews->id) }}"
                                                                class="col-md-5 offset-md-1 news_image">
                                                                <img src="{{ Str::startsWith($latestNews->image, ['http://', 'https://']) ? $latestNews->image : asset($latestNews->image) }}"
                                                                    alt="{{ $latestNews->title }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif

                                                @include('pages.frontend.news._news_items', [
                                                    'news' => $news,
                                                ])

                                            </div>

                                            @if ($news->hasMorePages())
                                                <button id="_buttonLoadNextEvt" class="more-button _small">Загрузить
                                                    еще</button>
                                            @endif
                                        </div>

                                        <div data-tabs-content="0" id="events_tab0" role="tabpanel" aria-labelledby="tab_0"
                                            style="display: none;">
                                            <div class="news-speeches_wrap items_data"></div>
                                        </div>

                                        <div data-tabs-content="4" id="events_tab4" role="tabpanel" aria-labelledby="tab_4"
                                            style="display: none;">
                                            <div class="form-indent"></div>
                                            <div class="news-speeches_wrap items_data"></div>
                                        </div>

                                        <div data-tabs-content="2" id="events_tab2" role="tabpanel" aria-labelledby="tab_2"
                                            style="display: none;">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let loadMoreBtn = document.getElementById('_buttonLoadNextEvt');
            let filterForm = document.getElementById('filterForm');
            let newsContainer = document.getElementById('newsContainer');

            let currentPage = {{ $news->currentPage() }};
            let lastPage = {{ $news->lastPage() }};

            // Extract current filters
            function getFilters() {
                let formData = new FormData(filterForm);
                let search = formData.get('search') || '';
                return {
                    search
                };
            }

            filterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                currentPage = 1;
                loadNews(true);
            });

            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    currentPage++;
                    loadNews(false);
                });
            }

            function loadNews(replace = false) {
                let params = getFilters();
                let query = new URLSearchParams({
                    page: currentPage,
                    search: params.search
                }).toString();

                fetch('?' + query, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (replace) {
                            newsContainer.innerHTML = data.html;
                        } else {
                            newsContainer.insertAdjacentHTML('beforeend', data.html);
                        }

                        if (currentPage >= {{ $news->lastPage() }}) {
                            loadMoreBtn && (loadMoreBtn.style.display = 'none');
                        } else {
                            loadMoreBtn && (loadMoreBtn.style.display = 'block');
                        }
                    })
                    .catch(error => console.error('Error loading news:', error));
            }
        });
    </script>
@endsection
