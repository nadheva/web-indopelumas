<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\IsiProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class IsiProdukController extends Controller
{
    public function productDetails($id)
    {
        $IsiProduk = IsiProduk::where('produk_slug',$id)->get();
        $satu = IsiProduk::where('produk_slug',$id)->first();
        // dd($satu);
        return view('admin.produk.isiproduk.index', compact('IsiProduk','satu'));
    }

    public function create($id)
    {
        $satu = IsiProduk::where('produk_slug',$id)->first();
        return view('admin.produk.isiProduk.create', compact('satu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        
        IsiProduk::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'produk_slug'=>$request->produk_slug,
        ]);

        return redirect()->route('showdata',$request->produk_slug)
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
        $IsiProduk->isi = $request->isi;  
        $IsiProduk->save();

        return redirect()->route('showdata',$request->produk_slug)
            ->with('edit', 'IsiProduk Berhasil Diedit');
    }
    public function delete($id)
    {
        $IsiProduk = IsiProduk::where('id', $id)->delete();
        return redirect()->route('IsiProduk.index')
        ->with('delete', 'IsiProduk berhasil dihapus');
    }


}
