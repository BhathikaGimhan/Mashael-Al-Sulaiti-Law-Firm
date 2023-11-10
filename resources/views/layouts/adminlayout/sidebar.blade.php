<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="position-lg-sticky top-0">
        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button"
                data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
            <div class="offcanvas-body">
                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5"><img class="d-block rounded-circle mb-2"
                        src="/assets/img/default-user.png" width="80" alt="{{ Auth::user()->name }}">
                    <h3 class="h5 mb-1">{{ Auth::user()->name }}</h3>
                    <p class="fs-sm text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Manage</h4>
                    <a class="nav-link fw-semibold py-2 px-0" href="/manage/article-categories"><i
                            class="ai-grid fs-5 opacity-60 me-2"></i>Article Categories</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="/manage/articles"><i
                            class="ai-movie fs-5 opacity-60 me-2"></i>Articles</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('admin.news.index') }}"><i
                            class="ai-square-info fs-5 opacity-60 me-2"></i>News</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="/manage/publications"><i
                            class="ai-note fs-5 opacity-60 me-2"></i>Publications</a>
                    <a class="nav-link fw-semibold py-2 px-0 d-none" href="/manage/qatari-laws"><i
                            class="ai-star fs-5 opacity-60 me-2"></i>Qatari Laws</a>
                    <a class="nav-link fw-semibold py-2 px-0 d-none" href="/manage/judicial-systems"><i
                            class="ai-square-info fs-5 opacity-60 me-2"></i>Judicial Systems</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('admin.vacancies.index') }}"><i
                            class="ai-user-plus fs-5 opacity-60 me-2"></i>Vacancies</a>
                    @if (Auth::user()->hasRole('admin'))
                        <a class="nav-link fw-semibold py-2 px-0" href="/manage/users"><i
                                class="ai-user-group fs-5 opacity-60 me-2"></i>Users</a>
                        <a class="nav-link fw-semibold py-2 px-0" href="/manage/subscribers"><i
                                class="ai-user-check fs-5 opacity-60 me-2"></i>Subscribers</a>
                    @endif
                </nav>

                <nav class="nav flex-column">
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="ai-logout fs-5 opacity-60 me-2"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </nav>
            </div>
        </div>
    </div>
</aside>
