<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;


class PublicArticleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('articles.enablePagination');
        $locale = App::currentLocale();

        $articles = Article::orderBy('id', 'desc')->where('lang_type', $locale) ;

        if ($paginationEnabled) {
            $articles = $articles->paginate(config('articles.paginateListSize'));
        } else {
            $articles = $articles->get();
        }

        return View('articles', compact('articles'));
    }

    public function show($articleSlug)
    {

        $article = Article::where('article_slug', $articleSlug)->first();
        $recentArticles = Article::where('article_slug', $articleSlug)->first();

        $locale = App::currentLocale();
    $recentArticles = Article::orderBy('created_at', 'desc')->where('lang_type', $locale)->take(5)->get();
    return view('article', compact('article', 'recentArticles'));


    }


}
