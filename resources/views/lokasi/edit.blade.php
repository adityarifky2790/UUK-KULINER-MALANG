<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Lokasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50 font-sans pt-24">
  <x-navbar/>

  <div class="max-w-xl mx-auto bg-white p-8 rounded-3xl shadow-md border border-orange-200">
    <h1 class="text-2xl font-bold text-orange-600 mb-6 text-center">Edit Lokasi</h1>

    <form action="{{ route('lokasi.update', $lokasi->id_lokasi) }}" 
          method="POST" 
          enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Nama Daerah -->
      <label class="block mb-2 font-medium text-gray-700">Nama Daerah</label>
      <input type="text" 
             name="nama_daerah" 
             value="{{ old('nama_daerah', $lokasi->nama_daerah) }}" 
             class="w-full border border-gray-300 p-2 rounded-lg mb-4 focus:ring-2 focus:ring-orange-400"
             required>

      <!-- Alamat -->
      <label class="block mb-2 font-medium text-gray-700">Alamat</label>
      <input type="text" 
             name="alamat_lengkap" 
             value="{{ old('alamat_lengkap', $lokasi->alamat_lengkap) }}" 
             class="w-full border border-gray-300 p-2 rounded-lg mb-4 focus:ring-2 focus:ring-orange-400">

      <!-- Keterangan -->
      <label class="block mb-2 font-medium text-gray-700">Keterangan</label>
      <textarea name="keterangan" 
                class="w-full border border-gray-300 p-2 rounded-lg mb-4 focus:ring-2 focus:ring-orange-400"
                rows="3">{{ old('keterangan', $lokasi->keterangan) }}</textarea>

      <!-- Gambar -->
      <label class="block mb-2 font-medium text-gray-700">Gambar Lokasi</label>
      @if($lokasi->gambar && file_exists(public_path('storage/'.$lokasi->gambar)))
        <div class="mb-3">
          <img src="{{ asset('storage/'.$lokasi->gambar) }}" 
               alt="Gambar Lokasi" 
               class="w-32 h-32 object-cover rounded-lg shadow-md">
        </div>
      @endif
      <input type="file" 
             name="gambar" 
             class="w-full border border-gray-300 p-2 rounded-lg mb-6 focus:ring-2 focus:ring-orange-400">

      <!-- Tombol Update -->
      <div class="flex justify-between items-center">
        <a href="{{ route('lokasi.index') }}" 
           class="text-orange-600 font-medium hover:underline">← Kembali</a>
        <button type="submit" 
                class="bg-orange-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-orange-600 transition">
          Update Lokasi
        </button>
      </div>
    </form>
  </div>

  <x-footer/>
</body>
</html>
