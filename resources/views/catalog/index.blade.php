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
            @foreach ($products as $product)
                <!-- Jangan ubah desain card -->
                <div class="bg-white relative rounded-2xl shadow-xs transition-transform hover:shadow-sm hover:-translate-y-1 duration-300">
                    <a href={{ route('catalog.show', $product->id) }}>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Produk" class="w-full h-48 object-cover rounded-t-2xl transition-transform duration-300 hover:scale-105">
                    </a>
                    <div class="absolute top-4 shadow-lg text-white text-xs px-3 py-1 rounded-full font-bold right-4 bg-blue-500">
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
            @endforeach
        </div>
    </div>

    @include('components.footer-guest')
</body>
</html>
