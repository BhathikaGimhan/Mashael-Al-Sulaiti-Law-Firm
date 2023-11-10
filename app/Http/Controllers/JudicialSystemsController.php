<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\JudicialSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JudicialSystemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('JudicialSystemsManagement.enablePagination');

        $judicialSystems = JudicialSystem::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $judicialSystems = $judicialSystems->paginate(config('JudicialSystemsManagement.paginateListSize'));
        } else {
            $judicialSystems = $judicialSystems->get();
        }

        return View('auth.admin.judicial-systems.index', compact('judicialSystems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('auth.admin.judicial-systems.create');
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
                'slug' => 'required|unique:Judicial_Systems,slug',
                'description' => 'required',
                'content' => 'required',
                'image' => 'required',
            ],
            [
                'slug.unique' => 'Title has already been taken'
            ]
        );


        $judicialSystem = new JudicialSystem();
        $judicialSystem->title = $request->input('title');
        $judicialSystem->slug = Str::slug($request->title);
        $judicialSystem->description = $request->input('description');
        $judicialSystem->content = $request->input('content');
        $judicialSystem->image = $request->input('image');
        $judicialSystem->created_by = Auth::user()->id;
        $judicialSystem->save();

        return redirect()->route('admin.judicial-systems.index')->with("success", "Judicial Systems saved successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $judicialSystem = JudicialSystem::findOrFail($id);

        return view('auth.admin.judicial-systems.show', compact('judicialSystem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judicialSystem = JudicialSystem::findOrFail($id);

        return view('auth.admin.judicial-systems.edit', compact('judicialSystem'));
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
                'slug' => 'required|unique:Judicial_Systems,slug,' . $id,
                'description' => 'required',
                'content' => 'required',
            ],
            [
                'slug.unique' => 'Title has already been taken'
            ]
        );


        $judicialSystem = JudicialSystem::find($id);
        $judicialSystem->title = $request->title;
        $judicialSystem->slug = Str::slug($request->title);
        $judicialSystem->description = $request->input('description');
        $judicialSystem->content = $request->input('content');
        $judicialSystem->image = $request->input('image');
        $judicialSystem->update();

        // return redirect('admin.judicial-systems/' . $judicialSystem->id)->with("success", "Judicial Systems updated successfully!");
        return redirect()->route('admin.judicial-systems.show', ['judicial_system' => $judicialSystem->id])->with("success", "Judicial Systems updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $judicialSystem = JudicialSystem::findOrFail($id);
        $judicialSystem->delete();

        // return redirect('/admin.judicial-systems')->with("success", "Judicial Systems deleted successfully!");
        return redirect()->route('admin.judicial-systems.index')->with("success", "Judicial Systems deleted successfully!");
    }

    public function publicJudicialSystems()
    {

        $judicialSystems = JudicialSystem::orderBy('id', 'desc')->with('createdBy')->get();

        return view('judicial-systems.index', compact('judicialSystems'));
    }

    public function publicJudicialSystemDetails($slug)
    {

        $judicialSystem = JudicialSystem::where('slug', $slug)->with('createdBy')->first();
        if ($judicialSystem) {
            $relatedSystems = JudicialSystem::orderBy('id', 'desc')->limit(5)->get();
            return view('judicial-systems.show', compact('judicialSystem','relatedSystems'));
        } else {
            abort(404);
        }
    }
}
