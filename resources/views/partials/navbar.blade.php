
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <div class="pra-navbar p-2">
            <img src="img/logosmkn.png" alt="">
            <img src="img/logorpl.png" alt="">
        </div>
        <a class="navbar-brand brand" href="/">Rekayasa Perangkat Lunak</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/diskusi">Diskusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mading">Mading</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Akademik
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Kegiatan pembelajaran</a></li>
                            <li><a class="dropdown-item" href="#">Fasilitas</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Civitas
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pengajar">Pengajar</a></li>
                            <li><a class="dropdown-item" href="#">Alumni</a></li>
                        </ul>
                    </div>
                </li>
                @auth
                <li>
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (auth()->user()->photo != 'img/nopp.jpg')
                                <img src="{{ asset( 'storage/' . auth()->user()->photo ) }}" alt="" class="rounded-circle">
                            @else
                                <img src="{{ asset( auth()->user()->photo ) }}" alt="" class="rounded-circle">
                            @endif
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
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>