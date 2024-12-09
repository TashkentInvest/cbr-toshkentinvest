@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs_item"><a class="breadcrumbs_home" href="/"></a></div>
                        <div class="breadcrumbs_item">
                            <a href="/news/"><!--noindex-->Новости<!--/noindex--></a>
                        </div>
                    </div>
                    <!--index-->
                    <h1><span class="referenceable">{{ $zakupka['title'] }}</span>
                    </h1>
                    <div class="news-info-line row _margin">
                        <div class="col-md-6 col-12 news-info-line_date">6 декабря 2024 года</div>
                        <div class="col-md-11 col-13 news-info-line_type">
                            Пресс-релиз


                        </div>
                            <div class="col-md-6 d-none d-md-block news-info-line_share">
                            <span class="news-info-line_share-btn" tabindex="0"
                                data-share-btn="data-share-btn">Поделиться</span>
                            <div class="news-info-line_share-select _hide">
                                {{-- <a class="news-info-line_share-vkontakte" target="_blank"
                                    href="https://vkontakte.ru/share.php?url={{Request::url()}}">ВКонтакте</a>
                                <a class="news-info-line_share-whatsapp" target="_blank"
                                    href="https://web.whatsapp.com/send?text={{Request::url()}}&amp;utm_source=share2"
                                    data-action="share/whatsapp/share">WhatsApp</a> --}}
                                <a class="news-info-line_share-telegram" target="_blank"
                                    href="https://t.me/share/url?url={{Request::url()}}">Telegram</a>
                            </div>
                        </div>
                    </div>
                    <div class="landFing-text">
                        <p>{{ $zakupka['description'] }}</p>

                       

                        <div>&nbsp;
                            <hr align="left" size="1" width="33%">
                      

                            <p>&nbsp;</p>
                        </div>
                        <br>
                        <p>{{ $zakupka['contact'] }}</p>
                    </div>




                </div>
            </div>
        </div>
    </main>
@endsection
