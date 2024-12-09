@extends('layouts.frontend_app')

@section('frontend_content')
<main id="content">
    <div class="offsetMenu">
        <div class="container-fluid">
            <div class="col-md-12 offset-md-1">

                <!-- Breadcrumbs -->
                <div class="breadcrumbs mb-4">
                    <div class="breadcrumbs_item"><a class="breadcrumbs_home" href="/" title="Home"></a></div>
                    <div class="breadcrumbs_item"><a href="{{route('frontend.about')}}">О Нас</a></div>
                </div>

                <!-- Title Section -->
                <div class="title-container">
                    <div class="block-title">
                        <h2><span class="referenceable" id="a_83561">Закупки:</span></h2>
                    </div>
                </div>

                <!-- Zakupki Section -->
                <div class="title-container">
                    <div class="persons-container">
                        <div class="persons d-flex flex-wrap gap-4">
                            @foreach ($zakupki as $zakupka)
                                <a class="person text-decoration-none text-dark" href="{{ route('frontend.zakupki.show', $zakupka['id']) }}" style="max-width: 320px;">
                                    <img src="{{ $zakupka['img'] }}" 
                                         alt="{{ $zakupka['title'] }}" 
                                         style="width: 100%; height: 400px; object-fit: cover; border-radius: 5px;">
                                    <div class="mt-2">
                                        <div class="person_name font-weight-bold">{{ $zakupka['title'] }}</div>
                                        <div class="person_position text-muted">{{ $zakupka['date'] }}</div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
