<x-app-layout>
    @include('layouts.sidebar-admin')

    <div class="p-4 sm:ml-64 mt-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

                <!-- Total Pengguna -->
                <div class="flex flex-col items-center justify-center h-28 bg-white rounded-2xl shadow dark:bg-gray-800">
                    <p class="text-base text-gray-500 dark:text-gray-400">Total Pengguna</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white">{{ $totalUser }}</p>
                </div>

                <!-- Total Produk -->
                <div class="flex flex-col items-center justify-center h-28 bg-white rounded-2xl shadow dark:bg-gray-800">
                    <p class="text-base text-gray-500 dark:text-gray-400">Total Produk</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white">{{ $totalProduct }}</p>
                </div>

                <!-- Total Keuntungan -->
                <div class="flex flex-col items-center justify-center h-28 bg-white rounded-2xl shadow dark:bg-gray-800">
                    <p class="text-base text-gray-500 dark:text-gray-400">Total Keuntungan</p>
                    <p class="text-2xl font-bold text-green-600 dark:text-green-400">Rp
                        {{ number_format($totalProfit, 0, ',', '.') }}</p>
                </div>

                <!-- Total Transaksi -->
                <div
                    class="flex flex-col items-center justify-center h-28 bg-white rounded-2xl shadow dark:bg-gray-800">
                    <p class="text-base text-gray-500 dark:text-gray-400">Total Transaksi</p>
                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">{{ $totalTransaction }}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
