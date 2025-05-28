@extends('layouts.app')
@section('content')
    <section id="bg-menu" class="py-5" style="background-color: #333; margin-top: 5.5rem">
        <div class="text-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <p class="text-white fs-1 fw-bold m-0">
                        Artikel Kami
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-4">
        <div class="container">
            <div class="row justify-content-center row-cols-1 row-cols-md-4 g-4 align-items-stretch">
                @forelse ($artikel as $item)
                    <div class="col">
                        <div class="card h-100 shadow-lg">
                            <a class="text-decoration-none" href="{{ route('artikel.show', $item->id) }}">
                                <img src="{{ asset('storage/' . $item->sampul) }}" class="card-img-top" alt="...">
                                <div class="card-body d-flex flex-column">
                                    <span class="badge bg-warning text-dark align-self-end mb-2">ARTIKEL</span>
                                    <p class="card-title text-default">{{ $item->judul }}</p>
                                    <p class="text-muted mt-auto">{{ $item->created_at->format('F j, Y') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-default fs-5 fst-italic">Belum Ada Artikel</p>
                @endforelse
            </div>
        </div>

    </section>
@endsection
