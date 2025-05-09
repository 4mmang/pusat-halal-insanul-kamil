@extends('layouts.app')
@section('content')
    <section class="py-5 bg-light" style="margin-top: 5.5rem;">
        <div class="container">
            <div class="row">
                {{-- start carousel --}}
                {{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/1015/800/300" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/1016/800/300" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/1018/800/300" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> --}}
                {{-- end carousel --}}

                <div class="col-md-7">
                    <p class="fs-3 text-md-start text-center playfair">Selamat Datang di Website Resmi, Lembaga Pemeriksa
                        Halal <span class="text-primary">Pusat Halal Insan Kamil </span>
                    </p>
                    <p class="">Mitra terpercaya dalam mewujudkan legalitas dan daya saing UMKM
                        melalui layanan halal yang terintegrasi, profesional, dan berlandaskan syariah.</p>
                    <p class="fs-6 ">Lembaga Pemeriksa Halal (LPH) adalah lembaga yang melakukan
                        kegiatan pemeriksaan dan/atau pengujian
                        terhadap kehalalan produk sebagai bagian dari sistem Jaminan Produk Halal yang ditetapkan oleh
                        negara.</p>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-primary rounded-5 py-2 px-4 mt-3 fw-bold">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-body-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="fs-3 playfair text-center">Visi & Misi</p>
                    <div class="row">
                        <p class="fs-4 playfair text-lg-end">Visi</p>
                        <p style="margin-top: -10px" class="text-lg-end">
                            Menjadi bagian dari penyelenggaraan sertifikasi legalitas Usaha Mikro, Kecil dan Menengah (UMKM)
                            di tanah air.
                        </p>
                    </div>
                    <div class="row mt-5">
                        <p class="fs-4 playfair">Misi</p>
                        <ol style="margin-top: -10px;" class="ms-3">
                            <li>Mewujudkan layanan terintegrasi mulai dari NIB, Sertifikasi Halal, HAKI dan PIRT</li>
                            <li>Mewujudkan UMKM berdaya saing, kuat dan berdaulat</li>
                            <li>Mewujudkan kerjasama multi stakeholder dalam meningkatkan kapasitas UMKM</li>
                            <li>Mewujudkan manajemen organisasi yang profesional</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
