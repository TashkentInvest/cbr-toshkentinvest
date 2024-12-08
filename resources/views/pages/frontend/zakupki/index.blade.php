@extends('layouts.frontend_app')

@section('frontend_content')
<main id="content">
    <div class="container-fluid">
        <div class="col-md-12 offset-md-1">
            <div class="block-title">
                <h2>Закупки</h2>
            </div>
            <div class="persons-container">
                <div class="persons">
                    @foreach ($zakupki as $zakupka)
                        <a class="person" href="{{ route('frontend.zakupki.show', $zakupka['id']) }}">
                            <div class="person_name">{{ $zakupka['title'] }}</div>
                            <div class="person_position">{{ $zakupka['date'] }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
