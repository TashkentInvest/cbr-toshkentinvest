@php
    // Use the fully qualified class name since 'use' statements are not allowed in Blade templates
    $response = \Illuminate\Support\Facades\Http::get('https://cbu.uz/uz/arkhiv-kursov-valyut/json/');

    // Check if the request was successful
    if ($response->successful()) {
        $exchangeRates = $response->json();
    } else {
        // Handle the error accordingly
        $exchangeRates = [];
    }

    $currencies = ['USD', 'EUR', 'RUB'];

    // Filter for specific currencies
    $filteredRates = array_filter($exchangeRates, function ($rate) use ($currencies) {
        return in_array($rate['Ccy'], $currencies);
    });
@endphp

<div class="home-main_aside" style="min-height: 1974.31px">
    <div class="home-main_sticky" data-home-main-aside-sticky="">

        <div class="main-indicator_rates">
            <h4>Марказий банк</h4>
            <div class="main-indicator_rates-table">
                <div class="main-indicator_rates-head">
                    <div class="col-md-2 col-xs-7">
                        <a target="_blank" href="https://cbu.uz/ru/">Курсы валют</a>
                    </div>
                    <div class="col-md-2 col-xs-7 _right">
                        <a href="#">{{ date('d.m.Y') }}</a>
                    </div>
                    <div class="col-md-2 col-xs-7 _right">
                        <a href="#">{{ date('d.m.Y', strtotime('-1 day')) }}</a>
                    </div>
                </div>
                @foreach ($filteredRates as $rate)
                    @php
                        $currentRate = floatval($rate['Rate']);
                        $diff = floatval($rate['Diff']);
                        $previousRate = $currentRate - $diff;
                    @endphp
                    <div class="main-indicator_rate">
                        <div class="col-md-2 col-xs-9 _{{ strtolower($rate['Ccy']) }}">
                            {{ $rate['Ccy'] }},&nbsp;
                            <span>
                                1
                                @if ($rate['Ccy'] == 'USD')
                                    $
                                @elseif($rate['Ccy'] == 'EUR')
                                    €
                                @elseif($rate['Ccy'] == 'RUB')
                                    ₽
                                @endif
                            </span>
                        </div>
                        <div class="col-md-2 col-xs-9 _right mono-num">
                            {{ number_format($currentRate, 2, ',', ' ') }} UZS
                        </div>
                        <div class="col-md-2 col-xs-9 _right mono-num">
                            {{ number_format($previousRate, 2, ',', ' ') }} UZS
                        </div>
                        <div class="main-indicator_tooltip" id="V_{{ $rate['Ccy'] }}">
                            <div class="main-indicator_tooltip-head">
                                <button class="main-indicator_tooltip-head-btn _left"></button>
                                <div class="main-indicator_tooltip-head-text">
                                    {{ $rate['Date'] }}
                                </div>
                                <button class="main-indicator_tooltip-head-btn _right _disabled"></button>
                            </div>
                            <table class="main-indicator_tooltip-table">
                                <tr>
                                    <td class="_day">День</td>
                                    <td class="_date">{{ $rate['Date'] }}</td>
                                    <td>{{ number_format($currentRate, 2, ',', ' ') }}&nbsp;UZS</td>
                                    <td class="{{ $diff >= 0 ? '_green' : '_red' }}">
                                        {{ $diff >= 0 ? '+' : '' }}{{ number_format($diff, 2, ',', ' ') }}&nbsp;UZS
                                    </td>
                                </tr>
                            </table>
                            <div class="main-indicator_tooltip-footer">
                                Официальный курс Банка Узбекистана
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <a class="main-indicator_rates-link" href="/key-indicators/">Все показатели</a> --}}
        </div>
        <div class="home-main_resources d-none d-md-block">
            <div class="external-resources">
                <div class="subscribe-block" style="background: url('https://www.spot.uz/media/img/2024/08/0QsMmu17234502958814_l.jpg') no-repeat center center / cover; padding: 20px; color: #fff; text-align: center; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div class="subscribe-block_title" style="font-size: 24px; font-weight: bold;">Интерактивная карта</div>
                    <div class="subscribe-block_subtitle" style="font-size: 16px; margin-top: 10px;">Новости и обновления сайта</div>
                    <a class="btn _medium _outline" target="_blank" href="https://projects.toshkentinvest.uz" style="margin-top: 20px; padding: 10px 20px; font-size: 16px; border: 2px solid #fff; color: #fff; text-decoration: none; background-color: transparent;">Узнать больше</a>
                </div>
            </div>
        </div>
        

    </div>
</div>
</div>
</div>
