<?php

namespace App\Http\Controllers;
use App\Models\News;
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
}
