<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container"><a class="navbar-brand pe-sm-3" href="/dashboard">
            <img src="/assets/img/logo-transparent/mashael.svg" alt="" style="height: 40px">
        </a>

        <!-- User signed in state. Account dropdown on screens > 576px-->
        <div class="dropdown nav d-none d-sm-block order-lg-3"><a class="nav-link d-flex align-items-center p-0"
                href="#" data-bs-toggle="dropdown" aria-expanded="false"><img class="border rounded-circle"
                    src="/assets/img/default-user.png" width="48" alt="{{ Auth::user()->name }}">
                <div class="ps-2">
                    <div class="fs-xs lh-1 opacity-60">Hello,</div>
                    <div class="fs-sm dropdown-toggle">{{ Auth::user()->name }}</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end my-1">
                <a class="dropdown-item" href="/dashboard"><i class="ai-layer fs-lg opacity-70 me-2"></i>Dashboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="ai-logout fs-lg opacity-70 me-2"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </div>
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                <!-- User signed in state. Account dropdown on screens > 576px-->
                <li class="nav-item dropdown d-sm-none border-top mt-2 pt-2"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown" aria-expanded="false"><img class="border rounded-circle"
                            src="assets/img/avatar/01.jpg" width="48" alt="Isabella Bocouse">
                        <div class="ps-2">
                            <div class="fs-xs lh-1 opacity-60">Hello,</div>
                            <div class="fs-sm dropdown-toggle">{{ Auth::user()->name }}</div>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/dashboard"><i
                                class="ai-layer fs-lg opacity-70 me-2"></i>Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            <i class="ai-logout fs-lg opacity-70 me-2"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
