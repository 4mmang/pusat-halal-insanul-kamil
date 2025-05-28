@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('dashboard') }}" class="text-decoration-none">Pusat Halal Insan Kamil</a> /
                Daftar Pendaftar
            </p>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="table-responsive">
                        <table id="pendaftar" class="table table-sm text-center text-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Lengkap</th>
                                    <th class="text-center">Tanggal Pendaftaran</th>
                                    <th class="text-center">Skala Usaha</th>
                                    <th class="text-center">Email Pribadi</th>
                                    <th class="text-center">No. Telp/Whatsapp</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftaran as $pendaftar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pendaftar->nama_lengkap }}</td>
                                        <td>{{ $pendaftar->tanggal_pendaftaran }}</td>
                                        <td>{{ $pendaftar->skala_usaha }}</td>
                                        <td>{{ $pendaftar->email_pribadi }}</td>
                                        <td>{{ $pendaftar->no_hp }}</td>
                                        <td>
                                            <a href="{{ route('kelola-pendaftaran.show', $pendaftar->id) }}"
                                                class="btn btn-sm btn-primary" title="Lihat Detail">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#pendaftar').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ entri per halaman",
                    "zeroRecords": "Tidak ada data yang ditemukan",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                    "infoFiltered": "(disaring dari _MAX_ total entri)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endsection
