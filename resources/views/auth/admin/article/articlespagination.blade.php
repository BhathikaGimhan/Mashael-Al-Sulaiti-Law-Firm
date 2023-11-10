<div class="ms-4 mt-3">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            @if ($articles->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="ai-arrow-left"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $articles->previousPageUrl() }}" tabindex="-1"><i
                            class="ai-arrow-left"></i></a>
                </li>
            @endif

            @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                <li class="page-item{{ $page === $articles->currentPage() ? ' active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            @if ($articles->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $articles->nextPageUrl() }}"><i class="ai-arrow-right"></i></a>
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
