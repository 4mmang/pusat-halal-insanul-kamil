<?php

namespace App\Http\Controllers;

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
        $request->validate([
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

            // File Upload Validation for Images
            'ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nib' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'npwp' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_usaha' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }
}
