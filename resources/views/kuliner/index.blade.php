<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Kuliner</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    .font-poppins { font-family: 'Poppins', sans-serif; }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
  </style>
</head>

<body class="from-orange-50 to-orange-100 font-poppins pt-28">

  <x-navbar />

  <div class="max-w-6xl mx-auto bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl overflow-hidden mb-16 border border-orange-100">
    
    
    <div class="bg-gradient-to-r from-orange-500 via-orange-400 to-orange-300 text-white px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <h1 class="text-3xl font-bold tracking-wide drop-shadow-md">Daftar Kuliner</h1>

      <div class="flex flex-wrap items-center gap-3">
        <a href="{{ route('kuliner.create') }}" 
           class="bg-white text-orange-600 font-semibold px-6 py-2.5 rounded-full shadow-md hover:bg-orange-50 hover:scale-105 transition-all duration-300">
           + Tambah Kuliner
        </a>

        <a href="{{ route('kategori.index') }}"
           class="bg-white text-orange-600 font-semibold px-5 py-2 rounded-full shadow-md hover:bg-orange-50 hover:scale-105 transition-all duration-300">
           + Kategori
        </a>

        <a href="{{ route('lokasi.index') }}"
           class="bg-white text-orange-600 font-semibold px-5 py-2 rounded-full shadow-md hover:bg-orange-50 hover:scale-105 transition-all duration-300">
           + Lokasi
        </a>
      </div>
    </div>

   
    @if(session('success'))
      <div class="relative bg-gradient-to-r from-green-500 to-green-400 text-white text-center py-3 font-medium shadow-md animate-fade-in-up">
        <p class="flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          {{ session('success') }}
        </p>
        <button onclick="this.parentElement.remove()" 
                class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-green-100 transition">
          ✕
        </button>
      </div>
    @endif

    
    <div class="overflow-x-auto">
      <table class="w-full border-collapse text-left text-sm">
        <thead class="bg-orange-100/80 text-orange-700 uppercase text-xs tracking-wider">
          <tr>
            <th class="px-6 py-4 font-semibold">Nama Kuliner</th>
            <th class="px-6 py-4 font-semibold">Kategori</th>
            <th class="px-6 py-4 font-semibold">Lokasi</th>
            <th class="px-6 py-4 font-semibold">Harga</th>
            <th class="px-6 py-4 font-semibold text-center">Rating</th>
            <th class="px-6 py-4 font-semibold">Gambar</th>
            <th class="px-6 py-4 text-center font-semibold">Aksi</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-100 bg-white">
          @foreach ($kuliner as $k)
            <tr class="hover:bg-orange-50/70 transition-all duration-300">
              <td class="px-6 py-4 font-semibold text-gray-800">{{ $k->nama_kuliner }}</td>
              <td class="px-6 py-4 text-gray-600">{{ $k->kategori->nama_category ?? '-' }}</td>
              <td class="px-6 py-4 text-gray-600">{{ $k->lokasi->nama_daerah ?? '-' }}</td>
              <td class="px-6 py-4 text-gray-700 font-medium">Rp{{ number_format($k->harga, 0, ',', '.') }}</td>

              
              <td class="px-6 py-4 text-center">
                @if(isset($k->rating))
                  <div class="flex items-center justify-center gap-1">
                    @php
                      $filledStars = floor($k->rating);
                      $emptyStars = 5 - $filledStars;
                    @endphp
                    @for ($i = 0; $i < $filledStars; $i++)
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.955a1 1 0 00.95.69h4.157c.969 0 1.371 1.24.588 1.81l-3.37 2.449a1 1 0 00-.364 1.118l1.285 3.955c.3.921-.755 1.688-1.54 1.118l-3.37-2.449a1 1 0 00-1.176 0l-3.37 2.449c-.785.57-1.84-.197-1.54-1.118l1.285-3.955a1 1 0 00-.364-1.118L2.07 9.382c-.783-.57-.38-1.81.588-1.81h4.157a1 1 0 00.95-.69l1.284-3.955z" />
                      </svg>
                    @endfor
                    @for ($i = 0; $i < $emptyStars; $i++)
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.955a1 1 0 00.95.69h4.157c.969 0 1.371 1.24.588 1.81l-3.37 2.449a1 1 0 00-.364 1.118l1.285 3.955c.3.921-.755 1.688-1.54 1.118l-3.37-2.449a1 1 0 00-1.176 0l-3.37 2.449c-.785.57-1.84-.197-1.54-1.118l1.285-3.955a1 1 0 00-.364-1.118L2.07 9.382c-.783-.57-.38-1.81.588-1.81h4.157a1 1 0 00.95-.69l1.284-3.955z" />
                      </svg>
                    @endfor
                    <span class="ml-2 text-gray-700 text-sm font-medium">{{ number_format($k->rating, 1) }}</span>
                  </div>
                @else
                  <span class="text-gray-400 italic">Belum ada</span>
                @endif
              </td>

              
              <td class="px-6 py-4">
                @if($k->gambar)
                  <img src="{{ asset('storage/' . $k->gambar) }}" 
                       alt="{{ $k->nama_kuliner }}" 
                       class="w-16 h-16 object-cover rounded-xl shadow-md hover:scale-110 hover:shadow-lg transition-all duration-300">
                @else
                  <span class="text-gray-400 italic">Tidak ada gambar</span>
                @endif
              </td>

             
              <td class="px-6 py-4 text-center flex items-center justify-center gap-2">
                <a href="{{ route('kuliner.show', $k->id_kuliner) }}" 
                   class="p-2 rounded-full bg-blue-50 text-blue-600 hover:bg-blue-100 hover:scale-110 transition-all duration-200 shadow-sm"
                    title="Lihat">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                       d="M12 4.5C7.305 4.5 3.273 7.61 1.5 12c1.773 4.39 5.805 7.5 10.5 7.5s8.727-3.11 10.5-7.5C20.727 7.61 16.695 4.5 12 4.5zM12 15a3 3 0 110-6 3 3 0 010 6z" />
                    </svg>
                </a>

  
                <a href="{{ route('kuliner.edit', $k->id_kuliner) }}" 
                 class="p-2 rounded-full bg-yellow-50 text-yellow-600 hover:bg-yellow-100 hover:scale-110 transition-all duration-200 shadow-sm"
                  title="Edit">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                     d="M15.232 5.232l3.536 3.536M9 13l6.768-6.768a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3.414a2 2 0 01.586-1.414z" />
                  </svg>
                </a>

  
  <form action="{{ route('kuliner.destroy', $k->id_kuliner) }}" method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button type="submit"
            onclick="return confirm('Yakin hapus data ini?')"
            class="p-2 rounded-full bg-red-50 text-red-600 hover:bg-red-100 hover:scale-110 transition-all duration-200 shadow-sm"
            title="Hapus">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M6 7h12M10 11v6m4-6v6M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2m5 0H4l1 14a2 2 0 002 2h10a2 2 0 002-2l1-14z" />
      </svg>
    </button>
  </form>

</td>

            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <x-footer />

</body>
</html>
