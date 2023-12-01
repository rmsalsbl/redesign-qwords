<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <title>Qwors redesign</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-qword fixed-top navbar-fixed-top" data-aos="fade-down">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="/images/logo-qw.webp" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-center" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cloud Hosting
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Server
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Domain
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Email Suite
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Internet Access
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a href="/index.html" class="nav-link">Promo</a>
                    </li>
                    <li class="nav-item btn-login">
                        <a href="/" class="btn btn-outline-primary px-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section id="Main" class="home">
            <div class="container">
                <div class="row vh-70 align-items-center justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        {{-- <div class="align-items-center justify-content-center mt-5">
                    <img src="/images/main-bg.webp" alt="">
                </div> --}}
                        <h1 class="text-center py-4">
                            <div class="main-head">
                                Cloud Hosting
                                <br>
                                untuk
                                <br>
                                <span class="text-qw-primary">Kesuksesan Websitemu!</span>
                            </div>
                        </h1>
                        <div class="d-flex justify-content-center mb-3">
                            <p class="mb-0 sub-heading">
                                Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam
                                untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier
                                3.
                            </p>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                            <p>
                                <span class="text-qw-primary"
                                    style="font-size: 25px;font-weight: 800;">#QwordsYourSuccess</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                            <button class="btn btn-lg-cta mb-3">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="SearchDomain" class="search-domain">
            <div class="row">
                <div class="col-12 mb-3">
                    <div id="in-search">
                        <div class="text-center w-100 search-wrapper">
                            <h2 class="tl-dom">Cari Nama Domainmu</h2>
                            <p class="mb-0 mx-auto">
                                Nama Domain digunakan untuk mempermudah pengunjung menuju <br> ke situs Anda. Pilih nama
                                domain yang paling mencerminkan bisnis, <br> produk, atau layanan Anda.
                            </p>
                            <form class="row mt-5" onsubmit="return false">
                                <div class="col-12 col-sm-7 col-md-7 col-lg-8">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control border-0" name="domain"
                                            id="domain-input" placeholder="Cari nama domain Anda">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5 col-md-5 col-lg-2 mt-3 mt-sm-0">
                                    <div class="input-group input-group-lg">
                                        <select class="form-select border-0" id="select-tld">
                                            <option selected value=".id">.id</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 mt-3 mt-lg-0">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-lg-cta-black" id="btn-checkdomain">
                                            Cari
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="data-box mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-8">
                                        <div
                                            class="d-flex flex-wrap justify-content-around justify-content-lg-center gap-3">
                                            <div>
                                                <div class="dt-bold"> .com </div>
                                                <h2 class="dt-bold">Rp 165.000</h2>
                                            </div>
                                            <div class="d-none d-sm-block vr"></div>
                                            <div>
                                                <div class="dt-bold"> .id </div>
                                                <h2 class="dt-bold">Rp 225.000</h2>
                                            </div>
                                            <div class="d-none d-sm-block vr"></div>
                                            <div>
                                                <div class="dt-bold"> .info </div>
                                                <h2 class="dt-bold">Rp 77.000</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="FeaturedCard" class="featured-card">
            <div class="container crd mb-4">
                <div class="row text-center justify-content-center">
                    <div class="col-12 col-lg-8">
                        <h2 class="mb-0 hosting-tlt">
                            Cloud Hosting Indonesia
                            <br>
                            <span class="text-qw-primary">Diskon Hingga 50%</span>
                        </h2>
                        <p class="my-3">
                            Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                        <div class="card p-3 border-0 shadow-lg rounded-card">
                            <div class="card-heading mb-2">
                                <h3 class="mb-2 h3home">Value Cloud Hosting</h3>
                                <h4 class="dt-bold">VCH1</h4>
                            </div>
                            <div class="card-price">
                                <s class="text-muted">Rp 24.500</s>
                                <p class="fw-bold text-qw-primary pricehome">Rp 14.500</p>
                            </div>
                            <div class="card-description">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/disk.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3">
                                        <div>Disk</div>
                                        <div class="fw-bold spechome">3 GB</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/bandwidth.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Bandwidth</div>
                                        <div class="fw-bold spechome">Unlimited</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/cpu.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Core CPU</div>
                                        <div class="fw-bold spechome">0.5 Core</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/addon.webp" alt="">
                                    </div>
                                    <div class="label-spec mt-2">
                                        <div>Addon / parked domain</div>
                                        <div class="fw-bold spechome">No</div>
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                        <div class="card p-3 border-0 shadow-lg rounded-card">
                            <div class="card-heading mb-2">
                                <h3 class="mb-2 h3home">Unlimited Hosting</h3>
                                <h4 class="dt-bold">Signature</h4>
                            </div>
                            <div class="card-price">
                                <s class="text-muted">Rp 109.000</s>
                                <p class="fw-bold text-qw-primary pricehome">Rp 89.900</p>
                            </div>
                            <div class="card-description">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/disk.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3">
                                        <div>Disk</div>
                                        <div class="fw-bold spechome">Unlimited</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/bandwidth.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Bandwidth</div>
                                        <div class="fw-bold spechome">Unlimited</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/cpu.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Core CPU</div>
                                        <div class="fw-bold spechome">1 Core</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/addon.webp" alt="">
                                    </div>
                                    <div class="label-spec mt-2">
                                        <div>Addon / parked domain</div>
                                        <div class="fw-bold spechome">5 / 5</div>
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                        <div class="card p-3 border-0 shadow-lg rounded-card">
                            <div class="card-heading mb-2">
                                <h3 class="mb-2 h3home">High Performance</h3>
                                <h4 class="dt-bold">HPCH Bisnis 1</h4>
                            </div>
                            <div class="card-price">
                                <s class="text-muted">Rp 90.000</s>
                                <p class="fw-bold text-qw-primary pricehome">Rp 79.000</p>
                            </div>
                            <div class="card-description">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/disk.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3">
                                        <div>Disk</div>
                                        <div class="fw-bold spechome">3 GB</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/bandwidth.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Bandwidth</div>
                                        <div class="fw-bold spechome">Unlimited</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/cpu.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Core CPU</div>
                                        <div class="fw-bold spechome">1 Core</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/addon.webp" alt="">
                                    </div>
                                    <div class="label-spec mt-2">
                                        <div>Addon / parked domain</div>
                                        <div class="fw-bold spechome">-</div>
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                        <div class="card p-3 border-0 shadow-lg rounded-card">
                            <div class="card-heading mb-2">
                                <h3 class="mb-2 h3home">Cloud VPS KVM SSD</h3>
                                <h4 class="dt-bold">VPS SC1</h4>
                            </div>
                            <div class="card-price">
                                <s class="text-muted">Rp 135.000</s>
                                <p class="fw-bold text-qw-primary pricehome">Rp 75.000</p>
                            </div>
                            <div class="card-description">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/disk.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3">
                                        <div>Disk</div>
                                        <div class="fw-bold spechome">25 GB</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/bandwidth.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Bandwidth</div>
                                        <div class="fw-bold spechome">Unlimited</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/cpu.webp" alt="">
                                    </div>
                                    <div class="label-spec mb-3 mt-2">
                                        <div>Core CPU</div>
                                        <div class="fw-bold spechome">1 Core</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="icon-wrapper me-3 mb-2">
                                        <img src="images/addon.webp" alt="">
                                    </div>
                                    <div class="label-spec mt-2">
                                        <div>Addon / parked domain</div>
                                        <div class="fw-bold spechome">Unlimited</div>
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="AdditionalProduct" class="additional-product">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 mb-4 text-center">
                        <h2 class="txt-add">Lihat Juga Layanan Kami Yang Lain</h2>
                        <p class="my-4">
                            Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card border-0 shadow p-3 rounded-card">
                            <div class="card-heading d-flex align-items-center mb-3">
                                <div class="icon-wrapper me-2">
                                    <img src="images/ssl.webp" alt="">
                                </div>
                                <h3 class="mb-0 fw-bold h5home">SSL</h3>
                            </div>
                            <div class="card-description">
                                <p>
                                    Jadikan website Anda lebih terpercaya dan disukai oleh search
                                    engine dengan menggunakan SSL Certificate.
                                </p>
                            </div>
                            <div class="card-price mb-4">
                                <p class="mb-2">Mulai dari</p>
                                <p class="text-qw-primary fw-bold pricehome">
                                    Rp. 112.000
                                    <span class="fs-6 text-dark fw-light"> / tahun</span>
                                </p>
                            </div>
                            <div class="d-grid mt-auto">
                                <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card border-0 shadow p-3 rounded-card">
                            <div class="card-heading d-flex align-items-center mb-3">
                                <div class="icon-wrapper me-2">
                                    <img src="images/dbstack.webp" alt="">
                                </div>
                                <h3 class="mb-0 fw-bold h5home">Dedicated Server</h3>
                            </div>
                            <div class="card-description">
                                <p>
                                    Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa
                                    batas
                                    <br>
                                    <br>
                                </p>
                            </div>
                            <div class="card-price mb-4">
                                <p class="mb-2">Mulai dari</p>
                                <p class="text-qw-primary fw-bold pricehome">
                                    Rp. 499.000
                                    <span class="fs-6 text-dark fw-light"> / tahun</span>
                                </p>
                            </div>
                            <div class="d-grid mt-auto">
                                <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                        <div class="card border-0 shadow p-3 rounded-card">
                            <div class="card-heading d-flex align-items-center mb-3">
                                <div class="icon-wrapper me-2">
                                    <img src="images/disko.webp" alt="">
                                </div>
                                <h3 class="mb-0 fw-bold h5home">Colocation Server</h3>
                            </div>
                            <div class="card-description">
                                <p>
                                    Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling
                                    system terbaik serta fire extinguisher
                                </p>
                            </div>
                            <div class="card-price mb-4">
                                <p class="mb-2">Mulai dari</p>
                                <p class="text-qw-primary fw-bold pricehome">
                                    Rp. 500.000
                                    <span class="fs-6 text-dark fw-light"> / tahun</span>
                                </p>
                            </div>
                            <div class="d-grid mt-auto">
                                <a href="" class="btn btn-cta rounded-5">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Solution" class="solution">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center mb-4">
                        <h2 class="txt-add">Solusi Paket Hosting Terbaik dari Kami</h2>
                        <p class="mx-auto my-4">
                            Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website <br> dan sistem
                            Anda. Mulai dari blog hingga website bisnis dan perusahaan
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <a href="" style="text-decoration: none;">
                                <div class="card border-0 rounded-20px" id="company">
                                    <img src="images/company.webp" alt="">
                                    <div class="p-3 card-text">
                                        <h3 class="fw-bold h5home">Perusahaan</h3>
                                        <p>
                                            Wujudkan website perusahaan profesional dan berkelas dengan dukungan web
                                            hosting terbaik dan fitur keamanan ekstra
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <a href="" style="text-decoration: none;">
                                <div class="card border-0 rounded-20px" id="umkm">
                                    <img src="images/umkm.webp" alt="">
                                    <div class="p-3 card-text">
                                        <h3 class="fw-bold h5home">UMKM dan Toko Online</h3>
                                        <p>
                                            Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran
                                            barang/jasa secara online. </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <a href="" style="text-decoration: none;">
                                <div class="card border-0 rounded-20px" id="orgs">
                                    <img src="images/orgs.webp" alt="">
                                    <div class="p-3 card-text">
                                        <h3 class="fw-bold h5home">Organisasi dan Komunitas</h3>
                                        <p>
                                            Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan
                                            yang ramah kantong.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <a href="" style="text-decoration: none;">
                                <div class="card border-0 rounded-20px" id="school">
                                    <img src="images/school.webp" alt="">
                                    <div class="p-3 card-text">
                                        <h3 class="fw-bold h5home">Sekolah</h3>
                                        <p>
                                            Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning.
                                            Didukung platform MOODLE khusus pembelajaran daring
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <a href="" style="text-decoration: none;">
                                <div class="card border-0 rounded-20px" id="dev">
                                    <img src="images/dev.webp" alt="">
                                    <div class="p-3 card-text">
                                        <h3 class="fw-bold h5home">Developer</h3>
                                        <p>
                                            Tersedia paket hosting Indonesia dengan spesifikasi khusus yang
                                            dev-friendly. Ekstra NodeJS dan Git Version Control
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <a href="" style="text-decoration: none;">
                                <div class="card border-0 rounded-20px" id="blog">
                                    <img src="images/blog.webp" alt="">
                                    <div class="p-3 card-text">
                                        <h3 class="fw-bold h5home">Blogger dan Personal</h3>
                                        <p>
                                            Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta
                                            template website premium untuk tampil lebih profesional
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Commitment" class="commitment">
            <div class="container">
                <div class="row justify-content-center mb-lg-5 mb-4">
                    <div class="col-12 col-lg-12 text-center">
                        <h2 class="txt-add">Komitmen Qwords</h2>
                        <p class="mx-auto my-4">
                            Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/call.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Layanan 24/7</h3>
                            <p class="mx-md-0 mx-auto">
                                Tim Technical Support dan Customer Service Qwords siap membantu Anda
                                selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call
                                Center, dan Support Ticket.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/book.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Panduan Manual Lengkap</h3>
                            <p class="mx-md-0 mx-auto">
                                Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar
                                pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/router.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Up time 99.99%</h3>
                            <p class="mx-md-0 mx-auto">
                                Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung
                                manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/guard.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Jaminan keamanan</h3>
                            <p class="mx-md-0 mx-auto">
                                Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang
                                berstandar & berkelanjutan telah menjadi perhatian utama kami.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/networkAlt.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Clustered DNS</h3>
                            <p class="mx-md-0 mx-auto">
                                DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS
                                Server akan selalu dapat di akses karena saling membackup antar server.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/diamond.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">High Enterprise Server</h3>
                            <p class="mx-md-0 mx-auto">
                                Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan
                                hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/router.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Tier 1 Network</h3>
                            <p class="mx-md-0 mx-auto">
                                Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan
                                lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-5 text-md-start">
                        <div class="commit card-benefit-2 rounded-5 p-3" style="min-height: 350px;">
                            <div class="icon-wrapper mb-3 mx-md-0 mx-auto">
                                <img src="images/network.webp" alt="">
                            </div>
                            <h3 class="fw-bold h4home">Peering Network</h3>
                            <p class="mx-md-0 mx-auto">
                                Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang
                                membuat latency atau waktu tunggu pengiriman data semakin kecil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="BwAds" class="bw-ads">
            <div class="container">
                <div class="bw-ads-banner py-5 px-3">
                    <div class="h-100 row align-items-center justify-content-evenly">
                        <div class="col-12 col-sm-5 col-lg-5 col-xxl-5 mb-3 mb-lg-0">
                            <div class="img-wrapper mx-auto">
                                <img src="images/bw.webp" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 col-lg-7 col-xxl-5 mb-4 mb-lg-0">
                            <h2 class="h2 ads-heading mb-3">
                                <span class="text-qw-primary">Bikin website impian</span>
                                dengan mudah disini hanya 1jutaan
                            </h2>
                            <p class="my-3">
                                Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa
                                pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian
                                dengan mudah di sini, desain website elegan dan mudah dikelola
                            </p>
                            <a href="" class="btn btn-cta rounded-5 fw-bold px-3">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="CustomerPartner" class="customer-partner">
            <div class="container">
                <div class="row justify-content-center mb-3 mb-lg-5">
                    <div class="col-12 text-center mb-3 mb-lg-5">
                        <h2 class="txt-add">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="image-list mb-5">
                            <img src="images/Cimory.webp" alt="" width="200px">
                            <img src="images/Forisa.webp" alt="" width="200px">
                            <img src="images/Elsheskin.webp" alt="" width="200px">
                            <img src="images/Icon.webp" alt="" width="200px">
                            <img src="images/Horison.webp" alt="" width="200px">
                            <img src="images/MD.webp" alt="" width="200px">
                        </div>
                        <a href="" class="text-qw-primary fw-bold text-decoration-none">
                            Dan Masih Banyak yang Lainnya
                            <img src="images/Right.webp" alt="" width="20px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center pt-3 pt-lg-5">
                    <div class="col-12 text-center mb-3 mb-lg-4">
                        <h2 class="txt-add">Partner Kami</h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="image-list mb-5">
                            <img src="images/Google.webp" alt="" width="200px">
                            <img src="images/Cpanel.webp" alt="" width="200px">
                            <img src="images/Idea.webp" alt="" width="200px">
                            <img src="images/Archi.webp" alt="" width="200px">
                            <img src="images/dotid.webp" alt="" width="200px">
                        </div>
                        <a href="" class="text-qw-primary fw-bold text-decoration-none">
                            Dan Masih Banyak yang Lainnya
                            <img src="images/Right.webp" alt="" width="20px">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="Guarantee" class="guarantee">
            <div class="container-fluid px-0">
                <div class="guarantee-banner p-3">
                    <div class="h-100 row align-items-center justify-content-center">
                        <div class="col-12 col-sm-5 col-lg-6 col-xxl-5 mb-3 mb-lg-0">
                            <div class="img-wrapper mx-auto">
                                <img src="images/guarantee.webp" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 col-lg-6 col-xxl-5 text-lg-start">
                            <div class="mx-auto" style="max-width: 500px;">
                                <h2 class="mb-4 txt-add">
                                    Garansi 30 Hari
                                    <span class="text-qw-primary">Uang Kembali</span>
                                </h2>
                                <p>
                                    Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang
                                    kembali yang berlaku hingga 30 hari setelah hosting aktif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Testimonial" class="testimonial">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-6 text-center">
                        <h2 class="txt-add">Apa Kata Mereka?</h2>
                        <p>
                            Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak
                            pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="card-testi">
                                <div class="card border-0 rounded-20px shadow p-3" style="width: 25rem;">
                                    <img src="images/testi1.webp" alt="" width="">
                                    <div class="p-3 card-text mt-2">
                                        <div class="header-quote pb-2">
                                            <h5 class="txt-tes">
                                                Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat
                                                Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.
                                            </h5>
                                        </div>
                                        <div class="quote-details">
                                            <p class="fst-italic ptxt">
                                                Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang
                                                penyedia jasa informasi keamanan di Indonesia. Oleh
                                                karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami
                                                terhadap server dan hosting yang selalu up selama 24 jam.
                                            </p>
                                        </div>
                                        <div class="author-name">
                                            <h6 class="d-inline me-3">Budi Raharjo</h6>
                                            <span class="small text-muted">Founder ID Cert</span>
                                        </div>
                                        <div class="mt-2">
                                            <a href="" class="text-qw-primary fw-bold text-decoration-none">
                                                Lihat Video Selengkapnya
                                                <img src="images/Right.webp" alt="" width="10px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="card-testi">
                                <div class="card border-0 rounded-20px shadow p-3" style="width: 25rem;">
                                    <img src="images/testi2.webp" alt="" width="">
                                    <div class="p-3 card-text mt-2">
                                        <div class="header-quote pb-2">
                                            <h5 class="txt-tes">
                                                Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!
                                            </h5>
                                        </div>
                                        <div class="quote-details">
                                            <p class="fst-italic ptxt">
                                                Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.
                                            </p>
                                        </div>
                                        <div class="author-name">
                                            <h6 class="d-inline me-3">Kuns Kurniawan</h6>
                                            <span class="small text-muted">PR Event Info BDG</span>
                                        </div>
                                        <div class="mt-2">
                                            <a href="" class="text-qw-primary fw-bold text-decoration-none">
                                                Lihat Video Selengkapnya
                                                <img src="images/Right.webp" alt="" width="10px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="card-testi">
                                <div class="card border-0 rounded-20px shadow p-3" style="width: 25rem;">
                                    <img src="images/testi3.webp" alt="" width="">
                                    <div class="p-3 card-text mt-2">
                                        <div class="header-quote pb-2">
                                            <h5 class="txt-tes">
                                                Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.
                                            </h5>
                                        </div>
                                        <div class="quote-details">
                                            <p class="fst-italic ptxt">
                                                Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.
                                            </p>
                                        </div>
                                        <div class="author-name">
                                            <h6 class="d-inline me-3">Denden Sofiudin</h6>
                                            <span class="small text-muted"> Owner Rumah Kopi temanggung</span>
                                        </div>
                                        <div class="mt-2">
                                            <a href="" class="text-qw-primary fw-bold text-decoration-none">
                                                Lihat Video Selengkapnya
                                                <img src="images/Right.webp" alt="" width="10px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        </section>

        <section id="Covered" class="covered">
            <div class="container">
                <div class="row justify-content-center mb-3 mb-lg-5 text-center">
                    {{-- <div class="col-12 text-center mb-3 mb-lg-5"> --}}
                    <h2 class="txt-add">Diliput Oleh</h2>
                </div>
                <div class="col-12 text-center">
                    <div class="image-list mb-5">
                        <img src="images/Detikcom.webp" alt="" width="200px">
                        <img src="images/Liputan6.webp" alt="" width="200px">
                        <img src="images/TribunJogja.webp" alt="" width="200px">
                        <img src="images/antara.webp" alt="" width="200px">
                        <img src="images/RM.webp" alt="" width="200px">
                        <img src="images/KoranBernas.webp" alt="" width="200px">
                    </div>
                    <a href="" class="text-qw-primary fw-bold text-decoration-none">
                        Lihat Semua Liputan
                        <img src="images/Right.webp" alt="" width="20px">
                    </a>
                </div>
                {{-- </div> --}}
            </div>
        </section>

        <section id="Payment" class="payment">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center mb-3 mb-lg-4">
                        <h2 class="fw-bold h4home">
                            Pilih metode e-payment otomatis. Layanan Domain, Hosting, VPS langsung
                            aktif tanpa perlu konfirmasi bayar.
                        </h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="img-wrapper">
                            <img src="images/all-payment.webp" alt="" width="100%">
                        </div>
                        <div class="mt-4">
                            <a href="" class="text-qw-primary fw-bold text-decoration-none">
                                Lihat Semua Liputan
                                <img src="images/Right.webp" alt="" width="20px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="VhpQna" class="vhp-qna">
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <h2 class="heading-section text-center txt-add">
                            Pertanyaan seputar
                            <span class="text-qw-primary">Layanan Web Hosting</span>
                            Qwords
                        </h2>
                    </div>
                </div>
                <div class="row mt-3 mt-lg-5">
                    <div class="col-12">
                        <div class="accordion" id="FAQ">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        type="button" data-bs-target="#collapse1" aria-expanded="false"
                                        aria-controls="collapse1">
                                        Apa itu web hosting?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="collapse1"
                                    aria-labelledby="heading1" data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Hosting adalah tempat penyimpanan file dan data website seperti teks, video
                                            dan gambar website. File dan data tersebut di simpan di dalam server yang
                                            terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa
                                            saja, kapan saja dan di mana saja.
                                            <br>
                                            <br>
                                            Penjelasan lebih lanjut dapat Anda baca pada artikel ini :
                                            https://qwords.com/blog/apa-itu-hosting/
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        type="button" data-bs-target="#collapse2" aria-expanded="false"
                                        aria-controls="collapse2">
                                        Ada berapa jenis hosting di Qwords?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan
                                            beragam paket hosting Indonesia yang bisa dipilih sesuai kebutuhan.
                                            <br>
                                            <br>
                                            <h4>Value Performance</h4>
                                            <br>
                                            Value Cloud Hosting merupakan paket cloud hosting murah Indonesia yang
                                            dirancang khusus untuk keperluan sederhana seperti UKM, toko online, blog,
                                            website sederhana, hingga email untuk penggunaan personal.
                                            <br>
                                            <br>
                                            Hosting murah dari Qwords untuk pengguna baru website atau Anda yang baru
                                            terjun ke dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel,
                                            dan ekstra lega mulai 3 GB hingga
                                            <br>
                                            <br>
                                            <h4>High Performance Cloud Hosting Bisnis</h4>
                                            <br>
                                            Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda. Kinerja
                                            lebih produktif dengan performa tinggi & optimal untuk website profesional
                                            perusahaan, e-commerce, startup bisnis, serta support Moodle--platform open
                                            source yang memudahkan sistem pembelajaran online
                                            <br>
                                            <br>
                                            <h4>High Performance Cloud Hosting Enterprise</h4>
                                            <br>
                                            Nikmati versi terbaik dedicated hosting melalui paket HPCH Enterprise.
                                            Tampil lebih premium dengan resource dedicated hanya untuk 1 pengguna.
                                            Performa lebih stabil, bebas gangguan dari Cloud Hosting lainnya. More
                                            productivity, less drama
                                            <br>
                                            <br>
                                            <h4>WordPress Hosting</h4>
                                            <br>
                                            Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop
                                            untuk kinerja WordPress yang optimal.
                                            <br>
                                            <br>
                                            WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP
                                            <br>
                                            <br>
                                            <h4>Unlimited Hosting</h4>
                                            <br>
                                            Paket Unlimited Hosting Indonesia yang dapat diandalkan, tanpa batasan! Free
                                            Domain & SSL Certificate dengan Uptime Server 99,99%.
                                            <br>
                                            <br>
                                            Didukung Website Builder dan Web Accelerator dengan Module LSAPI PRO + CRIU.
                                            Akses internasional ngebut, serta garansi 30 hari uang kembali.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        type="button" data-bs-target="#collapse3" aria-expanded="false"
                                        aria-controls="collapse3">
                                        Apa kelebihan dari cloud hosting Qwords?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari melalui Live chat, Call Center, atau Support Ticket dan masih banyak lagi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        type="button" data-bs-target="#collapse4" aria-expanded="false"
                                        aria-controls="collapse4">
                                        Mengapa saya perlu web hosting?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Tanpa web hosting, Anda tidak bisa membuat website company profile, portal berita, blog pribadi, website toko online, atau jenis website lain yang bisa diakses secara online.
                                            <br>
                                            <br>
                                            Penyedia layanan web hosting seperti Qwords.com membantu memastikan data-data dan file website Anda tetap aman serta responsif ketika diakses oleh pengguna secara online.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        type="button" data-bs-target="#collapse5" aria-expanded="false"
                                        aria-controls="collapse5">
                                        Bagaimana cara membeli hosting?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Kami memiliki panduan cara membeli hosting di Qwords sesuai kebutuhan dengan mudah yang dapat Anda akses selengkapnya di sini. Beli hosting Indonesia di Qwords kini juga semakin mudah dengan adanya berbagai metode pembayaran
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        type="button" data-bs-target="#collapse6" aria-expanded="false"
                                        aria-controls="collapse6">
                                        Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud Hosting Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda inginkan, kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses migrasi akan dibantu hingga selesai.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Contact" class="contact">
            <div class="container-fluid align-items-center px-0">
                <div class="contact-wrapper">
                    <div class="contact-text text-center">
                        <p class="heading-section txt-add">
                            Butuh
                            <span class="text-qw-primary">Bantuan?</span>
                        </p>
                        <p class="h4home fw-normal">Kami siap membantu anda 24 Jam</p>
                        <div
                            class="contact-list d-flex gap-2 flex-wrap align-items-center justify-content-center mt-4 mt-lg-5 px-3">
                            <a href="">
                                <div class="contact-col d-flex align-items-center mb-3 mr-2">
                                    <img src="images/phone-fill.webp" alt="" width="25px">
                                    <p class="mb-0 h6home text-white ms-2">0804-1-808-888</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="contact-col d-flex align-items-center mb-3 mr-2">
                                    <img src="images/phone-fill.webp" alt="" width="25px">
                                    <p class="mb-0 h6home text-white ms-2">021 39708800</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="contact-col d-flex align-items-center mb-3 mr-2">
                                    <img src="images/whatsapp-fill.webp" alt="" width="25px">
                                    <p class="mb-0 h6home text-white ms-2">+62811 2292 430 ( WhatsApp only )</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="contact-col d-flex align-items-center mb-3 mr-2">
                                    <img src="images/message-fill.webp" alt="" width="25px">
                                    <p class="mb-0 h6home text-white ms-2">info@qwords.com</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row d-flex h-100">
                <div class="col-12 col-lg-3">
                    <div id="begin-logo" class="mb-5">
                        <div class="qw-logo">
                            <img src="images/logo-dark.webp" alt="" width="180px">
                            <div class="mt-3 mt-lg-4">
                                <h4 class="fw-bold mb-3 mb-lg-4 h5home">
                                    PT Qwords Company International
                                </h4>
                                <p class="fw-light">
                                    Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan
                                    akses cepat yang didukung layanan support 24/7
                                </p>
                            </div>
                            <a href="">
                                <div class="qw-logo">
                                    <img src="images/bsi.webp" alt="" width="200px">
                                </div>
                            </a>
                        </div>
                        <div id="#customer-care">
                            <h4 class="fw-bold mb-3 mb-lg-4 h5home mt-5">
                                Customer Care
                            </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">Pembayaran</a>
                                </li>
                                <li>
                                    <a href="">Faktur Pajak</a>
                                </li>
                                <li>
                                    <a href="">Bantuan 24 jam</a>
                                </li>
                                <li>
                                    <a href="">Qwords Rewards</a>
                                </li>
                                <li>
                                    <a href="">Knowledge Base</a>
                                </li>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                                <li>
                                    <a href="">FAQ</a>
                                </li>
                                <li>
                                    <a href="">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div id="aboutus" class="mb-5">
                        <h4 class="fw-bold mb-3 mb-lg-4 h5home">Mengenai Kami</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">Corporate Website</a>
                            </li>
                            <li>
                                <a href="">Qwords History</a>
                            </li>
                            <li>
                                <a href="">Qwords Differences</a>
                            </li>
                            <li>
                                <a href="">Media Publication</a>
                            </li>
                            <li>
                                <a href="">Network & Infrastructure</a>
                            </li>
                            <li>
                                <a href="">Partner</a>
                            </li>
                            <li>
                                <a href="">Career & Employment</a>
                            </li>
                        </ul>
                    </div>
                    <div id="msa" class="mb-5">
                        <h4 class="fw-bold mb-3 mb-lg-4 h5home">MSA/SLA/AUP</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">Master Service Agreement</a>
                            </li>
                            <li>
                                <a href="">Refund Policy</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Product Life Cycle Policy</a>
                            </li>
                            <li>
                                <a href="">Penggunaan Merek dan Logo</a>
                            </li>
                            <li>
                                <a href="">Migrasi Ke Qwords</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div id="others" class="mb-5">
                        <h4 class="fw-bold mb-3 mb-lg-4 h5home">Layanan Lainnya</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">Extended Support</a>
                            </li>
                            <li>
                                <a href="">Manage The Box Server</a>
                            </li>
                            <li>
                                <a href="">Flexi Main Domain</a>
                            </li>
                            <li>
                                <a href="">FTP Backup</a>
                            </li>
                            <li>
                                <a href="">Offline Backup</a>
                            </li>
                            <li>
                                <a href="">Hosting Insurance</a>
                            </li>
                            <li>
                                <a href="">Software License</a>
                            </li>
                            <li>
                                <a href="">Digital Signature</a>
                            </li>
                        </ul>
                    </div>
                    <div id="resellerservice" class="mb-5">
                        <h4 class="fw-bold mb-3 mb-lg-4 h5home">Layanan Reseller</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">Afiliasi</a>
                            </li>
                            <li>
                                <a href="">Qwords VIP Partner</a>
                            </li>
                            <li>
                                <a href="">Private Label Hosting Reseller</a>
                            </li>
                            <li>
                                <a href="">Private Label Domain Reseller</a>
                            </li>
                        </ul>
                    </div>
                    <div id="resellerservice" class="mb-5">
                        <h4 class="fw-bold mb-3 mb-lg-4 h5home">Free Tools</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">Qwords Link-Q</a>
                            </li>
                            <li>
                                <a href="">WhatsApp Link Generator</a>
                            </li>
                            <li>
                                <a href="">Network Tools</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="office">
                        <div id="surabaya" class="mb-5">
                            <h4 class="fw-bold mb-3 mb-lg-4 h5home">Kantor Surabaya</h4>
                            <p>
                                Gedung Bursa Efek Indonesia Lt.10, Jl. Taman AIS Nasution No.21, Surabaya 60271 - Indonesia 031 30008800
                                No.21, Surabaya 60271 - Indonesia 031 30008800
                            </p>
                        </div>
                        <div id="yogya" class="mb-5">
                            <h4 class="fw-bold mb-3 mb-lg-4 h5home">Kantor Yogyakarta</h4>
                            <p>
                                Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman, Yogyakarta 55584 - Indonesia 0274 6058800
                            </p>
                        </div>
                        <div id="jakarta" class="mb-5">
                            <h4 class="fw-bold mb-3 mb-lg-4 h5home">Kantor Jakarta</h4>
                            <p>
                                Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat no.8, Jakarta 12710 - Indonesia 021 39708800
                            </p>
                        </div>
                        <div id="bandung" class="mb-5">
                            <h4 class="fw-bold mb-3 mb-lg-4 h5home">Kantor Bandung</h4>
                            <p>
                                Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi, Bandung 40163 - Indonesia 022 30508800
                            </p>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="row d-flex h-100">
                    <div class="col-12 col-lg-12">
                        <div id="pse" class="my-5">
                            <h4 class="fw-bold mb-5 mb-lg-12 h5home">
                                Terdaftar di PSE, ICANN dan Partner Lainnya
                            </h4>
                            <div class="d-flex align-items-center flex-wrap">
                                <a href="">
                                    <div class="me-3">
                                        <img src="images/code.webp" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="me-3">
                                        <img src="images/icann-logo.webp" alt="">
                                    </div>
                                </a>
                                <div class="me-3">
                                    <img src="images/badge_litespeed.png" alt="" width="100px">
                                </div>
                                <div class="me-3">
                                    <img src="images/badge_whmadmin.png" alt="" width="100px">
                                </div>
                                <div class="me-3">
                                    <img src="images/acronis-cloud-tech.webp" alt="">
                                </div>
                                <div class="me-3">
                                    <img src="images/acronis-cloud-sales.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center pb-3 pb-lg-0" style="min-height: 7rem;">
                    <div class="row justify-content-center align-items-end mt-auto" id="end-footer">
                        <div class="col-12 col-lg-auto pb-3">
                            <div class="hstack gap-3 justify-content-center justify-content-lg-end">
                                <a href="https://www.facebook.com/qwordsdotcom">
                                    <div class="social-icon">
                                        <img src="images/Facebook.webp" alt="" width="30px">
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/qwordsdotcom/">
                                    <div class="social-icon">
                                        <img src="images/Instagram.webp" alt="" width="30px">
                                    </div>
                                </a>
                                <a href="https://twitter.com/qwordsdotcom">
                                    <div class="social-icon">
                                        <img src="images/Twitter.webp" alt="" width="30px">
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/user/qwordsvideo">
                                    <div class="social-icon">
                                        <img src="images/Youtube.webp" alt="" width="30px">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 pb-3">
                            <p class="mb-0 text-center">
                                Copyright ©
                                <span class="yearFooter"></span>
                                PT. Qwords Company International
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>
