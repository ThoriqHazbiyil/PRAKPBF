<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">

@include('components.navbar-guest')
<div id="default-carousel" class="relative w-full mx-auto max-w-7xl" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('sapi/sapi1.webp') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('kambing/kambing1.jpg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('sapi/sapi2.jpeg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Hewan Kurban Berkualitas, Harga Lebih Hemat!
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-600 lg:text-xl sm:px-16 lg:px-48">
            Bingung cari hewan kurban yang sehat, terawat, dan sesuai syariat? Di sini tempatnya! Kami menyediakan sapi & kambing kurban dengan harga terjangkau dan pelayanan terpercaya.
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg  bg-primary focus:ring-4">
                Ayo Pesan Sekarang
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                Lihat Katalog Hewan
            </a>  
        </div>
    </div>
</section>


<section class="bg-gray-50 py-12">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-900">Kualitas Kami</h2>
        <p class="mt-4 text-lg lg:text-xl text-gray-600">Kami berkomitmen memberikan layanan terbaik dengan standar tinggi dan penuh integritas.</p>
      </div>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-indigo-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Tepat Waktu</h3>
          <p class="text-gray-600">Kami menjunjung tinggi profesionalitas dan komitmen terhadap jadwal yang telah disepakati.</p>
        </div>
  
        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-green-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Kualitas Terbaik</h3>
          <p class="text-gray-600">Kami menggunakan material berkualitas dan proses terstandarisasi untuk hasil terbaik.</p>
        </div>
  
        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-yellow-500 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Layanan Responsif</h3>
          <p class="text-gray-600">Tim kami siap membantu dan menjawab kebutuhan Anda dengan cepat dan tepat.</p>
        </div>
  
      </div>
    </div>
  </section>
  <section class="bg-gray-50 py-12">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-900">Kurban Kami</h2>
      </div>  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 max-w-7xl mx-auto mb-12">
          @for ($i = 0; $i < 10; $i++)
          <div class="bg-white  rounded-2xl shadow-xs transition-transform hover:shadow-sm hover:-translate-y-1 duration-300">
              <a href="#">
                  <img src="{{ asset('kambing/kambing1.jpg') }}" alt="Produk {{$i+1}}" class="w-full h-48 object-cover rounded-t-2xl transition-transform duration-300 hover:scale-105">
              </a>
              <div class="p-4">
                  
                      <h5 class="text-xl font-semibold text-primary mb-1">
                          Noteworthy technology acquisitions 2021
                      </h5>
         
                  <p class="text-black font-bold text-lg mb-2">Rp 1.000.000</p>
                  <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                      Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                  </p>
              
              </div>
          </div>
          @endfor
      </div>
    </div>
  </section>


  @include('components.footer-guest')



</body>
</html>
