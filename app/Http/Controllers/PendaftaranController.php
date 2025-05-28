<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; // Don't forget to import Rule for 'in' validation

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_pendaftaran' => 'required|date',
            'status_pendaftaran' => ['required', Rule::in(['baru', 'lama'])],
            'nama_usaha' => 'required|string|max:255',
            'alamat_usaha' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'skala_usaha' => ['required', Rule::in(['mikro', 'menengah', 'besar'])],
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

            'ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nib' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'npwp' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'logo_usaha' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $ktpPath = $request->file('ktp')->store('uploads/ktp', 'public');
            $logoUsahaPath = $request->file('logo_usaha')->store('uploads/logo_usaha', 'public');
            $nibPath = $request->hasFile('nib') ? $request->file('nib')->store('uploads/nib', 'public') : null;
            $npwpPath = $request->hasFile('npwp') ? $request->file('npwp')->store('uploads/npwp', 'public') : null;

            Registration::create([
                'tanggal_pendaftaran' => $validated['tanggal_pendaftaran'],
                'status_pendaftaran' => $validated['status_pendaftaran'],
                'nama_usaha' => $validated['nama_usaha'],
                'alamat_usaha' => $validated['alamat_usaha'],
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
            ]);

            return back()->with([
                'message' => 'Berhasil melakukan registrasi'
            ]);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'message' => 'Terjadi kesalahan, silahkan coba lagi!'
            ]);
        }
    }
}
