@extends('layouts.frontend_app')
@section('frontend_content')
    <div class="page">
        <div class="page__top-panel">
            <div class="page__top-panel__photo" style="background-image: url({{asset('assets/frontend/img/src/promo3.jpg')}})"></div>
          
            <div class="container">
                <div class="page__top-panel__in">
                    <h1 class="page__top-panel__title">Руководство</h1>
                    <nav class="bread-crumbs">
                        <ul>
                            <li>
                                <a href="index.html">Главная</a><i>/</i>
                            </li>
                            <li>
                                <span>Руководство</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div class="section__in">
                    <div class="section__content">
                        <ul class="partners-list">
                            <li>
                                <div class="partners-list__item first-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Baxrom.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Бахром Шакиров<br /></a>
                                    </span>
                                    <small class="partners-list__post">Председатель правления </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                          
                            <li>
                                <div class="partners-list__item second-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Peregudov.png')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Андрей Перегудов
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по строительству и реновации
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item first-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Nargiza.png')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Наргизахон Отахонова
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по управлению проектами
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item third-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Rustam.png')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Рустам Кодиров
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по стратегическому развитию
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item second-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Nikita.png')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Никита Рябов
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по инвестициям
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item first-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Baxtiyor.png')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Бахтиёр Мирзаев
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по финансам
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item third-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/dealers/Murat.png')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Мурат Бараев
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Руководитель администрации
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>


                        </ul>
                      
                    </div>
                </div>
            </div>
        </section>
        <div class="bt-indent">&nbsp;</div>
    </div>
@endsection
