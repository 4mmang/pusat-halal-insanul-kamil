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
                    {{-- <div class="card-body">
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
                                @if ($pendaftar->ktp)
                                    @php
                                        $fileExtension = pathinfo($pendaftar->ktp, PATHINFO_EXTENSION);
                                        $isPdf = strtolower($fileExtension) == 'pdf';
                                    @endphp
                                    <a href="{{ asset('storage/' . $pendaftar->ktp) }}" target="_blank"
                                        class="btn {{ $isPdf ? 'btn-danger' : 'btn-primary' }} btn-sm d-block text-start p-2 px-3"
                                        style="white-space: normal;">
                                        <i class="fas {{ $isPdf ? 'fa-file-pdf' : 'fa-image' }} m-1"></i> Lihat KTP
                                    </a>
                                @else
                                    <p>No KTP uploaded.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nib" class="mb-2">NIB</label>
                                @if ($pendaftar->nib)
                                    @php
                                        $fileExtension = pathinfo($pendaftar->nib, PATHINFO_EXTENSION);
                                        $isPdf = strtolower($fileExtension) == 'pdf';
                                    @endphp
                                    <a href="{{ asset('storage/' . $pendaftar->nib) }}" target="_blank"
                                        class="btn {{ $isPdf ? 'btn-danger' : 'btn-primary' }} btn-sm d-block text-start p-2 px-3"
                                        style="white-space: normal;">
                                        <i class="fas {{ $isPdf ? 'fa-file-pdf' : 'fa-image' }} m-1"></i> Lihat NIB
                                    </a>
                                @else
                                    <p>No NIB uploaded.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="npwp" class="mb-2">NPWP</label>
                                @if ($pendaftar->npwp)
                                    @php
                                        $fileExtension = pathinfo($pendaftar->npwp, PATHINFO_EXTENSION);
                                        $isPdf = strtolower($fileExtension) == 'pdf';
                                    @endphp
                                    <a href="{{ asset('storage/' . $pendaftar->npwp) }}" target="_blank"
                                        class="btn {{ $isPdf ? 'btn-danger' : 'btn-primary' }} btn-sm d-block text-start p-2 px-3"
                                        style="white-space: normal;">
                                        <i class="fas {{ $isPdf ? 'fa-file-pdf' : 'fa-image' }} m-1"></i> Lihat NPWP
                                    </a>
                                @else
                                    <p>No NPWP uploaded.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo_usaha" class="mb-2">Logo Usaha <span
                                        class="text-danger">*</span></label>
                                @if ($pendaftar->logo_usaha)
                                    @php
                                        $fileExtension = pathinfo($pendaftar->logo_usaha, PATHINFO_EXTENSION);
                                        $isPdf = strtolower($fileExtension) == 'pdf';
                                    @endphp
                                    <a href="{{ asset('storage/' . $pendaftar->logo_usaha) }}" target="_blank"
                                        class="btn {{ $isPdf ? 'btn-danger' : 'btn-primary' }} btn-sm d-block text-start p-2 px-3"
                                        style="white-space: normal;">
                                        <i class="fas {{ $isPdf ? 'fa-file-pdf' : 'fa-image' }} m-1"></i> Lihat Logo Usaha
                                    </a>
                                @else
                                    <p>No Logo Usaha uploaded.</p>
                                @endif
                            </div>
                        </div>
                    </div> --}}

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
                                    <option value="kecil" {{ $pendaftar->skala_usaha == 'kecil' ? 'selected' : '' }}>
                                        Kecil</option>
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
                                <label for="tempat_lahir" class="mb-2">Tempat Lahir <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                    value="{{ $pendaftar->tempat_lahir }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_lahir" class="mb-2">Tanggal Lahir <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                    value="{{ $pendaftar->tanggal_lahir }}" disabled>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="alamat_domisili" class="mb-2">Alamat Domisili <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat_domisili" id="alamat_domisili"
                                    value="{{ $pendaftar->alamat_domisili }}" disabled>
                            </div>
                            <div class="col-md-12 mb-3 mt-2">
                                <label for="nama_nama_produk" class="mb-2">Nama-nama Produk <span
                                        class="text-danger">*</span></label>
                                <a target="_blank"
                                    href="{{ asset('storage/' . $pendaftar->pdf_nama_nama_produk) }}">Lihat nama nama
                                    produk</a>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="nama_nama_bahan_merek" class="mb-2">Nama-nama Bahan/Merek <span
                                        class="text-danger">*</span></label>
                                <a target="_blank"
                                    href="{{ asset('storage/' . $pendaftar->pdf_nama_nama_bahan_merek) }}">Lihat nama nama
                                    bahan/merek</a>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="alamat_outlet" class="mb-2">Alamat Outlet <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat_outlet" id="alamat_outlet"
                                    value="{{ $pendaftar->alamat_outlet }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kemasan" class="mb-2">Kemasan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kemasan" id="kemasan"
                                    value="{{ $pendaftar->kemasan }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cleaning_agent" class="mb-2">Cleaning Agent <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cleaning_agent" id="cleaning_agent"
                                    value="{{ $pendaftar->cleaning_agent }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="denah" class="mb-2">Denah <span class="text-danger">*</span></label>
                                @if ($pendaftar->denah)
                                    <p><a href="{{ asset('storage/' . $pendaftar->denah) }}" target="_blank">Lihat
                                            Denah</a></p>
                                @else
                                    <p>Tidak ada denah diunggah.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="area_pemasaran" class="mb-2">Area Pemasaran <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="area_pemasaran" id="area_pemasaran"
                                    value="{{ $pendaftar->area_pemasaran }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jenis_produk" class="mb-2">Jenis Produk <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jenis_produk" id="jenis_produk"
                                    value="{{ $pendaftar->jenis_produk }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ktp" class="mb-2">KTP <span class="text-danger">*</span></label>
                                @if ($pendaftar->ktp)
                                    <p><a href="{{ asset('storage/' . $pendaftar->ktp) }}" target="_blank">Lihat KTP</a>
                                    </p>
                                @else
                                    <p>Tidak ada KTP diunggah.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nib" class="mb-2">NIB</label>
                                @if ($pendaftar->nib)
                                    <p><a href="{{ asset('storage/' . $pendaftar->nib) }}" target="_blank">Lihat NIB</a>
                                    </p>
                                @else
                                    <p>Tidak ada NIB diunggah.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="npwp" class="mb-2">NPWP</label>
                                @if ($pendaftar->npwp)
                                    <p><a href="{{ asset('storage/' . $pendaftar->npwp) }}" target="_blank">Lihat
                                            NPWP</a></p>
                                @else
                                    <p>Tidak ada NPWP diunggah.</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo_usaha" class="mb-2">Logo Usaha <span
                                        class="text-danger"></span></label>
                                @if ($pendaftar->logo_usaha)
                                    <p><a href="{{ asset('storage/' . $pendaftar->logo_usaha) }}" target="_blank">Lihat
                                            Logo Usaha</a></p>
                                @else
                                    <p>Tidak ada Logo Usaha diunggah.</p>
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
