<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Publication;


class PublicPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginationEnabled = config('publications.enablePagination');
        $locale = App::currentLocale();

        $publications = Publication::orderBy('id', 'desc')->where('lang_type', $locale);

        if ($paginationEnabled) {
            $publications = $publications->paginate(config('publications.paginateListSize'));
        } else {
            $publications = $publications->get();
        }

        return View('publications', compact('publications'));
    }

    public function show($publicationSlug)
    {

        $publication = Publication::where('publication_slug', $publicationSlug)->first();
        $recentPublications = Publication::where('publication_slug', $publicationSlug)->first();

        $locale = App::currentLocale();
    $recentPublications = Publication::orderBy('created_at', 'desc')->where('lang_type', $locale)->take(5)->get();
    return view('publication', compact('publication', 'recentPublications'));


    }

}
