@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        <div class="col-md-6">
            <form action="/profile/{{ $user->username }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Muhammad Kevin Almer " value="{{ $user->name }}" name="name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="kevinalmer" value="{{ $user->username }}" name="username">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @if ($user->photo != 'img/nopp.jpg')
                <img src="{{ asset( 'storage/' . $user->photo) }}" alt="" class="img-thumbnail img-preview" width="200">
                @else
                <img src="{{ asset($user->photo) }}" alt="" class="img-thumbnail img-preview" width="200">
                @endif

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" onchange="previewImage()" name="photo">
                    @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-secondary bg-transparent text-dark border border-secondary">Change</button>
            </form>
        </div>
    </div>

    <script>
        function previewImage(){
            const image = document.querySelector('#photo');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection