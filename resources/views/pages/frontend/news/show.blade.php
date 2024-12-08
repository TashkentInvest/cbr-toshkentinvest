@extends('layouts.frontend_app')

@section('frontend_content')
    <main id="content">
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">

                    <div class="breadcrumbs">
                        <div class="breadcrumbs_item"><a class="breadcrumbs_home" href="/"></a></div>
                        <div class="breadcrumbs_item">
                            <a href="{{ route('frontend.news.index') }}">Новости</a>
                        </div>
                    </div>

                    <h1><span class="referenceable">{{ $newsItem->title }}</span></h1>
                    <div class="news-info-line row _margin">
                        <div class="col-md-6 col-12 news-info-line_date">{{ $newsItem->published_at }}</div>
                        <div class="col-md-11 col-13 news-info-line_type">Новость</div>
                    </div>

                    <div class="lead-text">
                        <p>{{ $newsItem->excerpt }}</p>
                    </div>

                    <div class="landing-text">
                        @if ($newsItem->image)
                            <div class="news-image">
                                <img src="{{ $newsItem->getImagePath() }}" alt="{{ $newsItem->title }}" class="img-fluid">
                            </div>
                        @endif

                        {!! nl2br(e($newsItem->content)) !!}

                        <div class="request_bottom mt-4">
                            <div class="copy-btn" data-copy-url="{{ route('frontend.news.show', $newsItem->id) }}">
                                <button class="btn _small _copy">Копировать ссылку</button>
                            </div>
                        </div>
    
                    </div>

                    <!-- Sharing and Actions -->
                  
                </div>
            </div>
        </div>
    </main>
@endsection
