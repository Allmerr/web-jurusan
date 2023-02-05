@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<div class="container my-5">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
    @endif
    <div class="row">
        <div class="col-md-8 d-flex flex-column align-items-center">
            @if ($user->photo != 'img/nopp.jpg')
            <img src="{{ asset( 'storage/' . $user->photo ) }}" alt="" class="rounded-circle img-thumbnail">
            @else
            <img src="{{ asset( $user->photo ) }}" alt="" class="rounded-circle img-thumbnail">
            @endif

            <h1 class="my-3">{{ $user->name }}</h1>
        <p>{{ $user->email }}</p>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center">
            @auth
            @if (auth()->user()->username === $user->username)
            <p class="my-2 fs-3">Menu</p>
            <a href="/profile/{{ $user->username }}/edit" class="text-dark d-inline">Edit Profile</a>
            <a href="#" class="text-dark d-inline">Ganti Password</a>    
            @endif
            @endauth
            <p class="my-2 fs-4">Aktivitas</p>
            <a href="#" class="text-dark d-inline">Karya Mading</a>
        </div>
    </div>
</div>


@endsection