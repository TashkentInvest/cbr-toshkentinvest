<div class="home-header_main _mobile d-block d-md-none">
    <div class="swiper-container home-header_gall_mobile">
        <div class="swiper-wrapper">
            <div class="swiper-slide"
                data-background-image="{{ asset('assets/frontend/Content/Gallery/Image/banner3.webp') }}">
                <div>
                    <div class="home-header_title">
                        Центральный банк <br />
                        УзбекистанскойФедерации
                    </div>
                </div>
            </div>

            <a class="swiper-slide" href="#!"
                data-background-image="{{ asset('assets/frontend/Content/Gallery/Image/banner2.webp') }}" target="_blank">
                <div>
                    <div class="home-header_title">
                        Всероссийский <br />онлайн-зачет<br />
                        по финансовой<br />
                        грамотности
                    </div>
                    <div class="home-header_desc">с 8 по 29 октября</div>
                </div>
            </a>
            <a class="swiper-slide" href="/Queries/XsltBlock/File/131643/-1/2511"
                data-background-image="{{ asset('assets/frontend/Content/Gallery/Image/banner1.webp') }}"
                target="_blank">
                <div>
                    <div class="home-header_subtitle _orange">
                        № 37 (2511)
                    </div>
                    <div class="home-header_title">
                        Вестник <br />Банка Узбекистана
                    </div>
                    <div class="home-header_desc">от 9 октября 2024 года</div>
                </div>
            </a>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="home-header_main _desktop d-none d-md-flex">
    <div class="swiper-container home-header_gall">
        <div class="swiper-wrapper">
            <div class="swiper-slide"
                data-background-image="{{ asset('assets/frontend/Content/Gallery/Image/banner3.webp') }}">
                <div class="col-md-19">
                    <div class="home-header_title">
                        ИНВЕСТИРУЙТЕ <br />
                        В БУДУЩЕЕ
                    </div>
                    <div class="home-header_desc">
                        Акционерное общество «Компания Ташкент Инвест» <br />
                        было создано при учредительстве хокимията столицы в
                        августе <br />
                        2023 года по указу Президента Республики Узбекистан
                        №УП-112.
                    </div>
                    <div class="home-header_search">
                        <div class="col-9">
                            <form action="{{ route('frontend.search') }}" method="POST">
                                <div class="home-header_search_field">
                                    <input name="text" class="home-header_search_inp" placeholder="Поиск по сайту" />
                                    <button class="b-btn _blue home-header_search_btn">
                                        Искать
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a class="swiper-slide"
                data-background-image="{{ asset('assets/frontend/Content/Gallery/Image/banner2.webp') }}"
                href="#!" target="_blank">
                <div class="col-md-19">
                    <div class="home-header_title">
                        Цель деятельности <br> компании
                    </div>
                    <div class="home-header_desc">
                        {{-- 16-18 октября <br />
              Федеральная территория «Сириус» --}}
                    </div>
                    <div class="home-header_btn">
                        <div class="b-btn _blue">Перейти</div>
                    </div>
                </div>
            </a>
            <a class="swiper-slide"
                data-background-image="{{ asset('assets/frontend/Content/Gallery/Image/banner1.webp') }}" href="#!"
                target="_blank">
                <div class="col-md-19">
                    <div class="home-header_title">
                        Фонд развития <br />Ташкента

                    </div>
                    <div class="home-header_desc">
                        {{-- с 8 по 29 октября --}}
                    </div>
                    <div class="home-header_btn">
                        <div class="b-btn _blue">Перейти</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="home-header_bottom d-none d-md-block">
    <div class="home-header_nav">
        <div class="home-header_nav_progress">
            <div class="home-header_nav_progress_bar"></div>
        </div>
        <div class="home-header_nav_right">
            <div class="home-header_nav_pag"></div>
            <div class="home-header_nav_btns">
                <div class="home-header_nav_btn _prev"></div>
                <div class="home-header_nav_btn _next"></div>
            </div>
        </div>
    </div>
    <div class="home-header_menu d-none d-md-block">
        <div class="home-header_menu d-none d-md-block">
            <div class="row">
                <div class="col-5">
                    <ul class="without_dash without_indent">
                        <li>
                            <a href="{{route('frontend.about')}}">О нас</a>
                        </li>
                        <li><a href="{{route('frontend.contact')}}">Контакты</a></li>
                        <li><a href="/faq/">Вопросы и&nbsp;ответы</a></li>
                    </ul>
                </div>
                <div class="col-7 offset-1">
                    <ul class="without_dash without_indent">
                        <li>
                            <a href="https://www.tashkent.uz/" target="_blank">tashkent.uz</a>
                        </li>
                        <li>
                            <a href="https://projects.toshkentinvest.uz/" target="_blank">projects.toshkentinvest.uz</a>
                        </li>
                        <li>
                            <a href="/investoram/">Строительные инвестиционные проекты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="home-header_down d-none d-md-block" data-scroll-to-content></div>
</div>
