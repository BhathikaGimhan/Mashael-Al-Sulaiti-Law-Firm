<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\JudicialSystem;
use App\Models\News;
use App\Models\Publication;
use App\Models\QatariLaw;
use App\Models\User;
use App\Models\Vacancy;
use App\Models\Subscriber;


class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::count();
        $articleCategories = ArticleCategory::count();
        $judicialSystems = JudicialSystem::count();
        $news = News::count();
        $publication = Publication::count();
        $qatariLaws = QatariLaw::count();
        $users =User::count();
        $vacancies =Vacancy::count();
        $subscribers =Subscriber::count();


        return view('auth.admin.dashboard', [
            'totalArticles' => $articles,
            'totalJudicialSystems' => $judicialSystems,
            'totalNews' => $news,
            'totalPublications' => $publication,
            'totalQatariLaws' => $qatariLaws,
            'totalArticleCategories' => $articleCategories,
            'totalUsers' => $users,
            'totalVacancies'=> $vacancies,
            'totalSubscribers'=> $subscribers,


        ]);
    }

}
