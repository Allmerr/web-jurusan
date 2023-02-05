@extends('layouts.main')
@section('content')
    {{-- blog --}}
    <div class="container my-5">
        <div class="my-card-container mb-5 pb-5">
            <div class="card">
                <img src="https://source.unsplash.com/600x600" alt="">
                <div class="card-body">
                    <h3 class="card-title">Diversity, Equity and Inclusion</h3>
                    <p class="card-text" style="color:#acacac;">Create by <a href="" style="color: #696969"></a> in <a href="" style="color: #696969">Kevin Almer</a></p>
                    <p style="color:#acacac;">Created at<span style="color: #696969"> 12.am</span></p>
                    <a class="border border-secondary p-1 rounded text-dark text-decoration-none" href="/blog/detail">See More</a>
                </div>
            </div>
            <div class="card">
                <img src="https://source.unsplash.com/600x600" alt="">
                <div class="card-body">
                    <h3 class="card-title">Diversity, Equity and Inclusion</h3>
                    <p class="card-text" style="color:#acacac;">Create by <a href="" style="color: #696969"></a> in <a href="" style="color: #696969">Kevin Almer</a></p>
                    <p style="color:#acacac;">Created at<span style="color: #696969"> 12.am</span></p>
                    <a class="border border-secondary p-1 rounded text-dark text-decoration-none" href="/blog/detail">See More</a>
                </div>
            </div>
        </div>
    </div>
@endsection