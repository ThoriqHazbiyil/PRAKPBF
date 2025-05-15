<x-app-layout>
    @include('layouts.sidebar-admin')

    <div class="p-4 sm:ml-64 mt-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h1 class="text-xl font-semibold mb-6">Edit Status Transaksi</h1>

            <form action="{{ route('admin.transaction.update', $transaction->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Nama Pembeli</label>
                    <input type="text" value="{{ $transaction->user->name }}" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Hewan yang
                        Dibeli</label>
                    <input type="text" value="{{ $transaction->product->name }}" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>

                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Status
                        Pembayaran</label>
                    <select name="status" id="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option value="pending" {{ $transaction->status === 'pending' ? 'selected' : '' }}>Pending
                        </option>
                        <option value="lunas" {{ $transaction->status === 'lunas' ? 'selected' : '' }}>Lunas</option>
                    </select>
                </div>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Ubah Data
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
