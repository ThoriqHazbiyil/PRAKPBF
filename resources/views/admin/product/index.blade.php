<x-app-layout>
@include('layouts.sidebar-admin')

<div class="p-4 sm:ml-64 mt-4">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <div class="flex items-center justify-between">
      <h1 class=" text-xl font-semibold">Produk</h1>
    
      

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
   + Tambah Produk
 </button>
 
 <!-- Main modal -->
 <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative p-4 w-full max-w-2xl max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
             <!-- Modal header -->
             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                 <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                 Tambah Hewan
                 </h3>
                 <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                     <span class="sr-only">Close modal</span>
                 </button>
             </div>
             <!-- Modal body -->
             <div class="p-4 md:p-5 space-y-4">
               <form class="space-y-4" id="form-produk">  
                @csrf
                 <div>
                   <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Hewan</label>
                   <input type="text" id="nama" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="name"></p>
                  </div>
                 <div>
                  <label for="gambar" class="...">Gambar</label>
                  
                  <input type="file" id="image" name="image" accept="image/*"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('image') border-red-500 @enderror" required>
            
                  <p id="imageError" class="text-red-500 text-sm mt-1"></p>
                  <p class="text-red-500 text-sm mt-1 error-text" data-error="image"></p>
                </div>
                 <div>
                   <label for="berat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan (kg)</label>
                   <input type="number" id="berat" name="weight" step="0.1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="weight"></p>
                  </div>
             
                 <div>
                   <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga (Rp)</label>
                   <input type="number" id="harga" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="price"></p>
                  </div>
             
                 <div>
                   <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                   <select id="kategori" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                     <option value="">Pilih Kategori</option>
                     <option value="kambing">Kambing</option>
                     <option value="sapi">Sapi</option>
                   </select>
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="category"></p>
                  </div>
             
                 <div>
                   <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                   <textarea id="deskripsi" name="description" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="description"></p>
                  </div>
             
                 <div>
                   <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                   <input type="text" id="warna" name="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="color"></p>
                  </div>
             
                 <div>
                   <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur (bulan)</label>
                   <input type="number" id="umur" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                   <p class="text-red-500 text-sm mt-1 error-text" data-error="age"></p>
                  </div>
                 <div>
                  <label for="status" class="...">Status</label>
                  <select id="status" name="status"  class="...">
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Nonaktif</option>
                  </select>
                    <p class="text-red-500 text-sm mt-1 error-text" data-error="status"></p>
                </div> 
                 <button id="submit-produk" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Simpan Produk
                </button><button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
               </form>
             </div>
       
         
                 
             </div>
         </div>
     </div>
 </div>@if (session('success'))
 <div class="my-4 p-4 text-green-800 bg-green-100 rounded-lg">
   {{ session('success') }}
 </div>
@endif
 <div class="relative overflow-x-auto mt-6 sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th class="px-6 py-3">Nama Hewan</th>
        <th class="px-6 py-3">Gambar</th>
        <th class="px-6 py-3">Berat Badan (kg)</th>
        <th class="px-6 py-3">Harga (Rp)</th>
        <th class="px-6 py-3">Kategori</th>
        <th class="px-6 py-3">Deskripsi</th>
        <th class="px-6 py-3">Warna</th>
        <th class="px-6 py-3">Umur (bulan)</th>
        <th class="px-6 py-3">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td class="px-6 py-4">{{ $product->name }}</td>
          <td class="px-6 py-4">
            <img src="{{ asset('storage/' . $product->image) }}" class="h-full lg:h-32" />
        </td>
          <td class="px-6 py-4">{{ $product->weight }}</td>
          <td class="px-6 py-4">{{ number_format($product->price, 0, ',', '.') }}</td>
          <td class="px-6 py-4">{{ $product->category }}</td>
          <td class="px-6 py-4">{{ $product->description }}</td>
          <td class="px-6 py-4">{{ $product->color }}</td>
          <td class="px-6 py-4">{{ $product->age }}</td>
          <td class=" px-6 py-4">
            <div class="flex items-center gap-3">
              <a href={{ route('admin.product.edit', $product->id) }}>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen-icon lucide-pen"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/></svg>
              </a>
              <a href="#" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus produk ini?')) document.getElementById('delete-form-{{ $product->id }}').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-icon lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
              </a>
              <form id="delete-form-{{ $product->id }}" action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
    </div>
    
    </div>
 </div><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
  // Setup CSRF untuk jQuery
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('#submit-produk').on('click', function (e) {
    e.preventDefault();

    let form = $('#form-produk')[0];
    let formData = new FormData(form);

    // Bersihkan error sebelum submit
    $('.error-text').text('');
    $('input, select, textarea').removeClass('border-red-500');

    $.ajax({
  url: "{{ route('admin.product.store') }}",
  method: 'POST',
  data: formData,
  processData: false,
  contentType: false,
  success: function (response) {
    console.log(response);  // Log server response
    Swal.fire({
      icon: 'success',
      title: 'Sukses!',
      text: response.success,
      timer: 2000,
          confirmButtonText: 'Tutup'
    });

    location.reload();
  },
  error: function (xhr) {
    console.log(xhr); // Log error response
    if (xhr.status === 422) {
      let errors = xhr.responseJSON.errors;
      $.each(errors, function (key, val) {
        $(`[name="${key}"]`).addClass('border-red-500');
        $(`[data-error="${key}"]`).text(val[0]);
      });
    }
  }
});
  });
</script>
</x-app-layout>