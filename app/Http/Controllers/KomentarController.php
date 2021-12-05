<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function index()
    {
        $komentar = Komentar::all();
        return view('admin.komentar.index', compact('komentar'));
    }

    public function create()
    {
        return view('admin.komentar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'subject'  => 'required',
            'pesan'   => 'required',
        ]);

        Komentar::create([
            'jenis' => $request->jenis,
            'nama' => $request->nama,
            'email' => $request->email,
            'subject'     => $request->subject,
            'pesan'=> $request->pesan,
        ]);

        return redirect()->route('news.index')
        ->with('success', 'Berita Berhasil Ditambahkan');
    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }
    public function delete($id)
    {

    }
}
