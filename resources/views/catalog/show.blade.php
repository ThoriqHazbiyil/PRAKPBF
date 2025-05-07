<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $product->name }} | Laravel</title>

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

    <!-- Section Title -->
    <div class="max-w-7xl mx-auto px-4 text-start mt-12 mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Detail Produk {{ $product->name }}</h2>
    </div>

    <!-- Product Detail -->
    <div class="max-w-7xl mx-auto  grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-12 mb-20">
        <div class="relative bg-white rounded-2xl p-6">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-80 object-cover rounded-lg">
        </div>

        <div class="bg-white rounded-2xl p-6">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
            <p class="text-lg font-bold text-gray-900 mb-4">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</p>
            <p class="text-sm text-gray-600 mb-6">{{ $product->description }}</p>

            <!-- Display Product Details -->
            <div class="text-sm text-gray-600 mb-4 space-y-3">
                <p><strong>Berat:</strong> {{ $product->weight }} kg</p>
                <p><strong>Kategori:</strong> {{ $product->category }}</p>
                <p><strong>Warna:</strong> {{ $product->color }}</p>
                <p><strong>Usia:</strong> {{ $product->age }} tahun</p>
                <p><strong>Status:</strong> {{ $product->status ? 'Tersedia' : 'Habis' }}</p>
            </div>
            
            <!-- Add to Cart / Buy Button -->
            @if(auth()->check()) <!-- Jika pengguna sudah login -->
                <form  method="POST">
                 
                    <button type="submit" class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Beli Sekarang
                    </button>
                </form>
            @else
                <!-- Jika pengguna belum login -->
                <p class="text-red-600 mt-4 border border-red-600 rounded-lg p-2">
                    Anda harus <a href="{{ route('login') }}" class="underline text-blue-600">login</a> atau <a href="{{ route('register') }}" class="underline text-blue-600">daftar</a> terlebih dahulu untuk melakukan pembelian.
                </p>
            @endif
        </div>
    </div>

    @include('components.footer-guest')

</body>
</html>
