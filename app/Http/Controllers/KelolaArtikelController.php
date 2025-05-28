<?php

namespace App\Http\Controllers;

use App\Models\Article;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KelolaArtikelController extends Controller
{
    public function index()
    {
        $artikel = Article::where('id_user', Auth::id())->get();
        return view('admin.artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'sampul' => ['required', 'mimes:png,jpg,jpeg'],
            'deskripsi' => 'required'
        ]);

        try {
            $pathCover = $request->file('sampul')->store('covers', 'public');

            $deskripsi = $request->deskripsi;
            libxml_use_internal_errors(true);
            $dom = new DOMDocument();
            $dom->loadHTML($deskripsi);
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $key => $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, 'data:image/') === 0) {
                    // Pastikan src berupa base64
                    $data = base64_decode(explode(',', explode(';', $src)[1])[1]);
                    // Simpan gambar ke storage/app/public/upload
                    $image_name = 'artikel/' . time() . $key . '.png';
                    Storage::disk('public')->put($image_name, $data);
                    // Update atribut src gambar ke URL baru
                    $img->removeAttribute('src');
                    $img->setAttribute('src', url('storage/' . $image_name));

                    $style = $img->getAttribute('style');
                    $styles = explode(';', $style); // Pisahkan properti CSS berdasarkan ';'

                    $floatValue = null;
                    foreach ($styles as $rule) {
                        $rule = trim($rule); // Hilangkan spasi di awal dan akhir
                        if (strpos($rule, 'float:') !== false) {
                            $floatValue = trim(explode(':', $rule)[1]); // Ambil nilainya
                            break;
                        }
                    }
                    $styleImage = '';
                    if ($floatValue) {
                        $styleImage = $floatValue === 'right' ? 'margin-left: 15px;' : 'margin-right: 15px;';
                    }
                    $img->setAttribute('style', "$style $styleImage");
                }
            }

            $deskripsi = $dom->saveHTML();
            $artikel = Article::create([
                'judul' => $request->judul,
                'id_user' => Auth::id(),
                'sampul' => $pathCover,
                'deskripsi' => $deskripsi,
            ]);

            return redirect()->route('kelola-artikel.edit', $artikel->id)->with([
                'message' => 'Artikel baru berhasil ditambahkan',
            ]);
        } catch (\Throwable $th) {
            return back()->withErrors([
                // 'error' => 'Terjadi kesalahan',
                'error' => $th->getMessage(),
            ]);
        }
    }

    public function edit($id)
    {
        $artikel = Article::where('id_user', Auth::id())->where('id', $id)->firstOrFail();
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        try {
            $deskripsi = $request->deskripsi;
            libxml_use_internal_errors(true);
            $dom = new DOMDocument();
            $dom->loadHTML($deskripsi);
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $key => $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, 'data:image/') === 0) {
                    // Pastikan src berupa base64
                    $data = base64_decode(explode(',', explode(';', $src)[1])[1]);
                    // Simpan gambar ke storage/app/public/upload
                    $image_name = 'artikel/' . time() . $key . '.png';
                    Storage::disk('public')->put($image_name, $data);
                    // Update atribut src gambar ke URL baru
                    $img->removeAttribute('src');
                    $img->setAttribute('src', url('storage/' . $image_name));

                    $style = $img->getAttribute('style');
                    $styles = explode(';', $style); // Pisahkan properti CSS berdasarkan ';'

                    $floatValue = null;
                    foreach ($styles as $rule) {
                        $rule = trim($rule); // Hilangkan spasi di awal dan akhir
                        if (strpos($rule, 'float:') !== false) {
                            $floatValue = trim(explode(':', $rule)[1]); // Ambil nilainya
                            break;
                        }
                    }
                    $styleImage = '';

                    if ($floatValue) {
                        $styleImage = $floatValue === 'right' ? 'margin-left: 15px;' : 'margin-right: 15px;';
                    }
                    $img->setAttribute('style', "$style $styleImage");
                }
            }
            $deskripsi = $dom->saveHTML();
            $artikel = Article::where('id_user', Auth::id())->where('id', $id)->first();

            $artikel->judul = $request->judul;
            $artikel->deskripsi = $deskripsi;

            if ($request->file('sampul')) {
                Storage::disk('public')->delete($artikel->sampul);
                $artikel->sampul = $request->file('sampul')->store('covers', 'public');
            }

            $artikel->save();
            return back()->with([
                'message' => 'Artikel berhasil diperbaharui',
            ]);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' => 'Terjadi kesalahan',
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $article = Article::where('id', $id)->where('id_user', Auth::id())->firstOrFail();

            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($article->deskripsi);
            $images = $dom->getElementsByTagName('img');

            foreach ($images as $img) {
                $relativePath = str_replace('http://127.0.0.1:8000/storage/', '', $img->getAttribute('src'));
                Storage::disk('public')->delete($relativePath);
            }

            Storage::disk('public')->delete($article->sampul);
            $article->delete();
            return back()->with([
                'message' => 'Artikel berhasil dihapus',
            ]);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' => 'Terjadi kesalahan',
            ]);
        }
    }
}
