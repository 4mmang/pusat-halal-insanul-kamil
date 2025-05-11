@extends('layouts.app')
<section class="py-5 bg-light" style="margin-top: 5.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="fs-3 playfair">FAQ (Tanya Jawab Umum)</p>
                <div class="accordion" id="collapseParent">
                    <!-- Makanan -->
                    <button class="btn btn-outline-primary form-control mb-2 text-start" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseMakanan" aria-expanded="false"
                        aria-controls="collapseMakanan">
                        Apa itu Sertifikat Halal & Fungsinya?
                    </button>
                    <div class="collapse" id="collapseMakanan" data-bs-parent="#collapseParent">
                        <div class="card card-body">
                            <p>Sertifikat Halal adalah fatwa tertulis yang diterbitkan oleh Badan Penyelenggara Jaminan
                                Produk Halal (BPJPH) atas produk yang telah dinyatakan halal. Penetapan ini dilakukan
                                setelah:</p>
                            <ol class="ps-3 text-start">
                                <li>
                                    Produk didaftarkan secara resmi,
                                </li>
                                <li>
                                    Diaudit oleh Lembaga Pemeriksa Halal (LPH) seperti LPH Pusat Halal Insan Kamil, dan
                                </li>
                                <li>
                                    Diputuskan melalui sidang Komisi Fatwa Majelis Ulama Indonesia (MUI).
                                </li>
                            </ol>
                            <p>
                                Fungsinya adalah memberikan jaminan bahwa produk memenuhi prinsip syariah, meningkatkan
                                kepercayaan konsumen, serta menjadi syarat legalitas edar bagi pelaku usaha, khususnya
                                di pasar muslim domestik maupun global.
                            </p>
                            <ol class="ps-3 text-start">
                                <li>
                                    Proses Audit & Dokumen Wajib
                                </li>
                                <li>
                                    Lama Proses, Revisi & Koreksi
                                </li>
                                <li>
                                    Peran Penyelia Halal
                                </li>
                                <li>
                                    Proses Pengajuan di ptsp.halal.go.id
                                </li>
                                <li>
                                    Masa Berlaku Sertifikat & Risiko Ketidaksesuaian
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
