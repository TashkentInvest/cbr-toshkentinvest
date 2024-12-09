@extends('layouts.frontend_app')
@section('frontend_content')
    
    <main id="content">
        <div class="offsetMenu ">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">

                    <!--index-->
                    <h1><span class="referenceable">Контактная информация</span>
                    </h1>

                    <div class="reception-info">
                        <div class="reception-info_item"><strong>Контактный центр:<br></strong>В настоящее время нагрузка на
                            операторов связи увеличена. Если вы не смогли связаться с нами, пожалуйста, перезвоните позднее.
                            <br>В соответствии с тарифами вашего оператора:
                            <nobr class="phone"><a href="tel:+998 71 210 02 61">+998 71 210 02 61</a><br></nobr>
                        </div>
                    </div>

                    <div class="title-container">

                        <div class="contacts block-part">
                            <div class="row">
                                <div class="col-md-14">
                                    <div class="contacts_item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="contacts_item_title">Адрес:</div>
                                            </div>
                                            <div class="col-md-8 offset-md-1">
                                                <div class="contacts_item_value">Узбекистан, город Ташкент,
                                                    улица Ислама Каримова, 51</div>
                                                <div class="contacts_item_text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contacts_item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="contacts_item_title">Запись на&nbsp;личный прием:</div>
                                            </div>
                                            <div class="col-md-8 offset-md-1">
                                                <div class="contacts_item_value">по&nbsp;телефонам Контактного центра
                                                </div>
                                                <div class="contacts_item_text">круглосуточно</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="block-part">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14750.363320752616!2d69.2480871!3d41.3110561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b416cb16a05%3A0xc419744dbba16ba3!2sKhokimiyat%20Goroda%20Tashkent!5e1!3m2!1sen!2s!4v1727159746659!5m2!1sen!2s"
                                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>

    </html>
@endsection
