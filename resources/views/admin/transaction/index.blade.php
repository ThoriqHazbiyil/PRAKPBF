<x-app-layout>
    @include('layouts.sidebar-admin')

    <div class="p-4 sm:ml-64  mt-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="flex items-center justify-between">
                <h1 class=" text-xl font-semibold">Transaksi</h1>


            </div>
            @if (session('success'))
                <div class="my-4 p-4 text-green-800 bg-green-100 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            <div class="relative overflow-x-auto mt-6  sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Pembeli</th>
                            <th scope="col" class="px-6 py-3">Hewan yang Dibeli</th>
                            <th scope="col" class="px-6 py-3">Status Pembayaran</th>
                            <th scope="col" class="px-6 py-3">Tanggal Pembayaran</th>
                            <th scope="col" class="px-6 py-3">Harga Beli (Rp)</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $transaction)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $transaction->user->name }}</td>
                                <td class="px-6 py-4">{{ $transaction->product->name }}</td>
                                <td
                                    class="px-6 py-4 font-semibold  w-60
    @if ($transaction->status === 'pending') text-yellow-500 bg-yellow-50
    @elseif($transaction->status === 'lunas') text-green-600 bg-green-50 @endif">
                                    {{ ucfirst($transaction->status) }}
                                </td>
                                <td class="px-6 py-4">{{ $transaction->date_pay ? $transaction->date_pay : '-' }}</td>
                                <td class="px-6 py-4">Rp {{ number_format($transaction->total, 0, ',', '.') }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.transaction.edit', $transaction->id) }}"
                                        class="text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-8 text-gray-500">
                                    Tidak ada produk yang tersedia saat ini.
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>


        </div>
    </div>
</x-app-layout>
