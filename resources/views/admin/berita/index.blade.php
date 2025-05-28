@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('dashboard') }}" class="text-decoration-none">Pusat Halal
                    Insan Kamil</a> /
                Daftar Berita</p>
            <a href="{{ route('kelola-berita.create') }}" style="background-color: #38527E" class="btn mt-3 text-white"><i
                    class="fal fa-plus"></i> Tambah Berita</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="table-responsive">
                        <table id="berita" class="table table-sm text-center table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Cover</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $item)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">
                                            <img src="{{ asset('storage/' . $item->sampul) }}" alt="Cover 1"
                                                class="img-fluid" style="max-width: 100px;">
                                        </td>
                                        <td class="align-middle">{{ $item->judul }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('kelola-berita.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm mb-1">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm mb-1"
                                                data-id="{{ $item->id }}" data-nama="{{ $item->judul }}"
                                                data-url="{{ route('kelola-berita.destroy', $item->id) }}"
                                                onclick="confirmDelete(this)">Delete</button>

                                            <form id="delete-form-{{ $item->id }}"
                                                action="{{ route('kelola-berita.destroy', $item->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
            $('#berita').DataTable({
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
    <script>
        function confirmDelete(button) {
            const itemId = button.dataset.id;
            const itemName = button.dataset.nama;
            const deleteUrl = button.dataset.url;

            // Menonaktifkan tombol "Delete" di tabel saat SweetAlert muncul
            button.disabled = true;

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: `Anda akan menghapus berita "${itemName}"`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                // Lifecycle hook untuk mengaktifkan kembali tombol tabel jika SweetAlert ditutup tanpa konfirmasi
                didClose: () => {
                    // Ini akan dijalankan ketika SweetAlert ditutup (baik dikonfirmasi, dibatalkan, atau diklik di luar)
                    // Kita akan mengaktifkan kembali tombol hanya jika tidak dikonfirmasi.
                    // Jika dikonfirmasi, form sudah disubmit dan halaman akan refresh, jadi tidak perlu diaktifkan kembali.
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika dikonfirmasi, submit form
                    document.getElementById('delete-form-' + itemId).submit();
                    // Tombol di tabel akan tetap disabled atau akan di-reset saat halaman refresh
                } else if (result.dismiss === Swal.DismissReason.cancel || result.dismiss === Swal.DismissReason
                    .backdrop || result.dismiss === Swal.DismissReason.esc) {
                    // Jika dibatalkan (klik tombol "Batal", klik di luar, atau tekan ESC)
                    // Aktifkan kembali tombol "Delete" di tabel
                    button.disabled = false;
                }
            });
        }
    </script>
@endsection
