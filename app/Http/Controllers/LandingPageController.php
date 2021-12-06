<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\IsiProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function artikel()
    {
        $semuaberita = News::orderBy("created_at", "DESC")->get();
        // $berita = News::findOrFail($id);
// dd($semuaberita);
        return view("users.news", compact("semuaberita"));
    }

    
    public function details($id)
    {
        $produk = Produk::find($id);
        $isi = IsiProduk::all();
        //TINGGAL DIKASIH WHERE
        return view('users.product-details', compact('produk', 'isi'));
    }
}
