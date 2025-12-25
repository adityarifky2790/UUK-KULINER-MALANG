<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Kategori</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50 font-poppins pt-24">
  <x-navbar/>

  <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-xl border border-orange-100">
    <h1 class="text-3xl font-bold text-orange-600 mb-6">Edit Kategori</h1>

    <form action="{{ route('kategori.update', $kategori->id_category) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">Nama Kategori</label>
        <input type="text" name="nama_category" value="{{ old('nama_category', $kategori->nama_category) }}" required
               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">Keterangan</label>
        <textarea name="keterangan" rows="3" required
                  class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">{{ old('keterangan', $kategori->keterangan) }}</textarea>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">Gambar Saat Ini</label>
        @if($kategori->gambar && file_exists(public_path('storage/'.$kategori->gambar)))
          <img src="{{ asset('storage/'.$kategori->gambar) }}" alt="Gambar {{ $kategori->nama_category }}" class="w-24 h-24 object-cover rounded-lg mb-3">
        @else
          <p class="text-gray-400 italic">Belum ada gambar</p>
        @endif

        <label class="block text-gray-700 font-semibold mb-2">Ubah Gambar</label>
        <input type="file" name="gambar" class="w-full border border-gray-300 rounded-lg px-4 py-2">
      </div>

      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">Status</label>
        <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">
          <option value="1" {{ $kategori->status == 1 ? 'selected' : '' }}>Aktif</option>
          <option value="0" {{ $kategori->status == 0 ? 'selected' : '' }}>Non-Aktif</option>
        </select>
      </div>

      <div class="flex justify-end space-x-3">
        <a href="{{ route('kategori.index') }}" class="bg-gray-300 text-gray-700 px-5 py-2 rounded-full hover:bg-gray-400">Batal</a>
        <button type="submit" class="bg-orange-500 text-white px-5 py-2 rounded-full hover:bg-orange-600">Simpan Perubahan</button>
      </div>
    </form>
  </div>

  <x-footer/>
</body>
</html>
