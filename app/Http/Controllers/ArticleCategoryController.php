<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('articlecategory.enablePagination');
        $paginateListSize = config('articlecategory.paginateListSize');
        // $paginationEnabled = true;
        // $paginateListSize = 1;

        $articleCategories = ArticleCategory::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $articleCategories = $articleCategories->paginate($paginateListSize);
        } else {
            $articleCategories = $articleCategories->get();
        }


        return View('auth.admin.articlecategory.allarticlecategories', compact('articleCategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('auth.admin.articlecategory.createarticlecategory');
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
            'article_category_name' => 'required',
            'article_category_image' => 'required',
        ]);


        $articleCategory = new ArticleCategory();
        $articleCategory->article_category_name = $request->input('article_category_name');
        $articleCategory->article_category_slug = Str::slug($request->article_category_name);
        $articleCategory->article_category_image = $request->input('article_category_image');

        $articleCategory->save();

        return redirect()->route('admin.article-categories.index')->with("success", "Article Category saved successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articleCategory = ArticleCategory::findOrFail($id);

        return view('auth.admin.articlecategory.showarticlecategory', compact('articleCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleCategory = ArticleCategory::findOrFail($id);

        return view('auth.admin.articlecategory.editarticlecategory', compact('articleCategory'));
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
            'article_category_name' => 'required',

        ]);


        $articleCategory = ArticleCategory::find($id);
        $articleCategory->article_category_name = $request->article_category_name;
        $articleCategory->article_category_slug = Str::slug($request->article_category_name);
        $articleCategory->article_category_image = $request->input('article_category_image');

        $articleCategory->update();

        // return redirect('admin.article-categories/' . $articleCategory->id)->with("success", "Article Category updated successfully!");
        return redirect()->route('admin.article-categories.show', ['article_category' => $articleCategory->id])->with("success", "Article Category updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $articleCategory = ArticleCategory::findOrFail($id);
        $articleCategory->delete();

        // return redirect('/admin.article-categories')->with("success", "Article Category deleted successfully!");
        return redirect()->route('admin.article-categories.index')->with("success", "Article Category deleted successfully!");

    }
}
