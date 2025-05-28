@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('dashboard') }}" class="text-decoration-none">Pusat Halal
                    Insan Kamil</a> /
                Daftar FAQ</p>
            <a href="{{ route('kelola-FAQ.create') }}" style="background-color: #38527E" class="btn mt-3 text-white"><i
                    class="fal fa-plus"></i> Tambah FAQ</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="table-responsive">
                        <table id="articles" class="table table-sm text-center table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Question</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $faq->question }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('kelola-FAQ.edit', $faq->id) }}"
                                                class="btn btn-warning btn-sm mb-1">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm mb-1"
                                                data-id="{{ $faq->id }}" data-nama="{{ $faq->judul }}"
                                                data-url="{{ route('kelola-FAQ.destroy', $faq->id) }}"
                                                onclick="confirmDelete(this)">Delete</button>

                                            <form id="delete-form-{{ $faq->id }}"
                                                action="{{ route('kelola-FAQ.destroy', $faq->id) }}" method="POST"
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
            $('#articles').DataTable({
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
                text: `Anda akan menghapus FAQ "${itemName}". Tindakan ini tidak bisa dibatalkan!`,
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
