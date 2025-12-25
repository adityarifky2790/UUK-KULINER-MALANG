<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('lokasi.index', compact('lokasi'));
    }

    public function create()
    {
        return view('lokasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_daerah' => 'required|string|max:255',
            'alamat_lengkap' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('lokasi', 'public');
        }

        Lokasi::create($data);

        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasi.edit', compact('lokasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_daerah' => 'required|string|max:255',
            'alamat_lengkap' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $lokasi = Lokasi::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($lokasi->gambar) {
                Storage::disk('public')->delete($lokasi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('lokasi', 'public');
        }

        $lokasi->update($data);

        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $lokasi = Lokasi::findOrFail($id);

        if ($lokasi->gambar) {
            Storage::disk('public')->delete($lokasi->gambar);
        }

        $lokasi->delete();
        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil dihapus!');
    }
}
