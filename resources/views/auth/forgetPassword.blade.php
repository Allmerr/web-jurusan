@extends('layouts.main')
@section('content')
    <div class="container d-flex justify-content-center my-5">
        <div class="col-md-5">
            
            <h1 class="text-center mb-3">Forgot Password</h1>

            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <form action="{{ route('forget.password.post') }}" method="POST" enctype="">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="kevinalmer4@gmail.com" name="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary bg-transparent text-dark border border-secondary">Send Reset Password Email</button>
            </form>
        </div>
    </div>
@endsection