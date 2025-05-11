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
                        Halal <span class="text-primary ">Pusat Halal Insan Kamil </span>
                    </p>
                    <p class="text-md-start text-center">Mitra terpercaya dalam mewujudkan legalitas dan daya saing UMKM
                        melalui layanan halal yang terintegrasi, profesional, dan berlandaskan syariah.</p>
                    <p class="fs-6 text-md-start text-center">Lembaga Pemeriksa Halal (LPH) adalah lembaga yang melakukan
                        kegiatan pemeriksaan dan/atau pengujian
                        terhadap kehalalan produk sebagai bagian dari sistem Jaminan Produk Halal yang ditetapkan oleh
                        negara.</p>
                        <p class="mt-4 text-primary text-md-start text-center">Jam Operasional : Senin, selasa, rabu, jum’at & sabtu buka pukul 08.00-04.00 WITA</p>
                    <div class="row">
                        <div class="col-12 text-lg-start text-center">
                            <a href="#" class="btn btn-primary rounded-5 py-2 px-4 mt-3 fw-bold">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- visi dan misi --}}
    <section class="py-5 bg-body-light">
        <div class="container pb-4">
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
                    <div class="row mt-4">
                        <p class="fs-4 playfair">Misi</p>
                        <div class="ps-2">
                            <ol class="mb-0">
                                <li>Mewujudkan layanan terintegrasi mulai dari NIB, Sertifikasi Halal, HAKI dan PIRT</li>
                                <li>Mewujudkan UMKM berdaya saing, kuat dan berdaulat</li>
                                <li>Mewujudkan kerjasama multi stakeholder dalam meningkatkan kapasitas UMKM</li>
                                <li>Mewujudkan manajemen organisasi yang profesional</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- struktur organisasi --}}
    <section class="py-5 bg-light">
        <div class="container pb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="fs-3 playfair text-center mb-5">Struktur Organisasi</p>
                    <img src="{{ asset('img/struktur-organisasi.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Pemeriksaan dan Audit Kehalalan Produk --}}
    <section class="py-5 bg-body-light">
        <div class="container pb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="fs-3 playfair text-center">Pemeriksaan dan Audit Kehalalan Produk</p>
                    <p>Kami melaksanakan fungsi sebagai LPH atau Lembaga Pemeriksa Halal untuk Kehalalan Produk, sebagaimana
                        yang diamanatkan oleh Undang – Undang No. 33 Tahun 2014 yang memiliki peran yang sangat penting
                        dalam penyelenggaraan JPH di Indonesia.</p>
                        <p class="fw-bold mt-4">LAYANAN LPH PUSAT HALAL INSAN KAMIL</p>
                    <div class="accordion" id="collapseParent">
                        <!-- Makanan -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseMakanan" aria-expanded="false"
                            aria-controls="collapseMakanan">
                            Makanan
                        </button>
                        <div class="collapse" id="collapseMakanan" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <ol class="ps-3 text-start">
                                    <li>Susu dan analognya</li>
                                    <li>Lemak, minyak, dan emulsi minyak</li>
                                    <li>Es untuk dimakan (edible ice) termasuk sherbet dan sorbet</li>
                                    <li>Buah dan sayur dengan pengolahan dan penambahan bahan tambahan pangan</li>
                                    <li>Kembang gula/permen dan cokelat</li>
                                    <li>Serealia dan produk turunannya</li>
                                    <li>Produk bakery</li>
                                    <li>Daging dan produk olahan daging</li>
                                    <li>Ikan dan produk perikanan</li>
                                    <li>Telur olahan dan produk-produk telur hasil olahan</li>
                                    <li>Gula dan pemanis termasuk madu</li>
                                    <li>Garam, rempah, sup, saus, salad, serta produk protein</li>
                                    <li>Pangan olahan untuk keperluan gizi khusus</li>
                                    <li>Makanan ringan siap santap</li>
                                    <li>Pangan siap saji</li>
                                    <li>Penyediaan makanan dan minuman dengan pengolahan</li>
                                    <li>Bahan tambahan pangan</li>
                                    <li>Kelompok bahan lainnya</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Minuman -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseMinuman" aria-expanded="false"
                            aria-controls="collapseMinuman">
                            Minuman
                        </button>
                        <div class="collapse" id="collapseMinuman" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <ol class="ps-3 text-start">
                                    <li>Air Minum</li>
                                    <li>Sari buah dan Sari Sayuran</li>
                                    <li>Konsentrat Sari Buah dan Sari Sayur</li>
                                    <li>Minuman Berbasis Air, Berperisa, dan Particulated drinks</li>
                                    <li>Kopi, Teh, Seduhan Herbal</li>
                                    <li>Minuman Berbasis Susu</li>
                                    <li>Minuman Tradisional</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Obat-obatan -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseObat" aria-expanded="false"
                            aria-controls="collapseObat">
                            Obat-obatan
                        </button>
                        <div class="collapse" id="collapseObat" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <ol class="ps-3 text-start">
                                    <li>Obat Tradisional</li>
                                    <li>Suplemen Kesehatan</li>
                                    <li>Obat Kuasi</li>
                                    <li>Obat Bebas</li>
                                    <li>Obat Bebas Terbatas</li>
                                    <li>Obat Keras yang bukan Narkotika dan Psikotropika</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Produk Kimiawi -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseKimia" aria-expanded="false"
                            aria-controls="collapseKimia">
                            Produk Kimiawi
                        </button>
                        <div class="collapse" id="collapseKimia" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <ol class="ps-3 text-start">
                                    <li>Kelompok bahan penolong</li>
                                    <li>Produk kimia lainnya</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Barang Gunaan -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseBarang" aria-expanded="false"
                            aria-controls="collapseBarang">
                            Barang Gunaan
                        </button>
                        <div class="collapse" id="collapseBarang" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <ol class="ps-3 text-start">
                                    <li>Sandang</li>
                                    <li>Penutup Kepala</li>
                                    <li>Aksesoris</li>
                                    <li>Perbekalan Kesehatan Rumah Tangga</li>
                                    <li>Peralatan rumah tangga</li>
                                    <li>Perlengkapan Peribadatan bagi Umat Islam</li>
                                    <li>Kemasan Produk</li>
                                    <li>Alat Tulis dan Perlengkapan Kantor</li>
                                    <li>Alat Kesehatan</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Kosmetik -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseKosmetik" aria-expanded="false"
                            aria-controls="collapseKosmetik">
                            Kosmetik
                        </button>
                        <div class="collapse" id="collapseKosmetik" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <p class="text-start">-</p>
                            </div>
                        </div>

                        <!-- Jasa -->
                        <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseJasa" aria-expanded="false"
                            aria-controls="collapseJasa">
                            Jasa
                        </button>
                        <div class="collapse" id="collapseJasa" data-bs-parent="#collapseParent">
                            <div class="card card-body">
                                <ol class="ps-3 text-start">
                                    <li>Jasa Penyembelihan</li>
                                    <li>Jasa Pengolahan</li>
                                    <li>Jasa Penyimpanan</li>
                                    <li>Jasa Pengemasan</li>
                                    <li>Jasa Pendistribusian</li>
                                    <li>Jasa Penjualan</li>
                                    <li>Jasa Penyajian</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container pb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="fs-3 playfair text-center mb-5">Alur & Prosedur Sertifikasi Halal</p>
                    <img src="{{ asset('img/alur-proses.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
