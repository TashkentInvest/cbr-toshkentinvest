@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu ">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">

                    <!--index-->
                    <h1><span class="referenceable">Строительные инвестиционные проекты</span>
                    </h1>
                    <p>АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения в соответствии с Поставлением Кабинета Министров Республики Узбекистан №149 от 25 марта 2024 года
                    </p>









                    <form id="FaqSearchForm_form" action="/Reception/FaqSearch" method="get">
                        <div class="block-part">
                            <div class="search">
                                <div class="search_field">
                                    <input type="text" name="q" placeholder="Поиск по разделу" value="">
                                </div>
                                <div class="search_btn">
                                    <button class="b-btn _blue">Искать</button>
                                    <input type="hidden" name="from" value="91954" />
                                </div>
                            </div>
                            <div class="filters_wrapper">
                                <div class="filters">
                                    <div class="filter">
                                        <label class="filter_faq-indicator" data-faq-indicator-filter="">
                                            <input class="filter_faq-indicator-input" type="radio" name="Date"
                                                checked=checked value="All" />
                                            <div class="filter_faq-indicator-button">Все</div>
                                        </label>
                                    </div>
                                    <div class="filter">
                                        <label class="filter_faq-indicator" data-faq-indicator-filter="new">
                                            <input class="filter_faq-indicator-input" type="radio" name="Date"
                                                value="New" />
                                            <div class="filter_faq-indicator-button"><span
                                                    class="faq-indicator-new"></span>Новое</div>
                                        </label>
                                    </div>
                                    <div class="filter">
                                        <label class="filter_faq-indicator" data-faq-indicator-filter="update">
                                            <input class="filter_faq-indicator-input" type="radio" name="Date"
                                                value="Updated" />
                                            <div class="filter_faq-indicator-button"><span
                                                    class="faq-indicator-update"></span>Обновлено</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>


                    <div class="rubric-wrap">
                        <h2 class="rubric-title">Рубрикатор</h2>
                        <div class="row-fixed">
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    144 вопроса
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/w_fin_sector/">Актуальные вопросы работы финансовой
                                    системы</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    42 вопроса
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/dkp/">Денежно-кредитная политика</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    20 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/ndo/">Наличное денежное обращение</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    14 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/nps/">Национальная платежная система</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    100 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/bank_s/">Банковский сектор</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    59 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/pens_k_inv/">Пенсионные фонды и&#160;коллективные
                                    инвестиции</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    121 вопрос
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/insh/">Страхование</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    27 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/rcb/">Рынок ценных бумаг</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    9 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/finm_infrastructure/">Инфраструктура финансового
                                    рынка</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    11 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/microfin/">Микрофинансирование</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    31 вопрос
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/credit_h/">Кредитные истории</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    47 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/fintekh/">Развитие финансовых технологий</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    20 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/pnp/">Противодействие недобросовестным практикам</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    7 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/client/">Платформа &#171;Знай своего клиента&#187; </a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    13 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faqnew/br/">О&#160;Банке России</a>
                            </div>
                            <div class="rubric" data-faq-indicator="update">
                                <div class="rubric_sub">
                                    26 вопросов
                                    <span class="faq-indicator-update"></span>2 обновлено
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/information_security/">Информационная безопасность</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    18 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/zhaloby-v-bank-rossii-/">Жалобы в&#160;Банк России </a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    38 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="#!">Удостоверяющий центр Банка России</a>
                            </div>
                            <div class="rubric" data-faq-indicator="">
                                <div class="rubric_sub">
                                    17 вопросов
                                </div>

                                <div class="rubric_sub"></div>
                                <a class="rubric_title" href="/faq/foreign_securities/">Выкуп иностранных ценных бумаг</a>
                            </div>
                        </div>
                    </div>


                    <div class="document-regular">
                        <div class="document-regular_inner">
                            <div class="document-regular_top">
                                <div class="document-regular_left_icon"></div>
                            </div>
                            <div class="body-2 document-regular_main">
                                <div class="document-regular_texts">
                                    <div class="document-regular_name" data-toggle="">
                                        <a class="referenceable" href="/explan/" id="a_83810link"> <span
                                                class="document-regular_name_visible">Разъяснения для участников
                                                финансового рынка</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!--/index-->

                    <div class="page-info">
                        <!--noindex-->



                        <div class="page-info_helpful" data-page-feedback=""
                            data-feedback-url="/Content/PageInfo/RegisterFeedback">
                            <!--noindex-->
                            <div class="helpful" data-helpful="">
                                Страница была полезной?
                                <div class="helpful_btns">
                                    <button class="helpful_btn _yes" data-helpful-btn="yes"><i
                                            class="helpful_icon"></i><span>Да</span></button>
                                    <button class="helpful_btn _no" data-helpful-btn="no"><i
                                            class="helpful_icon"></i><span>Нет</span></button>
                                </div>
                            </div>
                            <!--/noindex-->
                        </div>

                        <div class="page-info_last-update">Последнее обновление страницы: 11.03.2024</div>
                        <!--/noindex-->
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
