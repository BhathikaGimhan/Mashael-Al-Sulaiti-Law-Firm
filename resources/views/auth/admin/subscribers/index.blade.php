@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Subscribers')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>All Subscribers</h1>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            @include('auth.admin.successmessage')
            <!-- Table START -->
            @if (count($subscribers) > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead;>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $subscriber->email }}</td>
                                        <td>
                                            @if (Auth::user()->hasRole('admin'))
                                                <button type="button" class="btn btn-danger btn-icon me-1 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                    data-url="{{ route('subscribers.unSubscribe', $subscriber->id) }}">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            @endif
        </div>
        <div class="ms-4 mt-3">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    @if ($subscribers->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                    class="ai-arrow-left"></i></a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $subscribers->previousPageUrl() }}" tabindex="-1"><i
                                    class="ai-arrow-left"></i></a>
                        </li>
                    @endif

                    @foreach ($subscribers->getUrlRange(1, $subscribers->lastPage()) as $page => $url)
                        <li class="page-item{{ $page === $subscribers->currentPage() ? ' active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($subscribers->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $subscribers->nextPageUrl() }}"><i class="ai-arrow-right"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                    class="ai-arrow-right"></i></a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </section>
    @include('auth.admin.deletemodal')
@endsection
