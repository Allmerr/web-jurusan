@extends('layouts.main')
@section('content')
    
    <!-- carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/2000x2000" class="d-block w-100" alt="https://source.unsplash.com/random/2000x2000">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2000x2000" class="d-block w-100" alt="https://source.unsplash.com/random/2000x2000">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2000x2000" class="d-block w-100" alt="https://source.unsplash.com/random/2000x2000">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- sepatah dua kata -->
    <div class="container text-center py-5 d-flex justify-content-center">
        <div class="col-md-8 d-flex flex-column align-items-center justify-content-center">
            <p class="text-sepatah"><i>"Menghasilkan lulusan yang berakhlak mulia, taat beribadah, berkompeten sesuai bidang keahlian, dan mampu beradaptasi serta bersaing di dunia usaha dan industri."</i></p>
            <a class="btn btn-dark d-block mt-4 btn-sepatah" href="#"><h5 class="pt-1">Read The Latest Blog</h5></a>
        </div>
    </div>
    <!-- about -->
    <div class="about bg-dark text-bg-dark">
        <div class="container p-2">
            <div class="left p-3">
                <iframe class="iframe-about" src="https://www.youtube.com/embed/Lt-9mmAAozE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="right p-3 d-flex flex-column justify-content-center align-items-center text-justify">
                <h3>Tentang Kami</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi distinctio, rem fugit aliquid accusantium blanditiis sunt id dignissimos doloribus, aliquam saepe dolorum. Reiciendis ullam illum quam excepturi error, perferendis repellendus.</p>
            </div>
        </div>
    </div>
    <!-- visi misi -->
    <div class="visi-misi p-2">
        <h2 class="my-5">Visi</h2>
        <h4>Menjadi kompetensi keahlian yang dapat bekerjasama dalam pengembangan pendidikan kejuruan untuk menghasilkan lulusan yang berkompeten, berkarakter baik, berintegritas, berdaya saing global dan berbudaya yang berlandaskan keimanan dan ketaqwaan.</h4>
        <h2 class="my-5">Misi</h2>
        <h4>
        <ol>
            <li>Menyelenggarakan pembinaan pembelajaran karakter baik, agar memiliki integritas tinggi dalam berperilaku dengan tetap mengutamakan ketaatan beribadah sesuai ajaran agama dan kepercayaan masing-masing serta bertoleransi terhadap sesama.</li>
            <li>Menyelenggarakan pembinaan pembelajaran yang berbudaya lingkungan, inovatif, kreatif dan kompetitif serta mampu mengembangkan diri secara berkesinambungan.</li>
            <li>Melaksanakan pembelajaran dengan model Teaching Factory.</li>
            <li>Menyelenggarakan pembelajaran dengan konsentrasi keahlian kurikulum link and match dengan dunia usaha dan industri.</li>
            <li>Melaksanakan pembelajaran yang menumbuhkan sikap jujur, adil, kreatif, inovatif, peduli lingkungan, sesuai dengan profil Pelajar Pancasila</li>
        </ol>
        </h4>
    </div>
    <!-- news -->
    <div class="container news">
        <div class="row my-5 text-center">
            <h2>Berita Dan Informasi</h2>
        </div>
        <div class="my-card-container mb-5 pb-5">
            <div class="card">
                <img src="https://source.unsplash.com/600x600" alt="">
                <div class="card-body">
                    <h3 class="card-title">Diversity, Equity and Inclusion</h3>
                    <p class="card-text" style="color:#acacac;">Create by <a href="" style="color: #696969"></a> in <a href="" style="color: #696969">Kevin Almer</a></p>
                    <p style="color:#acacac;">Created at<span style="color: #696969"> 12.am</span></p>
                    <a class="border border-secondary p-1 rounded text-dark text-decoration-none" href="#">See More</a>
                </div>
            </div>
            <div class="card">
                <img src="https://source.unsplash.com/600x600" alt="">
                <div class="card-body">
                    <h3 class="card-title">Diversity, Equity and Inclusion</h3>
                    <p class="card-text" style="color:#acacac;">Create by <a href="" style="color: #696969"></a> in <a href="" style="color: #696969">Kevin Almer</a></p>
                    <p style="color:#acacac;">Created at<span style="color: #696969"> 12.am</span></p>
                    <a class="border border-secondary p-1 rounded text-dark text-decoration-none" href="">See More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
        

