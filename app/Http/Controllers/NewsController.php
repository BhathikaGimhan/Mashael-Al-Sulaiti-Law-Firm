<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Mail\SubscriberMail;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('newsManagement.enablePagination');

        $news = News::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $news = $news->paginate(config('newsManagement.paginateListSize'));
        } else {
            $news = $news->get();
        }

        return View('auth.admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('auth.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['slug' => Str::slug($request->title)]);

        $request->validate(
            [
                'slug' => 'required|unique:news,slug',
                'description' => 'required',
                'content' => 'required',
                'tags' => 'required',
                'image' => 'required',
                'lang_type' => 'required|in:en,fr,ar',
            ],
            [
                'slug.unique' => 'Title has already been taken'
            ]
        );


        $news = new News();
        $news->title = $request->input('title');
        $news->slug = Str::slug($request->title);
        $news->description = $request->input('description');
        $news->content = $request->input('content');
        $news->image = $request->input('image');
        $news->tags = $request->input('tags');
        $news->created_by = Auth::user()->id;
        $news->lang_type = $request->input('lang_type');

        $news->save();
        try {
            $subscribers = Subscriber::pluck('email')->toArray();
            Mail::to($subscribers)->send(new SubscriberMail([
                'subject' => 'New News Published Now',
                'message' => 'The Topic is '.$news->title,
                'link' => url('/news').'/'.$news->slug
            ]));
        } catch (Exception $e) {
            Log::error('Error for sending email: '.$e->getMessage());
        }
        return redirect()->route('admin.news.index')->with("success", "News saved successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('auth.admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);

        return view('auth.admin.news.edit', compact('news'));
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
        $request->merge(['slug' => Str::slug($request->title)]);
        $request->validate(
            [
                'slug' => 'required|unique:news,slug,' . $id,
                'description' => 'required',
                'tags' => 'required',
                'content' => 'required',
                'lang_type' => 'required|in:en,fr,ar',
            ],
            [
                'slug.unique' => 'Title has already been taken'
            ]
        );


        $news = News::find($id);
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->content = $request->input('content');
        $news->description = $request->input('description');
        $news->image = $request->input('image');
        $news->tags = $request->input('tags');
        $news->lang_type = $request->input('lang_type');

        $news->update();

        // return redirect('admin.news/' . $news->id)->with("success", "News updated successfully!");
        return redirect()->route('admin.news.show', ['news' => $news->id])->with("success", "News updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $news = News::findOrFail($id);
        $news->delete();

        // return redirect('/admin.news')->with("success", "News deleted successfully!");
        return redirect()->route('admin.news.index')->with("success", "News deleted successfully!");
    }

    public function publicNews()
    {

        // $news = News::orderBy('id', 'desc')->with('author')->get();
        $paginationEnabled = config('newsManagement.enablePagination');
        $locale = App::currentLocale();

        $news = News::orderBy('id', 'desc')->where('lang_type', $locale);

        if ($paginationEnabled) {
            $news = $news->paginate(config('newsManagement.paginateListSize'));
        } else {
            $news = $news->get();
        }

        return view('news.index', compact('news'));
    }

    public function publicNewsDetails($slug)
    {

        $news = News::where('slug', $slug)->first();
        if ($news) {
            $recentNews = News::orderBy('id', 'desc')->limit(5)->get();
            return view('news.show', compact('news','recentNews'));
        } else {
            abort(404);
        }
    }
}
