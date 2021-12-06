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
            'IsiProduk' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg',
            'deskripsi' => 'required'
        ]);
        
        IsiProduk::create([
            'IsiProduk' => $request->IsiProduk,
            'deskripsi' => $request->deskripsi
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
        $IsiProduk->IsiProduk = $request->IsiProduk;
        $IsiProduk->deskripsi = $request->deskripsi;      

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
