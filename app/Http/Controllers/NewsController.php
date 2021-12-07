<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'penulis' => 'required',
            'kategori' => 'required',
            'judul'  => 'required',
            'isi'   => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg',
        ]);

        if (isset($request->foto)) {
            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "foto_$date.$extension";
            $path = $request->file('foto')->storeAs('public/news', $file_name);
        } else {
            $file_name = null;
        }

        News::create([
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'judul'  => $request->judul,
            'isi'   => $request->isi,
            'foto' => $file_name,
        ]);

        return redirect()->route('news.index')
        ->with('success', 'Berita Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request,$id)
    {
        $news = News::findOrFail($id);
        $news->kategori = $request->kategori;
        $news->judul = $request->judul;
        $news->isi = $request->isi;
        $news->penulis = $request->penulis;
        if ($request->has("foto")) {

            Storage::delete("public/Testimonials/$news->foto");

            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "foto_$date.$extension";
            $path = $request->file('foto')->storeAs('public/testimonials', $file_name);
            
            $news->foto = $file_name;
        }

        $news->save();

        return redirect()->route('news.index')
            ->with('edit', 'Berita Berhasil Diedit');
    }
    public function delete($id)
    {
        $news = News::where('id', $id)->delete();
        return redirect()->route('news.index')
        ->with('delete', 'Berita berhasil dihapus');
    }

    public function show($id)
    {
        $berita = News::where('id', $id)->first();
        $semuaberita = News::all();
        return view('users.newsdetail', compact('berita', 'semuaberita'));
    }
}
