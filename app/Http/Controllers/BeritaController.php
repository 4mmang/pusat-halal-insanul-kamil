<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = News::all();
        return view('berita.index', compact('berita'));
    }

    public function show($id)
    {
        $berita = News::findOrFail($id);
        $beritaTerbaru = News::where('id', '!=', $id)
            ->latest()
            ->limit(3)
            ->get();
        return  view('berita.show', compact('berita', 'beritaTerbaru'));
    }
}
