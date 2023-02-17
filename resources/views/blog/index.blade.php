@extends('layouts.main')
@section('content')
    {{-- nav-mading --}}
    <div class="nav-mading my-5 p-3">
        <div class="container nav-mading-main">
            <div class="left">
                <h1>Blog Siswa</h1>
                <h4>Komunitas Siswa Berbagi Pengetahuan</h4>
                <div>
                    <a href="#" class="btn btn-secondary bg-transparent text-dark border border-secondary fs-5">Post Blog</a>
                </div>
            </div>
            <div class="right">
                <img src="https://skspace.sgp1.cdn.digitaloceanspaces.com/webAssets/hero/forum.png" alt="">
            </div>
        </div>
    </div>
    {{-- blog --}}
    <div class="container my-5">
        <div class="my-card-container mb-5 pb-5">
            @foreach ($posts as $post)
            <div class="card">
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text" style="color:#acacac;">Create by <a href="" style="color: #696969"></a> by <a href="" style="color: #696969">{{ $post->author->name }}</a></p>
                    <p style="color:#acacac;">Created at<span style="color: #696969"> {{ $post->created_at }}</span></p>
                    <a class="border border-secondary p-1 rounded text-dark text-decoration-none" href="/blog/detail/{{ $post->slug }}">See More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection