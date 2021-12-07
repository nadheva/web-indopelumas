<?php

namespace App\Http\Controllers;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TestimonialsController extends Controller
{
    public function index()
    {
        $Testimonials = Testimonials::all();
        return view('admin.Testimonials.index', compact('Testimonials'));
    }

    public function create()
    {
        return view('admin.Testimonials.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'foto' => 'required|mimes:jpeg,png,jpg',
        //     'perusahaan' => 'required',
        //     'isi' => 'required',
        // ]);
        
        if (isset($request->foto)) {
            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "foto_$date.$extension";
            $path = $request->file('foto')->storeAs('public/testimonials', $file_name);
        } else {
            $file_name = null;
        }

        Testimonials::create([
            'nama' => $request->nama,
            'foto' => $file_name,
            'perusahaan' => $request->perusahaan,
            'isi' => $request->isi,
        ]);

        return redirect()->route('testimonials.index')
        ->with('success', 'Testimonials Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $Testimonials = Testimonials::where('id', $id)->first();
        return view('admin.Testimonials.edit', compact('Testimonials'));
    }

    public function show($id)
    {
        $Testimonials = Testimonials::find($id);
        return view('admin.Testimonials.show', compact('Testimonials'));
    }

    public function update(Request $request,$id)
    {
        $Testimonials = Testimonials::findOrFail($id);
        $Testimonials->nama = $request->nama;
        $Testimonials->perusahaan = $request->perusahaan;
        $Testimonials->isi = $request->isi;
        if ($request->has("foto")) {

            Storage::delete("public/Testimonials/$Testimonials->foto");

            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "foto_$date.$extension";
            $path = $request->file('foto')->storeAs('public/testimonials', $file_name);
            
            $Testimonials->foto = $file_name;
        }
       

        $Testimonials->save();

        return redirect()->route('testimonials.index')
            ->with('edit', 'Testimonials Berhasil Diedit');
    }
    public function delete($id)
    {
        $Testimonials = Testimonials::where('id', $id)->delete();
        return redirect()->route('testimonials.index')
        ->with('delete', 'Testimonials berhasil dihapus');
    }
}
