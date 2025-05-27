@extends('layouts.app')
@section('content')
    <section id="bg-menu" class="py-5" style="background-color: #333; margin-top: 5.5rem">
        <div class="text-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <p class="text-white fs-1 fw-bold m-0">
                        Artikel Kami
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-4">
        <div class="container"> 

            <div class="row row-cols-1 row-cols-md-3 g-4 align-items-stretch">
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-end mb-2">ARTIKEL</span>
                            <h5 class="card-title">Sosialisasi Sertifikasi Halal</h5>
                            <p class="text-muted mt-auto">February 1, 2025</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="https://picsum.photos/400/200?random=2" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-end mb-2">ARTIKEL</span>
                            <h5 class="card-title">satgas halal Kota Bogor menyerahkan sertifikat halal...</h5>
                            <p class="text-muted mt-auto">December 10, 2024</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="https://picsum.photos/400/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-end mb-2">ARTIKEL</span>
                            <h5 class="card-title">Manfaat Sertifikasi Halal Resmi Indonesia untuk Bisnis Anda</h5>
                            <p class="text-muted mt-auto">December 9, 2024</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
