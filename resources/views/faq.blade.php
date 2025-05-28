@extends('layouts.app')
<section class="py-5 bg-light" style="margin-top: 5.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="fs-3 playfair">FAQ (Tanya Jawab Umum)</p>
                <div class="accordion" id="collapseParent">
                    <!-- Makanan -->
                    {{-- <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseMakanan" aria-expanded="false"
                        aria-controls="collapseMakanan">
                        Apa itu Sertifikat Halal & Fungsinya?
                    </button> --}}
                    <div id="accordionParent">
                        @forelse ($faqs as $faq)
                            <button
                                class="btn btn-outline-success form-control mb-2 text-start d-flex justify-content-between align-items-center"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFAQ{{ $faq->id }}" aria-expanded="false"
                                aria-controls="collapseFAQ{{ $faq->id }}">
                                <span>{{ $faq->question }}</span>
                                {{-- Chevron icon for visual indicator --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>

                            <div class="collapse mb-2" id="collapseFAQ{{ $faq->id }}"
                                data-bs-parent="#accordionParent">
                                <div class="card p-3">
                                    <div class="card-body">
                                        {{-- !! makes sure HTML in $faq->answer is rendered correctly --}}
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Data Kosong</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionParent = document.getElementById('accordionParent'); // Dapatkan parent akordion

            if (!accordionParent) { // Pastikan parent ada
                console.warn("Element with ID 'accordionParent' not found. FAQ button logic might not work.");
                return;
            }

            // Delegasi Event Listener pada parent (lebih efisien & robust)
            accordionParent.addEventListener('click', function(event) {
                const clickedButton = event.target.closest('[data-bs-toggle="collapse"]');

                if (clickedButton) {
                    // Reset semua tombol lain ke outline-success
                    const faqButtons = accordionParent.querySelectorAll('[data-bs-toggle="collapse"]');
                    faqButtons.forEach(otherButton => {
                        if (otherButton !== clickedButton) { // Jika tombol bukan yang sedang diklik
                            otherButton.classList.remove('btn-success');
                            otherButton.classList.add('btn-outline-success');
                        }
                    });

                    // Toggle (ubah) kelas untuk tombol yang sedang diklik
                    // Ini akan membuatnya jadi hijau solid saat terbuka, dan kembali outline saat ditutup
                    if (clickedButton.classList.contains('btn-success')) {
                        clickedButton.classList.remove('btn-success');
                        clickedButton.classList.add('btn-outline-success');
                    } else {
                        clickedButton.classList.remove('btn-outline-success');
                        clickedButton.classList.add('btn-success');
                    }
                }
            });

            // Tetap pertahankan event listener Bootstrap untuk sinkronisasi
            accordionParent.addEventListener('shown.bs.collapse', function(event) {
                const button = document.querySelector(`[data-bs-target="#${event.target.id}"]`);
                if (button) {
                    button.classList.remove('btn-outline-success');
                    button.classList.add('btn-success');
                }
            });

            accordionParent.addEventListener('hidden.bs.collapse', function(event) {
                const button = document.querySelector(`[data-bs-target="#${event.target.id}"]`);
                if (button) {
                    button.classList.remove('btn-success');
                    button.classList.add('btn-outline-success');
                }
            });
        });
    </script>
@endpush
