<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Kuliner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-100 min-h-screen flex items-center justify-center p-6 font-sans">
    <div class="bg-white shadow-lg border border-orange-200 rounded-2xl p-8 w-full max-w-lg">
        <h1 class="text-2xl font-semibold mb-6 text-center text-orange-700">Edit Data Kuliner</h1>

        <form action="{{ route('kuliner.update', $kuliner->id_kuliner) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-medium mb-1">Nama Kuliner</label>
                <input type="text" name="nama_kuliner" value="{{ $kuliner->nama_kuliner }}" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Kategori</label>
                <select name="id_category" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300">
                    @foreach($kategori as $k)
                        <option value="{{ $k->id_category }}" {{ $kuliner->id_category == $k->id_category ? 'selected' : '' }}>
                            {{ $k->nama_category }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Lokasi</label>
                <select name="id_lokasi" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300">
                    @foreach($lokasi as $l)
                        <option value="{{ $l->id_lokasi }}" {{ $kuliner->id_lokasi == $l->id_lokasi ? 'selected' : '' }}>
                            {{ $l->nama_daerah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Harga</label>
                <input type="number" name="harga" value="{{ $kuliner->harga }}" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300" rows="3">{{ $kuliner->deskripsi }}</textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Rating</label>
                <input type="number" step="0.1" min="1" max="5" name="rating" 
                       value="{{ $kuliner->rating }}" 
                       class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Nama yang Menambahkan</label>
                <input type="text" name="nama_yang_menambahkan"
                       value="{{ $kuliner->nama_yang_menambahkan }}" 
                       class="w-full border border-orange-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Gambar Saat Ini</label>
                <img src="{{ asset('storage/' . $kuliner->gambar) }}" class="w-32 h-32 object-cover rounded-lg mb-2 border border-orange-200">
                <input type="file" name="gambar" class="w-full border border-orange-200 rounded-lg p-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-orange-300">
            </div>

            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('kuliner.index') }}" class="text-gray-600 font-medium">← Kembali</a>
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md transition duration-300">
                    Update
                </button>
            </div>
        </form>
    </div>
</body>
</html>
