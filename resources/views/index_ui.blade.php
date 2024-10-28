@extends('index')
@section('title', 'Idea Furniture')

@section('content')
<section class="bar">
    <section class="dark">
        <nav class="navbar navbar-expand-lg bg-none mb-3">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link me-2 text-light text-shadow fw-100" href="#">Home</a>
                        <a class="nav-link me-2 text-light text-shadow fw-100" href="#">About Us</a>
                        <a class="nav-link me-2 text-light text-shadow fw-100" href="#">Shop Store</a>
                        <a class="nav-link me-2 text-light text-shadow fw-100" href="#">Contact Us</a>
                    </div>
                    <div class="navbar-nav ms-5">
                        <a class="nav-link text-light text-shadow fw-100" href="login"><i
                                class="bi bi-person-fill fs-3"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="content mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <h1 class="fw-200 fs-40 text-white" style="margin-top: 24%;">FURNITURE</h1>
                        </div>
                        <div data-aos="fadeup" data-aos-duration="2000">
                            <h5 class="fw-200 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex
                                molestias in consequatur porro quia ab quasi quas corrupti rem, officiis vel eos officia
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, debitis.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="about pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <img class="content-align-right" src="/assets/img/sofa.png" alt="" width="100%" height="auto">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0" style="margin-top: 10%">
                        <div class="card-body">
                            <div data-aos="fade-up" data-aos-duration="2000">
                                <h3 class=" pt-5 fw-200">Super <span
                                        style="font-size: 20px; color:  #a4161a;">Diskon</span></h3>
                                <p class="fw-100" style="color: #e5383b;">Sale Up to 40% off + 12 months Financing</p>
                                <p class="fw-100" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Maxime quidem iure laborum numquam facere autem?</p>
                                <a class="btn btn-primary fw-200 px-5 rounded-1" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="koleksi">
        <div class="container">
            <h2 class="fw-200 pt-5 pb-3">New <span style="font-size: 20px; color: #ba181b ;">Koleksi</span></h2>
            <div data-aos="fade-up" data-aos-duration="3000">
                <div class="row g-2">
                    <div class="col-4">
                        <div data-aos="fade-up" data-aos-duration="500">
                            <img class="object-fit" src="/assets/img/bg.jpg" width="98%" height="380px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="after">
                                    <div data-aos="fade-up" data-aos-duration="1000">
                                        <img class="object-fit" src="/assets/img/laptop.jpeg" width="100%"
                                            height="180px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="after">
                                    <div data-aos="fade-up" data-aos-duration="1500">
                                        <img class="object-fit" src="/assets/img/logadm.jpg" width="100%" height="180px"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 g-3">
                            <div class="col-6">
                                <div class="after">
                                    <div data-aos="fade-up" data-aos-duration="2000">
                                        <img class="object-fit" src="/assets/img/logadm.jpg" width="100%" height="180px"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="after">
                                    <div data-aos="fade-up" data-aos-duration="2500">
                                        <img class="object-fit" src="/assets/img/laptop.jpeg" width="100%"
                                            height="180px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="furniture">
        <div class="container">
            <div class="row my-5 justify-content-center">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active text-dark nav_jualan" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Chair</button>
                        <button class="nav-link nav_jualan text-dark" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Sofa</button>
                        <button class="nav-link nav_jualan text-dark" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Bed</button>
                        <button class="nav-link nav_jualan text-dark" id="nav-lamp-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-lamp" type="button" role="tab" aria-controls="nav-lamp"
                            aria-selected="false">Lamp</button>
                    </div>
                </nav>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($chair as $kursi)
                                <div class="swiper-slide">
                                    <a class="text-decoration-none" href="#">
                                        <div class="card border-0">
                                            <img class="mx-auto d-block"
                                                src="{{ asset('storage/'.$kursi->gambar_barang) }}" alt="" width="200px"
                                                height="auto">
                                            <div class="card-body">
                                                <h5 class="fw-100 text-center">{{ $kursi->nama_barang }}</h5>
                                                <p class="fw-100 text-center">Rp. {{ number_format($kursi->harga_barang) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                        tabindex="0">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($dsofa as $sofa)
                                <div class="swiper-slide">
                                    <a class="text-decoration-none" href="#">
                                        <div class="card border-0">
                                            <img class="mx-auto d-block"
                                                src="{{ asset('storage/'.$sofa->gambar_barang) }}" alt="" width="200px"
                                                height="auto">
                                            <div class="card-body">
                                                <h5 class="fw-100 text-center">{{ $sofa->nama_barang }}</h5>
                                                <p class="fw-100 text-center">Rp. {{ number_format($sofa->harga_barang) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($dbed as $bed)
                                <div class="swiper-slide">
                                    <a class="text-decoration-none" href="#">
                                        <div class="card border-0">
                                            <img class="mx-auto d-block"
                                                src="{{ asset('storage/'.$bed->gambar_barang) }}" alt="" width="200px"
                                                height="auto">
                                            <div class="card-body">
                                                <h5 class="fw-100 text-center">{{ $bed->nama_barang }}</h5>
                                                <p class="fw-100 text-center">Rp. {{ number_format($bed->harga_barang) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lamp" role="tabpanel" aria-labelledby="nav-lamp-tab"
                        tabindex="0">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($dlamp as $lamp)
                                <div class="swiper-slide">
                                    <a class="text-decoration-none" href="#">
                                        <div class="card border-0">
                                            <img class="mx-auto d-block"
                                                src="{{ asset('storage/'.$lamp->gambar_barang) }}" alt="" width="200px"
                                                height="auto">
                                            <div class="card-body">
                                                <h5 class="fw-100 text-center">{{ $lamp->nama_barang }}</h5>
                                                <p class="fw-100 text-center">Rp. {{ number_format($lamp->harga_barang) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="room">
        <div class="container">
            <h2 class="fw-200 pt-5">FIND YOUR DREAM</h2>
            <h4 class="fw-200 pb-3" style="font-size: 20px; color: #ba181b ;">LIVING ROOM</h4>
            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="after">
                                <div data-aos="fade-up" data-aos-duration="500">
                                    <img class="object-fit" src="/assets/img/laptop.jpeg" width="100%" height="180px"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="after">
                                <div data-aos="fade-up" data-aos-duration="1000">
                                    <img class="object-fit" src="/assets/img/logadm.jpg" width="100%" height="180px"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 g-3">
                        <div class="col-6">
                            <div class="after">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <img class="object-fit" src="/assets/img/logadm.jpg" width="100%" height="180px"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="after">
                                <div data-aos="fade-up" data-aos-duration="2000">
                                    <img class="object-fit" src="/assets/img/laptop.jpeg" width="100%" height="180px"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div data-aos="fade-up" data-aos-duration="2500">
                        <img class="object-fit" src="/assets/img/bg.jpg" width="98%" height="380px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer mt-5 bg-dark">
        <div class="container">
            <h2 class="ps-4 py-3 fw-200 text-light">ALL DEPARTEMENTS</h2>
            <div class="row">
                <div class="col-lg-2">
                    <ul>
                        <li class="nav-link">
                            <a class="text-decoration fw-100 text-light text-hover-footer" href="#">Home</a>
                        </li>
                        <li class="nav-link">
                            <a class="text-decoration fw-100 text-light text-hover-footer py-1" href="#">About Us</a>
                        </li>
                        <li class="nav-link">
                            <a class="text-decoration fw-100 text-light text-hover-footer py-1" href="#">Shop Store</a>
                        </li>
                        <li class="nav-link">
                            <a class="text-decoration fw-100 text-light text-hover-footer py-1" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <ul>
                        <li class="text-light text-hover-footer fw-100 point">PT Pradinata</li>
                        <li class="text-light text-hover-footer fw-100 point">PT Sejahtera</li>
                        <li class="text-light text-hover-footer fw-100 point">PT Amanah</li>
                        <li class="text-light text-hover-footer fw-100 point">PT Sajinata</li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <ul>
                        <li class="text-light text-hover-footer fw-100 point">PT Pradinata</li>
                        <li class="text-light text-hover-footer fw-100 point">PT Sejahtera</li>
                        <li class="text-light text-hover-footer fw-100 point">PT Amanah</li>
                        <li class="text-light text-hover-footer fw-100 point">PT Sajinata</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection