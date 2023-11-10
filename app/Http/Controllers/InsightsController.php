<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Article;
use App\Models\Publication;


class InsightsController extends Controller
{
    public function latestNews()
    {
        $locale = App::currentLocale();

        $latestNews = News::orderBy('id', 'desc')->where('lang_type', $locale)->with('author')->take(6)->get();
        $latestArticles = Article::orderBy('id', 'desc')->where('lang_type', $locale)->take(6)->get();

        return view('news-and-articals', compact('latestNews', 'latestArticles'));

    }

    public function latestEvent()
    {
        $latestPublications = Publication::orderBy('id', 'desc')->take(6)->get();

        return view('events', compact('latestPublications'));

    }
}
