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
        <!-- Carousel items -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            @forelse ($carousels as $index => $carousel)
                <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/' . $carousel->image) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Carousel Image {{ $index + 1 }}">
                </div>
            @empty
                <div class="flex border rounded-xl items-center justify-center h-full text-center text-gray-500">
                    <div>
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71l-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0" />
                        </svg>

                        <p class="text-sm">Belum ada gambar carousel tersedia.</p>
                    </div>
                </div>
            @endforelse

        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            @foreach ($carousels as $index => $carousel)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}">
                </button>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
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
                Bingung cari hewan kurban yang sehat, terawat, dan sesuai syariat? Di sini tempatnya! Kami menyediakan
                sapi & kambing kurban dengan harga terjangkau dan pelayanan terpercaya.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="/register"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg  bg-primary focus:ring-4">
                    Ayo Pesan Sekarang
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="/catalog"
                    class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Lihat Katalog Hewan
                </a>
            </div>
        </div>
    </section>


    <section class="bg-gray-50 py-12">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-900">Kualitas Kami</h2>
                <p class="mt-4 text-lg lg:text-xl text-gray-600">Kami berkomitmen memberikan layanan terbaik dengan
                    standar tinggi dan penuh integritas.</p>
            </div>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <div class="text-indigo-600 mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Tepat Waktu</h3>
                    <p class="text-gray-600">Kami menjunjung tinggi profesionalitas dan komitmen terhadap jadwal yang
                        telah disepakati.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <div class="text-green-600 mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Kualitas Terbaik</h3>
                    <p class="text-gray-600">Kami menggunakan material berkualitas dan proses terstandarisasi untuk
                        hasil terbaik.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <div class="text-yellow-500 mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Layanan Responsif</h3>
                    <p class="text-gray-600">Tim kami siap membantu dan menjawab kebutuhan Anda dengan cepat dan tepat.
                    </p>
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
                @forelse ($products as $product)
                    <div
                        class="bg-white relative  rounded-2xl shadow-xs transition-transform hover:shadow-sm hover:-translate-y-1 duration-300">
                        <a href={{ route('catalog.show', $product->id) }}>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Produk"
                                class="w-full h-48 object-cover rounded-t-2xl transition-transform duration-300 hover:scale-105">
                        </a>
                        <div
                            class=" absolute top-4 shadow-lg text-white text-xs px-3 py-1 rounded-full font-bold right-4 bg-blue-500">
                            {{ $product->category }}
                        </div>
                        <div class="p-4">

                            <h5 class="text-xl font-semibold text-primary mb-1">
                                {{ $product->name }}
                            </h5>

                            <p class="text-black font-bold text-lg mb-2">
                                {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</p>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                {{ $product->description }}
                            </p>

                        </div>
                    </div>
                    <!-- existing product card here -->
                @empty
                    <div class="col-span-full border rounded-xl p-8 text-center text-gray-500">
                        <svg class="w-20 h-20 mx-auto mb-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10.5 18a.5.5 0 0 1 .5.5a.5.5 0 0 1-.5.5a.5.5 0 0 1-.5-.5a.5.5 0 0 1 .5-.5m3 0a.5.5 0 0 1 .5.5a.5.5 0 0 1-.5.5a.5.5 0 0 1-.5-.5a.5.5 0 0 1 .5-.5M10 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m4 0a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m4 7c0 2.21-2.69 4-6 4s-6-1.79-6-4c0-.9.45-1.73 1.2-2.4c-.75-1-1.2-2.25-1.2-3.6l.12-1.22c-.54.15-1.19.15-1.72 0c-1.02-.28-2.56-1.43-2.33-2.23s2.14-.95 3.16-.65c.59.17 1.22.6 1.59 1.06l.57-.81C6.79 7.05 7 4 10 3l-.09.14c-.28.44-1 1.83-.24 3.33a6.02 6.02 0 0 1 4.66 0c.76-1.5.04-2.89-.24-3.33L14 3c3 1 3.21 4.05 2.61 5.15l.57.81c.37-.46 1-.89 1.59-1.06c1.02-.3 2.93-.15 3.16.65s-1.31 1.95-2.33 2.23c-.53.15-1.18.15-1.72 0L18 12c0 1.35-.45 2.6-1.2 3.6c.75.67 1.2 1.5 1.2 2.4m-6-2c-2.21 0-4 .9-4 2s1.79 2 4 2s4-.9 4-2s-1.79-2-4-2m0-2c1.12 0 2.17.21 3.07.56c.58-.69.93-1.56.93-2.56a4 4 0 0 0-4-4a4 4 0 0 0-4 4c0 1 .35 1.87.93 2.56c.9-.35 1.95-.56 3.07-.56m2.09-10.86" />
                        </svg>

                        <p class="text-lg">Belum ada data hewan kurban yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    @include('components.footer-guest')
</body>

</html>
