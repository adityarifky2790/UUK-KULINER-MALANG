<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Kuliner</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-100 font-poppins pt-24">
  <x-navbar/>

  <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-lg border border-orange-200">
    <h1 class="text-2xl font-semibold text-center text-orange-700 mb-6">Tambah Data Kuliner</h1>

    @if ($errors->any())
      <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-5 border border-red-200">
        <strong>Terjadi Kesalahan:</strong>
        <ul class="list-disc ml-5 mt-1 space-y-1">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('kuliner.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block text-gray-700 font-medium mb-1">Nama Kuliner</label>
        <input type="text" name="nama_kuliner" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" required>
      </div>
{{-- relasi kategori--}}
      <div>
        <label class="block text-gray-700 font-medium mb-1">Kategori</label>
        <select name="id_category" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" required>
          <option value="">-- Pilih Kategori --</option>
          @foreach ($kategori as $k)
            <option value="{{ $k->id_category }}">{{ $k->nama_category }}</option>
          @endforeach
        </select>
      </div>
{{-- relasi lok--}}
      <div>
        <label class="block text-gray-700 font-medium mb-1">Lokasi</label>
        <select name="id_lokasi" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" required>
          <option value="">-- Pilih Lokasi --</option>
          @foreach ($lokasi as $l)
            <option value="{{ $l->id_lokasi }}">{{ $l->nama_daerah }}</option>
          @endforeach
        </select>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Harga</label>
        <input type="number" name="harga" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" required>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Deskripsi</label>
        <textarea name="deskripsi" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" rows="3"></textarea>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Gambar</label>
        <input type="file" name="gambar" class="w-full border border-orange-200 rounded-lg p-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-orange-300">
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Rating (1.0 - 5.0)</label>
        <input type="number" name="rating" min="1" max="5" step="0.1"
               class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" placeholder="Contoh: 4.5">
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Nama yang Menambahkan</label>
        <input type="text" name="nama_yang_menambahkan"
               class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" placeholder="Nama Anda">
      </div>

      <div class="flex justify-between items-center pt-4">
        <a href="{{ route('kuliner.index') }}" class="text-gray-600 font-medium">← Kembali</a>
        <button class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-lg shadow-md transition duration-300">
          Simpan
        </button>
      </div>
    </form>
  </div>

  <x-footer/>
</body>
</html>
