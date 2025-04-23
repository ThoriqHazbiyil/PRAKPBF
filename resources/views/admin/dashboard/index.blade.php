<x-app-layout>
@include('layouts.sidebar-admin')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
       <div class="grid grid-cols-3 gap-4 mb-4">
      <!-- Total Pengguna -->
<div class="flex flex-col items-center justify-center h-24 rounded-sm bg-white shadow-md dark:bg-gray-800">
    <p class="text-lg text-gray-500 dark:text-gray-400">Total Pengguna</p>
    <p class="text-2xl font-bold text-gray-800 dark:text-white">120</p>
 </div>
 
 <!-- Total Produk -->
 <div class="flex flex-col items-center justify-center h-24 rounded-sm bg-white shadow-md dark:bg-gray-800">
    <p class="text-lg text-gray-500 dark:text-gray-400">Total Produk</p>
    <p class="text-2xl font-bold text-gray-800 dark:text-white">35</p>
 </div>
 
 <!-- Total Keuntungan -->
 <div class="flex flex-col items-center justify-center h-24 rounded-sm bg-white shadow-md dark:bg-gray-800">
    <p class="text-lg text-gray-500 dark:text-gray-400">Total Keuntungan</p>
    <p class="text-2xl font-bold text-green-600 dark:text-green-400">Rp 145.000.000</p>
 </div>
 
       </div>
  
    </div>
 </div>
</x-app-layout>