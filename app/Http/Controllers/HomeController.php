<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Article;
use App\Models\Publication;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::currentLocale();

        $latestNews = News::orderBy('id', 'desc')->where('lang_type', $locale)->with('author')->take(1)->get();
        $latestArticles = Article::orderBy('id', 'desc')->where('lang_type', $locale)->take(1)->get();
        $latestPublications = Publication::orderBy('id', 'desc')->where('lang_type', $locale)->take(1)->get();

        return view('home', compact('latestNews', 'latestArticles', 'latestPublications'));

    }

}
