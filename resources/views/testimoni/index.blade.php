@extends('layouts.main')
@section('content')
    {{-- nav-mading --}}
    <div class="nav-mading my-5 p-3">
        <div class="container nav-mading-main">
            <div class="left">
                <h1>Testimoni</h1>
                <h4>Komunitas Siswa dan Perwalian Berbagi Masukan</h4>
                <div>
                    <a href="/dashboard" class="btn btn-secondary bg-transparent text-dark border border-secondary fs-5">Post Testimoni</a>
                </div>
            </div>
            <div class="right">
                <img src="img/plane.png" alt="">
            </div>
        </div>
    </div>
    {{-- testimoni --}}
    <div class="testimoni p-3">
            @if (session()->has('success'))
            <div class="row">
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            </div>
            @endif
        <div class="row">
            <div class="col-md-4">
                <h2>Post Testimoni</h2>
                <form action="/testimoni" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <input type="text" class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan">
                        @error('pesan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonis as $testimoni)
                        <tr>
                            <th scope="row">{{ $testimoni->name }}</th>
                            <td>{{ $testimoni->pesan }}</td>
                            <td>{{ $testimoni->created_at }}</td>
                        </tr>      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection