<div class="ms-4 mt-3">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            @if ($news->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="ai-arrow-left"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $news->previousPageUrl() }}" tabindex="-1"><i
                            class="ai-arrow-left"></i></a>
                </li>
            @endif

            @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                <li class="page-item{{ $page === $news->currentPage() ? ' active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            @if ($news->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $news->nextPageUrl() }}"><i class="ai-arrow-right"></i></a>
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
