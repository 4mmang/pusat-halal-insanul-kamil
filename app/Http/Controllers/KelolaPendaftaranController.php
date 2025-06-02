<?php

namespace App\Http\Controllers;

use App\Exports\ExportPendaftar;
use App\Models\Registration;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function export()
    {
        return Excel::download(new ExportPendaftar, 'data_pendaftaran.xlsx');
    }
}
