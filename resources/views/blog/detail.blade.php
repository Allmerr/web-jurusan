@extends('layouts.main')
@section('content')
    <div class="container my-5 d-flex justify-content-center">
        <div class="blog">
            <div class="header text-center">
                <h1>{{ $post->title }}</h1>
                <p class="mt-3 mb-4">
                    <span><i class="bi bi-calendar"></i> {{ $post->created_at }} / <i class="bi bi-person-fill"></i> {{ $post->author->name }}</span>
                </p>
            </div>
            <div class="content">
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img img-thumbnail mb-3">
                {!! $post->body !!}
            </div>
        </div> 
    </div>
@endsection