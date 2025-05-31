@extends('layouts.app')
@section('content')
    <section id="bg-menu" class="py-5" style="background-color: #333; margin-top: 5.5rem">
        <div class="text-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <p class="text-white fs-1 fw-bold m-0">
                        Layanan Kami
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4 align-items-stretch">
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="{{ asset('img/5.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column text-center text-default">
                            <h5 class="card-title">Usaha Besar/Tinggi</h5>
                            <h5 class="card-title">Rp12.500.000</h5>
                            <p class="fst-italic mt-3">Belum termasuk biaya Audit/Pemeriksaan atas Bahan, Proses Produksi dan Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="{{ asset('img/3.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column text-center text-default">
                            <h5 class="card-title">Usaha Menengah</h5>
                            <h5 class="card-title">Rp5.000.000</h5>
                            <p class="fst-italic mt-3">Belum termasuk biaya Audit/Pemeriksaan atas Bahan, Proses Produksi dan Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="{{ asset('img/5.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column text-center text-default">
                            <h5 class="card-title">Usaha Mikro / Kecil</h5>
                            <h5 class="card-title">Rp650.000</h5>
                            <p class="fst-italic mt-3">Belum termasuk biaya Audit/Pemeriksaan atas Bahan, Proses Produksi dan Produk</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
