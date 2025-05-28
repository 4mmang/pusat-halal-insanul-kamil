@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('home') }}" class="text-decoration-none">Pusat Halal Insan Kamil</a> /
                Dashboard</p>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 ms-3">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Pendaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPendaftar }}</div>
                            </div>
                            <div class="col-auto mr-3">
                                <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 ms-3">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Artikel</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalArtikel }}</div>
                            </div>
                            <div class="col-auto mr-3">
                                <i class="fas fa-blog fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 ms-3">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Berita</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalBerita }}</div>
                            </div>
                            <div class="col-auto mr-3">
                                <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 ms-3">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total FAQ</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalFAQ }}</div>
                            </div>
                            <div class="col-auto mr-3">
                                <i class="fas fa-question-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
