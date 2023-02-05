@extends('layouts.main')
@section('content')
{{-- nav-mading --}}
<div class="nav-mading my-5 p-3">
    <div class="container nav-mading-main">
        <div class="left">
            <h1>Forum Siswa</h1>
            <h4>Komunitas Siswa Berbagi Pengetahuan</h4>
            <div>
                <a href="#" class="btn btn-secondary bg-transparent text-dark border border-secondary fs-5">Post Pertanyaan</a>
            </div>
        </div>
        <div class="right">
            <img src="https://skspace.sgp1.cdn.digitaloceanspaces.com/webAssets/hero/forum.png" alt="">
        </div>
    </div>
</div>
{{-- mading --}}
<div class="mading">
    <div class="container cards-mading">
        <div class="card-mading text-dark" href="">
            <a href="" class="card-header text-decoration-none">
                <h3>Aplikasi Penghitung Keuangan Modern</h3>
            </a>
            <div class="card-body mb-2">
                <img src="https://source.unsplash.com/200x200" alt="">
                <div class="card-body-right">
                    <h6>@kevinalmer</h6>
                    <p>2 hari lalu</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="text-decoration-none bg-secondary text-white p-1 rounded d-blok">#JS</a>
                <a href="#" class="text-decoration-none bg-secondary text-white p-1 rounded d-blok">#JS</a>
            </div>
        </div>
    </div>
</div>
@endsection