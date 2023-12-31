<!-- Navbar -->
<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last">
            <!-- User -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                   aria-label="Open user menu">
                    <span class="avatar avatar-sm"
                          style="background-image: url('{{ asset('assets/static/avatars/000m.jpg') }}')"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ auth()->user()->name }}</div>
                    </div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>
        </div>
        <!-- Search -->
        <div class="collapse navbar-collapse" id="navbar-menu">
        </div>
    </div>
</header>
