<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('articles.enablePagination');

        $articles = Article::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $articles = $articles->paginate(config('articles.paginateListSize'));
        } else {
            $articles = $articles->get();
        }

        return View('auth.admin.article.allarticles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articleCategories = ArticleCategory::all();

        return view('auth.admin.article.createarticle', compact('articleCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'article_title' => 'required',
            'article_content' => 'required',
            'article_description' => 'required',
            'featured_image_public_path' => 'required',
            'article_category_id' => 'required',
            'lang_type' => 'required|in:en,fr,ar',
        ]);


        $article = new Article();
        $article->created_by = Auth::user()->id;
        $article->article_title = $request->input('article_title');
        $article->article_description = $request->input('article_description');
        $article->article_content = $request->input('article_content');
        $article->article_slug = Str::slug($request->input('article_title'));
        $article->article_category_id = $request->article_category_id;
        $article->featured_image_public_path = $request->input('featured_image_public_path');
        $article->lang_type = $request->input('lang_type');

        $article->save();
        try {
            $subscribers = Subscriber::pluck('email')->toArray();
            Mail::to($subscribers)->send(new SubscriberMail([
                'subject' => 'New Article Published Now',
                'message' => 'The Topic is '.$article->article_title,
                'link' => url('/articles').'/'.$article->article_slug
            ]));
        } catch (Exception $e) {
            Log::error('Error for sending email: '.$e->getMessage());
        }
        return redirect()->route('admin.articles.index')->with("success", "Article saved successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        //dd($blog);

        return view('auth.admin.article.showarticle', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = Article::find($id);
        $articleCategories = ArticleCategory::all();
        return view('auth.admin.article.editarticle', compact('article', 'articleCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'article_title' => 'required',
            'article_content' => 'required',
            'lang_type' => 'required|in:en,fr,ar',
        ]);


        $article = Article::find($id);
        $article->article_title = $request->input('article_title');
        $article->article_slug = Str::slug($request->article_title);
        $article->article_description = $request->input('article_description');
        $article->article_content = $request->input('article_content');
        $article->article_category_id = $request->article_category_id;
        $article->featured_image_public_path = $request->input('featured_image_public_path');
        $article->lang_type = $request->input('lang_type');

        $article->update();

        return redirect()->route('admin.articles.show', ['article' => $article->id])->with("success", "Article updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $article = Article::findOrFail($id);

        $article->delete();

        return redirect()->route('admin.articles.index')->with("success", "Article deleted successfully!");

    }
}
