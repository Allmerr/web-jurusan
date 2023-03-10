@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All {{ auth()->user()->name }}'s Blog</h1>
  </div>
  {{-- @dd($posts) --}}
  <div class="table-responsive">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
    @endif
    <a class="badge bg-primary border-0 text-decoration-none" href="/dashboard/blog/create"><i data-feather="plus-circle"></i> Add Blog</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="/dashboard/blog/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>    
                    <a href="/dashboard/blog/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>    
                    <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf 
                      <button class="badge bg-danger border-0" onclick="return confirm('are you sure want to delete this blog?')"><span data-feather="trash"></span></button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection