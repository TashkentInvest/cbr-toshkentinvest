@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <!-- Breadcrumbs -->
                    <div class="breadcrumbs">
                        <div class="breadcrumbs_item"><a class="breadcrumbs_home" href="/"></a></div>
                        <div class="breadcrumbs_item">
                            <a href="{{route('frontend.about')}}">О Нас</a>
                        </div>
                    </div>

                    <!-- Title Section -->
                    <div class="title-container">
                        <div class="block-title">
                            <h2><span class="referenceable" id="a_83561">Руководство:</span></h2>
                        </div>
                        <div class="title-container">
                            <!-- Members Section -->
                            <div class="persons-container">
                                <div class="persons">
                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Baxrom.jpg') }}"
                                            alt="Бахром Шакиров" style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Бахром<br>Шакиров</div>
                                        <div class="person_position">Председатель правления</div>
                                    </a>
                                </div>

                                <div class="persons">
                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Baxtiyor.png') }}"
                                            alt="Бахтиёр Мирзаев" style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Бахтиёр<br>Мирзаев</div>
                                        <div class="person_position">Заместитель председателя правления<br>по финансам</div>
                                    </a>
                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Rustam.png') }}"
                                            alt="Рустам Кодиров" style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Рустам<br>Кодиров</div>
                                        <div class="person_position">Заместитель председателя правления<br>по
                                            стратегическому развитию</div>
                                    </a>

                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Nargiza.png') }}"
                                            alt="Наргизахон Отахонова"
                                            style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Наргизахон<br>Отахонова</div>
                                        <div class="person_position">Заместитель председателя правления<br>по управлению
                                            проектами</div>
                                    </a>
                               
                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Murat.png') }}" alt="Мурат Бараев"
                                            style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Мурат<br>Бараев</div>
                                        <div class="person_position">Руководитель администрации</div>
                                    </a>
                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Nikita.png') }}" alt="Никита Рябов"
                                            style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Никита<br>Рябов</div>
                                        <div class="person_position">Заместитель председателя правления<br>по инвестициям
                                        </div>
                                    </a>

                                    <a class="person" href="#!">
                                        <img src="{{ asset('assets/frontend/img/dealers/Peregudov.png') }}"
                                            alt="Андрей Перегудов" style="width: 320px; height: 400px; object-fit: cover;">
                                        <div class="person_name">Андрей<br>Перегудов</div>
                                        <div class="person_position">Заместитель председателя правления<br>по строительству
                                            и реновации</div>
                                    </a>



                                </div>




                            </div>
                        </div>
                    </div>

                    <!-- Feedback Section -->
                    <div class="page-info">
                        <div class="page-info_helpful" data-page-feedback=""
                            data-feedback-url="/Content/PageInfo/RegisterFeedback">
                            <div class="helpful" data-helpful="">
                                Страница была полезной?
                                <div class="helpful_btns">
                                    <button class="helpful_btn _yes" data-helpful-btn="yes"><i
                                            class="helpful_icon"></i><span>Да</span></button>
                                    <button class="helpful_btn _no" data-helpful-btn="no"><i
                                            class="helpful_icon"></i><span>Нет</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="page-info_last-update">Последнее обновление страницы: 05.12.2024</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
