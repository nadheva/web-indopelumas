<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

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
            'tgl_post' => 'required',
            // 'bln_post' => 'required',
            'kategori' => 'required',
            'judul'  => 'required',
            'short_news'   => 'required',
            'news'      => 'required'
        ]);

        News::create([
            'tgl_post' => $request->tgl_post,
            // 'bln_post' => $request->bln_post,
            'kategori' => $request->kategori,
            'judul'     => $request->judul,
            'short_news'=> $request->short_news,
            'news'      => $request->news
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
        $news->tgl_post = $request->tgl_post;
        // $news->bln_post = $request->bln_post;
        $news->kategori = $request->kategori;
        $news->judul = $request->judul;
        $news->short_news = $request->short_news;
        $news->news = $request->news;


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
}
