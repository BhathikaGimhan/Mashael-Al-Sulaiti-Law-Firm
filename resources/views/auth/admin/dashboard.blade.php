@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Dashboard')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Dashboard</h1>
    </div>
    <section class="py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div>
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalArticleCategories }}</h1>
                        <p class="fw-bold my-0">Articles Categories</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalArticles }}</h1>
                        <p class="fw-bold my-0">Total Articles</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalNews }}</h1>
                        <p class="fw-bold mb-0">Total News</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalPublications }}</h1>
                        <p class="fw-bold mb-0">Total Publications</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalJudicialSystems }}</h1>
                        <p class="fw-bold mb-0">
                            Total JudicialSystems</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalQatariLaws }}</h1>
                        <p class="fw-bold mb-0">Total QatariLaws</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                        <h1 class="display-4 mt-0 mb-1">{{ $totalVacancies }}</h1>
                        <p class="fw-bold mb-0">Total Vacancies</p>
                    </div>
                </div>
                @if (Auth::user()->hasRole('admin'))
                    <div class="col-6 col-md-4">
                        <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                            <h1 class="display-4 mt-0 mb-1">{{ $totalUsers }}</h1>
                            <p class="fw-bold mb-0">Total Users</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0 shadow-dashbord pt-3 pb-4 rounded-1 text-center mb-4">
                            <h1 class="display-4 mt-0 mb-1">{{ $totalSubscribers }}</h1>
                            <p class="fw-bold mb-0">Total Subscribers</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
