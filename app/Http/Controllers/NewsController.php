<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('published_at', 'desc')->get();

        return view('pages.frontend.news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);

        return view('pages.frontend.news.show', compact('newsItem'));
    }
}
