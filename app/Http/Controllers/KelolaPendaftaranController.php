<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class KelolaPendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Registration::all();
        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }

    public function show($id)
    {
        $pendaftar = Registration::findOrFail($id);
        return view('admin.pendaftaran.show', compact('pendaftar'));
    }
}
