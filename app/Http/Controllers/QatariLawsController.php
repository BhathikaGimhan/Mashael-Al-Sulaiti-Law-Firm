<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\QatariLaw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QatariLawsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('qatariLawsManagement.enablePagination');

        $qatariLaws = QatariLaw::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $qatariLaws = $qatariLaws->paginate(config('qatariLawsManagement.paginateListSize'));
        } else {
            $qatariLaws = $qatariLaws->get();
        }

        return View('auth.admin.qatari-laws.index', compact('qatariLaws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('auth.admin.qatari-laws.create');
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
                'slug' => 'required|unique:qatari_laws,slug',
                'description' => 'required',
                'content' => 'required',
                'image' => 'required',
            ],
            [
                'slug.unique' => 'Title has already been taken'
            ]
        );


        $qatariLaw = new QatariLaw();
        $qatariLaw->title = $request->input('title');
        $qatariLaw->slug = Str::slug($request->title);
        $qatariLaw->description = $request->input('description');
        $qatariLaw->content = $request->input('content');
        $qatariLaw->image = $request->input('image');
        $qatariLaw->created_by = Auth::user()->id;
        $qatariLaw->save();

        return redirect()->route('admin.qatari-laws.index')->with("success", "Qatari laws saved successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qatariLaw = QatariLaw::findOrFail($id);

        return view('auth.admin.qatari-laws.show', compact('qatariLaw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qatariLaw = QatariLaw::findOrFail($id);

        return view('auth.admin.qatari-laws.edit', compact('qatariLaw'));
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
                'slug' => 'required|unique:qatari_laws,slug,' . $id,
                'description' => 'required',
                'content' => 'required',
            ],
            [
                'slug.unique' => 'Title has already been taken'
            ]
        );


        $qatariLaw = QatariLaw::find($id);
        $qatariLaw->title = $request->title;
        $qatariLaw->slug = Str::slug($request->title);
        $qatariLaw->description = $request->input('description');
        $qatariLaw->content = $request->input('content');
        $qatariLaw->image = $request->input('image');
        $qatariLaw->update();

        // return redirect('admin.qatari-laws/' . $qatariLaw->id)->with("success", "Qatari laws updated successfully!");
        return redirect()->route('admin.qatari-laws.show', ['qatari_law' => $qatariLaw->id])->with("success", "Qatari laws updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $qatariLaw = QatariLaw::findOrFail($id);
        $qatariLaw->delete();

        // return redirect('/admin.qatari-laws')->with("success", "Qatari laws deleted successfully!");
        return redirect()->route('admin.qatari-laws.index')->with("success", "Qatari laws deleted successfully!");
    }

    public function publicQatariLaws()
    {

        $qatariLaws = QatariLaw::orderBy('id', 'desc')->with('createdBy')->get();

        return view('qatari-laws.index', compact('qatariLaws'));
    }

    public function publicQatariLawDetails($slug)
    {

        $qatariLaw = QatariLaw::where('slug', $slug)->with('createdBy')->first();
        if ($qatariLaw) {
            $relatedLaws = QatariLaw::orderBy('id', 'desc')->limit(5)->get();
            return view('qatari-laws.show', compact('qatariLaw','relatedLaws'));
        } else {
            abort(404);
        }
    }
}
