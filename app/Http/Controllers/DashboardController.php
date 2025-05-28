<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\FAQ;
use App\Models\News;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPendaftar = Registration::count();
        $totalArtikel = Article::count();
        $totalBerita = News::count();
        $totalFAQ = FAQ::count();
        return view('admin.dashboard', compact('totalPendaftar', 'totalArtikel', 'totalBerita', 'totalFAQ'));
    }
}
