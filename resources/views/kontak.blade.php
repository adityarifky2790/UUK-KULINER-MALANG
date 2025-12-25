<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak Kami | KulinerMalang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%);
    }

    .social-icon {
      @apply text-orange-500 transition-all duration-500 transform;
    }
    .social-icon:hover {
      color: #ea580c; 
      text-shadow: 0 0 15px rgba(249, 115, 22, 0.6);
      transform: scale(1.25) rotate(3deg);
    }

   
    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      animation: fadeInUp 0.9s ease forwards;
    }

    .zoom-in {
      opacity: 0;
      transform: scale(0.9);
      animation: zoomIn 0.8s ease forwards;
    }

   
    .delay-1 { animation-delay: 0.3s; }
    .delay-2 { animation-delay: 0.6s; }
    .delay-3 { animation-delay: 0.9s; }
    .delay-4 { animation-delay: 1.2s; }
    .delay-5 { animation-delay: 1.5s; }

    
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes zoomIn {
      0% { opacity: 0; transform: scale(0.9); }
      100% { opacity: 1; transform: scale(1); }
    }
  </style>
</head>
<body class="bg-orange-50">

  <x-navbar/>

  <section class="pt-36 pb-24 px-6">
    <div class="max-w-6xl mx-auto text-center mb-16">
      <h1 class="text-4xl font-extrabold text-orange-600 mb-4">Kontak Kami</h1>
      <p class="text-gray-700 max-w-2xl mx-auto leading-relaxed">
        Ada pertanyaan, saran, atau ingin berkolaborasi dengan kami?  
        Jangan ragu untuk menghubungi tim <span class="font-semibold text-orange-600">KulinerMalang</span> melalui informasi di bawah ini.
      </p>
    </div>

    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-10">

      <div class="bg-white p-10 rounded-3xl shadow-lg border border-orange-200 hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
        <div class="flex justify-center mb-5">
          <i class="ri-map-pin-2-line text-orange-500 text-5xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-orange-600 mb-2 text-center">Alamat</h3>
        <p class="text-gray-600 text-center">
          Jl. Soekarno Hatta No. 45<br>Malang, Jawa Timur 65141
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl shadow-lg border border-orange-200 hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
        <div class="flex justify-center mb-5">
          <i class="ri-phone-line text-orange-500 text-5xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-orange-600 mb-2 text-center">Telepon</h3>
        <p class="text-gray-600 text-center">
          +62 812 3456 7890<br>+62 821 9876 5432
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl shadow-lg border border-orange-200 hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
        <div class="flex justify-center mb-5">
          <i class="ri-mail-line text-orange-500 text-5xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-orange-600 mb-2 text-center">Email</h3>
        <p class="text-gray-600 text-center">
          infokuliner@gmail.com<br>kulinermalang@gmail.com
        </p>
      </div>

    </div>

    <div class="max-w-6xl mx-auto text-center mt-20">
      <h2 class="text-2xl font-semibold text-orange-600 mb-8">Ikuti Kami</h2>
      <div class="flex justify-center space-x-10">
        <a href="https://www.facebook.com/share/1YBpWcuahn/" class="social-icon text-6xl"><i class="ri-facebook-circle-fill"></i></a>
        <a href="https://www.instagram.com/infokulinermalangan?igsh=dnc3NGQ4b3lkeDB5" class="social-icon text-6xl"><i class="ri-instagram-fill"></i></a>
        <a href="https://www.tiktok.com/@infokulinermlg?_t=ZS-90VwReOUq3j&_r=1" class="social-icon text-6xl"><i class="ri-tiktok-fill"></i></a>
        <a href="https://pin.it/163dd7P73" class="social-icon text-6xl"><i class="ri-pinterest-fill"></i></a>
      </div>
    </div>
  </section>

  <x-footer/>

  
  <script>
    window.addEventListener("load", () => {
      document.querySelector("h1.text-4xl")?.classList.add("fade-in");
      document.querySelector("p.text-gray-700")?.classList.add("fade-in", "delay-1");

      const cards = document.querySelectorAll(".bg-white.p-10");
      cards.forEach((card, i) => {
        card.classList.add("zoom-in", `delay-${i + 2}`);
      });

      document.querySelector("h2.text-2xl")?.classList.add("fade-in", "delay-5");

      document.querySelectorAll(".social-icon").forEach((icon, i) => {
        icon.classList.add("fade-in", `delay-${i + 3}`);
      });
    });
  </script>
  
</body>
</html>
