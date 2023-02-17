<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">RPL</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-item w-100"></div>
    <div class="nav-item text-nowrap">
        <div class="dropdown text-white">
            <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="" class="rounded-circle">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile/{{ auth()->user()->username }}">Profile</a></li>
                <li><a class="dropdown-item" href="/">Home</a></li>
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
            </ul>
        </div>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button class="nav-link px-3 bg-dark border-0" type="submit"><span data-feather="log-out"></span></i>Logout</button>
            </form>
        </div>
    </div>
</header>