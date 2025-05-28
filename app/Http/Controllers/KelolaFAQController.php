<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class KelolaFAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('admin.FAQ.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.FAQ.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        try {
            $faq = FAQ::create([
                'question' => $request->question,
                'answer' => $request->answer,
            ]);

            return redirect()->route('kelola-FAQ.edit', $faq->id)->with([
                'message' => 'Data berhasil ditambahkan',
            ]);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' => 'Terjadi kesalahan'
            ]);
        }
    }

    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('admin.FAQ.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        try {
            $faq = FAQ::findOrFail($id);
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->update();
            return back()->with([
                'message' => 'Data berhasil diperbaharui'
            ]);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' => 'Terjadi kesalahan'
            ]);
        }
    }

    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();
        return back()->with([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
