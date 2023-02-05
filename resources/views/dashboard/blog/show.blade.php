@extends('dashboard.layouts.main')

@section('container')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="blog-content">
                <h6 style="color:#696969">Create at {{ $post->created_at }}</h6>
                <p style="color: #acacac;">Made by <a style="color: #696969" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</i> in <a style="color: #696969" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                
                <div class="">
                    <a href="/dashboard/blog" class="badge bg-success text-decoration-none"><span data-feather="arrow-left"></span>Back</a>
                    <a href="/dashboard/blog/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span>Edit</a>
                    <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf 
                        <button class="badge bg-danger border-0" onclick="return confirm('are you sure want to delete this blog?')"><span data-feather="trash"></span>Delete</button>
                    </form>
                </div>
                <h1 class="mt-2 mb-3">{{ $post->title }}</h1>
                @if ($post->image)
                <img src="{{ asset("storage/" . $post->image) }}" alt="" class="mb-4" style="max-width:100%">
                @else
                <img src="https://source.unsplash.com/500x500" alt="" class="mb-4">                    
                @endif
                <br>
                {!! $post->body !!}
                <br>
            </div>
        </div>
    </div>
</div>
@endsection