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
        $produk = Produk::where('slug', $id)->first();
        $IsiProduk = IsiProduk::where('produk_slug',$id)->get();
        // $satu = IsiProduk::where('produk_slug',$id)->get();
        // dd($satu);
        return view('admin.produk.isiproduk.index', compact('IsiProduk','produk'));
    }

    public function create($slug)
    {
        // $satu = Produk::where('slug',$id)->first();
        $satu = Produk::find($slug);
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
      
        $isiproduk = IsiProduk::find($id);
        return view('admin.produk.isiProduk.edit', compact('isiproduk'));
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
        $IsiProduk->produk_slug = $request->produk_slug;  
        $IsiProduk->save();

        return redirect()->route('indexisiproduk',$request->produk_slug)
            ->with('edit', 'Isi Produk Berhasil Diedit');
    }
    public function delete($id)
    {
        $IsiProduk = IsiProduk::where('id', $id)->delete();
        return back()
        ->with('delete', 'Isi Produk berhasil dihapus');
    }


}
