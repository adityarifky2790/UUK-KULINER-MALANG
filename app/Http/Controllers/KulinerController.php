<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;

use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index()
    {
       
    $kuliner = \App\Models\Kuliner::with(['kategori', 'lokasi'])->orderBy('id_kuliner', 'desc')->get();

   
    return view('kuliner.index', compact('kuliner'));
    }

    public function menu()
    {
    $kuliners = \App\Models\Kuliner::with(['kategori', 'lokasi'])
        ->orderBy('id_kuliner', 'desc')
        ->get();

    
    return view('menu', compact('kuliners'));
    }



    public function create()
    {
        $kategori = Kategori::all();
    $lokasi = Lokasi::all();
    return view('kuliner.create', compact('kategori', 'lokasi'));
    }

public function store(Request $request)
{
    $request->validate([
        'nama_kuliner' => 'required',
        'id_category' => 'required',
        'id_lokasi' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'rating' => 'nullable|numeric|min:1|max:5',
        'nama_yang_menambahkan' => 'nullable|string|max:255',
    ]);

    $data = $request->all();

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar')->store('kuliner', 'public');
        $data['gambar'] = $file;
    }

    Kuliner::create($data);

    return redirect()->route('kuliner.index')->with('success', 'Data kuliner berhasil ditambahkan!');
}



    public function show($id)
{
   
    $kuliner = \App\Models\Kuliner::with(['kategori', 'lokasi'])->findOrFail($id);

    
    return view('kuliner.show', compact('kuliner',));
}


    public function edit($id)
    {
       $kuliner = Kuliner::findOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('kuliner.edit', compact('kuliner', 'kategori', 'lokasi'));
    }

    public function update(Request $request, $id)
    {
        $kuliner = Kuliner::findOrFail($id);

        $data = $request->validate([
            'nama_kuliner' => 'required|string|max:255',
            'id_category' => 'required',
            'id_lokasi' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'rating' => 'nullable|numeric|min:0|max:5',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('images', 'public');
        }

        $kuliner->update($data);
        return redirect()->route('kuliner.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Kuliner::findOrFail($id)->delete();
        return redirect()->route('kuliner.index')->with('success', 'Data berhasil dihapus!');
    }


}
