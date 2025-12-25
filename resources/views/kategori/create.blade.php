<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Kategori</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-orange-50 font-poppins pt-24">

  <x-navbar/>

  <div class="max-w-lg mx-auto bg-white p-8 rounded-3xl shadow-xl border border-orange-100">
    <h1 class="text-2xl font-bold text-orange-600 mb-6">Tambah Kategori</h1>

    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label>Nama Kategori</label>
        <input type="text" name="nama_category" required class="w-full border p-2 rounded">
    </div>

    <div>
        <label>Keterangan</label>
        <textarea name="keterangan" class="w-full border p-2 rounded"></textarea>
    </div>

    <div>
        <label>Gambar</label>
        <input type="file" name="gambar" class="w-full">
    </div>

    <div>
        <label>Status</label>
        <select name="status" class="w-full border p-2 rounded">
            <option value="1" selected>Aktif</option>
            <option value="0">Non-aktif</option>
        </select>
    </div>

    <button class="bg-orange-500 text-white px-5 py-2 rounded-full">Simpan</button>
</form>

  </div>

  <x-footer/>
</body>
</html>
