<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg',
            'deskripsi' => 'required'
        ]);
        
        if (isset($request->foto)) {
            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "foto_$date.$extension";
            $path = $request->file('foto')->storeAs('public/produk', $file_name);
        } else {
            $txt = null;
        }

        Produk::create([
            'produk' => $request->produk,
            'foto' => $txt,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('produk.index')
        ->with('success', 'Produk Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request,$id)
    {
        $produk = Produk::findOrFail($id);
        $produk->produk = $request->produk;
        $produk->deskripsi = $request->deskripsi;

        if ($request->has("foto")) {

            Storage::delete("public/produk/$produk->foto");

            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "foto_$date.$extension";
            $path = $request->file('foto')->storeAs('public/produk', $file_name);
            
            $produk->foto = $file_name;
        }
       

        $produk->save();

        return redirect()->route('produk.index')
            ->with('edit', 'Produk Berhasil Diedit');
    }
    public function delete($id)
    {
        $produk = Produk::where('id', $id)->delete();
        return redirect()->route('produk.index')
        ->with('delete', 'Produk berhasil dihapus');
    }

}
