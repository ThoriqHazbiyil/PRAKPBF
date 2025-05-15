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

    <div class="max-w-7xl mx-auto px-4 text-start mt-12 mb-6">
        <h2 class="text-3xl font-bold text-gray-800">Riwayat Transaksi</h2>
        <p class="text-gray-500 mt-2">Temukan pilihan produk terbaik hanya untukmu</p>
    </div>

    <!-- Product Cards -->
    <div class="relative w-full mx-auto max-w-7xl mb-20">
        @if ($transactions->isEmpty())
            <div class="text-center p-5 bg-gray-100 rounded-lg shadow">
                <p class="text-xl font-semibold text-gray-600">Tidak ada riwayat transaksi.</p>
                <p class="text-gray-500 mt-2">Silakan melakukan pembelian terlebih dahulu.</p>
            </div>
        @else
            <div class="flex flex-col gap-6">
                @foreach ($transactions as $transaction)
                    <div class="bg-white p-5 rounded-xl transition">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('storage/' . $transaction->product->image) }}"
                                alt="{{ $transaction->product->name }}" class="size-32 object-cover rounded-md">
                            <div>
                                <h3 class="text-xl font-semibold">{{ $transaction->product->name }}</h3>

                                <p class="text-green-600 font-bold mt-2">Rp
                                    {{ number_format($transaction->total, 0, ',', '.') }}</p>
                                <p class="text-sm text-gray-500 mt-1">Status:
                                    <span
                                        class="px-2 py-1 bg-{{ $transaction->status == 'lunas' ? 'green' : 'yellow' }}-100 text-{{ $transaction->status == 'lunas' ? 'green' : 'yellow' }}-700 rounded">
                                        {{ ucfirst($transaction->status) }}
                                    </span>
                                </p>
                                <p class="text-sm mt-2 text-gray-500">Tanggal Bayar:
                                    {{ \Carbon\Carbon::parse($transaction->date_pay)->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    @include('components.footer-guest')
</body>

</html>
