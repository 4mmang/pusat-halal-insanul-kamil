@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('dashboard') }}" class="text-decoration-none">Pusat Halal
                    Insan Kamil</a> /
                <a href="{{ route('kelola-pendaftaran.index') }}" class="text-decoration-none">Daftar Pendaftar</a> / Detail
                Pendaftar
            </p>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_pendaftaran" class="mb-2">Tanggal Pendaftaran <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal_pendaftaran"
                                    id="tanggal_pendaftaran" value="{{ $pendaftar->tanggal_pendaftaran }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status_pendaftaran" class="mb-2">Status Pendaftaran <span
                                        class="text-danger">*</span></label>
                                <select name="status_pendaftaran" class="form-control" id="status_pendaftaran" disabled>
                                    <option value="baru" {{ $pendaftar->status_pendaftaran == 'baru' ? 'selected' : '' }}>
                                        Baru</option>
                                    <option value="lama" {{ $pendaftar->status_pendaftaran == 'lama' ? 'selected' : '' }}>
                                        Lama</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_usaha" class="mb-2">Nama Usaha/Perusahaan <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama_usaha" id="nama_usaha"
                                    value="{{ $pendaftar->nama_usaha }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="alamat_usaha" class="mb-2">Alamat Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat_usaha" id="alamat_usaha"
                                    value="{{ $pendaftar->alamat_usaha }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kelurahan" class="mb-2">Kelurahan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kelurahan" id="kelurahan"
                                    value="{{ $pendaftar->kelurahan }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kecamatan" class="mb-2">Kecamatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                    value="{{ $pendaftar->kecamatan }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kabupaten" class="mb-2">Kab/Kota <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kabupaten" id="kabupaten"
                                    value="{{ $pendaftar->kabupaten }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="provinsi" class="mb-2">Provinsi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="provinsi" id="provinsi"
                                    value="{{ $pendaftar->provinsi }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kode_pos" class="mb-2">Kode Pos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kode_pos" id="kode_pos"
                                    value="{{ $pendaftar->kode_pos }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="skala_usaha" class="mb-2">Skala Usaha <span
                                        class="text-danger">*</span></label>
                                <select name="skala_usaha" class="form-control" id="skala_usaha" disabled>
                                    <option value="mikro" {{ $pendaftar->skala_usaha == 'mikro' ? 'selected' : '' }}>
                                        Mikro</option>
                                    <option value="menengah"
                                        {{ $pendaftar->skala_usaha == 'menengah' ? 'selected' : '' }}>Menengah</option>
                                    <option value="besar" {{ $pendaftar->skala_usaha == 'besar' ? 'selected' : '' }}>
                                        Besar</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lokasi_produksi" class="mb-2">Alamat Lokasi Produksi <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="lokasi_produksi" id="lokasi_produksi"
                                    value="{{ $pendaftar->lokasi_produksi }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status_usaha" class="mb-2">Status Usaha <span
                                        class="text-danger">*</span></label>
                                <select name="status_usaha" class="form-control" id="status_usaha" disabled>
                                    <option value="pribadi" {{ $pendaftar->status_usaha == 'pribadi' ? 'selected' : '' }}>
                                        Milik Sendiri</option>
                                    <option value="bersama" {{ $pendaftar->status_usaha == 'bersama' ? 'selected' : '' }}>
                                        Bersama</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email_usaha" class="mb-2">Email Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email_usaha" id="email_usaha"
                                    value="{{ $pendaftar->email_usaha }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_hp_usaha" class="mb-2">No Telephone/Whatsapp Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="no_hp_usaha" id="no_hp_usaha"
                                    value="{{ $pendaftar->no_hp_usaha }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_lengkap" class="mb-2">Nama Lengkap <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                    value="{{ $pendaftar->nama_lengkap }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_ktp" class="mb-2">Nomor KTP <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="no_ktp" id="no_ktp"
                                    value="{{ $pendaftar->no_ktp }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email_pribadi" class="mb-2">Email Pribadi (Aktif) <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email_pribadi" id="email_pribadi"
                                    value="{{ $pendaftar->email_pribadi }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_hp" class="mb-2">No. Telp/Whatsapp <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp"
                                    value="{{ $pendaftar->no_hp }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="penanggung_jawab" class="mb-2">Penanggung Jawab <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab"
                                    value="{{ $pendaftar->penanggung_jawab }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jabatan" class="mb-2">Jabatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan"
                                    value="{{ $pendaftar->jabatan }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ktp" class="mb-2">KTP <span class="text-danger">*</span></label>
                                {{-- Check if there's a KTP file path in $pendaftar before displaying --}}
                                @if ($pendaftar->ktp)
                                    <img src="{{ asset('storage/' . $pendaftar->ktp) }}" alt="KTP Image"
                                        class="img-fluid border p-2">
                                @else
                                    <p>No KTP uploaded.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nib" class="mb-2">NIB</label>
                                {{-- Check if there's a NIB file path in $pendaftar before displaying --}}
                                @if ($pendaftar->nib)
                                    <img src="{{ asset('storage/' . $pendaftar->nib) }}" alt="NIB Image"
                                        class="img-fluid border p-2">
                                @else
                                    <p>No NIB uploaded.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="npwp" class="mb-2">NPWP</label>
                                {{-- Check if there's an NPWP file path in $pendaftar before displaying --}}
                                @if ($pendaftar->npwp)
                                    <img src="{{ asset('storage/' . $pendaftar->npwp) }}" alt="NPWP Image"
                                        class="img-fluid border p-2">
                                @else
                                    <p>No NPWP uploaded.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo_usaha" class="mb-2">Logo Usaha <span
                                        class="text-danger">*</span></label>
                                {{-- Check if there's a Logo Usaha file path in $pendaftar before displaying --}}
                                @if ($pendaftar->logo_usaha)
                                    <img src="{{ asset('storage/' . $pendaftar->logo_usaha) }}" alt="Logo Usaha"
                                        class="img-fluid border p-2">
                                @else
                                    <p>No Logo Usaha uploaded.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('scripts')
@endsection
