<x-app-layout>
@include('layouts.sidebar-admin')

<div class="p-4 sm:ml-64">
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
               <form class="space-y-4">
                 <div>
                   <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Hewan</label>
                   <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                 </div>
                 
                 <div>
                   <label for="berat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan (kg)</label>
                   <input type="number" id="berat" name="berat" step="0.1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                 </div>
             
                 <div>
                   <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga (Rp)</label>
                   <input type="number" id="harga" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                 </div>
             
                 <div>
                   <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                   <select id="kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                     <option value="">Pilih Kategori</option>
                     <option value="kambing">Kambing</option>
                     <option value="sapi">Sapi</option>
                   </select>
                 </div>
             
                 <div>
                   <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                   <textarea id="deskripsi" name="deskripsi" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>
                 </div>
             
                 <div>
                   <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                   <input type="text" id="warna" name="warna" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                 </div>
             
                 <div>
                   <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur (bulan)</label>
                   <input type="number" id="umur" name="umur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                 </div>
               </form>
             </div>
             <!-- Modal footer -->
             <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                 <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                 <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
             </div>
         </div>
     </div>
 </div>
 
    </div><div class="relative overflow-x-auto mt-6 shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">Nama Hewan</th>
            <th scope="col" class="px-6 py-3">Berat Badan (kg)</th>
            <th scope="col" class="px-6 py-3">Harga (Rp)</th>
            <th scope="col" class="px-6 py-3">Kategori</th>
            <th scope="col" class="px-6 py-3">Deskripsi</th>
            <th scope="col" class="px-6 py-3">Warna</th>
            <th scope="col" class="px-6 py-3">Umur (bulan)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Kambing Etawa</td>
            <td class="px-6 py-4">45</td>
            <td class="px-6 py-4">2.500.000</td>
            <td class="px-6 py-4">Kambing</td>
            <td class="px-6 py-4">Sehat dan gemuk</td>
            <td class="px-6 py-4">Putih</td>
            <td class="px-6 py-4">12</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Sapi Bali</td>
            <td class="px-6 py-4">250</td>
            <td class="px-6 py-4">18.000.000</td>
            <td class="px-6 py-4">Sapi</td>
            <td class="px-6 py-4">Siap kurban</td>
            <td class="px-6 py-4">Coklat</td>
            <td class="px-6 py-4">24</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Kambing Jawa</td>
            <td class="px-6 py-4">38</td>
            <td class="px-6 py-4">2.000.000</td>
            <td class="px-6 py-4">Kambing</td>
            <td class="px-6 py-4">Lincah dan sehat</td>
            <td class="px-6 py-4">Hitam</td>
            <td class="px-6 py-4">10</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Sapi Limousin</td>
            <td class="px-6 py-4">320</td>
            <td class="px-6 py-4">25.000.000</td>
            <td class="px-6 py-4">Sapi</td>
            <td class="px-6 py-4">Badan besar</td>
            <td class="px-6 py-4">Merah bata</td>
            <td class="px-6 py-4">30</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Kambing Boer</td>
            <td class="px-6 py-4">50</td>
            <td class="px-6 py-4">3.000.000</td>
            <td class="px-6 py-4">Kambing</td>
            <td class="px-6 py-4">Import dan sehat</td>
            <td class="px-6 py-4">Putih coklat</td>
            <td class="px-6 py-4">14</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Sapi PO</td>
            <td class="px-6 py-4">270</td>
            <td class="px-6 py-4">19.500.000</td>
            <td class="px-6 py-4">Sapi</td>
            <td class="px-6 py-4">Campuran lokal unggulan</td>
            <td class="px-6 py-4">Putih</td>
            <td class="px-6 py-4">26</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Kambing PE</td>
            <td class="px-6 py-4">42</td>
            <td class="px-6 py-4">2.800.000</td>
            <td class="px-6 py-4">Kambing</td>
            <td class="px-6 py-4">Peranakan etawa</td>
            <td class="px-6 py-4">Hitam putih</td>
            <td class="px-6 py-4">13</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Sapi Brahman</td>
            <td class="px-6 py-4">330</td>
            <td class="px-6 py-4">22.000.000</td>
            <td class="px-6 py-4">Sapi</td>
            <td class="px-6 py-4">Daging banyak</td>
            <td class="px-6 py-4">Abu-abu</td>
            <td class="px-6 py-4">28</td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">Kambing Gemuk</td>
            <td class="px-6 py-4">47</td>
            <td class="px-6 py-4">2.700.000</td>
            <td class="px-6 py-4">Kambing</td>
            <td class="px-6 py-4">Cocok untuk aqiqah</td>
            <td class="px-6 py-4">Coklat</td>
            <td class="px-6 py-4">11</td>
          </tr>
          <tr class="bg-white dark:bg-gray-800">
            <td class="px-6 py-4">Sapi Simmental</td>
            <td class="px-6 py-4">350</td>
            <td class="px-6 py-4">27.000.000</td>
            <td class="px-6 py-4">Sapi</td>
            <td class="px-6 py-4">Tinggi dan kekar</td>
            <td class="px-6 py-4">Putih merah</td>
            <td class="px-6 py-4">32</td>
          </tr>
        </tbody>
      </table>
    </div>
    
    </div>
 </div>
</x-app-layout>