<x-app-layout>
  @include('layouts.sidebar-admin')

  <div class="p-4 sm:ml-64 mt-4">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
          <div class="flex items-center justify-between mb-6">
              <h1 class="text-xl font-semibold">Edit Produk</h1>
          </div>

          <!-- Tampilkan error validasi -->
          @if ($errors->any())
              <div class="mb-4 p-4 text-red-800 bg-red-100 rounded-lg">
                  <ul class="list-disc ml-5">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                      <input type="text" name="name" value="{{ old('name', $product->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat (kg)</label>
                      <input type="number" name="weight" value="{{ old('weight', $product->weight) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga (Rp)</label>
                      <input type="number" name="price" value="{{ old('price', $product->price) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                      <input type="text" name="category" value="{{ old('category', $product->category) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                      <input type="text" name="color" value="{{ old('color', $product->color) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                      <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                          <option value="1" {{ $product->status ? 'selected' : '' }}>Aktif</option>
                          <option value="0" {{ !$product->status ? 'selected' : '' }}>Nonaktif</option>
                      </select>
                  </div>

                  <div class="md:col-span-2">
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                      <textarea name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >{{ old('description', $product->description) }}</textarea>
                  </div>

                  <div class="md:col-span-2">
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Produk</label>
                      @if ($product->image)
                          <img src="{{ asset('storage/' . $product->image) }}" class="h-32 mb-2" />
                      @endif
                      <input type="file" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                  </div>
              </div>

              <div class="mt-6">
                  <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Perubahan</button>
              </div>
          </form>
      </div>
  </div>
</x-app-layout>
