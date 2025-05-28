@extends('layouts.admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-0" style="color: #38527E"><a href="{{ route('dashboard') }}" class="text-decoration-none">Pusat Halal
                    Insan Kamil</a> /
                <a href="{{ route('kelola-FAQ.index') }}" class="text-decoration-none"> Daftar FAQ </a>/ Tambah
                FAQ
            </p>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <form id="new-article" action="{{ route('kelola-FAQ.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="question">Question<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('question') is-invalid @enderror" name="question"
                            id="question" value="{{ old('question') }}">
                        @error('question')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror

                        <label for="answer" class="mt-3">answer<sup class="text-danger">*</sup></label>
                        <textarea name="answer" id="answer" cols="30" rows="10"
                            class="form-control @error('answer') is-invalid @enderror">{{ old('answer') }}</textarea>
                        @error('answer')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror

                        <a href="{{ route('kelola-FAQ.index') }}" class="btn btn-danger float-end mt-3 ml-2">Kembali</a>
                        <button id="save" type="submit" style="background-color: #38527E"
                            class="btn text-white mt-3 float-end px-4"><i class="fas fa-save mr-1"></i>
                            Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#answer').summernote({
            placeholder: 'Masukkan jawaban...',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
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
