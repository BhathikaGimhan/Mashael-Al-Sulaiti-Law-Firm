<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscriber;
use App\Mail\SubscriberMail;
use Mail;


class PublicationController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('publications.enablePagination');

        $publications = Publication::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $publications = $publications->paginate(config('publications.paginateListSize'));
        } else {
            $publications = $publications->get();
        }

        return View('auth.admin.publication.allpublications', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.admin.publication.createpublication');
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
            'publication_title' => 'required',
            'featured_image_public_path' => 'required',
            'description' => 'required',
            'content' => 'required',
            'lang_type' => 'required|in:en,fr,ar',
        ]);


        $publication = new Publication();
        $publication->publication_title = $request->input('publication_title');
        $publication->publication_file_path = $request->input('publication_file_path');
        $publication->description = $request->input('description');
        $publication->content = $request->input('content');
        $publication->publication_slug = Str::slug($request->input('publication_title'));
        $publication->featured_image_public_path = $request->input('featured_image_public_path');
        $publication->lang_type = $request->input('lang_type');

        $publication->save();
        try {
            $subscribers = Subscriber::pluck('email')->toArray();
            Mail::to($subscribers)->send(new SubscriberMail([
                'subject' => 'New Publication Published Now',
                'message' => 'The Topic is '.$publication->publication_title,
                'link' => url('/publications').'/'.$publication->publication_slug
            ]));
        } catch (Exception $e) {
            Log::error('Error for sending email: '.$e->getMessage());
        }

        return redirect()->route('admin.publications.index')->with("success", "Publication saved successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::find($id);

        return view('auth.admin.publication.showpublication', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $publication = Publication::find($id);
        return view('auth.admin.publication.editpublication', compact('publication'));
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
            'publication_title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'lang_type' => 'required|in:en,fr,ar',
        ]);


        $publication = Publication::find($id);
        $publication->publication_title = $request->input('publication_title');
        $publication->publication_file_path = $request->input('publication_file_path');
        $publication->description = $request->input('description');
        $publication->content = $request->input('content');
        $publication->publication_slug = Str::slug($request->input('publication_title'));
        $publication->featured_image_public_path = $request->input('featured_image_public_path');
        $publication->lang_type = $request->input('lang_type');

        $publication->update();

        return redirect()->route('admin.publications.show', ['publication' => $publication->id])->with("success", "Publication updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $publication = Publication::findOrFail($id);

        $publication->delete();

        return redirect()->route('admin.publications.index')->with("success", "Publication deleted successfully!");

    }
}
