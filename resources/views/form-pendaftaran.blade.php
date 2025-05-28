@extends('layouts.app')
@section('content')
    <section id="bg-menu" class="py-5" style="background-color: #333; margin-top: 5.5rem">
        <div class="text-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <p class="text-white fs-1 fw-bold m-0">
                        Form Pendaftaran Sertifikasi Halal (Reguler)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="card shadow-lg p-3">

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_pendaftaran" class="mb-2">Tanggal Pendaftaran <span
                                        class="text-danger">*</span></label>
                                <input type="date"
                                    class="form-control @error('tanggal_pendaftaran') is-invalid @enderror"
                                    name="tanggal_pendaftaran" id="tanggal_pendaftaran"
                                    value="{{ old('tanggal_pendaftaran') }}">
                                @error('tanggal_pendaftaran')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status_pendaftaran" class="mb-2">Status Pendaftaran <span
                                        class="text-danger">*</span></label>
                                <select name="status_pendaftaran"
                                    class="form-control @error('status_pendaftaran') is-invalid @enderror"
                                    id="status_pendaftaran">
                                    <option value="baru" {{ old('status_pendaftaran') == 'baru' ? 'selected' : '' }}>Baru
                                    </option>
                                    <option value="lama" {{ old('status_pendaftaran') == 'lama' ? 'selected' : '' }}>Lama
                                    </option>
                                </select>
                                @error('status_pendaftaran')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_usaha" class="mb-2">Nama Usaha/Perusahaan
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror"
                                    name="nama_usaha" id="nama_usaha" value="{{ old('nama_usaha') }}">
                                @error('nama_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="alamat_usaha" class="mb-2">Alamat Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('alamat_usaha') is-invalid @enderror"
                                    name="alamat_usaha" id="alamat_usaha" value="{{ old('alamat_usaha') }}">
                                @error('alamat_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kelurahan" class="mb-2">Kelurahan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror"
                                    name="kelurahan" id="kelurahan" value="{{ old('kelurahan') }}">
                                @error('kelurahan')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kecamatan" class="mb-2">Kecamatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror"
                                    name="kecamatan" id="kecamatan" value="{{ old('kecamatan') }}">
                                @error('kecamatan')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kabupaten" class="mb-2">Kab/Kota <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('kabupaten') is-invalid @enderror"
                                    name="kabupaten" id="kabupaten" value="{{ old('kabupaten') }}">
                                @error('kabupaten')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="provinsi" class="mb-2">Provinsi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror"
                                    name="provinsi" id="provinsi" value="{{ old('provinsi') }}">
                                @error('provinsi')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kode_pos" class="mb-2">Kode Pos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('kode_pos') is-invalid @enderror"
                                    name="kode_pos" id="kode_pos" value="{{ old('kode_pos') }}">
                                @error('kode_pos')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="skala_usaha" class="mb-2">Skala Usaha <span
                                        class="text-danger">*</span></label>
                                <select name="skala_usaha" class="form-control @error('skala_usaha') is-invalid @enderror"
                                    id="skala_usaha">
                                    <option value="mikro" {{ old('skala_usaha') == 'mikro' ? 'selected' : '' }}>Mikro
                                    </option>
                                    <option value="menengah" {{ old('skala_usaha') == 'menengah' ? 'selected' : '' }}>
                                        Menengah</option>
                                    <option value="besar" {{ old('skala_usaha') == 'besar' ? 'selected' : '' }}>Besar
                                    </option>
                                </select>
                                @error('skala_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lokasi_produksi" class="mb-2">Alamat Lokasi Produksi <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('lokasi_produksi') is-invalid @enderror"
                                    name="lokasi_produksi" id="lokasi_produksi" value="{{ old('lokasi_produksi') }}">
                                @error('lokasi_produksi')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status_usaha" class="mb-2">Status Usaha <span
                                        class="text-danger">*</span></label>
                                <select name="status_usaha"
                                    class="form-control @error('status_usaha') is-invalid @enderror" id="status_usaha">
                                    <option value="pribadi" {{ old('status_usaha') == 'pribadi' ? 'selected' : '' }}>Milik
                                        Sendiri</option>
                                    <option value="bersama" {{ old('status_usaha') == 'bersama' ? 'selected' : '' }}>
                                        Bersama</option>
                                </select>
                                @error('status_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email_usaha" class="mb-2">Email Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email_usaha') is-invalid @enderror"
                                    name="email_usaha" id="email_usaha" value="{{ old('email_usaha') }}">
                                @error('email_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_hp_usaha" class="mb-2">No Telephone/Whatsapp Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('no_hp_usaha') is-invalid @enderror"
                                    name="no_hp_usaha" id="no_hp_usaha" value="{{ old('no_hp_usaha') }}">
                                @error('no_hp_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_lengkap" class="mb-2">Nama Lengkap <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_ktp" class="mb-2">Nomor KTP <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('no_ktp') is-invalid @enderror"
                                    name="no_ktp" id="no_ktp" value="{{ old('no_ktp') }}">
                                @error('no_ktp')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email_pribadi" class="mb-2">Email Pribadi (Aktif) <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email_pribadi') is-invalid @enderror"
                                    name="email_pribadi" id="email_pribadi" value="{{ old('email_pribadi') }}">
                                @error('email_pribadi')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_hp" class="mb-2">No. Telp/Whatsapp <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" id="no_hp" value="{{ old('no_hp') }}">
                                @error('no_hp')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="penanggung_jawab" class="mb-2">Penanggung Jawab <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control @error('penanggung_jawab') is-invalid @enderror"
                                    name="penanggung_jawab" id="penanggung_jawab" value="{{ old('penanggung_jawab') }}">
                                @error('penanggung_jawab')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jabatan" class="mb-2">Jabatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                    name="jabatan" id="jabatan" value="{{ old('jabatan') }}">
                                @error('jabatan')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ktp" class="mb-2">KTP <span class="text-danger">*</span></label>
                                <input type="file" class="form-control @error('ktp') is-invalid @enderror"
                                    name="ktp" id="ktp">
                                @error('ktp')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nib" class="mb-2">NIB</label>
                                <input type="file" class="form-control @error('nib') is-invalid @enderror"
                                    name="nib" id="nib">
                                @error('nib')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="npwp" class="mb-2">NPWP</label>
                                <input type="file" class="form-control @error('npwp') is-invalid @enderror"
                                    name="npwp" id="npwp">
                                @error('npwp')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo_usaha" class="mb-2">Logo Usaha <span
                                        class="text-danger">*</span></label>
                                <input type="file" type="image"
                                    class="form-control @error('logo_usaha') is-invalid @enderror" name="logo_usaha"
                                    id="logo_usaha">
                                @error('logo_usaha')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-warning text-default fw-bold mt-3 px-5 py-2 rounded-5 fs-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-send me-2" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                            </svg>
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
