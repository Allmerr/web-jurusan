@extends('layouts.main')
@section('content')
    <div class="akademik">
        @include('civitas.layouts.sidebar')
        <!-- pengajar -->
        <div class="pengajar">
            <h1 class="mt-5 mb-2 text-center">Pengajar</h1>
            <div class="pengajar-cards mt-5">
                <div class="pengajar-card text-center py-2">
                    <img src="https://source.unsplash.com/200x200" alt="" class="img-thumbnail rounded-circle">
                    <h5>Yuli Dianah, S.T</h5>
                    <h6 class="text-success-emphasis">Kepala Kompetensi</h6>
                </div>
                <div class="pengajar-card text-center py-2">
                    <img src="https://source.unsplash.com/200x200" alt="" class="img-thumbnail rounded-circle">
                    <h5>Alfi Rahman Hakim, S.Kom</h5>
                    <h6 class="text-success-emphasis">Penangung Jawab</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
