<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Load 5 items per page (adjust as needed)
        $news = News::orderBy('published_at', 'desc')->paginate(5);

        // If it's an AJAX request (e.g. from the Load More button), return JSON with rendered HTML
        if ($request->ajax()) {
            $html = view('pages.frontend.news._news_items', compact('news'))->render();
            return response()->json(['html' => $html]);
        }

        return view('pages.frontend.news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('pages.frontend.news.show', compact('newsItem'));
    }
}
