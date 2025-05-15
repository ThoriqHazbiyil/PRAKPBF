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

<body class="antialiased ">
    @include('components.navbar-guest')


    <!-- Section Title -->
    <div class="max-w-7xl mx-auto px-4 text-center mt-12 mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Katalog Produk</h2>
        <p class="text-gray-500 mt-2">Temukan pilihan produk terbaik hanya untukmu</p>
    </div>

    <!-- Product Cards -->
    <div class="relative w-full mx-auto max-w-7xl mb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            @forelse ($products as $product)
                <!-- Jangan ubah desain card -->
                <div
                    class="bg-white relative rounded-2xl shadow-xs transition-transform hover:shadow-sm hover:-translate-y-1 duration-300">
                    <a href={{ route('catalog.show', $product->id) }}>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Produk"
                            class="w-full h-48 object-cover rounded-t-2xl transition-transform duration-300 hover:scale-105">
                    </a>
                    <div
                        class="absolute top-4 shadow-lg text-white text-xs px-3 py-1 rounded-full font-bold right-4 bg-blue-500">
                        {{ $product->category }}
                    </div>
                    <div class="p-4">
                        <h5 class="text-xl font-semibold text-primary mb-1">
                            {{ $product->name }}
                        </h5>
                        <p class="text-black font-bold text-lg mb-2">
                            {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
                        </p>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <svg class="w-20 h-20 mx-auto mb-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M10.5 18a.5.5 0 0 1 .5.5a.5.5 0 0 1-.5.5a.5.5 0 0 1-.5-.5a.5.5 0 0 1 .5-.5m3 0a.5.5 0 0 1 .5.5a.5.5 0 0 1-.5.5a.5.5 0 0 1-.5-.5a.5.5 0 0 1 .5-.5M10 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m4 0a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m4 7c0 2.21-2.69 4-6 4s-6-1.79-6-4c0-.9.45-1.73 1.2-2.4c-.75-1-1.2-2.25-1.2-3.6l.12-1.22c-.54.15-1.19.15-1.72 0c-1.02-.28-2.56-1.43-2.33-2.23s2.14-.95 3.16-.65c.59.17 1.22.6 1.59 1.06l.57-.81C6.79 7.05 7 4 10 3l-.09.14c-.28.44-1 1.83-.24 3.33a6.02 6.02 0 0 1 4.66 0c.76-1.5.04-2.89-.24-3.33L14 3c3 1 3.21 4.05 2.61 5.15l.57.81c.37-.46 1-.89 1.59-1.06c1.02-.3 2.93-.15 3.16.65s-1.31 1.95-2.33 2.23c-.53.15-1.18.15-1.72 0L18 12c0 1.35-.45 2.6-1.2 3.6c.75.67 1.2 1.5 1.2 2.4m-6-2c-2.21 0-4 .9-4 2s1.79 2 4 2s4-.9 4-2s-1.79-2-4-2m0-2c1.12 0 2.17.21 3.07.56c.58-.69.93-1.56.93-2.56a4 4 0 0 0-4-4a4 4 0 0 0-4 4c0 1 .35 1.87.93 2.56c.9-.35 1.95-.56 3.07-.56m2.09-10.86" />
                    </svg>

                    <p class="text-lg text-gray-500">Belum ada produk yang tersedia saat ini.</p>
                    <a href="{{ url('/') }}"
                        class="mt-4 inline-block px-6 py-2 text-sm text-white bg-primary rounded-lg hover:bg-primary-dark transition">
                        Kembali ke Beranda
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    @include('components.footer-guest')
</body>

</html>
