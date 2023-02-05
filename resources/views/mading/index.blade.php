@extends('layouts.main')
@section('content')
{{-- nav-mading --}}
<div class="nav-mading my-5 p-3">
    <div class="container nav-mading-main">
        <div class="left">
            <h1>Karya Siswa</h1>
            <h4>Sharing Karya Dan Dapatkan Feedback</h4>
            <div>
                <a href="#" class="btn btn-secondary bg-transparent text-dark border border-secondary fs-5">Post Karya</a>
            </div>
        </div>
        <div class="right">
            <img src="https://skspace.sgp1.cdn.digitaloceanspaces.com/webAssets/hero/mading.png" alt="">
        </div>
    </div>
</div>
{{-- mading --}}
<div class="mading">
    <div class="container cards-mading">
        <a class="card-mading text-decoration-none text-dark" href="">
            <div class="card-header">
                <h3>Aplikasi Penghitung Keuangan Modern</h3>
            </div>
            <div class="card-body">
                <img src="https://source.unsplash.com/200x200" alt="">
                <div class="card-body-right">
                    <h6>@kevinalmer</h6>
                    <p>2 hari lalu</p>
                </div>
            </div>
        </a>
        <a class="card-mading text-decoration-none text-dark" href="">
            <div class="card-header">
                <h3>Aplikasi Penghitung Keuangan Modern</h3>
            </div>
            <div class="card-body">
                <img src="https://source.unsplash.com/200x200" alt="">
                <div class="card-body-right">
                    <h6>@kevinalmer</h6>
                    <p>2 hari lalu</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection