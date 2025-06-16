<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule; // Don't forget to import Rule for 'in' validation
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;
use Dompdf\Options;

class PendaftaranController extends Controller
{
    /**
     * Display the registration form.
     * This method would typically render the view with the form.
     */
    public function create()
    {
        return view('form-pendaftaran'); // Assuming your form is in resources/views/registration/form.blade.php
    }

    /**
     * Store a new registration in the database.
     * This method handles the form submission and validation.
     */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'tanggal_pendaftaran' => 'required|date',
    //         'status_pendaftaran' => ['required', Rule::in(['baru', 'lama'])],
    //         'nama_usaha' => 'required|string|max:255',

    //         'nama_nama_produk' => 'required',
    //         'nama_nama_bahan_merek' => 'required',
    //         'alamat_outlet' => 'required|string|max:255',
    //         'kemasan' => 'required|string|max:255',
    //         'cleaning_agent' => 'required|string|max:255',
    //         'denah' => 'required|string|max:255',
    //         'area_pemasaran' => 'required|string|max:255',
    //         'jenis_produk' => 'required|string|max:255',

    //         'alamat_usaha' => 'required|string|max:255',
    //         'kelurahan' => 'required|string|max:255',
    //         'kecamatan' => 'required|string|max:255',
    //         'kabupaten' => 'required|string|max:255',
    //         'provinsi' => 'required|string|max:255',
    //         'kode_pos' => 'required|string|max:10',
    //         'skala_usaha' => ['required', Rule::in(['mikro', 'menengah', 'besar'])],
    //         'lokasi_produksi' => 'required|string|max:255',
    //         'status_usaha' => ['required', Rule::in(['pribadi', 'bersama'])],
    //         'email_usaha' => 'required|email|max:255',
    //         'no_hp_usaha' => 'required|string|max:20',
    //         'nama_lengkap' => 'required|string|max:255',
    //         'no_ktp' => 'required|string|digits:16',
    //         'email_pribadi' => 'required|email|max:255',
    //         'no_hp' => 'required|string|max:20',
    //         'penanggung_jawab' => 'required|string|max:255',
    //         'jabatan' => 'required|string|max:255',
    //         'tempat_lahir' => 'required|string|max:255',
    //         'tanggal_lahir' => 'required',
    //         'alamat_domisili' => 'required|string|max:255',

    //         'ktp' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
    //         'nib' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
    //         'npwp' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
    //         'logo_usaha' => 'nullable|required|mimes:jpeg,png,jpg,pdf|max:2048',
    //     ]);

    //     try {
    //         $ktpPath = $request->file('ktp')->store('uploads/ktp', 'public');
    //         $logoUsahaPath = $request->hasFile('logo_usaha')
    //             ? $request->file('logo_usaha')->store('uploads/logo_usaha', 'public')
    //             : null;
    //         $nibPath = $request->hasFile('nib') ? $request->file('nib')->store('uploads/nib', 'public') : null;
    //         $npwpPath = $request->hasFile('npwp') ? $request->file('npwp')->store('uploads/npwp', 'public') : null;

    //         Registration::create([
    //             'tanggal_pendaftaran' => $validated['tanggal_pendaftaran'],
    //             'status_pendaftaran' => $validated['status_pendaftaran'],
    //             'nama_usaha' => $validated['nama_usaha'],
    //             'alamat_usaha' => $validated['alamat_usaha'],

    //             'nama_nama_produk' => $validated['nama_nama_produk'],
    //             'nama_nama_bahan_merek' => $validated['nama_nama_bahan_merek'],
    //             'alamat_outlet' => $validated['alamat_outlet'],
    //             'kemasan' => $validated['kemasan'],
    //             'cleaning_agent' => $validated['cleaning_agent'],
    //             'denah' => $validated['denah'],
    //             'area_pemasaran' => $validated['area_pemasaran'],
    //             'jenis_produk' => $validated['jenis_produk'],

    //             'kelurahan' => $validated['kelurahan'],
    //             'kecamatan' => $validated['kecamatan'],
    //             'kabupaten' => $validated['kabupaten'],
    //             'provinsi' => $validated['provinsi'],
    //             'kode_pos' => $validated['kode_pos'],
    //             'skala_usaha' => $validated['skala_usaha'],
    //             'lokasi_produksi' => $validated['lokasi_produksi'],
    //             'status_usaha' => $validated['status_usaha'],
    //             'email_usaha' => $validated['email_usaha'],
    //             'no_hp_usaha' => $validated['no_hp_usaha'],
    //             'nama_lengkap' => $validated['nama_lengkap'],
    //             'no_ktp' => $validated['no_ktp'],
    //             'email_pribadi' => $validated['email_pribadi'],
    //             'no_hp' => $validated['no_hp'],
    //             'penanggung_jawab' => $validated['penanggung_jawab'],
    //             'jabatan' => $validated['jabatan'],
    //             'ktp' => $ktpPath,
    //             'nib' => $nibPath,
    //             'npwp' => $npwpPath,
    //             'logo_usaha' => $logoUsahaPath,
    //             'tempat_lahir' => $validated['tempat_lahir'],
    //             'tanggal_lahir' => $validated['tanggal_lahir'],
    //             'alamat_domisili' => $validated['alamat_domisili'],
    //         ]);

    //         return back()->with([
    //             'message' => 'Pendaftaran sertifikasi halal berhasil dilakukan.'
    //         ]);
    //     } catch (\Throwable $th) {
    //         // echo $th->getMessage();
    //         return back()->withErrors([
    //             // 'error' => $th->getMessage()
    //             'error' => 'Terjadi kesalahan, silahkan coba lagi!'
    //         ]);
    //     }
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_pendaftaran' => 'required|date',
            'status_pendaftaran' => ['required', Rule::in(['baru', 'lama'])],
            'nama_usaha' => 'required|string|max:255',

            // Summernote fields now contain HTML
            'nama_nama_produk' => 'required|string', // Will contain HTML
            'nama_nama_bahan_merek' => 'required|string', // Will contain HTML
            'alamat_outlet' => 'required|string|max:255',
            'kemasan' => 'required|string|max:255',
            'cleaning_agent' => 'required|string|max:255',
            'denah' => 'required|string|max:255', // Note: This is currently a string validation but your form has it as file input. Adjust if needed.
            'area_pemasaran' => 'required|string|max:255',
            'jenis_produk' => 'required|string|max:255',

            'alamat_usaha' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'skala_usaha' => ['required', Rule::in(['mikro', 'kecil'])],
            'lokasi_produksi' => 'required|string|max:255',
            'status_usaha' => ['required', Rule::in(['pribadi', 'bersama'])],
            'email_usaha' => 'required|email|max:255',
            'no_hp_usaha' => 'required|string|max:20',
            'nama_lengkap' => 'required|string|max:255',
            'no_ktp' => 'required|string|digits:16',
            'email_pribadi' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'penanggung_jawab' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date', // Added date validation
            'alamat_domisili' => 'required|string|max:255',

            'ktp' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'nib' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'npwp' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'logo_usaha' => 'nullable|mimes:jpeg,png,jpg|max:2048', // Changed to image for logo
            // Assuming 'denah' is also a file upload based on previous HTML
            'denah' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        try {
            // Handle file uploads
            $ktpPath = $request->file('ktp')->store('uploads/ktp', 'public');
            $logoUsahaPath = $request->hasFile('logo_usaha')
                ? $request->file('logo_usaha')->store('uploads/logo_usaha', 'public')
                : null;
            $nibPath = $request->hasFile('nib') ? $request->file('nib')->store('uploads/nib', 'public') : null;
            $npwpPath = $request->hasFile('npwp') ? $request->file('npwp')->store('uploads/npwp', 'public') : null;
            $denahPath = $request->hasFile('denah') ? $request->file('denah')->store('uploads/denah', 'public') : null; // Handle denah upload


            // --- Proses Konten Summernote untuk PDF ---

            // Konfigurasi Dompdf
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true); // Penting jika ada gambar atau CSS eksternal

            // PDF untuk nama_nama_produk
            $produkHtml = $validated['nama_nama_produk'];
            $produkTextForPdf = strip_tags($produkHtml); // Hapus semua tag HTML

            // Optional: Untuk mempertahankan format list numbering lebih baik, Anda bisa melakukan parsing yang lebih canggih.
            // Contoh sederhana untuk list:
            $dom = new \DOMDocument();
            // Suppress warnings for malformed HTML
            libxml_use_internal_errors(true);
            $dom->loadHTML('<?xml encoding="UTF-8">' . $produkHtml); // Load HTML dari Summernote
            libxml_clear_errors();
            $xpath = new \DOMXPath($dom);
            $listItems = $xpath->query('//ol/li | //ul/li');
            $formattedProduk = '';
            $counter = 1;
            foreach ($listItems as $item) {
                if ($item->parentNode->tagName === 'ol') {
                    $formattedProduk .= $counter++ . '. ' . trim(strip_tags($item->nodeValue)) . "\n";
                } else {
                    $formattedProduk .= '- ' . trim(strip_tags($item->nodeValue)) . "\n";
                }
            }
            // If it's not a list, just use the stripped text
            if (empty($formattedProduk)) {
                $formattedProduk = $produkTextForPdf;
            } else {
                $produkTextForPdf = $formattedProduk; // Use formatted list if found
            }


            $dompdfProduk = new Dompdf($options);
            // Anda bisa menambahkan sedikit styling CSS jika diperlukan untuk PDF
            $htmlProduk = '
            <!DOCTYPE html>
            <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <title>Nama-nama Produk</title>
                <style>
                    body { font-family: DejaVu Sans, sans-serif; }
                    pre { white-space: pre-wrap; word-wrap: break-word; font-family: DejaVu Sans, sans-serif;}
                </style>
            </head>
            <body>
                <h1>Nama-nama Produk</h1>
                <pre>' . htmlspecialchars($produkTextForPdf) . '</pre>
            </body>
            </html>';
            $dompdfProduk->loadHtml($htmlProduk);
            $dompdfProduk->setPaper('A4', 'portrait');
            $dompdfProduk->render();

            $pdfProdukFileName = 'produk_' . uniqid() . '.pdf';
            $pdfProdukPath = 'uploads/pdfs/' . $pdfProdukFileName;
            Storage::disk('public')->put($pdfProdukPath, $dompdfProduk->output());

            // PDF untuk nama_nama_bahan_merek
            $bahanHtml = $validated['nama_nama_bahan_merek'];
            $bahanTextForPdf = strip_tags($bahanHtml); // Hapus semua tag HTML

            // Optional: Untuk mempertahankan format list numbering lebih baik
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML('<?xml encoding="UTF-8">' . $bahanHtml);
            libxml_clear_errors();
            $xpath = new \DOMXPath($dom);
            $listItems = $xpath->query('//ol/li | //ul/li');
            $formattedBahan = '';
            $counter = 1;
            foreach ($listItems as $item) {
                if ($item->parentNode->tagName === 'ol') {
                    $formattedBahan .= $counter++ . '. ' . trim(strip_tags($item->nodeValue)) . "\n";
                } else {
                    $formattedBahan .= '- ' . trim(strip_tags($item->nodeValue)) . "\n";
                }
            }
            if (empty($formattedBahan)) {
                $formattedBahan = $bahanTextForPdf;
            } else {
                $bahanTextForPdf = $formattedBahan;
            }

            $dompdfBahan = new Dompdf($options);
            $htmlBahan = '
            <!DOCTYPE html>
            <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <title>Nama-nama Bahan/Merek</title>
                <style>
                    body { font-family: DejaVu Sans, sans-serif; }
                    pre { white-space: pre-wrap; word-wrap: break-word; font-family: DejaVu Sans, sans-serif;}
                </style>
            </head>
            <body>
                <h1>Nama-nama Bahan/Merek</h1>
                <pre>' . htmlspecialchars($bahanTextForPdf) . '</pre>
            </body>
            </html>';
            $dompdfBahan->loadHtml($htmlBahan);
            $dompdfBahan->setPaper('A4', 'portrait');
            $dompdfBahan->render();

            $pdfBahanFileName = 'bahan_merek_' . uniqid() . '.pdf';
            $pdfBahanPath = 'uploads/pdfs/' . $pdfBahanFileName;
            Storage::disk('public')->put($pdfBahanPath, $dompdfBahan->output());


            // Buat entri registrasi di database
            Registration::create([
                'tanggal_pendaftaran' => $validated['tanggal_pendaftaran'],
                'status_pendaftaran' => $validated['status_pendaftaran'],
                'nama_usaha' => $validated['nama_usaha'],
                'alamat_usaha' => $validated['alamat_usaha'],

                'nama_nama_produk' => $produkHtml, // Simpan HTML asli jika perlu
                'nama_nama_bahan_merek' => $bahanHtml, // Simpan HTML asli jika perlu
                'pdf_nama_nama_produk' => $pdfProdukPath, // Simpan path PDF produk
                'pdf_nama_nama_bahan_merek' => $pdfBahanPath, // Simpan path PDF bahan/merek

                'alamat_outlet' => $validated['alamat_outlet'],
                'kemasan' => $validated['kemasan'],
                'cleaning_agent' => $validated['cleaning_agent'],
                'denah' => $denahPath, // Use the stored path
                'area_pemasaran' => $validated['area_pemasaran'],
                'jenis_produk' => $validated['jenis_produk'],

                'kelurahan' => $validated['kelurahan'],
                'kecamatan' => $validated['kecamatan'],
                'kabupaten' => $validated['kabupaten'],
                'provinsi' => $validated['provinsi'],
                'kode_pos' => $validated['kode_pos'],
                'skala_usaha' => $validated['skala_usaha'],
                'lokasi_produksi' => $validated['lokasi_produksi'],
                'status_usaha' => $validated['status_usaha'],
                'email_usaha' => $validated['email_usaha'],
                'no_hp_usaha' => $validated['no_hp_usaha'],
                'nama_lengkap' => $validated['nama_lengkap'],
                'no_ktp' => $validated['no_ktp'],
                'email_pribadi' => $validated['email_pribadi'],
                'no_hp' => $validated['no_hp'],
                'penanggung_jawab' => $validated['penanggung_jawab'],
                'jabatan' => $validated['jabatan'],
                'ktp' => $ktpPath,
                'nib' => $nibPath,
                'npwp' => $npwpPath,
                'logo_usaha' => $logoUsahaPath,
                'tempat_lahir' => $validated['tempat_lahir'],
                'tanggal_lahir' => $validated['tanggal_lahir'],
                'alamat_domisili' => $validated['alamat_domisili'],
            ]);

            return back()->with([
                'message' => 'Pendaftaran sertifikasi halal berhasil dilakukan.'
            ]);
        } catch (\Throwable $th) {
            // Uncomment the line below for detailed error messages during development
            echo $th->getMessage();
            // return back()->withErrors([
            //     'error' => 'Terjadi kesalahan, silahkan coba lagi! ' // Untuk debugging
            // ]);
        }
    }
}
