<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Kuliner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-poppins { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-orange-50 font-poppins flex flex-col items-center min-h-screen p-6">

    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-5xl border-t-8 border-orange-400 mb-10">
        <!-- Judul -->
        <h1 class="text-3xl font-bold text-center mb-8 text-orange-600 tracking-wide">
            Detail Kuliner: {{ $kuliner->nama_kuliner }}
        </h1>

        <!-- Konten Utama -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Gambar -->
            <div class="md:w-1/2">
                @if($kuliner->gambar)
                    <img 
                        src="{{ asset('storage/' . $kuliner->gambar) }}" 
                        alt="{{ $kuliner->nama_kuliner }}" 
                        class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-[1.02] transition duration-300"
                    >
                @else
                    <div class="w-full h-64 bg-gray-100 flex items-center justify-center text-gray-400 italic rounded-lg shadow-md">
                        Tidak ada gambar
                    </div>
                @endif
            </div>

            <!-- Detail -->
            <div class="flex-1 text-gray-700 space-y-3">
                <p><span class="font-semibold text-gray-800">Nama Kuliner:</span> {{ $kuliner->nama_kuliner }}</p>
                <p><span class="font-semibold text-gray-800">Harga:</span> Rp{{ number_format($kuliner->harga, 0, ',', '.') }}</p>
                <p><span class="font-semibold text-gray-800">Deskripsi:</span> {{ $kuliner->deskripsi }}</p>
                <p><span class="font-semibold text-gray-800">Tanggal Ditambahkan:</span> {{ $kuliner->tanggal_ditambahkan }}</p>
                <p><span class="font-semibold text-gray-800">Rating:</span> {{ $kuliner->rating ?? '-' }}</p>
                <p><span class="font-semibold text-gray-800">Ditambahkan oleh:</span> {{ $kuliner->nama_yang_menambahkan ?? '-' }}</p>

                <hr class="my-4 border-orange-200">

                <!-- Data Kategori -->
                <h2 class="text-lg font-semibold text-orange-500">Informasi Kategori</h2>
                <p><span class="font-semibold text-gray-800">Nama Kategori:</span> {{ $kuliner->kategori->nama_category ?? '-' }}</p>
                <p><span class="font-semibold text-gray-800">Keterangan:</span> {{ $kuliner->kategori->keterangan ?? '-' }}</p>
                <p><span class="font-semibold text-gray-800">Status:</span> 
                    @if(optional($kuliner->kategori)->status)
                        <span class="text-green-600 font-medium">Aktif</span>
                    @else
                        <span class="text-red-600 font-medium">Non-aktif</span>
                    @endif
                </p>

                
                <h2 class="text-lg font-semibold text-orange-500 mt-4">Informasi Lokasi</h2>
                <p><span class="font-semibold text-gray-800">Nama Daerah:</span> {{ $kuliner->lokasi->nama_daerah ?? '-' }}</p>
                <p><span class="font-semibold text-gray-800">Alamat Lengkap:</span> {{ $kuliner->lokasi->alamat_lengkap ?? '-' }}</p>
                <p><span class="font-semibold text-gray-800">Keterangan:</span> {{ $kuliner->lokasi->keterangan ?? '-' }}</p>
            </div>
        </div>
    </div>

    
    <div class="mt-8 mb-6">
        <a href="{{ route('kuliner.index') }}" 
           class="inline-block bg-orange-500 text-white font-medium px-6 py-2.5 rounded-lg shadow-md hover:bg-orange-600 transition">
            ← Kembali ke Daftar Kuliner
        </a>
    </div>

</body>
</html>
