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
    <section class="py-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4 align-items-stretch">
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="{{ asset('img/5.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column text-center text-default">
                            <h5 class="card-title">Usaha Besar/Tinggi</h5>
                            <h5 class="card-title">Rp12.500.000</h5>
                            <p class="fst-italic mt-3">Belum termasuk biaya Audit/Pemeriksaan atas Bahan, Proses Produksi
                                dan Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="{{ asset('img/3.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column text-center text-default">
                            <h5 class="card-title">Usaha Menengah</h5>
                            <h5 class="card-title">Rp5.000.000</h5>
                            <p class="fst-italic mt-3">Belum termasuk biaya Audit/Pemeriksaan atas Bahan, Proses Produksi
                                dan Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="{{ asset('img/5.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column text-center text-default">
                            <h5 class="card-title">Usaha Mikro / Kecil</h5>
                            <h5 class="card-title">Rp650.000</h5>
                            <p class="fst-italic mt-3">Belum termasuk biaya Audit/Pemeriksaan atas Bahan, Proses Produksi
                                dan Produk</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="py-5 bg-body-secondary">
        <div class="container">
            <p class="fw-bold fs-2 text-default mb-5">Lingkup Usaha yang dilayani oleh LPH <span class="text-warning">Pusat Halal
                    Insan Kamil</span>
            </p>

            <div class="row">
                <div class="col-md-6 mb-4"> {{-- Kolom untuk "Barang" --}}
                    <div class="card h-100 p-3"> {{-- Menggunakan border Bootstrap --}}
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-default">Barang</h5>
                            <ul class="list-unstyled">
                                <li>• Makanan</li>
                                <li>• Minuman</li>
                                <li>• Obat</li>
                                <li>• Kosmetik</li>
                                <li>• Produk Kimiawi</li>
                                <li>• Produk Biologi</li>
                                <li>• Produk Rekayasa Genetik</li>
                                <li>• Barang gunaan</li> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4"> {{-- Kolom untuk "Jasa" --}}
                    <div class="card h-100 p-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-default">Jasa</h5>
                            <ul class="list-unstyled">
                                <li>• Penyembelihan</li>
                                <li>• Pengolahan</li>
                                <li>• Penyimpanan</li>
                                <li>• Pengemasan</li>
                                <li>• Pendistribusian</li>
                                <li>• Penjualan</li>
                                <li>• Penyajian</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
