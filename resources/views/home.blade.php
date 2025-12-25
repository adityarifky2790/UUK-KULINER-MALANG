<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuliner Nusantara</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    html {
      scroll-behavior: smooth;
    }
    .font-poppins {
      font-family: 'Poppins', sans-serif;
    }

    
    .fade-in-up {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s ease forwards;
    }

    .delay-1 { animation-delay: 0.3s; }
    .delay-2 { animation-delay: 0.6s; }
    .delay-3 { animation-delay: 0.9s; }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes zoomIn {
      0% { opacity: 0; transform: scale(0.9); }
      100% { opacity: 1; transform: scale(1); }
    }
  </style>
</head>

<body>
  <x-navbar />

  <section class="relative bg-cover bg-center pt-28 pb-60" style="background-image: url('/gambar/apik.png');">
    <div class="absolute inset-0 bg-black/10"></div> 
    <div class="relative container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
      <div class="md:w-1/2 mb-10 md:mb-10 text-white">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight drop-shadow-lg fade-in-up">
          JELAJAHI <span class="text-orange-600">KULINER TERBAIK</span> DI <br>MALANG
        </h2>
        <p class="text-lg font-poppins mb-10 drop-shadow-lg fade-in-up delay-1">
          Nikmati kuliner Malang, dari yang legendaris sampai yang hits, untuk pengalaman tak terlupakan.
        </p>
        <a href="/kuliner" class="bg-orange-600 font-semibold font-poppins px-6 py-3 rounded-lg shadow-lg hover:bg-orange-800 transition fade-in-up delay-2">
          kasih rekomendasi
        </a>
      </div>
    </div>
  </section>

  <section id="favorit" class="relative py-28 bg-[#fff8f1] overflow-hidden">
    <div class="absolute top-0 left-0 w-72 h-72 bg-orange-200/30 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-300/40 rounded-full blur-3xl -z-10"></div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-20">
        <h2 class="text-5xl md:text-6xl font-extrabold text-[#7b3f00] font-poppins drop-shadow-md mb-4 fade-in-up">
          Daftar Makanan Favorit
        </h2>
        <div class="mx-auto w-32 h-1 bg-[#b85c00] rounded-full fade-in-up delay-1"></div>
        <p class="text-gray-700 mt-5 text-lg md:text-xl font-poppins fade-in-up delay-2">
          Temukan cita rasa khas Malang yang bikin lidah nggak bisa berhenti!
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="relative group overflow-hidden rounded-3xl shadow-2xl transition-all duration-700 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,0.2)] zoom-in">
          <img src="/gambar/pakjum.jpg" alt="Ayam Geprek Pak Jum" class="w-full h-[420px] object-cover transform scale-105 group-hover:scale-110 transition-transform duration-700 ease-out" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-60 group-hover:opacity-90 transition-all duration-500"></div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-bold text-white drop-shadow-lg tracking-wide">
              Ayam Geprek Pak Jum
            </h3>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-3xl shadow-2xl transition-all duration-700 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,0.2)] zoom-in delay-1">
          <img src="/gambar/miewawa.jpg" alt="Mie Nyemek Wawa" class="w-full h-[420px] object-cover transform scale-105 group-hover:scale-110 transition-transform duration-700 ease-out" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-60 group-hover:opacity-90 transition-all duration-500"></div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-bold text-white drop-shadow-lg tracking-wide">
              Mie Nyemek Wawa
            </h3>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-3xl shadow-2xl transition-all duration-700 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,0.2)] zoom-in delay-2">
          <img src="/gambar/umayumcha.jpg" alt="Dimsum Umayumcha" class="w-full h-[420px] object-cover transform scale-105 group-hover:scale-110 transition-transform duration-700 ease-out" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-60 group-hover:opacity-90 transition-all duration-500"></div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-bold text-white drop-shadow-lg tracking-wide">
              Dimsum Umayumcha
            </h3>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-3xl shadow-2xl sm:col-span-2 lg:col-span-3 mt-6 transition-all duration-700 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,0.2)] zoom-in delay-3">
          <img src="/gambar/essetia.jpg" alt="Es Setia" class="w-full h-[480px] object-cover transform scale-105 group-hover:scale-110 transition-transform duration-700 ease-out" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-60 group-hover:opacity-90 transition-all duration-500"></div>
          <div class="absolute bottom-10 left-10">
            <h3 class="text-4xl font-extrabold text-white drop-shadow-lg tracking-wide">
              Es Setia
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="relative bg-cover bg-center bg-no-repeat py-28 overflow-hidden" style="background-image: url('/gambar/bghome.jpg');" id="tentang">
    <div class="absolute inset-0 bg-gradient-to-l from-white/85 via-white/70 to-transparent z-0"></div>

    <div class="relative container mx-auto px-6 flex flex-col md:flex-row items-center gap-16 z-10">
      <div class="md:w-1/2 flex justify-center relative zoom-in">
        <div class="relative z-20 transform hover:scale-105 transition-all duration-500 ease-in-out">
          <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" alt="Kuliner Utama" class="rounded-[2rem] shadow-2xl shadow-black/40 h-80 w-64 object-cover hover:shadow-black/60" />
        </div>

        <div class="absolute -left-10 top-10 rotate-[-8deg] z-10 transform hover:rotate-0 hover:scale-105 transition-all duration-700 ease-in-out">
          <img src="https://images.unsplash.com/photo-1553621042-f6e147245754" alt="Kuliner Kiri" class="rounded-2xl shadow-xl shadow-black/40 h-72 w-56 object-cover hover:shadow-black/60" />
        </div>

        <div class="absolute -right-10 bottom-6 rotate-[10deg] z-10 transform hover:rotate-0 hover:scale-105 transition-all duration-700 ease-in-out">
          <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c" alt="Kuliner Kanan" class="rounded-2xl shadow-xl shadow-black/40 h-72 w-56 object-cover hover:shadow-black/60" />
        </div>
      </div>

      <div class="md:w-1/2 text-center md:text-left fade-in-up delay-1">
        <h2 class="text-5xl md:text-6xl font-extrabold text-orange-600 mb-6 font-poppins tracking-tight">
          Tentang Kami
        </h2>
        <p class="text-gray-700 leading-relaxed mb-8 text-lg md:text-xl font-poppins max-w-xl mx-auto md:mx-0">
          Selamat datang di <span class="font-semibold text-orange-600">Kuliner Malang</span>   
          Kami hadir buat bantu kamu menjelajahi cita rasa khas Malang — dari yang legendaris seperti 
          <span class="font-medium">Bakso President</span> dan <span class="font-medium">Rawon Nguling</span>, 
          sampai tempat nongkrong hits seperti <span class="font-medium">Taman Indie Resto</span> dan 
          <span class="font-medium">Javanine Resto</span>.  
          Misi kami sederhana: bantu kamu nemuin makanan enak, tempat kece, dan suasana yang bikin betah.  
          Yuk, jelajahi rasa bareng kami!
        </p>
        <a href="kontak" class="inline-flex items-center gap-2 bg-orange-600 text-white px-8 py-3 rounded-full font-semibold text-lg shadow-md shadow-black/40 hover:shadow-black/60 hover:bg-orange-700 transform hover:scale-105 transition-all duration-300 fade-in-up delay-2">
          Kontak Kami
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <x-footer />

  <script>
   
    window.addEventListener("load", () => {
      document.querySelectorAll(".fade-in-up, .zoom-in").forEach(el => {
        el.style.animationPlayState = "running";
      });
    });
  </script>
</body>
</html>
