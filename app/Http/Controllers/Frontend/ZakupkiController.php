<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZakupkiController extends Controller
{
    private $zakupki = [
        [
            'id' => 1,
            'title' => 'Вниманию независимым организациям, оказывающим профессиональные услуги по проведению оценки системы корпоративного управления',
            'date' => '15.05.2024',
            'description' => 'Акционерное общество «Компания Ташкент Инвест» согласно ст. 49, 50, 51 Закона Республики Узбекистан...',
            'contact' => 'Телефон: (+99871) 210-02-61, E-mail: info@toshkentinvest.uz'
        ],
        [
            'id' => 2,
            'title' => 'Вниманию независимым организациям, оказывающим аудиторские услуги',
            'date' => '15.05.2024',
            'description' => 'Акционерное общество «Компания Ташкент Инвест» согласно ст. 49, 50, 51 Закона Республики Узбекистан...',
            'contact' => 'Телефон: (+99871) 210-02-61, E-mail: info@toshkentinvest.uz'
        ]
    ];

    public function index()
    {
        return view('pages.frontend.zakupki.index', ['zakupki' => $this->zakupki]);
    }

    public function show($id)
    {
        $zakupka = collect($this->zakupki)->firstWhere('id', $id);

        if (!$zakupka) {
            abort(404, 'Zakupka not found');
        }

        return view('pages.frontend.zakupki.show', ['zakupka' => $zakupka]);
    }
}
