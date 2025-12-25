<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
   
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    
    public function create()
    {
        return view('kategori.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nama_category' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'status' => 'required|boolean',
            'gambar' => 'nullable|image|max:2048', 
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->store('lokasi', 'public'); 
            $data['gambar'] = $file; 
        }

        Kategori::create($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    
    public function edit($id)
{
    $kategori = Kategori::where('id_category', $id)->firstOrFail();
    return view('kategori.edit', ['kategori' => $kategori]);
}

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_category' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'status' => 'required|boolean',
            'gambar' => 'nullable|image|max:2048',
            
        ]);

        $kategori = Kategori::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            
            if ($kategori->gambar) {
                Storage::disk('public')->delete($kategori->gambar);
            }
            $file = $request->file('gambar')->store('lokasi', 'public');
            $data['gambar'] = $file;
        }

        $kategori->update($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        if ($kategori->gambar) {
            Storage::disk('public')->delete($kategori->gambar);
        }
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
