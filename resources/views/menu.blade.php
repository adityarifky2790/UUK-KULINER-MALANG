<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menu Kuliner Malang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    .font-poppins { font-family: 'Poppins', sans-serif; }

    
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }

    
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
  </style>
</head>

<body class="bg-[#fff8f1] font-poppins pt-28 relative overflow-x-hidden">
  <x-navbar />

  <!-- Efek ornamen background -->
  <div class="absolute top-10 left-10 w-72 h-72 bg-amber-200/40 rounded-full blur-3xl animate-[float_8s_ease-in-out_infinite]"></div>
  <div class="absolute bottom-0 right-10 w-96 h-96 bg-orange-300/30 rounded-full blur-3xl animate-[float_10s_ease-in-out_infinite]"></div>

  <!-- Header -->
  <section class="text-center mb-20 animate-fade-in-up relative z-10">
    <h1 class="text-6xl md:text-7xl font-extrabold text-[#7b3f00] drop-shadow-md mb-4 tracking-tight">
      Menu Kuliner Malang
    </h1>
    <div class="mx-auto w-32 h-1 bg-[#b85c00] rounded-full mb-4"></div>
    <p class="text-gray-700 text-lg md:text-xl max-w-2xl mx-auto">
      Temukan beragam kuliner khas Malang — dari yang legendaris hingga yang kekinian.
    </p>
  </section>

  <!-- Kartu Kuliner -->
  <section class="container mx-auto px-6 pb-29 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10 relative z-10">
    @forelse ($kuliners as $kuliner)
      <div class="group bg-white/90 rounded-3xl shadow-xl overflow-hidden backdrop-blur-md border border-orange-100 hover:border-orange-300 transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl animate-fade-in-up">
        <!-- Gambar -->
        <div class="relative overflow-hidden">
          @if($kuliner->gambar)
            <img src="{{ asset('storage/' . $kuliner->gambar) }}" 
                 alt="{{ $kuliner->nama_kuliner }}" 
                 class="w-full h-60 object-cover transition-transform duration-700 ease-out group-hover:scale-125 group-hover:rotate-1">
          @else
            <div class="w-full h-60 bg-gray-100 flex items-center justify-center text-gray-400 italic">
              Tidak ada gambar
            </div>
          @endif

          <!-- Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-500"></div>
          
          <!-- Nama di atas gambar (saat hover) -->
          <div class="absolute bottom-0 left-0 right-0 text-center opacity-0 group-hover:opacity-100 translate-y-10 group-hover:translate-y-0 transition-all duration-500">
            <h3 class="text-2xl font-bold text-white drop-shadow-md px-4 py-3 bg-black/30 backdrop-blur-md rounded-t-2xl">
              {{ $kuliner->nama_kuliner }}
            </h3>
          </div>
        </div>

        <!-- Detail -->
        <div class="p-6 text-center transition-all duration-300">
          <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">
            {{ $kuliner->nama_kuliner }}
          </h3>
          <p class="text-gray-600 text-sm mb-1">
            <span class="font-semibold text-orange-500">Kategori:</span> {{ $kuliner->kategori->nama_category ?? '-' }}
          </p>
          <p class="text-gray-600 text-sm mb-1">
            <span class="font-semibold text-orange-500">Lokasi:</span> {{ $kuliner->lokasi->nama_daerah ?? '-' }}
          </p>
          <p class="text-gray-800 font-bold mt-3 text-lg">Rp{{ number_format($kuliner->harga, 0, ',', '.') }}</p>

          <a href="{{ route('kuliner.show', $kuliner->id_kuliner) }}" 
             class="inline-block mt-5 bg-[#b85c00] text-white px-6 py-2 rounded-full shadow-md hover:bg-[#7b3f00] transition-all duration-300 hover:shadow-xl hover:scale-105">
             Detail
          </a>
        </div>
      </div>
    @empty
      <p class="col-span-full text-center text-gray-500 text-lg animate-fade-in-up">
        Belum ada data kuliner ditambahkan.
      </p>
    @endforelse
  </section>

  <x-footer />
</body>
</html>
