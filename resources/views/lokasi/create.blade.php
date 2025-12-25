<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Lokasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50 font-sans pt-24">
  <x-navbar/>

  <div class="max-w-xl mx-auto bg-white p-8 rounded-3xl shadow-md border border-orange-200">
    <h1 class="text-2xl font-bold text-orange-600 mb-6">Tambah Lokasi Baru</h1>
<form action="{{ route('lokasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label class="block mb-2 font-medium text-gray-700">Nama Daerah</label>
    <input type="text" name="nama_daerah" class="w-full border p-2 rounded mb-4" required>

    <label class="block mb-2 font-medium text-gray-700">Alamat</label>
    <input type="text" name="alamat_lengkap" class="w-full border p-2 rounded mb-4">

    <label class="block mb-2 font-medium text-gray-700">Keterangan</label>
    <textarea name="keterangan" class="w-full border p-2 rounded mb-4"></textarea>

    <label class="block mb-2 font-medium text-gray-700">Gambar</label>
    <input type="file" name="gambar" class="w-full mb-4">

    <button class="bg-orange-500 text-white px-5 py-2 rounded-full hover:bg-orange-600">Simpan</button>
</form>

  </div>

  <x-footer/>
</body>
</html>
