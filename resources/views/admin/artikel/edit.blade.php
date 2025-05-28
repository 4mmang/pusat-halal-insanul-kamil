@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('dashboard') }}" class="text-decoration-none">Pusat Halal
                    Insan Kamil</a> /
                <a href="{{ route('kelola-artikel.index') }}" class="text-decoration-none">Daftar Artikel</a> / Edit
            </p>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <form id="new-article" action="{{ route('kelola-artikel.update', $artikel->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <label for="judul">Judul<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}"
                            id="judul" required>

                        <label for="sampul" class="mt-3">Sampul<sup class="text-danger"></sup></label>
                        <input type="file" class="form-control" name="sampul" id="sampul">

                        <label for="deskripsi" class="mt-3">Deskripsi<sup class="text-danger">*</sup></label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10" required>{{ $artikel->deskripsi }}</textarea>
                        
                        <a href="{{ route('kelola-artikel.index') }}" class="btn btn-danger float-end mt-3 ml-2">Kembali</a>
                        <button id="save" type="submit" style="background-color: #38527E"
                            class="btn text-white mt-3 float-end px-4"><i class="fas fa-save mr-1"></i>
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('scripts')
    <script>
        $('#deskripsi').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
            ],
            popover: {
                image: [
                    ['image', ['resizeFull', 'resizeHalf',
                        'resizeQuarter',
                    ]],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']]
                ]
            }
        })
    </script>
    <script>
        let form = document.getElementById('new-article')
        form.addEventListener('submit', function() {
            let btnSave = document.getElementById('save')
            btnSave.disabled = true
            btnSave.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i>Processing...';
        })
    </script>
@endsection
