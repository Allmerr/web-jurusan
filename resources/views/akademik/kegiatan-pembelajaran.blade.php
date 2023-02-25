@extends('layouts.main')
@section('content')
    <div class="akademik">
        @include('akademik.layouts.sidebar')
        <!-- kegiatan-pemebelajaran -->
        <div class="kegiatan-pemebelajaran">
            <h1 class="mt-5 mb-2 text-center">Kegiatan Pemebelajaran</h1>
            <div class="kp-images">
                <img src="{{ asset('img/kgt-pembelajaran/1.jpg') }}" alt="" class="img img-thumbnail">
                <img src="{{ asset('img/kgt-pembelajaran/2.jpg') }}" alt="" class="img img-thumbnail">
                <img src="{{ asset('img/kgt-pembelajaran/3.jpg') }}" alt="" class="img img-thumbnail">
                <img src="{{ asset('img/kgt-pembelajaran/4.jpg') }}" alt="" class="img img-thumbnail">
                <img src="{{ asset('img/kgt-pembelajaran/5.jpg') }}" alt="" class="img img-thumbnail">
            </div>
        </div>
    </div>
@endsection
