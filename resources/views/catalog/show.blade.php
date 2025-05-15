<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $product->name }} | Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="w-full h-80 object-cover rounded-lg">
        </div>

        <div class="bg-white rounded-2xl p-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
            <p class="text-lg font-semibold text-gray-900 mb-4">
                {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
            </p>
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
            @if (auth()->check())
                <!-- Jika pengguna sudah login -->
                <div>

                    <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal"
                        type="submit"
                        class="w-fit bg-blue-500 text-white py-2 text-sm px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Beli Sekarang
                    </button>

                    <div id="default-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Pesan - {{ $product->name }}
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->

                                <!-- Modal footer -->
                                <div
                                    class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                    <button id="pay-button" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        I accept
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Jika pengguna belum login -->
                <p class="text-red-600 mt-4 border border-red-600 rounded-lg p-2">
                    Anda harus <a href="{{ route('login') }}" class="underline text-blue-600">login</a> atau <a
                        href="{{ route('register') }}" class="underline text-blue-600">daftar</a> terlebih dahulu untuk
                    melakukan pembelian.
                </p>
            @endif
        </div>
    </div>

    @include('components.footer-guest')

</body>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-NDCMjZdGdVyTQG0X"></script>
<script>
    document.getElementById('pay-button').addEventListener('click', function() {
        const data = {
            user_id: {{ auth()->user()->id ?? 0 }},
            product_id: {{ $product->id }}
        };

        fetch('/transactions/create-and-pay', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                window.snap.pay(data.snap_token, {
                    onSuccess: function(result) {
                        alert("Pembayaran berhasil!");
                        console.log(result);
                    },
                    onPending: function(result) {
                        alert("Menunggu pembayaran...");
                        console.log(result);
                    },
                    onError: function(result) {
                        alert("Pembayaran gagal!");
                        console.log(result);
                    },
                    onClose: function() {
                        alert('Kamu menutup popup sebelum menyelesaikan pembayaran');
                    }
                });
            });
    });
</script>



</html>
