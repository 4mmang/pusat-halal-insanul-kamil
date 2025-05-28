<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $artikel = Article::latest()->limit(3)->get();
        $berita = News::latest()->limit(3)->get();
        return view('home', compact('artikel', 'berita'));
    }
}
