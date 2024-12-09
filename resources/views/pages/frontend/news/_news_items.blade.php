@foreach ($news as $item)
    <div class="news _in-feed col-md-17">
        <div class="news_inner">
            <div class="news_text">
                <div class="news_info">
                    <div class="news_date">{{ $item->published_at->format('d F Y') }}</div>
                    <div class="news_category">{{ $item->category ?? 'Новость' }}</div>
                </div>
                <a class="news_title" href="{{ route('frontend.news.show', $item->id) }}">
                    {{ $item->title }}
                </a>
            </div>
            <a target="_blank" href="{{ route('frontend.news.show', $item->id) }}" class="col-md-5 offset-md-1 news_image">
                <img src="{{ Str::startsWith($item->image, ['http://', 'https://']) ? $item->image : asset($item->image) }}"
                     alt="{{ $item->title }}">
            </a>
        </div>
    </div>
@endforeach
