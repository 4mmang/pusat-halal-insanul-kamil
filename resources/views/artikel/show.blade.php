@extends('layouts.app')
@section('content')
    <section id="bg-menu" class="py-5" style="background-color: #333; margin-top: 5.5rem">
        <div class="text-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <p class="text-white fs-4 fw-bold m-0">
                        {{ $artikel->judul }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4">
                    {!! $artikel->deskripsi !!}
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <p class="text-center fw-bold">- Artikel Terbaru -</p>
                        @foreach ($artikelTerbaru as $item)
                            <div class="col-md-12 mb-3">
                                <div class="card shadow-lg">
                                    <a class="text-decoration-none" href="{{ route('artikel.show', $item->id) }}">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <img src="{{ asset('storage/' . $item->sampul) }}"
                                                    class="card-img-top img-fluid ms-3" alt="...">
                                            </div>
                                            <div class="col-8">
                                                <div class="card-body d-flex flex-column">
                                                    <p class="card-title text-default mt-auto">
                                                        {{ Str::limit($item->judul, 50, '...') }}</p>
                                                    <p class="text-muted mt-auto">{{ $item->created_at->format('F j, Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
