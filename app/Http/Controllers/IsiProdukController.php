<?php

namespace App\Http\Controllers;
use App\Models\IsiProduk;
use Illuminate\Http\Request;

class IsiIsiProdukController extends Controller
{
    public function index()
    {
        $IsiProduk = IsiProduk::all();
        return view('admin.IsiProduk.index', compact('IsiProduk'));
    }

    public function create()
    {
        return view('admin.IsiProduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'produk_slug' => 'required'
        ]);
        
        IsiProduk::create([
            'judul' => $request->judul,
            'produk_slug' => $request->produk_slug,
            'isi' => $request->isi
        ]);

        return redirect()->route('IsiProduk.index')
        ->with('success', 'IsiProduk Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $IsiProduk = IsiProduk::find($id);
        return view('admin.IsiProduk.edit', compact('IsiProduk'));
    }

    public function show($id)
    {
        $IsiProduk = IsiProduk::find($id);
        return view('admin.IsiProduk.show', compact('IsiProduk'));
    }

    public function update(Request $request,$id)
    {
        $IsiProduk = IsiProduk::findOrFail($id);
        $IsiProduk->judul = $request->judul;
        $IsiProduk->produk_slug = $request->produk_slug;      
        $IsiProduk->isi = $request->isi;  
        $IsiProduk->save();

        return redirect()->route('IsiProduk.index')
            ->with('edit', 'IsiProduk Berhasil Diedit');
    }
    public function delete($id)
    {
        $IsiProduk = IsiProduk::where('id', $id)->delete();
        return redirect()->route('IsiProduk.index')
        ->with('delete', 'IsiProduk berhasil dihapus');
    }

    public function productDetails($id)
    {
        $IsiProduk = IsiProduk::find($id);
        return view('users.test', compact('IsiProduk'));
    }
}
