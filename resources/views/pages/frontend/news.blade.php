@extends('layouts.frontend_app')
@section('frontend_content')
    <main id="content">
        <div class="offsetMenu ">
            <div class="container-fluid">
                <div class="col-md-23 offset-md-1">
                    <div class="news-page_row">
                        <div class="news-page_content col-md-16">
                            <div class="col-md-15">
                                <div id="mainPoint">
                                    <div class="tabs_wrap" data-tabs="">
                                      <div class="tabs">
                                        <a class="tab _active" href="#" data-tabs-tab="100"
                                            aria-selected="true">Новости</a>
                                    </div>
                                        <div data-tabs-content="100" id="events_tab100" role="tabpanel"
                                            aria-labelledby="tab_100" style="">
                                            <div class="form-indent">
                                                <form>
                                                    <div class="search">
                                                        <div class="search_field"><input placeholder="Поиск по разделу"
                                                                type="text" value=""></div>
                                                        <div class="search_btn"><button type="button"
                                                                class="b-btn _blue">Искать</button></div>
                                                    </div>
                                                    <div class="filters_wrapper _block">
                                                        <div class="filters">
                                                            <div class="" id="DatesFilterRange_100">
                                                                <div class="filter-select-with-date"
                                                                    data-select-with-date="">
                                                                    <div class="filter" data-filter="select">
                                                                        <div class="datepicker-filter_placeholder">Выберите
                                                                            период</div><button class="filter_title"
                                                                            type="button" data-filter-title=""
                                                                            title="За&nbsp;все&nbsp;время"
                                                                            data-tooltip-disabled="">
                                                                            За&nbsp;все&nbsp;время</button>
                                                                        <div class="filter_content" data-filter-content=""
                                                                            style="display: none;">
                                                                            <div class="filter_content_top">
                                                                                <div class="filter_content_close"
                                                                                    data-filter-close=""></div>
                                                                            </div>
                                                                            <div class="filter-select">
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio" checked=""
                                                                                        value="1" id="ui-id-22"
                                                                                        name="nm_ui-id-22"><label
                                                                                        for="ui-id-22">
                                                                                        За&nbsp;все&nbsp;время</label></div>
                                                                                <div class="filter-select_option"><label
                                                                                        for="ui-id-23">Выбрать
                                                                                        период</label><input type="radio"
                                                                                        value="4" data-select-date=""
                                                                                        id="ui-id-23" name="nm_ui-id-22">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="filter">
                                                                        <div class="datepicker-filter"
                                                                            data-datepicker-period-filter="data-datepicker-period-filter"
                                                                            data-min-date="" data-max-date=""
                                                                            data-default-value-from=""
                                                                            data-default-value-to=""><input
                                                                                class="datepicker-filter_input-from"
                                                                                type="hidden" id="ui-id-24"
                                                                                name="datepicker-from-ui-id-24"><input
                                                                                class="datepicker-filter_input-to"
                                                                                type="hidden" id="ui-id-25"
                                                                                name="datepicker-to-ui-id-25"><button
                                                                                class="datepicker-filter_button"
                                                                                type="button"><span>ДД.ММ.ГГГГ</span><span>
                                                                                    -
                                                                                </span><span>ДД.ММ.ГГГГ</span></button>
                                                                            <div class="datepicker-filter_modal">
                                                                                <div class="datepicker-filter_head">
                                                                                    <div class="datepicker-filter_close">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="datepicker-filter_tabs">
                                                                                    <div
                                                                                        class="datepicker-filter_tab-from">
                                                                                        <span>ДД.ММ.ГГГГ</span></div>
                                                                                    &nbsp;-&nbsp;<div
                                                                                        class="datepicker-filter_tab-to">
                                                                                        <span>ДД.ММ.ГГГГ</span></div>
                                                                                </div>
                                                                                <div class="datepicker-filter_body">
                                                                                    <div class="datepicker-filter_datepicker-from datepicker-custom hasDatepicker _empty"
                                                                                        id="dp1729756547040">
                                                                                        <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
                                                                                            style="display: block;">
                                                                                            <div
                                                                                                class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all">
                                                                                                <a class="ui-datepicker-prev ui-corner-all"
                                                                                                    data-handler="prev"
                                                                                                    data-event="click"
                                                                                                    title="<Пред"><span
                                                                                                        class="ui-icon ui-icon-circle-triangle-w">&lt;Пред</span></a><a
                                                                                                    class="ui-datepicker-next ui-corner-all"
                                                                                                    data-handler="next"
                                                                                                    data-event="click"
                                                                                                    title="След>"><span
                                                                                                        class="ui-icon ui-icon-circle-triangle-e">След&gt;</span></a>
                                                                                                <div
                                                                                                    class="ui-datepicker-title">
                                                                                                    <select
                                                                                                        class="ui-datepicker-month"
                                                                                                        data-handler="selectMonth"
                                                                                                        data-event="change">
                                                                                                        <option
                                                                                                            value="0">
                                                                                                            Январь</option>
                                                                                                        <option
                                                                                                            value="1">
                                                                                                            Февраль</option>
                                                                                                        <option
                                                                                                            value="2">
                                                                                                            Март</option>
                                                                                                        <option
                                                                                                            value="3">
                                                                                                            Апрель</option>
                                                                                                        <option
                                                                                                            value="4">
                                                                                                            Май</option>
                                                                                                        <option
                                                                                                            value="5">
                                                                                                            Июнь</option>
                                                                                                        <option
                                                                                                            value="6">
                                                                                                            Июль</option>
                                                                                                        <option
                                                                                                            value="7">
                                                                                                            Август</option>
                                                                                                        <option
                                                                                                            value="8"
                                                                                                            selected="selected">
                                                                                                            Сентябрь
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="9">
                                                                                                            Октябрь</option>
                                                                                                    </select><select
                                                                                                        class="ui-datepicker-year"
                                                                                                        data-handler="selectYear"
                                                                                                        data-event="change">
                                                                                                        <option
                                                                                                            value="1991">
                                                                                                            1991</option>
                                                                                                        <option
                                                                                                            value="1992">
                                                                                                            1992</option>
                                                                                                        <option
                                                                                                            value="1993">
                                                                                                            1993</option>
                                                                                                        <option
                                                                                                            value="1994">
                                                                                                            1994</option>
                                                                                                        <option
                                                                                                            value="1995">
                                                                                                            1995</option>
                                                                                                        <option
                                                                                                            value="1996">
                                                                                                            1996</option>
                                                                                                        <option
                                                                                                            value="1997">
                                                                                                            1997</option>
                                                                                                        <option
                                                                                                            value="1998">
                                                                                                            1998</option>
                                                                                                        <option
                                                                                                            value="1999">
                                                                                                            1999</option>
                                                                                                        <option
                                                                                                            value="2000">
                                                                                                            2000</option>
                                                                                                        <option
                                                                                                            value="2001">
                                                                                                            2001</option>
                                                                                                        <option
                                                                                                            value="2002">
                                                                                                            2002</option>
                                                                                                        <option
                                                                                                            value="2003">
                                                                                                            2003</option>
                                                                                                        <option
                                                                                                            value="2004">
                                                                                                            2004</option>
                                                                                                        <option
                                                                                                            value="2005">
                                                                                                            2005</option>
                                                                                                        <option
                                                                                                            value="2006">
                                                                                                            2006</option>
                                                                                                        <option
                                                                                                            value="2007">
                                                                                                            2007</option>
                                                                                                        <option
                                                                                                            value="2008">
                                                                                                            2008</option>
                                                                                                        <option
                                                                                                            value="2009">
                                                                                                            2009</option>
                                                                                                        <option
                                                                                                            value="2010">
                                                                                                            2010</option>
                                                                                                        <option
                                                                                                            value="2011">
                                                                                                            2011</option>
                                                                                                        <option
                                                                                                            value="2012">
                                                                                                            2012</option>
                                                                                                        <option
                                                                                                            value="2013">
                                                                                                            2013</option>
                                                                                                        <option
                                                                                                            value="2014">
                                                                                                            2014</option>
                                                                                                        <option
                                                                                                            value="2015">
                                                                                                            2015</option>
                                                                                                        <option
                                                                                                            value="2016">
                                                                                                            2016</option>
                                                                                                        <option
                                                                                                            value="2017">
                                                                                                            2017</option>
                                                                                                        <option
                                                                                                            value="2018">
                                                                                                            2018</option>
                                                                                                        <option
                                                                                                            value="2019">
                                                                                                            2019</option>
                                                                                                        <option
                                                                                                            value="2020">
                                                                                                            2020</option>
                                                                                                        <option
                                                                                                            value="2021">
                                                                                                            2021</option>
                                                                                                        <option
                                                                                                            value="2022">
                                                                                                            2022</option>
                                                                                                        <option
                                                                                                            value="2023">
                                                                                                            2023</option>
                                                                                                        <option
                                                                                                            value="2024"
                                                                                                            selected="selected">
                                                                                                            2024</option>
                                                                                                    </select></div>
                                                                                            </div>
                                                                                            <table
                                                                                                class="ui-datepicker-calendar">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th scope="col">
                                                                                                            <span
                                                                                                                title="понедельник">Пн</span>
                                                                                                        </th>
                                                                                                        <th scope="col">
                                                                                                            <span
                                                                                                                title="вторник">Вт</span>
                                                                                                        </th>
                                                                                                        <th scope="col">
                                                                                                            <span
                                                                                                                title="среда">Ср</span>
                                                                                                        </th>
                                                                                                        <th scope="col">
                                                                                                            <span
                                                                                                                title="четверг">Чт</span>
                                                                                                        </th>
                                                                                                        <th scope="col">
                                                                                                            <span
                                                                                                                title="пятница">Пт</span>
                                                                                                        </th>
                                                                                                        <th scope="col"
                                                                                                            class="ui-datepicker-week-end">
                                                                                                            <span
                                                                                                                title="суббота">Сб</span>
                                                                                                        </th>
                                                                                                        <th scope="col"
                                                                                                            class="ui-datepicker-week-end">
                                                                                                            <span
                                                                                                                title="воскресенье">Вс</span>
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">1</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">2</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">3</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">4</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">5</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">6</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">7</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">8</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">9</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">10</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">11</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">12</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">13</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">14</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">15</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">16</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">17</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">18</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">19</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">20</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">21</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">22</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">23</a>
                                                                                                        </td>
                                                                                                        <td class="  ui-datepicker-current-day"
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default ui-state-active"
                                                                                                                href="#">24</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">25</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">26</a>
                                                                                                        </td>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">27</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">28</a>
                                                                                                        </td>
                                                                                                        <td class=" ui-datepicker-week-end "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">29</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class=" "
                                                                                                            data-handler="selectDay"
                                                                                                            data-event="click"
                                                                                                            data-month="8"
                                                                                                            data-year="2024">
                                                                                                            <a class="ui-state-default"
                                                                                                                href="#">30</a>
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                        <td
                                                                                                            class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                                                                                            &nbsp;</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                             
                                                                                </div>
                                                                                <div
                                                                                    class="datepicker-filter_footer _right">
                                                                                    <button
                                                                                        class="datepicker-filter_clear-btn"
                                                                                        type="button"
                                                                                        id="ui-id-26">Сбросить</button><button
                                                                                        class="datepicker-filter_apply-btn"
                                                                                        type="button" id="ui-id-27"
                                                                                        disabled="disabled">Применить</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="" id="ThemasFilterRange_100"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="news-speeches_wrap items_data">
                                                <div class="news _in-feed col-md-17  _big _white">
                                                    <div class="news_inner"
                                                        style="background-image:url({{ asset('assets/frontend/Content/images/hakimyat.png') }});">
                                                        <div class="news_text">
                                                            <div class="news_info">
                                                                <div class="news_date"> 22 октября 2024</div>
                                                                <div class="news_category">Интервью</div>
                                                            </div><a class="news_title"
                                                                href="/press/event/?id=21108">Интервью Филиппа Габунии
                                                                агентству «Интерфакс»</a>
                                                        </div><a target="_blank" href="/press/event/?id=21108"
                                                            class="col-md-5 offset-md-1 news_image"><img
                                                                src="/legacy/PhotoStore/getimgid/84253.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                             
                                                <div class="news _in-feed col-md-17 ">
                                                    <div class="news_inner">
                                                        <div class="news_text">
                                                            <div class="news_info">
                                                                <div class="news_date"> 11 октября 2024</div>
                                                                <div class="news_category">Новость</div>
                                                            </div><a class="news_title"
                                                                href="/press/event/?id=21079">Доверительное управление
                                                                без&nbsp;стандартных стратегий: указание Банка России</a>
                                                        </div><a target="_blank" href="/press/event/?id=21079"
                                                            class="col-md-5 offset-md-1 news_image"><img
                                                                src="{{ asset('assets/frontend/Content/images/hakimyat.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="news _in-feed col-md-17 ">
                                                    <div class="news_inner">
                                                        <div class="news_text">
                                                            <div class="news_info">
                                                                <div class="news_date"> 11 октября 2024</div>
                                                                <div class="news_category">Новость</div>
                                                            </div><a class="news_title"
                                                                href="/press/event/?id=21077">Банки станут быстрее включать
                                                                реквизиты мошенников в&nbsp;свои системы </a>
                                                        </div><a target="_blank" href="/press/event/?id=21077"
                                                            class="col-md-5 offset-md-1 news_image"><img
                                                                src="/legacy/PhotoStore/getimgid/84207.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div><button id="_buttonLoadNextEvt" class="more-button _small">Загрузить
                                                еще</button>
                                        </div>
                                        <div data-tabs-content="0" id="events_tab0" role="tabpanel"
                                            aria-labelledby="tab_0" style="display: none;">
                                         
                                            <div class="news-speeches_wrap items_data"></div>
                                        </div>
                                        <div data-tabs-content="4" id="events_tab4" role="tabpanel"
                                            aria-labelledby="tab_4" style="display: none;">
                                            <div class="form-indent">
                                                <form>
                                                    <div class="search">
                                                        <div class="search_field"><input placeholder="Поиск по разделу"
                                                                type="text" value=""></div>
                                                        <div class="search_btn"><button type="button"
                                                                class="b-btn _blue">Искать</button></div>
                                                    </div>
                                                    <div class="filters_wrapper _block">
                                                        <div class="filters">
                                                            <div class="" id="DatesFilterRange_4">
                                                                <div class="filter-select-with-date"
                                                                    data-select-with-date="">
                                                                    <div class="filter" data-filter="select">
                                                                        <div class="datepicker-filter_placeholder">
                                                                            Выберите период</div><button
                                                                            class="filter_title" type="button"
                                                                            data-filter-title=""
                                                                            title="За&nbsp;все&nbsp;время"
                                                                            data-tooltip-content=" За&nbsp;все&nbsp;время">
                                                                            За&nbsp;все&nbsp;время</button>
                                                                        <div class="filter_content"
                                                                            data-filter-content=""
                                                                            style="display: none;">
                                                                            <div class="filter_content_top">
                                                                                <div class="filter_content_close"
                                                                                    data-filter-close=""></div>
                                                                            </div>
                                                                            <div class="filter-select">
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio" checked=""
                                                                                        value="1" id="ui-id-36"
                                                                                        name="nm_ui-id-36"><label
                                                                                        for="ui-id-36">
                                                                                        За&nbsp;все&nbsp;время</label></div>
                                                                                <div class="filter-select_option"><label
                                                                                        for="ui-id-37">Выбрать
                                                                                        период</label><input
                                                                                        type="radio" value="4"
                                                                                        data-select-date=""
                                                                                        id="ui-id-37"
                                                                                        name="nm_ui-id-36"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="filter">
                                                                        <div class="datepicker-filter"
                                                                            data-datepicker-period-filter="data-datepicker-period-filter"
                                                                            data-min-date="" data-max-date=""
                                                                            data-default-value-from=""
                                                                            data-default-value-to=""><input
                                                                                class="datepicker-filter_input-from"
                                                                                type="hidden" id="ui-id-38"
                                                                                name="datepicker-from-ui-id-38"><input
                                                                                class="datepicker-filter_input-to"
                                                                                type="hidden" id="ui-id-39"
                                                                                name="datepicker-to-ui-id-39"><button
                                                                                class="datepicker-filter_button"
                                                                                type="button"><span>ДД.ММ.ГГГГ</span><span>
                                                                                    -
                                                                                </span><span>ДД.ММ.ГГГГ</span></button>
                                                                            <div class="datepicker-filter_modal">
                                                                                <div class="datepicker-filter_head">
                                                                                    <div class="datepicker-filter_close">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="datepicker-filter_tabs">
                                                                                    <div
                                                                                        class="datepicker-filter_tab-from">
                                                                                        <span>ДД.ММ.ГГГГ</span></div>
                                                                                    &nbsp;-&nbsp;<div
                                                                                        class="datepicker-filter_tab-to">
                                                                                        <span>ДД.ММ.ГГГГ</span></div>
                                                                                </div>
                                                                                <div class="datepicker-filter_body">
                                                                                   
                                                                                 
                                                                                </div>
                                                                                <div
                                                                                    class="datepicker-filter_footer _right">
                                                                                    <button
                                                                                        class="datepicker-filter_clear-btn"
                                                                                        type="button"
                                                                                        id="ui-id-40">Сбросить</button><button
                                                                                        class="datepicker-filter_apply-btn"
                                                                                        type="button" id="ui-id-41"
                                                                                        disabled="disabled">Применить</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="" id="ThemasFilterRange_4">
                                                                <div class="filter" data-filter="select"
                                                                    id="ui-id-21"><button class="filter_title"
                                                                        type="button" data-filter-title=""
                                                                        data-tooltip-content="Любая тема">Любая
                                                                        тема</button>
                                                                    <div class="filter_content" data-filter-content="">
                                                                        <div class="filter_content_top">
                                                                            <div class="filter_content_close"
                                                                                data-filter-close=""></div>
                                                                        </div>
                                                                        <div class="filter-select">
                                                                            <div class="filter-select_options">
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_1_1ui-id-21"
                                                                                        checked=""
                                                                                        value="1"><label
                                                                                        for="filter_1_1ui-id-21">Любая
                                                                                        тема</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21RUONIA"
                                                                                        value="RUONIA"><label
                                                                                        for="filter_ui-id-21RUONIA">RUONIA</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21DATABASES"
                                                                                        value="DATABASES"><label
                                                                                        for="filter_ui-id-21DATABASES">Базы
                                                                                        данных</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21BSA"
                                                                                        value="BSA"><label
                                                                                        for="filter_ui-id-21BSA">Банки на
                                                                                        санации с участием Агентства</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21BSBR"
                                                                                        value="BSBR"><label
                                                                                        for="filter_ui-id-21BSBR">Банки на
                                                                                        санации с участием Банка России
                                                                                    </label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21BANK_SECTOR"
                                                                                        value="BANK_SECTOR"><label
                                                                                        for="filter_ui-id-21BANK_SECTOR">Банковский
                                                                                        сектор</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21VBR"
                                                                                        value="VBR"><label
                                                                                        for="filter_ui-id-21VBR">Вестник
                                                                                        Банка России</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21PKN"
                                                                                        value="PKN"><label
                                                                                        for="filter_ui-id-21PKN">Временные
                                                                                        администрации </label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21PNP_INSIDE"
                                                                                        value="PNP_INSIDE"><label
                                                                                        for="filter_ui-id-21PNP_INSIDE">Выявленные
                                                                                        случаи неправомерного использования
                                                                                        инсайдерской информации и
                                                                                        манипулирования рынком</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21GW"
                                                                                        value="GW"><label
                                                                                        for="filter_ui-id-21GW">График
                                                                                        работы финансового сектора</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21SELLCO_D"
                                                                                        value="SELLCO_D"><label
                                                                                        for="filter_ui-id-21SELLCO_D">Действующие
                                                                                        предложения по продаже
                                                                                        банков</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21DKP"
                                                                                        value="DKP"><label
                                                                                        for="filter_ui-id-21DKP">Денежно-кредитная
                                                                                        политика</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21DFR"
                                                                                        value="DFR"><label
                                                                                        for="filter_ui-id-21DFR">Допуск на
                                                                                        финансовый рынок</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21PP"
                                                                                        value="PP"><label
                                                                                        for="filter_ui-id-21PP">Другие
                                                                                        пресс-релизы</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21PROTECTION"
                                                                                        value="PROTECTION"><label
                                                                                        for="filter_ui-id-21PROTECTION">Защита
                                                                                        прав потребителей финансовых
                                                                                        услуг</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21KOBR"
                                                                                        value="KOBR"><label
                                                                                        for="filter_ui-id-21KOBR">Информация
                                                                                        о размещении купонных облигаций
                                                                                        Банка России</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21INFR"
                                                                                        value="INFR"><label
                                                                                        for="filter_ui-id-21INFR">Инфраструктура
                                                                                        финансового рынка</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21RESEARCH"
                                                                                        value="RESEARCH"><label
                                                                                        for="filter_ui-id-21RESEARCH">Исследования</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21SELLCO"
                                                                                        value="SELLCO"><label
                                                                                        for="filter_ui-id-21SELLCO">Итоги
                                                                                        процедур продаж банков </label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21HP"
                                                                                        value="HP"><label
                                                                                        for="filter_ui-id-21HP">Кадровые
                                                                                        изменения</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21KEYRATE"
                                                                                        value="KEYRATE"><label
                                                                                        for="filter_ui-id-21KEYRATE">Ключевая
                                                                                        ставка Банка России</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21IK"
                                                                                        value="IK"><label
                                                                                        for="filter_ui-id-21IK">Коммерческие
                                                                                        банки</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21IKN"
                                                                                        value="IKN"><label
                                                                                        for="filter_ui-id-21IKN">Коммерческие
                                                                                        банки (Информация) Временные
                                                                                        администрации</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21IKO"
                                                                                        value="IKO"><label
                                                                                        for="filter_ui-id-21IKO">Коммерческие
                                                                                        банки (Информация) Отзыв
                                                                                        лицензий</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21CRHIST"
                                                                                        value="CRHIST"><label
                                                                                        for="filter_ui-id-21CRHIST">Кредитные
                                                                                        истории</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21LMB"
                                                                                        value="LMB"><label
                                                                                        for="filter_ui-id-21LMB">Ломбардный
                                                                                        список</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21macroprudential_limits"
                                                                                        value="macroprudential_limits"><label
                                                                                        for="filter_ui-id-21macroprudential_limits">Макропруденциальные
                                                                                        лимиты</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21MS"
                                                                                        value="MS"><label
                                                                                        for="filter_ui-id-21MS">Международное
                                                                                        сотрудничество</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21SUP_MEAS"
                                                                                        value="SUP_MEAS"><label
                                                                                        for="filter_ui-id-21SUP_MEAS">Меры
                                                                                        защиты финансового рынка</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21MICROFINANCE"
                                                                                        value="MICROFINANCE"><label
                                                                                        for="filter_ui-id-21MICROFINANCE">Микрофинансирование</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21RISKWEIGHTS"
                                                                                        value="RISKWEIGHTS"><label
                                                                                        for="filter_ui-id-21RISKWEIGHTS">Надбавки
                                                                                        к коэффициентам риска</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21COINS"
                                                                                        value="COINS"><label
                                                                                        for="filter_ui-id-21COINS">Наличное
                                                                                        денежное обращение</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21NANT"
                                                                                        value="NANT"><label
                                                                                        for="filter_ui-id-21NANT">Национальная
                                                                                        антициклическая надбавка</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21NPS"
                                                                                        value="NPS"><label
                                                                                        for="filter_ui-id-21NPS">Национальная
                                                                                        платежная система</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21TODAY"
                                                                                        value="TODAY"><label
                                                                                        for="filter_ui-id-21TODAY">О Банке
                                                                                        России</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21SITE"
                                                                                        value="SITE"><label
                                                                                        for="filter_ui-id-21SITE">О
                                                                                        сайте</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21SCR"
                                                                                        value="SCR"><label
                                                                                        for="filter_ui-id-21SCR">Об
                                                                                        установлении уровней кредитных
                                                                                        рейтингов</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21OBR"
                                                                                        value="OBR"><label
                                                                                        for="filter_ui-id-21OBR">Операции
                                                                                        Банка России</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21BSPBA"
                                                                                        value="BSPBA"><label
                                                                                        for="filter_ui-id-21BSPBA">Предупреждение
                                                                                        банкротства кредитных организаций
                                                                                        (архив)</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21PNP"
                                                                                        value="PNP"><label
                                                                                        for="filter_ui-id-21PNP">Противодействие
                                                                                        недобросовестным практикам</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21DSD"
                                                                                        value="DSD"><label
                                                                                        for="filter_ui-id-21DSD">Решения
                                                                                        Совета директоров</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21ALFA"
                                                                                        value="ALFA"><label
                                                                                        for="filter_ui-id-21ALFA">Сглаживающая
                                                                                        константа альфа</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21CVD"
                                                                                        value="CVD"><label
                                                                                        for="filter_ui-id-21CVD">Ситуация
                                                                                        на финансовом рынке и
                                                                                        стабилизационные меры</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21STAT"
                                                                                        value="STAT"><label
                                                                                        for="filter_ui-id-21STAT">Статистика</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21INSUR"
                                                                                        value="INSUR"><label
                                                                                        for="filter_ui-id-21INSUR">Страхование</label>
                                                                                </div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21FINSTAB"
                                                                                        value="FINSTAB"><label
                                                                                        for="filter_ui-id-21FINSTAB">Финансовая
                                                                                        стабильность</label></div>
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio"
                                                                                        name="filter_singleui-id-21"
                                                                                        id="filter_ui-id-21ISSUE"
                                                                                        value="ISSUE"><label
                                                                                        for="filter_ui-id-21ISSUE">Эмитенты
                                                                                        и корпоративное управление</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="news-speeches_wrap items_data"></div>
                                        </div>
                                        <div data-tabs-content="2" id="events_tab2" role="tabpanel"
                                            aria-labelledby="tab_2" style="display: none;">
                                            <div class="form-indent">
                                                <form>
                                                    <div class="search">
                                                        <div class="search_field"><input placeholder="Поиск по разделу"
                                                                type="text" value=""></div>
                                                        <div class="search_btn"><button type="button"
                                                                class="b-btn _blue">Искать</button></div>
                                                    </div>
                                                    <div class="filters_wrapper _block">
                                                        <div class="filters">
                                                            <div class="" id="DatesFilterRange_2">
                                                                <div class="filter-select-with-date"
                                                                    data-select-with-date="">
                                                                    <div class="filter" data-filter="select">
                                                                        <div class="datepicker-filter_placeholder">
                                                                            Выберите период</div><button
                                                                            class="filter_title" type="button"
                                                                            data-filter-title=""
                                                                            title="За&nbsp;все&nbsp;время"
                                                                            data-tooltip-content=" За&nbsp;все&nbsp;время">
                                                                            За&nbsp;все&nbsp;время</button>
                                                                        <div class="filter_content"
                                                                            data-filter-content=""
                                                                            style="display: none;">
                                                                            <div class="filter_content_top">
                                                                                <div class="filter_content_close"
                                                                                    data-filter-close=""></div>
                                                                            </div>
                                                                            <div class="filter-select">
                                                                                <div class="filter-select_option"><input
                                                                                        type="radio" checked=""
                                                                                        value="1" id="ui-id-15"
                                                                                        name="nm_ui-id-15"><label
                                                                                        for="ui-id-15">
                                                                                        За&nbsp;все&nbsp;время</label></div>
                                                                                <div class="filter-select_option"><label
                                                                                        for="ui-id-16">Выбрать
                                                                                        период</label><input
                                                                                        type="radio" value="4"
                                                                                        data-select-date=""
                                                                                        id="ui-id-16"
                                                                                        name="nm_ui-id-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="filter">
                                                                        <div class="datepicker-filter"
                                                                            data-datepicker-period-filter="data-datepicker-period-filter"
                                                                            data-min-date="" data-max-date=""
                                                                            data-default-value-from=""
                                                                            data-default-value-to=""><input
                                                                                class="datepicker-filter_input-from"
                                                                                type="hidden" id="ui-id-17"
                                                                                name="datepicker-from-ui-id-17"><input
                                                                                class="datepicker-filter_input-to"
                                                                                type="hidden" id="ui-id-18"
                                                                                name="datepicker-to-ui-id-18"><button
                                                                                class="datepicker-filter_button"
                                                                                type="button"><span>ДД.ММ.ГГГГ</span><span>
                                                                                    -
                                                                                </span><span>ДД.ММ.ГГГГ</span></button>
                                                                            <div class="datepicker-filter_modal">
                                                                                <div class="datepicker-filter_head">
                                                                                    <div class="datepicker-filter_close">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="datepicker-filter_tabs">
                                                                                    <div
                                                                                        class="datepicker-filter_tab-from">
                                                                                        <span>ДД.ММ.ГГГГ</span></div>
                                                                                    &nbsp;-&nbsp;<div
                                                                                        class="datepicker-filter_tab-to">
                                                                                        <span>ДД.ММ.ГГГГ</span></div>
                                                                                </div>
                                                                              
                                                                                <div
                                                                                    class="datepicker-filter_footer _right">
                                                                                    <button
                                                                                        class="datepicker-filter_clear-btn"
                                                                                        type="button"
                                                                                        id="ui-id-19">Сбросить</button><button
                                                                                        class="datepicker-filter_apply-btn"
                                                                                        type="button" id="ui-id-20"
                                                                                        disabled="disabled">Применить</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="news-speeches_wrap items_data"></div>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        @include('inc.__right_aside')
                    </div>
                

                    <!--/index-->

                 

                </div>
            </div>
        </div>
    </main>
@endsection
