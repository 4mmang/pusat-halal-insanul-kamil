@extends('layouts.app')
@section('content')
    <section id="bg-menu" class="py-5" style="background-color: #333; margin-top: 8.5rem">
        <div class="text-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <p class="text-white fs-1 fw-bold m-0">
                        Profil
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-body-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <p class="fs-3 fw-bold text-default">Selamat Datang di LPH<span class="text-warning"> Pusat Halal Insan
                            Kamil</span></p>
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <p class="fs-5">LPH Pusat Halal Insan Kamil adalah lembaga pemeriksa halal independen yang berkomitmen
                        menjadi bagian
                        dari penyelenggaraan sertifikasi legalitas Usaha Mikro dan Kecil (UMK) di Indonesia,
                        khususnya di wilayah Sulawesi Selatan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <img src="{{ asset('img/1.jpeg') }}" class="img-fluid mx-auto" alt="">
                </div>
                <div class="col-md-6">
                    <div class="card p-4 shadow-lg">
                        <div class="card-body">
                            <p class="fs-3 fw-bold text-default">Sejarah Kami</p>
                            <p class="">LPH Pusat Halal Insan Kamil lahir dari kebutuhan untuk mendukung pertumbuhan
                                bisnis halal di
                                Indonesia. Dengan meningkatnya permintaan akan produk halal di pasar lokal dan
                                internasional, kami bertekad menjadi mitra terpercaya bagi pelaku usaha untuk memastikan
                                produk mereka memenuhi standar halal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5 bg-body-secondary py-5">
        <div class="container pb-5">
            <div class="row">
                <p class="fs-3 fw-bold text-default">Visi & Misi</p>
                <div class="col-md-12 mb-4">
                    <p class="fs-5 text-default">Menjadi bagian dari penyelenggaraan sertifikasi legalitas Usaha Mikro dan
                        Kecil (UMK) di
                        tanah air.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4 align-items-stretch">
                <div class="col">
                    <div class="card p-2 shadow-lg rounded-5 h-100">
                        <div class="card-body text-center">
                            <p class="fs-5 text-default fst-italic">Mewujudkan layanan terintegrasi mulai dari NIB,
                                Sertifikasi Halal, HAKI dan PIRT</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 shadow-lg rounded-5 h-100">
                        <div class="card-body text-center">
                            <p class="fs-5 text-default fst-italic">Mewujudkan UMK berdaya saing, kuat dan berdaulat</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 shadow-lg rounded-5 h-100">
                        <div class="card-body text-center">
                            <p class="fs-5 text-default fst-italic">Mewujudkan kerjasama multi stakeholder dalam
                                meningkatkan kapasitas UMK</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-2 shadow-lg rounded-5 h-100">
                        <div class="card-body text-center">
                            <p class="fs-5 text-default fst-italic">Mewujudkan manajemen organisasi yang profesional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container pb-3">
            <p class="fs-3 playfair text-center mb-5 text-default">Struktur Lembaga LPH Pusat Halal Insan Kamil
            </p>

            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('img/profil-asli.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
