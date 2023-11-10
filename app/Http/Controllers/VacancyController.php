<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{

    /**
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $vacancies = Vacancy::all();

        return view('auth.admin.vacancy.index', compact('vacancies'));
    }

    public function show()
    {
        $vacancies = Vacancy::all();

        return view('careers', compact('vacancies'));
    }

     /**
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.admin.vacancy.create');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'position' => 'required|string|max:255',
            'opening_date' => 'required|date',
            'closing_date' => 'required|date',
        ]);

        Vacancy::create($validatedData);

        return redirect()->route('admin.vacancies.index')
            ->with('success', 'Vacancy created successfully.');
    }

    /**
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\View\View
     */
    public function edit(Vacancy $vacancy)
    {
        return view('auth.admin.vacancy.edit', compact('vacancy'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $validatedData = $request->validate([
            'position' => 'required|string|max:255',
            'opening_date' => 'required|date',
            'closing_date' => 'required|date',

        ]);

        $vacancy->update($validatedData);

        return redirect()->route('admin.vacancies.index')
            ->with('success', 'Vacancy updated successfully.');
    }

    /**
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()->route('admin.vacancies.index')
            ->with('success', 'Vacancy deleted successfully.');
    }
}
